<?php
$viewdefs ['Project'] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'status',
        ),
        1 => 
        array (
          0 => 'estimated_start_date',
          1 => 'estimated_end_date',
        ),
        2 => 
        array (
          0 => 'priority',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'proyecto_categoriaproducto_c',
            'studio' => 'visible',
            'label' => 'LBL_PROYECTO_CATEGORIAPRODUCTO',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
$viewdefs['Project']['QuickCreate']['templateMeta'] = array (
  'maxColumns' => '2',
  'widths' => 
  array (
    0 => 
    array (
      'label' => '10',
      'field' => '30',
    ),
    1 => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
