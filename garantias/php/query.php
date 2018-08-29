
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$url = "http://bprosys.online/grupovivir/service/v4_1/rest.php";


function restRequest($method, $arguments){
 global $url;
 $curl = curl_init($url);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 $post = array(
         "method" => $method,
         "input_type" => "JSON",
         "response_type" => "JSON",
         "rest_data" => json_encode($arguments),
 );

 curl_setopt($curl, CURLOPT_POSTFIELDS, $post);

 $result = curl_exec($curl);
 curl_close($curl);
 return json_decode($result,1);
}




$userAuth = array(
        'user_name' => 'APIGARANTIA',
        'password' => md5('123456'),
);
$appName = 'My SuiteCRM REST Client';
$nameValueList = array();

$args = array(
            'user_auth' => $userAuth,
            'application_name' => $appName,
            'name_value_list' => $nameValueList);

$result = restRequest('login',$args);
$sessId = $result['id'];

//$dataJson = json_decode($_REQUEST);
$email = $_REQUEST['email'];
$tipologia = json_decode($_REQUEST['tipologia']);
$area = json_decode($_REQUEST['area']);
$descripcion = $_REQUEST['descripcion'];
$id_cuenta = $_REQUEST['id_cuenta'];
$id_unidad = json_decode($_REQUEST['id_unidad']);



$entryArgs1P = array(
 //Session id - retrieved from login call
    'session' => $sessId,
 //Module to get_entry_list for
    'module_name' => 'AOS_Products',
 //Filter query - Added to the S0QL where clause,
    'query' => "aos_products.id = '".$id_unidad->value."'",
 //Order by - unused
    'order_by' => '',
 //Start with the first record
    'offset' => 0,
 //Return the id and name fields
    'select_fields' => array('id','name'),
 //Link to the "contacts" relationship and retrieve the
 //First and last names.
    'link_name_to_fields_array' => array(
        array(
                'name' => 'aos_products_ing_ingenieria_1',
                        'value' => array(
                        'id',
                        'fechacamp_c'
                ),
        ),
),
   //Show 10 max results
        'max_results' => 1,
   //Do not show deleted
        'deleted' => 0,
 );

$get_relationships_resultP = restRequest('get_entry_list',$entryArgs1P);
//var_dump($get_relationships_resultP);
if (isset($get_relationships_resultP["relationship_list"][0]['link_list'][0]['records'][0]['link_value']['fechacamp_c']['value']))
{
$fecha_entrega = date_parse($get_relationships_resultP["relationship_list"][0]['link_list'][0]['records'][0]['link_value']['fechacamp_c']['value']);

$today = new DateTime(date('Y-m-d'));
$appt  = new DateTime(date($fecha_entrega['year'].'-'.$fecha_entrega['month'].'-'.$fecha_entrega['day']));
$days_until_appt = $appt->diff($today)->d;
$diasTrascurridos = $appt->diff($today)->days;
}else{
    $diasTrascurridos = 99999999;
}






/*Logica de negocio*/

if ((($tipologia->value <= 9) AND ($diasTrascurridos <= 180) ) OR (($tipologia->value > 9)AND($diasTrascurridos <=365)) ){
  /*si procede*/
  $garantiaArgs = array(
 //Session id - retrieved from login call
    'session' => $sessId,
 //Module to get_entry_list for
    'module_name' => 'Bugs',
    'name_value_list' => array(
            //to update a record, pass in a record id as commented below
            //array("name" => "id", "value" => "9b170af9-3080-e22b-fbc1-4fea74def88f"),
            array("name" => "tipologia_c", "value" => $tipologia->value),
            array("name" => "name", "value" => 'Reclamo registrado desde la pagina externa'),
            array("name" => "area_garantia_c", "value" => $area->value),
            array("name" => "description", "value" => $descripcion),
        )
 );

$result = restRequest('set_entry',$garantiaArgs);

$relatedProduct = array(
        'sesssion' => $sessId,
        'module_name' => 'Bugs',
        'module_id' => $result['id'],
        'link_field_name' => 'aos_products_bugs_1',
        'related_ids' => array(
            $id_unidad->value
        ),
    );


$relationshipProductBundleProductResult = restRequest('set_relationship', $relatedProduct);

$relatedAccount = array(
        'sesssion' => $sessId,
        'module_name' => 'Bugs',
        'module_id' => $result['id'],
        'link_field_name' => 'accounts_bugs_1',
        'related_ids' => array(
            $id_cuenta
    )
);

$relationshipProductBundleProductResult2 = restRequest('set_relationship', $relatedAccount);

$result['diasTranscurridos']=$diasTrascurridos;


$subject = "Registro de Garantia";
$txt = "Su garantia para ".$id_unidad->text." para ".$tipologia->text." en el area ".$area->text." con la descripcion ".$descripcion." fue procesada con Exito! ";
$headers = "From: administracion@grupovivir.com";

mail($email,$subject,$txt,$headers);

}
else {
  /*NO PROCEDE*/
$result['no_procede'] = 1; 
$result['unidad']=$diasTrascurridos;
$result['diasTranscurridos']=$diasTrascurridos;
}

echo json_encode($result);

?>
