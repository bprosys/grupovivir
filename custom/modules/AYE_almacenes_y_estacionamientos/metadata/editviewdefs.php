<?php
$module_name = 'AYE_almacenes_y_estacionamientos';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
          1 => 
          array (
            'name' => 'tipo_c',
            'studio' => 'visible',
            'label' => 'LBL_TIPO',
          ),
        ),
        1 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'aye_almacenes_y_estacionamientos_aos_products_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>
