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

$cedula = $_REQUEST['cedula'];

$entryArgs1 = array(
 //Session id - retrieved from login call
    'session' => $sessId,
 //Module to get_entry_list for
    'module_name' => 'Contacts',
 //Filter query - Added to the S0QL where clause,
    'query' => "identificacion_c ='".$cedula."'",
 //Order by - unused
    'order_by' => '',
 //Start with the first record
    'offset' => 0,
 //Return the id and name fields
    'select_fields' => array('identificacion_c','full_name','email1'),
 //Link to the "contacts" relationship and retrieve the
 //First and last names.
    'link_name_to_fields_array' => array(
        array(
                'name' => 'accounts',
                        'value' => array(
                        'id',
                        'name'
                ),
        ),
),
   //Show 10 max results
        'max_results' => 10,
   //Do not show deleted
        'deleted' => 0,
 );
    $get_module_fields_parameters = array(

         //session id
         'session' => $sessId,

         //The name of the module from which to retrieve records
         'module_name' => 'Contacts',

         //Optional. Returns vardefs for the specified fields. An empty array will return all fields.
         'fields' => array(),
    );

$result1 = restRequest('get_entry_list',$entryArgs1);

//$result1 = restRequest('get_module_fields',$get_module_fields_parameters);

//var_dump($result1['relationship_list'][0]["link_list"][0]["records"][0]['link_value']['id']['value']);
$id_cuenta = $result1['relationship_list'][0]["link_list"][0]["records"][0]['link_value']['id']['value'];

$get_entry_list_parameters3 = array(

         //session id
         'session' => $sessId,

         //The name of the module from which to retrieve records
         'module_name' => "Accounts",

         //The SQL WHERE clause without the word "where".
         'query' => "",

         //The SQL ORDER BY clause without the phrase "order by".
         'order_by' => "",

         //The record offset from which to start.
         'offset' => "0",

         //Optional. The list of fields to be returned in the results
         'select_fields' => array(
              'name',
         ),

         //A list of link names and the fields to be returned for each link name
         'link_name_to_fields_array' => array(
              array(
                   'name' => 'Contacts',
                   'value' => array(
                        'name',
                   ),
              ),
         ),

         //The maximum number of results to return.
         'max_results' => '1',

         //To exclude deleted records
         'deleted' => 0,

         //If only records marked as favorites should be returned.
         'Favorites' => false,

    );

//$result3 = restRequest('get_entry_list',$get_entry_list_parameters3);
//var_dump($result3);
//);

 $get_relationships_parameters = array(

         'session'=>$sessId,

         //The name of the module from which to retrieve records.
         'module_name' => 'Accounts',

         //The ID of the specified module bean.
         'module_id' => $id_cuenta,

         //The relationship name of the linked field from which to return records.
         'link_field_name' => 'accounts_aos_products_1',

         //The portion of the WHERE clause from the SQL statement used to find the related items.
         'related_module_query' => '',

         //The related fields to be returned.
         'related_fields' => array(
            'id',
            'name',
            'piso_c',
            'modelo_c',
            'ala_c',

         ),

         //For every related bean returned, specify link field names to field information.
         'related_module_link_name_to_fields_array' => array( 
        ),
         //To exclude deleted records
         'deleted'=> '0',

         //order by
         'order_by' => '',

         //offset
         'offset' => 0,

         //limit
         'limit' => 5,
    );

$get_relationships_result = restRequest("get_relationships", $get_relationships_parameters);

/*    $get_module_fields_parameters = array(

         //session id
         'session' => $sessId,

         //The name of the module from which to retrieve records
         'module_name' => 'ING_Ingenieria',

         //Optional. Returns vardefs for the specified fields. An empty array will return all fields.
         'fields' => array(),
    );
$entregasfields = restRequest('get_module_fields',$get_module_fields_parameters);

*/
$entryArgs1 = array(
 //Session id - retrieved from login call
    'session' => $sessId,
 //Module to get_entry_list for
    'module_name' => 'AOS_Products',
 //Filter query - Added to the SQL where clause,
    'query' => "ing_ingenieria_aos_productsaos_products_idb ='51268b84-10d6-4baa-1332-5b450da7e4b4'",
 //Order by - unused
    'order_by' => '',
 //Start with the first record
    'offset' => 0,
 //Return the id and name fields
    'select_fields' => array('ing_ingenieria_aos_productsaos_products_idb'),
 //Link to the "contacts" relationship and retrieve the
 //First and last names.
    'link_name_to_fields_array' => array(),
   //Show 10 max results
        'max_results' => 10,
   //Do not show deleted
        'deleted' => 0,
 );


$entregas = restRequest('get_entry_list',$entryArgs1);



//var_dump($get_relationships_result);

$resultado['id_cuenta'] = $id_cuenta;
$resultado['datos_cliente'] = $result1['entry_list'][0]['name_value_list'];
$resultado['unidades'] = $get_relationships_result['entry_list'];

//$resultado['id_unidad'] = $get_relationships_result['entry_list'][0]['name_value_list']['id'];

//$resultado['piso'] = $get_relationships_result['entry_list'][0]['name_value_list']['piso_c'];

//$resultado['modelo'] = $get_relationships_result['entry_list'][0]['name_value_list']['modelo_c'];

//$resultado['ala'] = $get_relationships_result['entry_list'][0]['name_value_list']['ala_c'];



/*buscamos el proyecto de cada unidad*/

foreach ($resultado['unidades'] as $key => $value) {
    
$unidadArgs = array(
 //Session id - retrieved from login call
    'session' => $sessId,
 //Module to get_entry_list for
    'module_name' => 'AOS_Products',
 //Filter query - Added to the S0QL where clause,
    'query' => "aos_products.id = '".$value['id']."'",
 //Order by - unused
    'order_by' => '',
 //Start with the first record
    'offset' => 0,
 //Return the id and name fields
    'select_fields' => array(
            'id',
            'name',
            'piso_c',
            'modelo_c',
            'ala_c',),
 //Link to the "contacts" relationship and retrieve the
 //First and last names.
    'link_name_to_fields_array' => array(
        array(
                'name' => 'aos_product_category',
                        'value' => array(
                        'id',
                        'name'
                ),
        ),
),
   //Show 10 max results
        'max_results' => 10,
   //Do not show deleted
        'deleted' => 0,
 );
$get_unidadesCats = restRequest('get_entry_list',$unidadArgs);
//var_dump($get_unidadesCats['relationship_list'][0]['link_list']);
$resultado['unidades'][$key]['proyecto'] = $get_unidadesCats['relationship_list'][0]['link_list'];
//var_dump($value['id']);
}





//$resultado['categoria_unidad']=$get_unidadesCats['relationship_list'][0]['link_list'][0]['records'][0]['link_value'];

//var_dump($get_unidadesCats['relationship_list'][0]['link_list'][0]['records'][0]['link_value']);

echo json_encode($resultado);
?>