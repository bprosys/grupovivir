<?php
// created: 2018-07-21 18:28:12
$dictionary["Bug"]["fields"]["accounts_bugs_1"] = array (
  'name' => 'accounts_bugs_1',
  'type' => 'link',
  'relationship' => 'accounts_bugs_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_BUGS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_bugs_1accounts_ida',
);
$dictionary["Bug"]["fields"]["accounts_bugs_1_name"] = array (
  'name' => 'accounts_bugs_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_BUGS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_bugs_1accounts_ida',
  'link' => 'accounts_bugs_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Bug"]["fields"]["accounts_bugs_1accounts_ida"] = array (
  'name' => 'accounts_bugs_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_bugs_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_BUGS_1_FROM_BUGS_TITLE',
);
