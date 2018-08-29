<?php
// created: 2018-05-23 05:24:49
$dictionary["reser_reservas_aos_product_categories_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'reser_reservas_aos_product_categories_1' => 
    array (
      'lhs_module' => 'Reser_Reservas',
      'lhs_table' => 'reser_reservas',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Product_Categories',
      'rhs_table' => 'aos_product_categories',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'reser_reservas_aos_product_categories_1_c',
      'join_key_lhs' => 'reser_reservas_aos_product_categories_1reser_reservas_ida',
      'join_key_rhs' => 'reser_rese08daegories_idb',
    ),
  ),
  'table' => 'reser_reservas_aos_product_categories_1_c',
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
      'name' => 'reser_reservas_aos_product_categories_1reser_reservas_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'reser_rese08daegories_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'reser_reservas_aos_product_categories_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'reser_reservas_aos_product_categories_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'reser_reservas_aos_product_categories_1reser_reservas_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'reser_reservas_aos_product_categories_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'reser_rese08daegories_idb',
      ),
    ),
  ),
);