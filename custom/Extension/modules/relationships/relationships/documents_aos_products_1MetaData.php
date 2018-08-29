<?php
// created: 2018-04-11 09:50:08
$dictionary["documents_aos_products_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'documents_aos_products_1' => 
    array (
      'lhs_module' => 'Documents',
      'lhs_table' => 'documents',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Products',
      'rhs_table' => 'aos_products',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'documents_aos_products_1_c',
      'join_key_lhs' => 'documents_aos_products_1documents_ida',
      'join_key_rhs' => 'documents_aos_products_1aos_products_idb',
    ),
  ),
  'table' => 'documents_aos_products_1_c',
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
      'name' => 'documents_aos_products_1documents_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'documents_aos_products_1aos_products_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
    5 => 
    array (
      'name' => 'document_revision_id',
      'type' => 'varchar',
      'len' => '36',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'documents_aos_products_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'documents_aos_products_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'documents_aos_products_1documents_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'documents_aos_products_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'documents_aos_products_1aos_products_idb',
      ),
    ),
  ),
);