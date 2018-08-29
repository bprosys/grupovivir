<?php
 // created: 2018-07-27 16:21:17
$layout_defs["Accounts"]["subpanel_setup"]['accounts_trami_tramites_1'] = array (
  'order' => 100,
  'module' => 'trami_Tramites',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_TRAMI_TRAMITES_1_FROM_TRAMI_TRAMITES_TITLE',
  'get_subpanel_data' => 'accounts_trami_tramites_1',
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
