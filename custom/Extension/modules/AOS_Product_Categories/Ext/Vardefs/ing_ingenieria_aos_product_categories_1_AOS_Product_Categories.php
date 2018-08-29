<?php
// created: 2018-07-16 14:35:30
$dictionary["AOS_Product_Categories"]["fields"]["ing_ingenieria_aos_product_categories_1"] = array (
  'name' => 'ing_ingenieria_aos_product_categories_1',
  'type' => 'link',
  'relationship' => 'ing_ingenieria_aos_product_categories_1',
  'source' => 'non-db',
  'module' => 'ING_Ingenieria',
  'bean_name' => 'ING_Ingenieria',
  'vname' => 'LBL_ING_INGENIERIA_AOS_PRODUCT_CATEGORIES_1_FROM_ING_INGENIERIA_TITLE',
  'id_name' => 'ing_ingenieria_aos_product_categories_1ing_ingenieria_ida',
);
$dictionary["AOS_Product_Categories"]["fields"]["ing_ingenieria_aos_product_categories_1_name"] = array (
  'name' => 'ing_ingenieria_aos_product_categories_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ING_INGENIERIA_AOS_PRODUCT_CATEGORIES_1_FROM_ING_INGENIERIA_TITLE',
  'save' => true,
  'id_name' => 'ing_ingenieria_aos_product_categories_1ing_ingenieria_ida',
  'link' => 'ing_ingenieria_aos_product_categories_1',
  'table' => 'ing_ingenieria',
  'module' => 'ING_Ingenieria',
  'rname' => 'name',
);
$dictionary["AOS_Product_Categories"]["fields"]["ing_ingenieria_aos_product_categories_1ing_ingenieria_ida"] = array (
  'name' => 'ing_ingenieria_aos_product_categories_1ing_ingenieria_ida',
  'type' => 'link',
  'relationship' => 'ing_ingenieria_aos_product_categories_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ING_INGENIERIA_AOS_PRODUCT_CATEGORIES_1_FROM_ING_INGENIERIA_TITLE',
);
