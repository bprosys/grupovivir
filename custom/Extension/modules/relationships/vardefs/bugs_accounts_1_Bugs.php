<?php
// created: 2018-07-21 12:49:45
$dictionary["Bug"]["fields"]["bugs_accounts_1"] = array (
  'name' => 'bugs_accounts_1',
  'type' => 'link',
  'relationship' => 'bugs_accounts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_BUGS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'bugs_accounts_1accounts_idb',
);
$dictionary["Bug"]["fields"]["bugs_accounts_1_name"] = array (
  'name' => 'bugs_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BUGS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'bugs_accounts_1accounts_idb',
  'link' => 'bugs_accounts_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Bug"]["fields"]["bugs_accounts_1accounts_idb"] = array (
  'name' => 'bugs_accounts_1accounts_idb',
  'type' => 'link',
  'relationship' => 'bugs_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_BUGS_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);
