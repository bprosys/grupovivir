<?php
// created: 2018-07-21 18:28:11
$dictionary["accounts_bugs_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_bugs_1' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'Bugs',
      'rhs_table' => 'bugs',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_bugs_1_c',
      'join_key_lhs' => 'accounts_bugs_1accounts_ida',
      'join_key_rhs' => 'accounts_bugs_1bugs_idb',
    ),
  ),
  'table' => 'accounts_bugs_1_c',
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
      'name' => 'accounts_bugs_1accounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_bugs_1bugs_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_bugs_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_bugs_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_bugs_1accounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_bugs_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_bugs_1bugs_idb',
      ),
    ),
  ),
);