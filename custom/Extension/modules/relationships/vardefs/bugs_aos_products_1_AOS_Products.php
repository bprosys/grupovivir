<?php
// created: 2018-07-21 12:36:31
$dictionary["AOS_Products"]["fields"]["bugs_aos_products_1"] = array (
  'name' => 'bugs_aos_products_1',
  'type' => 'link',
  'relationship' => 'bugs_aos_products_1',
  'source' => 'non-db',
  'module' => 'Bugs',
  'bean_name' => 'Bug',
  'vname' => 'LBL_BUGS_AOS_PRODUCTS_1_FROM_BUGS_TITLE',
  'id_name' => 'bugs_aos_products_1bugs_ida',
);
$dictionary["AOS_Products"]["fields"]["bugs_aos_products_1_name"] = array (
  'name' => 'bugs_aos_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BUGS_AOS_PRODUCTS_1_FROM_BUGS_TITLE',
  'save' => true,
  'id_name' => 'bugs_aos_products_1bugs_ida',
  'link' => 'bugs_aos_products_1',
  'table' => 'bugs',
  'module' => 'Bugs',
  'rname' => 'name',
);
$dictionary["AOS_Products"]["fields"]["bugs_aos_products_1bugs_ida"] = array (
  'name' => 'bugs_aos_products_1bugs_ida',
  'type' => 'link',
  'relationship' => 'bugs_aos_products_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_BUGS_AOS_PRODUCTS_1_FROM_BUGS_TITLE',
);
