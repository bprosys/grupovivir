<?php
// created: 2018-03-15 11:39:33
$dictionary["AOS_Products"]["fields"]["ingen_ingenieria_aos_products_1"] = array (
  'name' => 'ingen_ingenieria_aos_products_1',
  'type' => 'link',
  'relationship' => 'ingen_ingenieria_aos_products_1',
  'source' => 'non-db',
  'module' => 'ingen_ingenieria',
  'bean_name' => 'ingen_ingenieria',
  'vname' => 'LBL_INGEN_INGENIERIA_AOS_PRODUCTS_1_FROM_INGEN_INGENIERIA_TITLE',
  'id_name' => 'ingen_ingenieria_aos_products_1ingen_ingenieria_ida',
);
$dictionary["AOS_Products"]["fields"]["ingen_ingenieria_aos_products_1_name"] = array (
  'name' => 'ingen_ingenieria_aos_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_INGEN_INGENIERIA_AOS_PRODUCTS_1_FROM_INGEN_INGENIERIA_TITLE',
  'save' => true,
  'id_name' => 'ingen_ingenieria_aos_products_1ingen_ingenieria_ida',
  'link' => 'ingen_ingenieria_aos_products_1',
  'table' => 'ingen_ingenieria',
  'module' => 'ingen_ingenieria',
  'rname' => 'document_name',
);
$dictionary["AOS_Products"]["fields"]["ingen_ingenieria_aos_products_1ingen_ingenieria_ida"] = array (
  'name' => 'ingen_ingenieria_aos_products_1ingen_ingenieria_ida',
  'type' => 'link',
  'relationship' => 'ingen_ingenieria_aos_products_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_INGEN_INGENIERIA_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
);
