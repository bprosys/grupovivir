<?php
$module_name = 'ING_Ingenieria';
$OBJECT_NAME = 'ING_INGENIERIA';
$listViewDefs [$module_name] = 
array (
  'ING_INGENIERIA_NUMBER' => 
  array (
    'width' => '5%',
    'label' => 'LBL_NUMBER',
    'link' => true,
    'default' => true,
  ),
  'AOS_PRODUCTS_ING_INGENIERIA_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AOS_PRODUCTS_ING_INGENIERIA_1_FROM_AOS_PRODUCTS_TITLE',
    'id' => 'AOS_PRODUCTS_ING_INGENIERIA_1AOS_PRODUCTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'AOS_PRODUCT_CATEGORIES_ING_INGENIERIA_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AOS_PRODUCT_CATEGORIES_ING_INGENIERIA_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
    'id' => 'AOS_PRODUC1B30EGORIES_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'width' => '10%',
    'label' => 'LBL_STATUS',
    'default' => true,
  ),
  'ACCOUNTS_ING_INGENIERIA_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_ING_INGENIERIA_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_ING_INGENIERIA_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'FECHA_PROGRAMADA_ENTREGA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_FECHA_PROGRAMADA_ENTREGA',
    'width' => '10%',
    'default' => true,
  ),
  'FECHACAMP_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => true,
    'label' => 'LBL_FECHACAMP',
    'width' => '10%',
  ),
  'DIAS_TRASCURRIDOS_ENTREGA' => 
  array (
    'type' => 'varchar',
    'studio' => 'visible',
    'label' => 'Dias Transcurridos Entrega',
    'width' => '10%',
    'default' => true,
  ),
  'DEPOSITOS_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DEPOSITOS',
    'width' => '10%',
  ),
  'ESTACIONAMIENTO_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_ESTACIONAMIENTO',
    'width' => '10%',
  ),
  'ENTREGALLAVES_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => false,
    'label' => 'LBL_ENTREGALLAVES',
    'width' => '10%',
  ),
  'FECHARECONFIRMACION2_C' => 
  array (
    'type' => 'datetimecombo',
    'default' => false,
    'label' => 'LBL_FECHARECONFIRMACION2',
    'width' => '10%',
  ),
);
;
?>
