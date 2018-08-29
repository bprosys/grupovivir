<?php
class crearTramite {
  function crearTramiteInicializado($bean,$event,$arguments){
    //obtenemos la unidad inmobiliaria asociada al contrato
    $bean->load_relationship('aos_products_reser_contrato_1');
    $producto=array_values($bean->aos_products_reser_contrato_1->getBeans())[0];
    $tramite = BeanFactory::newBean('trami_Tramites');
    $tramite->numerodefinca_c = $bean->document_name;
    $tramite->description = "Tramite generado Automaticamente por el Sistema";
    $tramite->load_relationship('trami_tramites_aos_products_1');
    $tramite->save();
    $tramite->trami_tramites_aos_products_1->add($producto->id);
  }
}
?>
