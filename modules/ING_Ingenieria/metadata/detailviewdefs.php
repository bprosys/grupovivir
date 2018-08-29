<?php
$module_name = 'ING_Ingenieria';
$_object_name = 'ing_ingenieria';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'ing_ingenieria_number',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'priority',
        ),
        2 => 
        array (
          0 => 'resolution',
          1 => 'status',
        ),
        3 => 
        array (
          0 => 'date_entered',
          1 => 'date_modified',
        ),
        4 => 
        array (
          0 => 'name',
        ),
        5 => 
        array (
          0 => 'description',
        ),
        6 => 
        array (
          0 => 'work_log',
          1 => 
          array (
            'name' => 'ing_ingenieria_aos_products_name',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'ing_ingenieria_accounts_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>
