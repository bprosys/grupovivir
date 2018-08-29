<?php
$module_name = 'trami_Tramites';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'numerodefinca_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NUMERODEFINCA',
        'width' => '10%',
        'name' => 'numerodefinca_c',
      ),
      'aos_products_trami_tramites_1_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_AOS_PRODUCTS_TRAMI_TRAMITES_1_FROM_AOS_PRODUCTS_TITLE',
        'id' => 'AOS_PRODUCTS_TRAMI_TRAMITES_1AOS_PRODUCTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'aos_products_trami_tramites_1_name',
      ),
    ),
    'advanced_search' => 
    array (
      'numerodefinca_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NUMERODEFINCA',
        'width' => '10%',
        'name' => 'numerodefinca_c',
      ),
      'fecha_recibo_contrato_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_FECHA_RECIBO_CONTRATO',
        'width' => '10%',
        'name' => 'fecha_recibo_contrato_c',
      ),
      'envio_protocolo_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_ENVIO_PROTOCOLO',
        'width' => '10%',
        'name' => 'envio_protocolo_c',
      ),
      'fecha_desembolso_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_FECHA_DESEMBOLSO',
        'width' => '10%',
        'name' => 'fecha_desembolso_c',
      ),
      'valor_desembolso_c' => 
      array (
        'type' => 'currency',
        'default' => true,
        'label' => 'LBL_VALOR_DESEMBOLSO',
        'currency_format' => true,
        'width' => '10%',
        'name' => 'valor_desembolso_c',
      ),
      'fecha_registro_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_FECHA_REGISTRO',
        'width' => '10%',
        'name' => 'fecha_registro_c',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
