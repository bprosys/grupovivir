<?php
$module_name = 'ecep_excepciones';
$_object_name = 'ecep_excepciones';
$viewdefs [$module_name] = 
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
          0 => 
          array (
            'name' => 'ecep_excepciones_number',
            'type' => 'readonly',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'area_c',
            'studio' => 'visible',
            'label' => 'LBL_AREA',
          ),
          1 => 
          array (
            'name' => 'type',
            'comment' => 'The type of issue (ex: issue, feature)',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
        ),
        2 => 
        array (
          0 => 'status',
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'fotoinspeccion_c',
            'studio' => 'visible',
            'label' => 'LBL_FOTOINSPECCION',
          ),
          1 => 
          array (
            'name' => 'observaciones1_c',
            'label' => 'LBL_OBSERVACIONES1',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'fechaterminacion_c',
            'label' => 'LBL_FECHATERMINACION',
          ),
          1 => 
          array (
            'name' => 'fototrabajo_c',
            'studio' => 'visible',
            'label' => 'LBL_FOTOTRABAJO',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'observaciones2_c',
            'label' => 'LBL_OBSERVACIONES2',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'fecha_recibido_c',
            'label' => 'LBL_FECHA_RECIBIDO',
          ),
          1 => 
          array (
            'name' => 'fotorecibidocliente_c',
            'studio' => 'visible',
            'label' => 'LBL_FOTORECIBIDOCLIENTE',
          ),
        ),
        7 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
