<?php
// created: 2018-05-14 07:27:22
$dictionary["AYE_almacenes_y_estacionamientos"]["fields"]["aye_almacenes_y_estacionamientos_aos_products"] = array (
  'name' => 'aye_almacenes_y_estacionamientos_aos_products',
  'type' => 'link',
  'relationship' => 'aye_almacenes_y_estacionamientos_aos_products',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'vname' => 'LBL_AYE_ALMACENES_Y_ESTACIONAMIENTOS_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
  'id_name' => 'aye_almacenes_y_estacionamientos_aos_productsaos_products_ida',
);
$dictionary["AYE_almacenes_y_estacionamientos"]["fields"]["aye_almacenes_y_estacionamientos_aos_products_name"] = array (
  'name' => 'aye_almacenes_y_estacionamientos_aos_products_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AYE_ALMACENES_Y_ESTACIONAMIENTOS_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
  'save' => true,
  'id_name' => 'aye_almacenes_y_estacionamientos_aos_productsaos_products_ida',
  'link' => 'aye_almacenes_y_estacionamientos_aos_products',
  'table' => 'aos_products',
  'module' => 'AOS_Products',
  'rname' => 'name',
);
$dictionary["AYE_almacenes_y_estacionamientos"]["fields"]["aye_almacenes_y_estacionamientos_aos_productsaos_products_ida"] = array (
  'name' => 'aye_almacenes_y_estacionamientos_aos_productsaos_products_ida',
  'type' => 'link',
  'relationship' => 'aye_almacenes_y_estacionamientos_aos_products',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AYE_ALMACENES_Y_ESTACIONAMIENTOS_AOS_PRODUCTS_FROM_AYE_ALMACENES_Y_ESTACIONAMIENTOS_TITLE',
);
