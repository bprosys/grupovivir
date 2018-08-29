<?php
// created: 2018-07-27 16:32:53
$dictionary["ING_Ingenieria"]["fields"]["aos_product_categories_ing_ingenieria_1"] = array (
  'name' => 'aos_product_categories_ing_ingenieria_1',
  'type' => 'link',
  'relationship' => 'aos_product_categories_ing_ingenieria_1',
  'source' => 'non-db',
  'module' => 'AOS_Product_Categories',
  'bean_name' => 'AOS_Product_Categories',
  'vname' => 'LBL_AOS_PRODUCT_CATEGORIES_ING_INGENIERIA_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
  'id_name' => 'aos_produc1b30egories_ida',
);
$dictionary["ING_Ingenieria"]["fields"]["aos_product_categories_ing_ingenieria_1_name"] = array (
  'name' => 'aos_product_categories_ing_ingenieria_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_PRODUCT_CATEGORIES_ING_INGENIERIA_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
  'save' => true,
  'id_name' => 'aos_produc1b30egories_ida',
  'link' => 'aos_product_categories_ing_ingenieria_1',
  'table' => 'aos_product_categories',
  'module' => 'AOS_Product_Categories',
  'rname' => 'name',
);
$dictionary["ING_Ingenieria"]["fields"]["aos_produc1b30egories_ida"] = array (
  'name' => 'aos_produc1b30egories_ida',
  'type' => 'link',
  'relationship' => 'aos_product_categories_ing_ingenieria_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_PRODUCT_CATEGORIES_ING_INGENIERIA_1_FROM_ING_INGENIERIA_TITLE',
);
