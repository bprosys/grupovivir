
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$url = "http://bprosys.online/service/v4_1/rest.php";


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
        'user_name' => 'admin',
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
$tipologia = $_REQUEST['tipologia'];
$area = $_REQUEST['area'];
$descripcion = $_REQUEST['descripcion'];

//var_dump($tipologia);

$entryArgs1 = array(
 //Session id - retrieved from login call
	'session' => $sessId,
 //Module to get_entry_list for
	'module_name' => 'Contacts',
 //Filter query - Added to the SQL where clause,
	'query' => "contacts.id IN (SELECT bean_id FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (eabr.email_address_id = ea.id) WHERE bean_module = 'Contacts' AND ea.email_address_caps LIKE '".$email."' AND eabr.deleted=0) ",
 //Order by - unused
	'order_by' => '',
 //Start with the first record
	'offset' => 0,
 //Return the id and name fields
	'select_fields' => array('id','name',),
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
$result1 = restRequest('get_entry_list',$entryArgs1);

$account_id=$result1['relationship_list'][0]["link_list"][0]['records'][0]['link_value']['id']['value'];


$garantiaArgs = array(
 //Session id - retrieved from login call
    'session' => $sessId,
 //Module to get_entry_list for
    'module_name' => 'Bugs',
    'name_value_list' => array(
            //to update a record, pass in a record id as commented below
            //array("name" => "id", "value" => "9b170af9-3080-e22b-fbc1-4fea74def88f"),
            array("name" => "tipologia_c", "value" => $tipologia),
            array("name" => "name", "value" => 'Reclamo registrado desde la pagina externa'),
            array("name" => "area_garantia_c", "value" => $area),
            array("name" => "description", "value" => $descripcion),
            array("name" => "account_id", "value" => $account_id),
            
        )
 );

$result = restRequest('set_entry',$garantiaArgs);

echo json_encode($result);

?>
