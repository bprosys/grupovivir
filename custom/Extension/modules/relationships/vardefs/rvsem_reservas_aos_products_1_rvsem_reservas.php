<?php
// created: 2018-04-12 18:15:49
$dictionary["rvsem_reservas"]["fields"]["rvsem_reservas_aos_products_1"] = array (
  'name' => 'rvsem_reservas_aos_products_1',
  'type' => 'link',
  'relationship' => 'rvsem_reservas_aos_products_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_RVSEM_RESERVAS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'rvsem_reservas_aos_products_1aos_products_idb',
);
$dictionary["rvsem_reservas"]["fields"]["rvsem_reservas_aos_products_1_name"] = array (
  'name' => 'rvsem_reservas_aos_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_RVSEM_RESERVAS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'rvsem_reservas_aos_products_1aos_products_idb',
  'link' => 'rvsem_reservas_aos_products_1',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
);
$dictionary["rvsem_reservas"]["fields"]["rvsem_reservas_aos_products_1aos_products_idb"] = array (
  'name' => 'rvsem_reservas_aos_products_1aos_products_idb',
  'type' => 'link',
  'relationship' => 'rvsem_reservas_aos_products_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_RVSEM_RESERVAS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
);
