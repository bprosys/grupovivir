<?php
$dashletData['rvsem_reservasDashlet']['searchFields'] = array (
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
$dashletData['rvsem_reservasDashlet']['columns'] = array (
  'rvsem_reservas_aos_products_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_RVSEM_RESERVAS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
    'id' => 'RVSEM_RESERVAS_AOS_PRODUCTS_1AOS_PRODUCTS_IDB',
    'width' => '10%',
    'default' => true,
    'name' => 'rvsem_reservas_aos_products_1_name',
  ),
  'document_name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
    'name' => 'document_name',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => true,
    'name' => 'date_entered',
  ),
  'exp_date' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DOC_EXP_DATE',
    'width' => '10%',
    'default' => true,
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
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
