<?php
$dashletData['Reser_ContratoDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'date_modified' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'type' => 'assigned_user_name',
    'default' => 'Administrator',
  ),
);
$dashletData['Reser_ContratoDashlet']['columns'] = array (
  'document_name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
    'name' => 'document_name',
  ),
  'aos_products_reser_contrato_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_AOS_PRODUCTS_RESER_CONTRATO_1_FROM_AOS_PRODUCTS_TITLE',
    'id' => 'AOS_PRODUCTS_RESER_CONTRATO_1AOS_PRODUCTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'aos_products_reser_contrato_1_name',
  ),
  'accounts_reser_contrato_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_RESER_CONTRATO_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_RESER_CONTRATO_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => true,
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
);
