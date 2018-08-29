<?php
// created: 2018-04-16 07:42:47
$dictionary["aos_products_aos_quotes_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'aos_products_aos_quotes_1' => 
    array (
      'lhs_module' => 'AOS_Products',
      'lhs_table' => 'aos_products',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Quotes',
      'rhs_table' => 'aos_quotes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'aos_products_aos_quotes_1_c',
      'join_key_lhs' => 'aos_products_aos_quotes_1aos_products_ida',
      'join_key_rhs' => 'aos_products_aos_quotes_1aos_quotes_idb',
    ),
  ),
  'table' => 'aos_products_aos_quotes_1_c',
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
      'name' => 'aos_products_aos_quotes_1aos_products_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'aos_products_aos_quotes_1aos_quotes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'aos_products_aos_quotes_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'aos_products_aos_quotes_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'aos_products_aos_quotes_1aos_products_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'aos_products_aos_quotes_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'aos_products_aos_quotes_1aos_quotes_idb',
      ),
    ),
  ),
);