<?php
// created: 2018-07-21 12:36:31
$dictionary["Bug"]["fields"]["bugs_aos_products_1"] = array (
  'name' => 'bugs_aos_products_1',
  'type' => 'link',
  'relationship' => 'bugs_aos_products_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_BUGS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'bugs_aos_products_1aos_products_idb',
);
$dictionary["Bug"]["fields"]["bugs_aos_products_1_name"] = array (
  'name' => 'bugs_aos_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BUGS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'bugs_aos_products_1aos_products_idb',
  'link' => 'bugs_aos_products_1',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
);
$dictionary["Bug"]["fields"]["bugs_aos_products_1aos_products_idb"] = array (
  'name' => 'bugs_aos_products_1aos_products_idb',
  'type' => 'link',
  'relationship' => 'bugs_aos_products_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_BUGS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
);
