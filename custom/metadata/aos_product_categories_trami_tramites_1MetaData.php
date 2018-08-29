<?php
// created: 2018-07-27 16:32:00
$dictionary["aos_product_categories_trami_tramites_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'aos_product_categories_trami_tramites_1' => 
    array (
      'lhs_module' => 'AOS_Product_Categories',
      'lhs_table' => 'aos_product_categories',
      'lhs_key' => 'id',
      'rhs_module' => 'trami_Tramites',
      'rhs_table' => 'trami_tramites',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'aos_product_categories_trami_tramites_1_c',
      'join_key_lhs' => 'aos_produc5787egories_ida',
      'join_key_rhs' => 'aos_product_categories_trami_tramites_1trami_tramites_idb',
    ),
  ),
  'table' => 'aos_product_categories_trami_tramites_1_c',
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
      'name' => 'aos_produc5787egories_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'aos_product_categories_trami_tramites_1trami_tramites_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'aos_product_categories_trami_tramites_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'aos_product_categories_trami_tramites_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'aos_produc5787egories_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'aos_product_categories_trami_tramites_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'aos_product_categories_trami_tramites_1trami_tramites_idb',
      ),
    ),
  ),
);