<?php
$viewdefs ['Documents'] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'hidden' => 
        array (
          0 => '<input type="hidden" name="old_id" value="{$fields.document_revision_id.value}">',
          1 => '<input type="hidden" name="parent_id" value="{$smarty.request.parent_id}">',
          2 => '<input type="hidden" name="parent_type" value="{$smarty.request.parent_type}">',
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'include/javascript/popup_parent_helper.js',
        ),
        1 => 
        array (
          'file' => 'cache/include/javascript/sugar_grp_jsolait.js',
        ),
        2 => 
        array (
          'file' => 'modules/Documents/documents.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_DOCUMENT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_document_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'filename',
            'displayParams' => 
            array (
              'required' => true,
              'onchangeSetFileNameTo' => 'document_name',
            ),
          ),
          1 => 'status_id',
        ),
        1 => 
        array (
          0 => 'document_name',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'template_type',
            'label' => 'LBL_DET_TEMPLATE_TYPE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'active_date',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        4 => 
        array (
          0 => 'category_id',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'displayParams' => 
            array (
              'rows' => 10,
              'cols' => 120,
            ),
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'related_doc_name',
            'comment' => 'The related document name for Meta-Data framework',
            'label' => 'LBL_DET_RELATED_DOCUMENT',
          ),
          1 => 
          array (
            'name' => 'related_doc_rev_number',
            'comment' => 'The related document version number for Meta-Data framework',
            'label' => 'LBL_DET_RELATED_DOCUMENT_VERSION',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'documents_aos_products_1_name',
            'label' => 'LBL_DOCUMENTS_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
          ),
        ),
      ),
    ),
  ),
);
;
?>
