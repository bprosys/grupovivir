<?php
$module_name = 'trami_Tramites';
$OBJECT_NAME = 'TRAMI_TRAMITES';
$listViewDefs [$module_name] = 
array (
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
    'link' => true,
  ),
  'NUMERODEFINCA_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_NUMERODEFINCA',
    'width' => '10%',
    'link' => true,
  ),
  'BANCO_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_BANCO',
    'width' => '10%',
  ),
  'ACCOUNTS_TRAMI_TRAMITES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_TRAMI_TRAMITES_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_TRAMI_TRAMITES_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'AOS_PRODUCTS_TRAMI_TRAMITES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AOS_PRODUCTS_TRAMI_TRAMITES_1_FROM_AOS_PRODUCTS_TITLE',
    'id' => 'AOS_PRODUCTS_TRAMI_TRAMITES_1AOS_PRODUCTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'AOS_PRODUCT_CATEGORIES_TRAMI_TRAMITES_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AOS_PRODUCT_CATEGORIES_TRAMI_TRAMITES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
    'id' => 'AOS_PRODUC5787EGORIES_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'CARTA_PROMESA_PAGO_C' => 
  array (
    'type' => 'date',
    'default' => true,
    'label' => 'LBL_CARTA_PROMESA_PAGO',
    'width' => '10%',
  ),
);
;
?>