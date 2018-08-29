<?php
$listViewDefs ['Bugs'] = 
array (
  'BUG_NUMBER' => 
  array (
    'width' => '5%',
    'label' => 'LBL_LIST_NUMBER',
    'link' => true,
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_LIST_SUBJECT',
    'default' => true,
    'link' => true,
  ),
  'INCIDENCIA_CATEGORIAPRODUCTO_C' => 
  array (
    'type' => 'relate',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_INCIDENCIA_CATEGORIAPRODUCTO',
    'id' => 'AOS_PRODUCT_CATEGORIES_ID_C',
    'link' => true,
    'width' => '10%',
  ),
  'AREA_GARANTIA_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_AREA_GARANTIA',
    'width' => '10%',
  ),
  'TIPOLOGIA_C' => 
  array (
    'type' => 'dynamicenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TIPOLOGIA',
    'width' => '10%',
  ),
  'AOS_PRODUCTS_BUGS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AOS_PRODUCTS_BUGS_1_FROM_AOS_PRODUCTS_TITLE',
    'id' => 'AOS_PRODUCTS_BUGS_1AOS_PRODUCTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ACCOUNTS_BUGS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_BUGS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_BUGS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_STATUS',
    'default' => true,
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
