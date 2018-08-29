<?php
// created: 2018-04-16 10:00:18
$dictionary["Reser_Reservas"]["fields"]["opportunities_reser_reservas_1"] = array (
  'name' => 'opportunities_reser_reservas_1',
  'type' => 'link',
  'relationship' => 'opportunities_reser_reservas_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_RESER_RESERVAS_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_reser_reservas_1opportunities_ida',
);
$dictionary["Reser_Reservas"]["fields"]["opportunities_reser_reservas_1_name"] = array (
  'name' => 'opportunities_reser_reservas_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_RESER_RESERVAS_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_reser_reservas_1opportunities_ida',
  'link' => 'opportunities_reser_reservas_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Reser_Reservas"]["fields"]["opportunities_reser_reservas_1opportunities_ida"] = array (
  'name' => 'opportunities_reser_reservas_1opportunities_ida',
  'type' => 'link',
  'relationship' => 'opportunities_reser_reservas_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_RESER_RESERVAS_1_FROM_RESER_RESERVAS_TITLE',
);
