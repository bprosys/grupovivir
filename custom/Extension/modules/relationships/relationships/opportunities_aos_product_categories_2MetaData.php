<?php
// created: 2018-05-17 09:13:35
$dictionary["opportunities_aos_product_categories_2"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'opportunities_aos_product_categories_2' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Product_Categories',
      'rhs_table' => 'aos_product_categories',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'opportunities_aos_product_categories_2_c',
      'join_key_lhs' => 'opportunities_aos_product_categories_2opportunities_ida',
      'join_key_rhs' => 'opportunities_aos_product_categories_2aos_product_categories_idb',
    ),
  ),
  'table' => 'opportunities_aos_product_categories_2_c',
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
      'name' => 'opportunities_aos_product_categories_2opportunities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'opportunities_aos_product_categories_2aos_product_categories_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'opportunities_aos_product_categories_2spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'opportunities_aos_product_categories_2_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunities_aos_product_categories_2opportunities_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'opportunities_aos_product_categories_2_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunities_aos_product_categories_2aos_product_categories_idb',
      ),
    ),
  ),
);