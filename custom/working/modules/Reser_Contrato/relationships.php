<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */


$relationships = array (
  'reser_contrato_modified_user' => 
  array (
    'id' => '618b6a1f-bc50-05a7-4c3d-5b5240425625',
    'relationship_name' => 'reser_contrato_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reser_Contrato',
    'rhs_table' => 'reser_contrato',
    'rhs_key' => 'modified_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'reser_contrato_created_by' => 
  array (
    'id' => '61b9db37-f679-4b4a-88b6-5b52409e856d',
    'relationship_name' => 'reser_contrato_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reser_Contrato',
    'rhs_table' => 'reser_contrato',
    'rhs_key' => 'created_by',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'reser_contrato_assigned_user' => 
  array (
    'id' => '61e51309-6d74-4726-3b8c-5b5240b19986',
    'relationship_name' => 'reser_contrato_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Reser_Contrato',
    'rhs_table' => 'reser_contrato',
    'rhs_key' => 'assigned_user_id',
    'join_table' => NULL,
    'join_key_lhs' => NULL,
    'join_key_rhs' => NULL,
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'securitygroups_reser_contrato' => 
  array (
    'id' => '620c4c23-0961-3fec-c7d7-5b5240c2e84f',
    'relationship_name' => 'securitygroups_reser_contrato',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'Reser_Contrato',
    'rhs_table' => 'reser_contrato',
    'rhs_key' => 'id',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Reser_Contrato',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'aos_products_reser_contrato_1' => 
  array (
    'id' => '8a94377f-ae0c-2cc0-cb8d-5b52403f921d',
    'relationship_name' => 'aos_products_reser_contrato_1',
    'lhs_module' => 'AOS_Products',
    'lhs_table' => 'aos_products',
    'lhs_key' => 'id',
    'rhs_module' => 'Reser_Contrato',
    'rhs_table' => 'reser_contrato',
    'rhs_key' => 'id',
    'join_table' => 'aos_products_reser_contrato_1_c',
    'join_key_lhs' => 'aos_products_reser_contrato_1aos_products_ida',
    'join_key_rhs' => 'aos_products_reser_contrato_1reser_contrato_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'accounts_reser_contrato_1' => 
  array (
    'id' => '8c76f7f0-870e-d1c9-c31b-5b524058445d',
    'relationship_name' => 'accounts_reser_contrato_1',
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Reser_Contrato',
    'rhs_table' => 'reser_contrato',
    'rhs_key' => 'id',
    'join_table' => 'accounts_reser_contrato_1_c',
    'join_key_lhs' => 'accounts_reser_contrato_1accounts_ida',
    'join_key_rhs' => 'accounts_reser_contrato_1reser_contrato_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'aos_product_categories_reser_contrato_1' => 
  array (
    'id' => '8d3a786c-2fd3-582f-03cd-5b52409e8f8a',
    'relationship_name' => 'aos_product_categories_reser_contrato_1',
    'lhs_module' => 'AOS_Product_Categories',
    'lhs_table' => 'aos_product_categories',
    'lhs_key' => 'id',
    'rhs_module' => 'Reser_Contrato',
    'rhs_table' => 'reser_contrato',
    'rhs_key' => 'id',
    'join_table' => 'aos_product_categories_reser_contrato_1_c',
    'join_key_lhs' => 'aos_produc5b3degories_ida',
    'join_key_rhs' => 'aos_product_categories_reser_contrato_1reser_contrato_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'from_studio' => true,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
  ),
);