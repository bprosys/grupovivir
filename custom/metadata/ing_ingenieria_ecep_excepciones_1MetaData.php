<?php
// created: 2018-04-25 08:18:47
$dictionary["ing_ingenieria_ecep_excepciones_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'ing_ingenieria_ecep_excepciones_1' => 
    array (
      'lhs_module' => 'ING_Ingenieria',
      'lhs_table' => 'ing_ingenieria',
      'lhs_key' => 'id',
      'rhs_module' => 'ecep_excepciones',
      'rhs_table' => 'ecep_excepciones',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ing_ingenieria_ecep_excepciones_1_c',
      'join_key_lhs' => 'ing_ingenieria_ecep_excepciones_1ing_ingenieria_ida',
      'join_key_rhs' => 'ing_ingenieria_ecep_excepciones_1ecep_excepciones_idb',
    ),
  ),
  'table' => 'ing_ingenieria_ecep_excepciones_1_c',
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
      'name' => 'ing_ingenieria_ecep_excepciones_1ing_ingenieria_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ing_ingenieria_ecep_excepciones_1ecep_excepciones_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ing_ingenieria_ecep_excepciones_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ing_ingenieria_ecep_excepciones_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ing_ingenieria_ecep_excepciones_1ing_ingenieria_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ing_ingenieria_ecep_excepciones_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ing_ingenieria_ecep_excepciones_1ecep_excepciones_idb',
      ),
    ),
  ),
);