<?php
$module_name = 'Reser_Contrato';
$OBJECT_NAME = 'RESER_CONTRATO';
$listViewDefs [$module_name] = 
array (
  'DOCUMENT_NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
  ),
  'AOS_PRODUCT_CATEGORIES_RESER_CONTRATO_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AOS_PRODUCT_CATEGORIES_RESER_CONTRATO_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
    'id' => 'AOS_PRODUC5B3DEGORIES_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'AOS_PRODUCTS_RESER_CONTRATO_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AOS_PRODUCTS_RESER_CONTRATO_1_FROM_AOS_PRODUCTS_TITLE',
    'id' => 'AOS_PRODUCTS_RESER_CONTRATO_1AOS_PRODUCTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ACCOUNTS_RESER_CONTRATO_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_RESER_CONTRATO_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_RESER_CONTRATO_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS_ID' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_DOC_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'ACTIVE_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ACTIVE_DATE',
    'default' => true,
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => false,
  ),
  'MODIFIED_BY_NAME' => 
  array (
    'width' => '10%',
    'label' => 'LBL_MODIFIED_USER',
    'module' => 'Users',
    'id' => 'USERS_ID',
    'default' => false,
    'sortable' => false,
    'related_fields' => 
    array (
      0 => 'modified_user_id',
    ),
  ),
);
;
?>
