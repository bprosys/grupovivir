<?php
// created: 2018-07-16 14:35:30
$dictionary["ING_Ingenieria"]["fields"]["ing_ingenieria_aos_product_categories_1"] = array (
  'name' => 'ing_ingenieria_aos_product_categories_1',
  'type' => 'link',
  'relationship' => 'ing_ingenieria_aos_product_categories_1',
  'source' => 'non-db',
  'module' => 'AOS_Product_Categories',
  'bean_name' => 'AOS_Product_Categories',
  'vname' => 'LBL_ING_INGENIERIA_AOS_PRODUCT_CATEGORIES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
  'id_name' => 'ing_ingenid84aegories_idb',
);
$dictionary["ING_Ingenieria"]["fields"]["ing_ingenieria_aos_product_categories_1_name"] = array (
  'name' => 'ing_ingenieria_aos_product_categories_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ING_INGENIERIA_AOS_PRODUCT_CATEGORIES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
  'save' => true,
  'id_name' => 'ing_ingenid84aegories_idb',
  'link' => 'ing_ingenieria_aos_product_categories_1',
  'table' => 'aos_product_categories',
  'module' => 'AOS_Product_Categories',
  'rname' => 'name',
);
$dictionary["ING_Ingenieria"]["fields"]["ing_ingenid84aegories_idb"] = array (
  'name' => 'ing_ingenid84aegories_idb',
  'type' => 'link',
  'relationship' => 'ing_ingenieria_aos_product_categories_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_ING_INGENIERIA_AOS_PRODUCT_CATEGORIES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
);
