<?php
 // created: 2018-04-16 10:00:18
$layout_defs["Opportunities"]["subpanel_setup"]['opportunities_reser_reservas_1'] = array (
  'order' => 100,
  'module' => 'Reser_Reservas',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPPORTUNITIES_RESER_RESERVAS_1_FROM_RESER_RESERVAS_TITLE',
  'get_subpanel_data' => 'opportunities_reser_reservas_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
