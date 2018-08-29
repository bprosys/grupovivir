<?php
$searchdefs ['Bugs'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'bug_number' => 
      array (
        'type' => 'int',
        'studio' => 
        array (
          'quickcreate' => false,
        ),
        'label' => 'LBL_NUMBER',
        'width' => '10%',
        'default' => true,
        'name' => 'bug_number',
      ),
      'type' => 
      array (
        'type' => 'enum',
        'label' => 'LBL_TYPE',
        'width' => '10%',
        'default' => true,
        'name' => 'type',
      ),
      'incidencia_numerodeparte_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_INCIDENCIA_NUMERODEPARTE',
        'id' => 'AOS_PRODUCTS_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'incidencia_numerodeparte_c',
      ),
    ),
    'advanced_search' => 
    array (
      'bug_number' => 
      array (
        'name' => 'bug_number',
        'default' => true,
        'width' => '10%',
      ),
      'type' => 
      array (
        'name' => 'type',
        'default' => true,
        'width' => '10%',
      ),
      'incidencia_numerodeparte_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_INCIDENCIA_NUMERODEPARTE',
        'link' => true,
        'width' => '10%',
        'id' => 'AOS_PRODUCTS_ID_C',
        'name' => 'incidencia_numerodeparte_c',
      ),
      'incidencias_cuentas_c' => 
      array (
        'type' => 'relate',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_INCIDENCIAS_CUENTAS',
        'id' => 'ACCOUNT_ID_C',
        'link' => true,
        'width' => '10%',
        'name' => 'incidencias_cuentas_c',
      ),
      'status' => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10%',
      ),
      'priority' => 
      array (
        'name' => 'priority',
        'default' => true,
        'width' => '10%',
      ),
      'fecha_correcion_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_FECHA_CORRECION',
        'width' => '10%',
        'name' => 'fecha_correcion_c',
      ),
      'fecha_firma_entrega_c' => 
      array (
        'type' => 'date',
        'default' => true,
        'label' => 'LBL_FECHA_FIRMA_ENTREGA',
        'width' => '10%',
        'name' => 'fecha_firma_entrega_c',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
