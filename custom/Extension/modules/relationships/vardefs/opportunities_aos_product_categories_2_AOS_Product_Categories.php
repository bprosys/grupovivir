<?php
// created: 2018-05-17 09:13:36
$dictionary["AOS_Product_Categories"]["fields"]["opportunities_aos_product_categories_2"] = array (
  'name' => 'opportunities_aos_product_categories_2',
  'type' => 'link',
  'relationship' => 'opportunities_aos_product_categories_2',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_AOS_PRODUCT_CATEGORIES_2_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_aos_product_categories_2opportunities_ida',
);
$dictionary["AOS_Product_Categories"]["fields"]["opportunities_aos_product_categories_2_name"] = array (
  'name' => 'opportunities_aos_product_categories_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_AOS_PRODUCT_CATEGORIES_2_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_aos_product_categories_2opportunities_ida',
  'link' => 'opportunities_aos_product_categories_2',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["AOS_Product_Categories"]["fields"]["opportunities_aos_product_categories_2opportunities_ida"] = array (
  'name' => 'opportunities_aos_product_categories_2opportunities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_aos_product_categories_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_OPPORTUNITIES_AOS_PRODUCT_CATEGORIES_2_FROM_OPPORTUNITIES_TITLE',
);
