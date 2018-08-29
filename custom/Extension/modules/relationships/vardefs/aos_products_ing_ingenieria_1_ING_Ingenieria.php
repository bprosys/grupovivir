<?php
// created: 2018-07-21 10:34:27
$dictionary["ING_Ingenieria"]["fields"]["aos_products_ing_ingenieria_1"] = array (
  'name' => 'aos_products_ing_ingenieria_1',
  'type' => 'link',
  'relationship' => 'aos_products_ing_ingenieria_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_AOS_PRODUCTS_ING_INGENIERIA_1_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'aos_products_ing_ingenieria_1aos_products_ida',
);
$dictionary["ING_Ingenieria"]["fields"]["aos_products_ing_ingenieria_1_name"] = array (
  'name' => 'aos_products_ing_ingenieria_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_PRODUCTS_ING_INGENIERIA_1_FROM_AOS_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'aos_products_ing_ingenieria_1aos_products_ida',
  'link' => 'aos_products_ing_ingenieria_1',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
);
$dictionary["ING_Ingenieria"]["fields"]["aos_products_ing_ingenieria_1aos_products_ida"] = array (
  'name' => 'aos_products_ing_ingenieria_1aos_products_ida',
  'type' => 'link',
  'relationship' => 'aos_products_ing_ingenieria_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCTS_ING_INGENIERIA_1_FROM_ING_INGENIERIA_TITLE',
);
