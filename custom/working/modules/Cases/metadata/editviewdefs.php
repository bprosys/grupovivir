<?php
$viewdefs ['Cases'] = 
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'include/javascript/bindWithDelay.js',
        ),
        1 => 
        array (
          'file' => 'modules/AOK_KnowledgeBase/AOK_KnowledgeBase_SuggestionBox.js',
        ),
        2 => 
        array (
          'file' => 'include/javascript/qtip/jquery.qtip.min.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CASE_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
      ),
    ),
    'panels' => 
    array (
      'lbl_case_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'case_number',
            'type' => 'readonly',
          ),
          1 => 'priority',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'state',
            'comment' => 'The state of the case (i.e. open/closed)',
            'label' => 'LBL_STATE',
          ),
          1 => 'status',
        ),
        2 => 
        array (
          0 => 'type',
          1 => 'account_name',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
            ),
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'nombre_banco_c',
            'label' => 'LBL_NOMBRE_BANCO',
          ),
          1 => 
          array (
            'name' => 'nombre_tramitador_c',
            'label' => 'LBL_NOMBRE_TRAMITADOR',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'casos_categoriaproducto_c',
            'studio' => 'visible',
            'label' => 'LBL_CASOS_CATEGORIAPRODUCTO',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'resolution',
            'nl2br' => true,
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'update_text',
            'studio' => 'visible',
            'label' => 'LBL_UPDATE_TEXT',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'internal',
            'studio' => 'visible',
            'label' => 'LBL_INTERNAL',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'case_update_form',
            'studio' => 'visible',
          ),
        ),
        11 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
$viewdefs['Cases']['EditView']['templateMeta'] = array (
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
  'includes' => 
  array (
    0 => 
    array (
      'file' => 'include/javascript/bindWithDelay.js',
    ),
    1 => 
    array (
      'file' => 'modules/AOK_KnowledgeBase/AOK_KnowledgeBase_SuggestionBox.js',
    ),
    2 => 
    array (
      'file' => 'include/javascript/qtip/jquery.qtip.min.js',
    ),
  ),
  'useTabs' => false,
  'tabDefs' => 
  array (
    'LBL_CASE_INFORMATION' => 
    array (
      'newTab' => false,
      'panelDefault' => 'expanded',
    ),
  ),
  'form' => 
  array (
    'enctype' => 'multipart/form-data',
  ),
);
?>
