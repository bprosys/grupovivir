<?php
$popupMeta = array (
    'moduleMain' => 'rvsem_reservas',
    'varName' => 'rvsem_reservas',
    'orderBy' => 'rvsem_reservas.name',
    'whereClauses' => array (
  'name' => 'rvsem_reservas.name',
),
    'searchInputs' => array (
  0 => 'rvsem_reservas_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'RVSEM_RESERVAS_AOS_PRODUCTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_RVSEM_RESERVAS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
    'id' => 'RVSEM_RESERVAS_AOS_PRODUCTS_1AOS_PRODUCTS_IDB',
    'width' => '10%',
    'default' => true,
    'name' => 'rvsem_reservas_aos_products_1_name',
  ),
  'RVSEM_RESERVAS_ACCOUNTS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_RVSEM_RESERVAS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'RVSEM_RESERVAS_ACCOUNTS_1ACCOUNTS_IDB',
    'width' => '10%',
    'default' => true,
    'name' => 'rvsem_reservas_accounts_1_name',
  ),
  'DOCUMENT_NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_NAME',
    'link' => true,
    'default' => true,
    'name' => 'document_name',
  ),
  'CREATED_BY_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_LAST_REV_CREATOR',
    'default' => true,
    'sortable' => false,
    'name' => 'created_by_name',
  ),
  'ACTIVE_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_ACTIVE_DATE',
    'default' => true,
    'name' => 'active_date',
  ),
  'EXP_DATE' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_EXP_DATE',
    'default' => true,
    'name' => 'exp_date',
  ),
),
);
