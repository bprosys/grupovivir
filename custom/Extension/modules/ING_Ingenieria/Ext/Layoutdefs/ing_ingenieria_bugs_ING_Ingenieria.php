<?php
 // created: 2018-04-05 06:50:35
$layout_defs["ING_Ingenieria"]["subpanel_setup"]['ing_ingenieria_bugs'] = array (
  'order' => 100,
  'module' => 'Bugs',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ING_INGENIERIA_BUGS_FROM_BUGS_TITLE',
  'get_subpanel_data' => 'ing_ingenieria_bugs',
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
