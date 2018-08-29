<?php
// created: 2018-04-05 06:50:36
$dictionary["ING_Ingenieria"]["fields"]["ing_ingenieria_aos_products"] = array (
  'name' => 'ing_ingenieria_aos_products',
  'type' => 'link',
  'relationship' => 'ing_ingenieria_aos_products',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_ING_INGENIERIA_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'ing_ingenieria_aos_productsaos_products_idb',
);
$dictionary["ING_Ingenieria"]["fields"]["ing_ingenieria_aos_products_name"] = array (
  'name' => 'ing_ingenieria_aos_products_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ING_INGENIERIA_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'ing_ingenieria_aos_productsaos_products_idb',
  'link' => 'ing_ingenieria_aos_products',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
);
$dictionary["ING_Ingenieria"]["fields"]["ing_ingenieria_aos_productsaos_products_idb"] = array (
  'name' => 'ing_ingenieria_aos_productsaos_products_idb',
  'type' => 'link',
  'relationship' => 'ing_ingenieria_aos_products',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ING_INGENIERIA_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
);
