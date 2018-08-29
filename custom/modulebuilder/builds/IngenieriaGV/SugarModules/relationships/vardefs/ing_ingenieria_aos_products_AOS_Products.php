<?php
// created: 2018-04-05 06:50:36
$dictionary["AOS_Products"]["fields"]["ing_ingenieria_aos_products"] = array (
  'name' => 'ing_ingenieria_aos_products',
  'type' => 'link',
  'relationship' => 'ing_ingenieria_aos_products',
  'source' => 'non-db',
  'module' => 'ING_Ingenieria',
  'bean_name' => false,
  'vname' => 'LBL_ING_INGENIERIA_AOS_PRODUCTS_FROM_ING_INGENIERIA_TITLE',
  'id_name' => 'ing_ingenieria_aos_productsing_ingenieria_ida',
);
$dictionary["AOS_Products"]["fields"]["ing_ingenieria_aos_products_name"] = array (
  'name' => 'ing_ingenieria_aos_products_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ING_INGENIERIA_AOS_PRODUCTS_FROM_ING_INGENIERIA_TITLE',
  'save' => true,
  'id_name' => 'ing_ingenieria_aos_productsing_ingenieria_ida',
  'link' => 'ing_ingenieria_aos_products',
  'table' => 'ing_ingenieria',
  'module' => 'ING_Ingenieria',
  'rname' => 'name',
);
$dictionary["AOS_Products"]["fields"]["ing_ingenieria_aos_productsing_ingenieria_ida"] = array (
  'name' => 'ing_ingenieria_aos_productsing_ingenieria_ida',
  'type' => 'link',
  'relationship' => 'ing_ingenieria_aos_products',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ING_INGENIERIA_AOS_PRODUCTS_FROM_ING_INGENIERIA_TITLE',
);
