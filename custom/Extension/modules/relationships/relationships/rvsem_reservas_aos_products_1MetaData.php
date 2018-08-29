<?php
// created: 2018-04-12 18:15:49
$dictionary["rvsem_reservas_aos_products_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'rvsem_reservas_aos_products_1' => 
    array (
      'lhs_module' => 'rvsem_reservas',
      'lhs_table' => 'rvsem_reservas',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Products',
      'rhs_table' => 'aos_products',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'rvsem_reservas_aos_products_1_c',
      'join_key_lhs' => 'rvsem_reservas_aos_products_1rvsem_reservas_ida',
      'join_key_rhs' => 'rvsem_reservas_aos_products_1aos_products_idb',
    ),
  ),
  'table' => 'rvsem_reservas_aos_products_1_c',
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
      'name' => 'rvsem_reservas_aos_products_1rvsem_reservas_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'rvsem_reservas_aos_products_1aos_products_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'rvsem_reservas_aos_products_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'rvsem_reservas_aos_products_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rvsem_reservas_aos_products_1rvsem_reservas_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'rvsem_reservas_aos_products_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'rvsem_reservas_aos_products_1aos_products_idb',
      ),
    ),
  ),
);