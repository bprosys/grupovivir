<?php
// created: 2018-07-21 12:49:45
$dictionary["Account"]["fields"]["bugs_accounts_1"] = array (
  'name' => 'bugs_accounts_1',
  'type' => 'link',
  'relationship' => 'bugs_accounts_1',
  'source' => 'non-db',
  'module' => 'Bugs',
  'bean_name' => 'Bug',
  'vname' => 'LBL_BUGS_ACCOUNTS_1_FROM_BUGS_TITLE',
  'id_name' => 'bugs_accounts_1bugs_ida',
);
$dictionary["Account"]["fields"]["bugs_accounts_1_name"] = array (
  'name' => 'bugs_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_BUGS_ACCOUNTS_1_FROM_BUGS_TITLE',
  'save' => true,
  'id_name' => 'bugs_accounts_1bugs_ida',
  'link' => 'bugs_accounts_1',
  'table' => 'bugs',
  'module' => 'Bugs',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["bugs_accounts_1bugs_ida"] = array (
  'name' => 'bugs_accounts_1bugs_ida',
  'type' => 'link',
  'relationship' => 'bugs_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_BUGS_ACCOUNTS_1_FROM_BUGS_TITLE',
);
