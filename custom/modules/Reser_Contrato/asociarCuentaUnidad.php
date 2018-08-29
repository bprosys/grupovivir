<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class AsociarCuentaUnidad{
  function asociar($bean,$event,$arguments){
  //  var_dump($bean->load_relationship('aos_products_reser_contrato_1'));
  //  exit('<br>');
    //ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
    //$producto=$bean->aos_products_reser_contrato_1->getBeans();
  /*  foreach ($producto as $key => $value) {
      $value->estado_c = "Disponible";
      $value->save();
    }*/
    $bean->load_relationship('accounts_reser_contrato_1');
    $bean->load_relationship('aos_products_reser_contrato_1');
    $unidad = $bean->aos_products_reser_contrato_1->getBeans();
    $cuenta = $bean->accounts_reser_contrato_1->getBeans();
    
    foreach ($unidad as $key => $value) {
    $idunidad=$key;
    break;
    }
    

    foreach ($cuenta as $key => $value) {
    $idcuenta=$key;
    break;
    }
    
    $cuentaBean = BeanFactory::getBean('Accounts', $idcuenta);
    $cuentaBean->load_relationship('accounts_aos_products_1');

    $cuentaBean->accounts_aos_products_1->add($unidad);

    //ar_dump($cuentaBean->load_relationship('accounts_aos_products_1'));

    //var_dump($cuentaBean->load_relationship('aos_products_accounts_1'));

    //exit('<br>');
  }
}
?>
