<?php
$module_name = 'AOS_Product_Categories';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'type' => 'name',
        'link' => true,
        'default' => true,
        'width' => '10%',
        'label' => 'LBL_NAME',
        'name' => 'name',
      ),
      'categoria_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CATEGORIA',
        'width' => '10%',
        'name' => 'categoria_c',
      ),
      'cantunid_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_CANTUNID',
        'width' => '10%',
        'name' => 'cantunid_c',
      ),
      'numero_de_finca_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NUMERO_DE_FINCA',
        'width' => '10%',
        'name' => 'numero_de_finca_c',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'categoria_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CATEGORIA',
        'width' => '10%',
        'name' => 'categoria_c',
      ),
      'estado_del_proyecto_c' => 
      array (
        'type' => 'dynamicenum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_ESTADO_DEL_PROYECTO',
        'width' => '10%',
        'name' => 'estado_del_proyecto_c',
      ),
      'ciudad_c' => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_CIUDAD',
        'width' => '10%',
        'name' => 'ciudad_c',
      ),
      'cantunid_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_CANTUNID',
        'width' => '10%',
        'name' => 'cantunid_c',
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
