<?php
// created: 2018-05-17 09:13:36
$dictionary["Opportunity"]["fields"]["opportunities_aos_product_categories_2"] = array (
  'name' => 'opportunities_aos_product_categories_2',
  'type' => 'link',
  'relationship' => 'opportunities_aos_product_categories_2',
  'source' => 'non-db',
  'module' => 'AOS_Product_Categories',
  'bean_name' => 'AOS_Product_Categories',
  'vname' => 'LBL_OPPORTUNITIES_AOS_PRODUCT_CATEGORIES_2_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
  'id_name' => 'opportunities_aos_product_categories_2aos_product_categories_idb',
);
$dictionary["Opportunity"]["fields"]["opportunities_aos_product_categories_2_name"] = array (
  'name' => 'opportunities_aos_product_categories_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_AOS_PRODUCT_CATEGORIES_2_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_aos_product_categories_2aos_product_categories_idb',
  'link' => 'opportunities_aos_product_categories_2',
  'table' => 'aos_product_categories',
  'module' => 'AOS_Product_Categories',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["opportunities_aos_product_categories_2aos_product_categories_idb"] = array (
  'name' => 'opportunities_aos_product_categories_2aos_product_categories_idb',
  'type' => 'link',
  'relationship' => 'opportunities_aos_product_categories_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_OPPORTUNITIES_AOS_PRODUCT_CATEGORIES_2_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
);
