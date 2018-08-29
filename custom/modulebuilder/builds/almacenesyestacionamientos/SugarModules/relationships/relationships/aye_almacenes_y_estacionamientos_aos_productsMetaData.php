<?php
// created: 2018-05-14 07:27:22
$dictionary["aye_almacenes_y_estacionamientos_aos_products"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'aye_almacenes_y_estacionamientos_aos_products' => 
    array (
      'lhs_module' => 'AOS_Products',
      'lhs_table' => 'aos_products',
      'lhs_key' => 'id',
      'rhs_module' => 'AYE_almacenes_y_estacionamientos',
      'rhs_table' => 'aye_almacenes_y_estacionamientos',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'aye_almacenes_y_estacionamientos_aos_products_c',
      'join_key_lhs' => 'aye_almacenes_y_estacionamientos_aos_productsaos_products_ida',
      'join_key_rhs' => 'aye_almacee440mientos_idb',
    ),
  ),
  'table' => 'aye_almacenes_y_estacionamientos_aos_products_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'aye_almacenes_y_estacionamientos_aos_productsaos_products_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'aye_almacee440mientos_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'aye_almacenes_y_estacionamientos_aos_productsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'aye_almacenes_y_estacionamientos_aos_products_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'aye_almacenes_y_estacionamientos_aos_productsaos_products_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'aye_almacenes_y_estacionamientos_aos_products_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'aye_almacee440mientos_idb',
      ),
    ),
  ),
);