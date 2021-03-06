<?php 
 $GLOBALS["dictionary"]["ING_Ingenieria"]=array (
  'table' => 'ing_ingenieria',
  'audited' => true,
  'inline_edit' => true,
  'duplicate_merge' => true,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
      'inline_edit' => false,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_SUBJECT',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => 255,
      'audited' => true,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'comment' => 'The short description of the bug',
      'merge_filter' => 'selected',
      'required' => true,
      'importable' => 'required',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => '6',
      'cols' => '80',
      'required' => false,
      'massupdate' => 0,
      'no_default' => false,
      'comments' => 'Full text of the note',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'studio' => 'visible',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'ing_ingenieria_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'ing_ingenieria_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'ing_ingenieria_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'SecurityGroups' => 
    array (
      'name' => 'SecurityGroups',
      'type' => 'link',
      'relationship' => 'securitygroups_ing_ingenieria',
      'module' => 'SecurityGroups',
      'bean_name' => 'SecurityGroup',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUPS',
    ),
    'ing_ingenieria_number' => 
    array (
      'name' => 'ing_ingenieria_number',
      'vname' => 'LBL_NUMBER',
      'type' => 'int',
      'readonly' => true,
      'len' => '11',
      'required' => true,
      'auto_increment' => true,
      'unified_search' => false,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'comment' => 'Visual unique identifier',
      'duplicate_merge' => 'disabled',
      'disable_num_format' => '1',
      'studio' => 
      array (
        'quickcreate' => false,
      ),
      'inline_edit' => '',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => 'Visual unique identifier',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
      'min' => false,
      'max' => false,
    ),
    'type' => 
    array (
      'name' => 'type',
      'vname' => 'LBL_TYPE',
      'type' => 'enum',
      'options' => 'ing_ingenieria_type_dom',
      'len' => 255,
      'comment' => 'The type of issue (ex: issue, feature)',
      'merge_filter' => 'enabled',
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'options' => 'status_list',
      'len' => 100,
      'audited' => true,
      'comment' => 'The status of the issue',
      'merge_filter' => 'disabled',
      'required' => false,
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'size' => '20',
      'studio' => 'visible',
      'dependency' => false,
      'default' => '1',
    ),
    'priority' => 
    array (
      'name' => 'priority',
      'vname' => 'LBL_PRIORITY',
      'type' => 'enum',
      'options' => 'ing_ingenieria_priority_dom',
      'len' => 100,
      'audited' => true,
      'comment' => 'An indication of the priorty of the issue',
      'merge_filter' => 'enabled',
    ),
    'resolution' => 
    array (
      'name' => 'resolution',
      'vname' => 'LBL_RESOLUTION',
      'type' => 'enum',
      'options' => 'ing_ingenieria_resolution_dom',
      'len' => 255,
      'audited' => true,
      'comment' => 'An indication of how the issue was resolved',
      'merge_filter' => 'enabled',
    ),
    'work_log' => 
    array (
      'name' => 'work_log',
      'vname' => 'LBL_WORK_LOG',
      'type' => 'text',
      'comment' => 'Free-form text used to denote activities of interest',
    ),
    'fecha_programada_entrega' => 
    array (
      'required' => false,
      'name' => 'fecha_programada_entrega',
      'vname' => 'LBL_FECHA_PROGRAMADA_ENTREGA',
      'type' => 'date',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
    ),
    'confirmacion_entrega' => 
    array (
      'required' => false,
      'name' => 'confirmacion_entrega',
      'vname' => 'LBL_CONFIRMACION_ENTREGA',
      'type' => 'bool',
      'massupdate' => 0,
      'default' => '0',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    ),
    'reconfirmacion' => 
    array (
      'required' => false,
      'name' => 'reconfirmacion',
      'vname' => 'LBL_RECONFIRMACION',
      'type' => 'bool',
      'massupdate' => 0,
      'default' => '0',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    ),
    'fechaentrega' => 
    array (
      'required' => false,
      'name' => 'fechaentrega',
      'vname' => 'LBL_FECHAENTREGA',
      'type' => 'date',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
    ),
    'fechareconfirmacioncita_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Fecha de Reconfirmación de la Cita No.1',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'fechareconfirmacioncita_c',
      'vname' => 'LBL_FECHARECONFIRMACIONCITA',
      'type' => 'date',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
      'id' => 'ING_Ingenieriafechareconfirmacioncita_c',
      'custom_module' => 'ING_Ingenieria',
    ),
    'aos_product_categories_ing_ingenieria_1' => 
    array (
      'name' => 'aos_product_categories_ing_ingenieria_1',
      'type' => 'link',
      'relationship' => 'aos_product_categories_ing_ingenieria_1',
      'source' => 'non-db',
      'module' => 'AOS_Product_Categories',
      'bean_name' => 'AOS_Product_Categories',
      'vname' => 'LBL_AOS_PRODUCT_CATEGORIES_ING_INGENIERIA_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
      'id_name' => 'aos_produc1b30egories_ida',
    ),
    'aos_product_categories_ing_ingenieria_1_name' => 
    array (
      'name' => 'aos_product_categories_ing_ingenieria_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_AOS_PRODUCT_CATEGORIES_ING_INGENIERIA_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
      'save' => true,
      'id_name' => 'aos_produc1b30egories_ida',
      'link' => 'aos_product_categories_ing_ingenieria_1',
      'table' => 'aos_product_categories',
      'module' => 'AOS_Product_Categories',
      'rname' => 'name',
    ),
    'aos_produc1b30egories_ida' => 
    array (
      'name' => 'aos_produc1b30egories_ida',
      'type' => 'link',
      'relationship' => 'aos_product_categories_ing_ingenieria_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_AOS_PRODUCT_CATEGORIES_ING_INGENIERIA_1_FROM_ING_INGENIERIA_TITLE',
    ),
    'accounts_ing_ingenieria_1' => 
    array (
      'name' => 'accounts_ing_ingenieria_1',
      'type' => 'link',
      'relationship' => 'accounts_ing_ingenieria_1',
      'source' => 'non-db',
      'module' => 'Accounts',
      'bean_name' => 'Account',
      'vname' => 'LBL_ACCOUNTS_ING_INGENIERIA_1_FROM_ACCOUNTS_TITLE',
      'id_name' => 'accounts_ing_ingenieria_1accounts_ida',
    ),
    'accounts_ing_ingenieria_1_name' => 
    array (
      'name' => 'accounts_ing_ingenieria_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ACCOUNTS_ING_INGENIERIA_1_FROM_ACCOUNTS_TITLE',
      'save' => true,
      'id_name' => 'accounts_ing_ingenieria_1accounts_ida',
      'link' => 'accounts_ing_ingenieria_1',
      'table' => 'accounts',
      'module' => 'Accounts',
      'rname' => 'name',
    ),
    'accounts_ing_ingenieria_1accounts_ida' => 
    array (
      'name' => 'accounts_ing_ingenieria_1accounts_ida',
      'type' => 'link',
      'relationship' => 'accounts_ing_ingenieria_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_ACCOUNTS_ING_INGENIERIA_1_FROM_ING_INGENIERIA_TITLE',
    ),
    'observreconf_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Observaciones Reconfirmación',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'observreconf_c',
      'vname' => 'LBL_OBSERVRECONF',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'ING_Ingenieriaobservreconf_c',
      'custom_module' => 'ING_Ingenieria',
    ),
    'fechaprogramada_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Fecha Programada (campo)',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'fechaprogramada_c',
      'vname' => 'LBL_FECHAPROGRAMADA',
      'type' => 'datetimecombo',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
      'dbType' => 'datetime',
      'id' => 'ING_Ingenieriafechaprogramada_c',
      'custom_module' => 'ING_Ingenieria',
    ),
    'ing_ingenieria_aos_product_categories_1' => 
    array (
      'name' => 'ing_ingenieria_aos_product_categories_1',
      'type' => 'link',
      'relationship' => 'ing_ingenieria_aos_product_categories_1',
      'source' => 'non-db',
      'module' => 'AOS_Product_Categories',
      'bean_name' => 'AOS_Product_Categories',
      'vname' => 'LBL_ING_INGENIERIA_AOS_PRODUCT_CATEGORIES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
      'id_name' => 'ing_ingenid84aegories_idb',
    ),
    'ing_ingenieria_aos_product_categories_1_name' => 
    array (
      'name' => 'ing_ingenieria_aos_product_categories_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ING_INGENIERIA_AOS_PRODUCT_CATEGORIES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
      'save' => true,
      'id_name' => 'ing_ingenid84aegories_idb',
      'link' => 'ing_ingenieria_aos_product_categories_1',
      'table' => 'aos_product_categories',
      'module' => 'AOS_Product_Categories',
      'rname' => 'name',
    ),
    'ing_ingenid84aegories_idb' => 
    array (
      'name' => 'ing_ingenid84aegories_idb',
      'type' => 'link',
      'relationship' => 'ing_ingenieria_aos_product_categories_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'left',
      'vname' => 'LBL_ING_INGENIERIA_AOS_PRODUCT_CATEGORIES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE',
    ),
    'ing_ingenieria_ecep_excepciones_1' => 
    array (
      'name' => 'ing_ingenieria_ecep_excepciones_1',
      'type' => 'link',
      'relationship' => 'ing_ingenieria_ecep_excepciones_1',
      'source' => 'non-db',
      'module' => 'ecep_excepciones',
      'bean_name' => 'ecep_excepciones',
      'side' => 'right',
      'vname' => 'LBL_ING_INGENIERIA_ECEP_EXCEPCIONES_1_FROM_ECEP_EXCEPCIONES_TITLE',
    ),
    'dias_trascurridos_entrega' => 
    array (
      'name' => 'dias_trascurridos_entrega',
      'vname' => 'Dias Transcurridos Entrega',
      'type' => 'varchar',
      'len' => '6',
      'source' => 'non-db',
      'studio' => 'visible',
    ),
    'aos_products_ing_ingenieria_1' => 
    array (
      'name' => 'aos_products_ing_ingenieria_1',
      'type' => 'link',
      'relationship' => 'aos_products_ing_ingenieria_1',
      'source' => 'non-db',
      'module' => 'AOS_Products',
      'bean_name' => 'AOS_Products',
      'vname' => 'LBL_AOS_PRODUCTS_ING_INGENIERIA_1_FROM_AOS_PRODUCTS_TITLE',
      'id_name' => 'aos_products_ing_ingenieria_1aos_products_ida',
    ),
    'aos_products_ing_ingenieria_1_name' => 
    array (
      'name' => 'aos_products_ing_ingenieria_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_AOS_PRODUCTS_ING_INGENIERIA_1_FROM_AOS_PRODUCTS_TITLE',
      'save' => true,
      'id_name' => 'aos_products_ing_ingenieria_1aos_products_ida',
      'link' => 'aos_products_ing_ingenieria_1',
      'table' => 'aos_products',
      'module' => 'AOS_Products',
      'rname' => 'name',
    ),
    'aos_products_ing_ingenieria_1aos_products_ida' => 
    array (
      'name' => 'aos_products_ing_ingenieria_1aos_products_ida',
      'type' => 'link',
      'relationship' => 'aos_products_ing_ingenieria_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_AOS_PRODUCTS_ING_INGENIERIA_1_FROM_ING_INGENIERIA_TITLE',
    ),
    'entregallaves_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Fecha Entrega Llaves',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'entregallaves_c',
      'vname' => 'LBL_ENTREGALLAVES',
      'type' => 'datetimecombo',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
      'dbType' => 'datetime',
      'id' => 'ING_Ingenieriaentregallaves_c',
      'custom_module' => 'ING_Ingenieria',
    ),
    'fechareconfirmacioncitaentre_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Fecha Reconfirmacion cita entrega',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'fechareconfirmacioncitaentre_c',
      'vname' => 'LBL_FECHARECONFIRMACIONCITAENTRE',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'ING_Ingenieriafechareconfirmacioncitaentre_c',
      'custom_module' => 'ING_Ingenieria',
    ),
    'obserconfirm_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Observaciones Confirmación',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'obserconfirm_c',
      'vname' => 'LBL_OBSERCONFIRM',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'ING_Ingenieriaobserconfirm_c',
      'custom_module' => 'ING_Ingenieria',
    ),
    'fechareconfirmacion1_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Fecha Reconfirmación 1',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'fechareconfirmacion1_c',
      'vname' => 'LBL_FECHARECONFIRMACION1',
      'type' => 'datetimecombo',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
      'dbType' => 'datetime',
      'id' => 'ING_Ingenieriafechareconfirmacion1_c',
      'custom_module' => 'ING_Ingenieria',
    ),
    'fechareconfirmacioncita2_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Fecha de Reconfirmación de la Cita No.2',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'fechareconfirmacioncita2_c',
      'vname' => 'LBL_FECHARECONFIRMACIONCITA2',
      'type' => 'date',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
      'id' => 'ING_Ingenieriafechareconfirmacioncita2_c',
      'custom_module' => 'ING_Ingenieria',
    ),
    'ing_ingenieria_bugs' => 
    array (
      'name' => 'ing_ingenieria_bugs',
      'type' => 'link',
      'relationship' => 'ing_ingenieria_bugs',
      'source' => 'non-db',
      'module' => 'Bugs',
      'bean_name' => 'Bug',
      'side' => 'right',
      'vname' => 'LBL_ING_INGENIERIA_BUGS_FROM_BUGS_TITLE',
    ),
    'fechadeconfirmacion_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Fecha de Confirmación',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'fechadeconfirmacion_c',
      'vname' => 'LBL_FECHADECONFIRMACION',
      'type' => 'datetimecombo',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
      'dbType' => 'datetime',
      'id' => 'ING_Ingenieriafechadeconfirmacion_c',
      'custom_module' => 'ING_Ingenieria',
    ),
    'ing_ingenieria_aos_products' => 
    array (
      'name' => 'ing_ingenieria_aos_products',
      'type' => 'link',
      'relationship' => 'ing_ingenieria_aos_products',
      'source' => 'non-db',
      'module' => 'AOS_Products',
      'bean_name' => 'AOS_Products',
      'vname' => 'LBL_ING_INGENIERIA_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
      'id_name' => 'ing_ingenieria_aos_productsaos_products_idb',
    ),
    'ing_ingenieria_aos_products_name' => 
    array (
      'name' => 'ing_ingenieria_aos_products_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ING_INGENIERIA_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
      'save' => true,
      'id_name' => 'ing_ingenieria_aos_productsaos_products_idb',
      'link' => 'ing_ingenieria_aos_products',
      'table' => 'aos_products',
      'module' => 'AOS_Products',
      'rname' => 'name',
    ),
    'ing_ingenieria_aos_productsaos_products_idb' => 
    array (
      'name' => 'ing_ingenieria_aos_productsaos_products_idb',
      'type' => 'link',
      'relationship' => 'ing_ingenieria_aos_products',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'left',
      'vname' => 'LBL_ING_INGENIERIA_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE',
    ),
    'fechaconfirmacion_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Fecha de Confirmación de la Cita',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'fechaconfirmacion_c',
      'vname' => 'LBL_FECHACONFIRMACION',
      'type' => 'date',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
      'id' => 'ING_Ingenieriafechaconfirmacion_c',
      'custom_module' => 'ING_Ingenieria',
    ),
    'ing_ingenieria_accounts' => 
    array (
      'name' => 'ing_ingenieria_accounts',
      'type' => 'link',
      'relationship' => 'ing_ingenieria_accounts',
      'source' => 'non-db',
      'module' => 'Accounts',
      'bean_name' => 'Account',
      'vname' => 'LBL_ING_INGENIERIA_ACCOUNTS_FROM_ACCOUNTS_TITLE',
      'id_name' => 'ing_ingenieria_accountsaccounts_idb',
    ),
    'ing_ingenieria_accounts_name' => 
    array (
      'name' => 'ing_ingenieria_accounts_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ING_INGENIERIA_ACCOUNTS_FROM_ACCOUNTS_TITLE',
      'save' => true,
      'id_name' => 'ing_ingenieria_accountsaccounts_idb',
      'link' => 'ing_ingenieria_accounts',
      'table' => 'accounts',
      'module' => 'Accounts',
      'rname' => 'name',
    ),
    'ing_ingenieria_accountsaccounts_idb' => 
    array (
      'name' => 'ing_ingenieria_accountsaccounts_idb',
      'type' => 'link',
      'relationship' => 'ing_ingenieria_accounts',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'left',
      'vname' => 'LBL_ING_INGENIERIA_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    ),
    'observllaves_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Observaciones entrega Llaves',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'observllaves_c',
      'vname' => 'LBL_OBSERVLLAVES',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'ING_Ingenieriaobservllaves_c',
      'custom_module' => 'ING_Ingenieria',
    ),
    'fechacamp_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Fecha Entrega Campo',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'fechacamp_c',
      'vname' => 'LBL_FECHACAMP',
      'type' => 'datetimecombo',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
      'dbType' => 'datetime',
      'id' => 'ING_Ingenieriafechacamp_c',
      'custom_module' => 'ING_Ingenieria',
    ),
    'estacionamiento_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Estacionamientos',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'estacionamiento_c',
      'vname' => 'LBL_ESTACIONAMIENTO',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'ING_Ingenieriaestacionamiento_c',
      'custom_module' => 'ING_Ingenieria',
    ),
    'fechareconfirmacion2_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Fecha Reconfirmación 2',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'fechareconfirmacion2_c',
      'vname' => 'LBL_FECHARECONFIRMACION2',
      'type' => 'datetimecombo',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
      'dbType' => 'datetime',
      'id' => 'ING_Ingenieriafechareconfirmacion2_c',
      'custom_module' => 'ING_Ingenieria',
    ),
    'fecha_confirmacion_cita_entr_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Fecha Confirmacion cita entrega',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'fecha_confirmacion_cita_entr_c',
      'vname' => 'LBL_FECHA_CONFIRMACION_CITA_ENTR',
      'type' => 'date',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'enable_range_search' => false,
      'id' => 'ING_Ingenieriafecha_confirmacion_cita_entr_c',
      'custom_module' => 'ING_Ingenieria',
    ),
    'depositos_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Depositos',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'depositos_c',
      'vname' => 'LBL_DEPOSITOS',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'ING_Ingenieriadepositos_c',
      'custom_module' => 'ING_Ingenieria',
    ),
    'observacionesentrega_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Observaciones Entrega',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'observacionesentrega_c',
      'vname' => 'LBL_OBSERVACIONESENTREGA',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id' => 'ING_Ingenieriaobservacionesentrega_c',
      'custom_module' => 'ING_Ingenieria',
    ),
  ),
  'relationships' => 
  array (
    'ing_ingenieria_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ING_Ingenieria',
      'rhs_table' => 'ing_ingenieria',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'ing_ingenieria_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ING_Ingenieria',
      'rhs_table' => 'ing_ingenieria',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'ing_ingenieria_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ING_Ingenieria',
      'rhs_table' => 'ing_ingenieria',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'securitygroups_ing_ingenieria' => 
    array (
      'lhs_module' => 'SecurityGroups',
      'lhs_table' => 'securitygroups',
      'lhs_key' => 'id',
      'rhs_module' => 'ING_Ingenieria',
      'rhs_table' => 'ing_ingenieria',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'securitygroups_records',
      'join_key_lhs' => 'securitygroup_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'ING_Ingenieria',
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'ing_ingenieriapk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    'number' => 
    array (
      'name' => 'ing_ingenierianumk',
      'type' => 'unique',
      'fields' => 
      array (
        0 => 'ing_ingenieria_number',
      ),
    ),
  ),
  'templates' => 
  array (
    'issue' => 'issue',
    'security_groups' => 'security_groups',
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => true,
);