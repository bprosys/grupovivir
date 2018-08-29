<?php
 // created: 2018-07-21 18:28:11
$layout_defs["Accounts"]["subpanel_setup"]['accounts_bugs_1'] = array (
  'order' => 100,
  'module' => 'Bugs',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_BUGS_1_FROM_BUGS_TITLE',
  'get_subpanel_data' => 'accounts_bugs_1',
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
