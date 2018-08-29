<?php
// created: 2018-07-16 14:35:28
$dictionary["ing_ingenieria_aos_product_categories_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'ing_ingenieria_aos_product_categories_1' => 
    array (
      'lhs_module' => 'ING_Ingenieria',
      'lhs_table' => 'ing_ingenieria',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Product_Categories',
      'rhs_table' => 'aos_product_categories',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ing_ingenieria_aos_product_categories_1_c',
      'join_key_lhs' => 'ing_ingenieria_aos_product_categories_1ing_ingenieria_ida',
      'join_key_rhs' => 'ing_ingenid84aegories_idb',
    ),
  ),
  'table' => 'ing_ingenieria_aos_product_categories_1_c',
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
      'name' => 'ing_ingenieria_aos_product_categories_1ing_ingenieria_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ing_ingenid84aegories_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ing_ingenieria_aos_product_categories_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ing_ingenieria_aos_product_categories_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ing_ingenieria_aos_product_categories_1ing_ingenieria_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ing_ingenieria_aos_product_categories_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ing_ingenid84aegories_idb',
      ),
    ),
  ),
);