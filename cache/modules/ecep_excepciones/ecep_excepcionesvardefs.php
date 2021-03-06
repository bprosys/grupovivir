<?php 
 $GLOBALS["dictionary"]["ecep_excepciones"]=array (
  'table' => 'ecep_excepciones',
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
      'rows' => 6,
      'cols' => 80,
      'inline_edit' => true,
      'comments' => 'Full text of the note',
      'merge_filter' => 'disabled',
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
      'relationship' => 'ecep_excepciones_created_by',
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
      'relationship' => 'ecep_excepciones_modified_user',
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
      'relationship' => 'ecep_excepciones_assigned_user',
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
      'relationship' => 'securitygroups_ecep_excepciones',
      'module' => 'SecurityGroups',
      'bean_name' => 'SecurityGroup',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUPS',
    ),
    'ecep_excepciones_number' => 
    array (
      'name' => 'ecep_excepciones_number',
      'vname' => 'LBL_NUMBER',
      'type' => 'int',
      'readonly' => true,
      'len' => 11,
      'required' => true,
      'auto_increment' => true,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'comment' => 'Visual unique identifier',
      'duplicate_merge' => 'disabled',
      'disable_num_format' => true,
      'studio' => 
      array (
        'quickcreate' => false,
      ),
      'inline_edit' => false,
    ),
    'type' => 
    array (
      'name' => 'type',
      'vname' => 'LBL_TYPE',
      'type' => 'enum',
      'options' => 'ecep_excepciones_type_dom',
      'len' => 100,
      'comment' => 'The type of issue (ex: issue, feature)',
      'merge_filter' => 'disabled',
      'required' => false,
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
      'size' => '20',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'options' => 'ecep_excepciones_status_dom',
      'len' => 100,
      'audited' => true,
      'comment' => 'The status of the issue',
      'merge_filter' => 'enabled',
    ),
    'priority' => 
    array (
      'name' => 'priority',
      'vname' => 'LBL_PRIORITY',
      'type' => 'enum',
      'options' => 'ecep_excepciones_priority_dom',
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
      'options' => 'ecep_excepciones_resolution_dom',
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
    'observaciones1_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Observaciones 1',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'observaciones1_c',
      'vname' => 'LBL_OBSERVACIONES1',
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
      'id' => 'ecep_excepcionesobservaciones1_c',
      'custom_module' => 'ecep_excepciones',
    ),
    'fechaterminacion_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Fecha de Terminación',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'fechaterminacion_c',
      'vname' => 'LBL_FECHATERMINACION',
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
      'id' => 'ecep_excepcionesfechaterminacion_c',
      'custom_module' => 'ecep_excepciones',
    ),
    'fecha_recibido_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Fecha firma de Aceptación',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'fecha_recibido_c',
      'vname' => 'LBL_FECHA_RECIBIDO',
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
      'display_default' => 'now',
      'id' => 'ecep_excepcionesfecha_recibido_c',
      'custom_module' => 'ecep_excepciones',
    ),
    'fotorecibidocliente_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Foto Recibido Cliente',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'fotorecibidocliente_c',
      'vname' => 'LBL_FOTORECIBIDOCLIENTE',
      'type' => 'image',
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
      'len' => 255,
      'size' => '20',
      'studio' => 'visible',
      'dbType' => 'varchar',
      'border' => '',
      'width' => '120',
      'height' => '',
      'id' => 'ecep_excepcionesfotorecibidocliente_c',
      'custom_module' => 'ecep_excepciones',
    ),
    'area_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Area',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'area_c',
      'vname' => 'LBL_AREA',
      'type' => 'dynamicenum',
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
      'len' => 100,
      'size' => '20',
      'options' => 'area_list',
      'studio' => 'visible',
      'dbType' => 'enum',
      'parentenum' => '',
      'id' => 'ecep_excepcionesarea_c',
      'custom_module' => 'ecep_excepciones',
    ),
    'fotoinspeccion_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Foto de Inspección',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'fotoinspeccion_c',
      'vname' => 'LBL_FOTOINSPECCION',
      'type' => 'image',
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
      'len' => 255,
      'size' => '20',
      'studio' => 'visible',
      'dbType' => 'varchar',
      'border' => '',
      'width' => '120',
      'height' => '',
      'id' => 'ecep_excepcionesfotoinspeccion_c',
      'custom_module' => 'ecep_excepciones',
    ),
    'observaciones2_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Observaciones 2',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'observaciones2_c',
      'vname' => 'LBL_OBSERVACIONES2',
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
      'id' => 'ecep_excepcionesobservaciones2_c',
      'custom_module' => 'ecep_excepciones',
    ),
    'ing_ingenieria_ecep_excepciones_1' => 
    array (
      'name' => 'ing_ingenieria_ecep_excepciones_1',
      'type' => 'link',
      'relationship' => 'ing_ingenieria_ecep_excepciones_1',
      'source' => 'non-db',
      'module' => 'ING_Ingenieria',
      'bean_name' => 'ING_Ingenieria',
      'vname' => 'LBL_ING_INGENIERIA_ECEP_EXCEPCIONES_1_FROM_ING_INGENIERIA_TITLE',
      'id_name' => 'ing_ingenieria_ecep_excepciones_1ing_ingenieria_ida',
    ),
    'ing_ingenieria_ecep_excepciones_1_name' => 
    array (
      'name' => 'ing_ingenieria_ecep_excepciones_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_ING_INGENIERIA_ECEP_EXCEPCIONES_1_FROM_ING_INGENIERIA_TITLE',
      'save' => true,
      'id_name' => 'ing_ingenieria_ecep_excepciones_1ing_ingenieria_ida',
      'link' => 'ing_ingenieria_ecep_excepciones_1',
      'table' => 'ing_ingenieria',
      'module' => 'ING_Ingenieria',
      'rname' => 'name',
    ),
    'ing_ingenieria_ecep_excepciones_1ing_ingenieria_ida' => 
    array (
      'name' => 'ing_ingenieria_ecep_excepciones_1ing_ingenieria_ida',
      'type' => 'link',
      'relationship' => 'ing_ingenieria_ecep_excepciones_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_ING_INGENIERIA_ECEP_EXCEPCIONES_1_FROM_ECEP_EXCEPCIONES_TITLE',
    ),
    'fototrabajo_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Foto Trabajo Realizado',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'fototrabajo_c',
      'vname' => 'LBL_FOTOTRABAJO',
      'type' => 'image',
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
      'len' => 255,
      'size' => '20',
      'studio' => 'visible',
      'dbType' => 'varchar',
      'border' => '',
      'width' => '120',
      'height' => '',
      'id' => 'ecep_excepcionesfototrabajo_c',
      'custom_module' => 'ecep_excepciones',
    ),
    'fechainspeccion_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => 'Fecha de Inspección',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'fechainspeccion_c',
      'vname' => 'LBL_FECHAINSPECCION',
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
      'id' => 'ecep_excepcionesfechainspeccion_c',
      'custom_module' => 'ecep_excepciones',
    ),
  ),
  'relationships' => 
  array (
    'ecep_excepciones_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ecep_excepciones',
      'rhs_table' => 'ecep_excepciones',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'ecep_excepciones_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ecep_excepciones',
      'rhs_table' => 'ecep_excepciones',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'ecep_excepciones_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ecep_excepciones',
      'rhs_table' => 'ecep_excepciones',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'securitygroups_ecep_excepciones' => 
    array (
      'lhs_module' => 'SecurityGroups',
      'lhs_table' => 'securitygroups',
      'lhs_key' => 'id',
      'rhs_module' => 'ecep_excepciones',
      'rhs_table' => 'ecep_excepciones',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'securitygroups_records',
      'join_key_lhs' => 'securitygroup_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'ecep_excepciones',
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'ecep_excepcionespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    'number' => 
    array (
      'name' => 'ecep_excepcionesnumk',
      'type' => 'unique',
      'fields' => 
      array (
        0 => 'ecep_excepciones_number',
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