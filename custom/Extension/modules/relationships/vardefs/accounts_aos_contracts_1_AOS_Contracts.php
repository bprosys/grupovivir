<?php
// created: 2018-04-16 12:50:05
$dictionary["AOS_Contracts"]["fields"]["accounts_aos_contracts_1"] = array (
  'name' => 'accounts_aos_contracts_1',
  'type' => 'link',
  'relationship' => 'accounts_aos_contracts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_AOS_CONTRACTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_aos_contracts_1accounts_ida',
);
$dictionary["AOS_Contracts"]["fields"]["accounts_aos_contracts_1_name"] = array (
  'name' => 'accounts_aos_contracts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_AOS_CONTRACTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_aos_contracts_1accounts_ida',
  'link' => 'accounts_aos_contracts_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["AOS_Contracts"]["fields"]["accounts_aos_contracts_1accounts_ida"] = array (
  'name' => 'accounts_aos_contracts_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_aos_contracts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_AOS_CONTRACTS_1_FROM_AOS_CONTRACTS_TITLE',
);
