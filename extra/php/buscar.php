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

var_dump($result1['relationship_list'][0]["link_list"][0]["records"][0]['link_value']['id']['value']);

echo json_encode($result1['entry_list'][0]['name_value_list']);


?>