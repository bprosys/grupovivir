<?php
// created: 2018-04-05 06:50:35
$dictionary["ing_ingenieria_accounts"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'ing_ingenieria_accounts' => 
    array (
      'lhs_module' => 'ING_Ingenieria',
      'lhs_table' => 'ing_ingenieria',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ing_ingenieria_accounts_c',
      'join_key_lhs' => 'ing_ingenieria_accountsing_ingenieria_ida',
      'join_key_rhs' => 'ing_ingenieria_accountsaccounts_idb',
    ),
  ),
  'table' => 'ing_ingenieria_accounts_c',
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
      'name' => 'ing_ingenieria_accountsing_ingenieria_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ing_ingenieria_accountsaccounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ing_ingenieria_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ing_ingenieria_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ing_ingenieria_accountsing_ingenieria_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ing_ingenieria_accounts_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ing_ingenieria_accountsaccounts_idb',
      ),
    ),
  ),
);