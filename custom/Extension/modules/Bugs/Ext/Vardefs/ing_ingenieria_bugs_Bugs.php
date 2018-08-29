<?php
// created: 2018-04-05 06:50:36
$dictionary["Bug"]["fields"]["ing_ingenieria_bugs"] = array (
  'name' => 'ing_ingenieria_bugs',
  'type' => 'link',
  'relationship' => 'ing_ingenieria_bugs',
  'source' => 'non-db',
  'module' => 'ING_Ingenieria',
  'bean_name' => false,
  'vname' => 'LBL_ING_INGENIERIA_BUGS_FROM_ING_INGENIERIA_TITLE',
  'id_name' => 'ing_ingenieria_bugsing_ingenieria_ida',
);
$dictionary["Bug"]["fields"]["ing_ingenieria_bugs_name"] = array (
  'name' => 'ing_ingenieria_bugs_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ING_INGENIERIA_BUGS_FROM_ING_INGENIERIA_TITLE',
  'save' => true,
  'id_name' => 'ing_ingenieria_bugsing_ingenieria_ida',
  'link' => 'ing_ingenieria_bugs',
  'table' => 'ing_ingenieria',
  'module' => 'ING_Ingenieria',
  'rname' => 'name',
);
$dictionary["Bug"]["fields"]["ing_ingenieria_bugsing_ingenieria_ida"] = array (
  'name' => 'ing_ingenieria_bugsing_ingenieria_ida',
  'type' => 'link',
  'relationship' => 'ing_ingenieria_bugs',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ING_INGENIERIA_BUGS_FROM_BUGS_TITLE',
);
