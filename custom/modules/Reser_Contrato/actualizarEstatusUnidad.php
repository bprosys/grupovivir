<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class ActualizarEstatusUnidad{
  function actualizarStatus($bean,$event,$arguments){
  //  var_dump($bean->load_relationship('aos_products_reser_contrato_1'));
  //  exit('<br>');
    $bean->load_relationship('aos_products_reser_contrato_1');
    $producto=$bean->aos_products_reser_contrato_1->getBeans();
    foreach ($producto as $key => $value) {
      $value->estado_c = "Disponible";
      $value->save();
    }
  }
}
?>
