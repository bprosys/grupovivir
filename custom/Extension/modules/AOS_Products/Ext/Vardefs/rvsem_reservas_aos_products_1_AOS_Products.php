<?php
// created: 2018-04-12 18:15:49
$dictionary["AOS_Products"]["fields"]["rvsem_reservas_aos_products_1"] = array (
  'name' => 'rvsem_reservas_aos_products_1',
  'type' => 'link',
  'relationship' => 'rvsem_reservas_aos_products_1',
  'source' => 'non-db',
  'module' => 'rvsem_reservas',
  'bean_name' => 'rvsem_reservas',
  'vname' => 'LBL_RVSEM_RESERVAS_AOS_PRODUCTS_1_FROM_RVSEM_RESERVAS_TITLE',
  'id_name' => 'rvsem_reservas_aos_products_1rvsem_reservas_ida',
);
$dictionary["AOS_Products"]["fields"]["rvsem_reservas_aos_products_1_name"] = array (
  'name' => 'rvsem_reservas_aos_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RVSEM_RESERVAS_AOS_PRODUCTS_1_FROM_RVSEM_RESERVAS_TITLE',
  'save' => true,
  'id_name' => 'rvsem_reservas_aos_products_1rvsem_reservas_ida',
  'link' => 'rvsem_reservas_aos_products_1',
  'table' => 'rvsem_reservas',
  'module' => 'rvsem_reservas',
  'rname' => 'document_name',
);
$dictionary["AOS_Products"]["fields"]["rvsem_reservas_aos_products_1rvsem_reservas_ida"] = array (
  'name' => 'rvsem_reservas_aos_products_1rvsem_reservas_ida',
  'type' => 'link',
  'relationship' => 'rvsem_reservas_aos_products_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_RVSEM_RESERVAS_AOS_PRODUCTS_1_FROM_RVSEM_RESERVAS_TITLE',
);
