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
  'ing_ingenieria_modified_user' => 
  array (
    'id' => '9a81ddf1-5ff5-1b8b-483f-5b4cf3675bbb',
    'relationship_name' => 'ing_ingenieria_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ING_Ingenieria',
    'rhs_table' => 'ing_ingenieria',
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
    'from_studio' => true,
  ),
  'ing_ingenieria_created_by' => 
  array (
    'id' => 'a30bca5d-8a86-d1f3-b93c-5b4cf339fef3',
    'relationship_name' => 'ing_ingenieria_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ING_Ingenieria',
    'rhs_table' => 'ing_ingenieria',
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
    'from_studio' => true,
  ),
  'ing_ingenieria_assigned_user' => 
  array (
    'id' => 'a73889c5-389a-1a48-dc33-5b4cf3d9ef96',
    'relationship_name' => 'ing_ingenieria_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ING_Ingenieria',
    'rhs_table' => 'ing_ingenieria',
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
    'from_studio' => true,
  ),
  'securitygroups_ing_ingenieria' => 
  array (
    'id' => 'acd1a412-5702-6aac-0a68-5b4cf3f0b912',
    'relationship_name' => 'securitygroups_ing_ingenieria',
    'lhs_module' => 'SecurityGroups',
    'lhs_table' => 'securitygroups',
    'lhs_key' => 'id',
    'rhs_module' => 'ING_Ingenieria',
    'rhs_table' => 'ing_ingenieria',
    'rhs_key' => 'id',
    'join_table' => 'securitygroups_records',
    'join_key_lhs' => 'securitygroup_id',
    'join_key_rhs' => 'record_id',
    'relationship_type' => 'many-to-many',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ING_Ingenieria',
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
  ),
  'ing_ingenieria_bugs' => 
  array (
    'id' => '7a062b0c-dadd-f7ff-8419-5b4cf324146d',
    'relationship_name' => 'ing_ingenieria_bugs',
    'lhs_module' => 'ING_Ingenieria',
    'lhs_table' => 'ing_ingenieria',
    'lhs_key' => 'id',
    'rhs_module' => 'Bugs',
    'rhs_table' => 'bugs',
    'rhs_key' => 'id',
    'join_table' => 'ing_ingenieria_bugs_c',
    'join_key_lhs' => 'ing_ingenieria_bugsing_ingenieria_ida',
    'join_key_rhs' => 'ing_ingenieria_bugsbugs_idb',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => true,
  ),
  'ing_ingenieria_ecep_excepciones_1' => 
  array (
    'id' => '7ae6702b-8bad-cc36-42de-5b4cf3144a88',
    'relationship_name' => 'ing_ingenieria_ecep_excepciones_1',
    'lhs_module' => 'ING_Ingenieria',
    'lhs_table' => 'ing_ingenieria',
    'lhs_key' => 'id',
    'rhs_module' => 'ecep_excepciones',
    'rhs_table' => 'ecep_excepciones',
    'rhs_key' => 'id',
    'join_table' => 'ing_ingenieria_ecep_excepciones_1_c',
    'join_key_lhs' => 'ing_ingenieria_ecep_excepciones_1ing_ingenieria_ida',
    'join_key_rhs' => 'ing_ingenieria_ecep_excepciones_1ecep_excepciones_idb',
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
  'ing_ingenieria_accounts' => 
  array (
    'id' => '8f120359-d3af-9ce6-419b-5b4cf37a7120',
    'relationship_name' => 'ing_ingenieria_accounts',
    'lhs_module' => 'ING_Ingenieria',
    'lhs_table' => 'ing_ingenieria',
    'lhs_key' => 'id',
    'rhs_module' => 'Accounts',
    'rhs_table' => 'accounts',
    'rhs_key' => 'id',
    'join_table' => 'ing_ingenieria_accounts_c',
    'join_key_lhs' => 'ing_ingenieria_accountsing_ingenieria_ida',
    'join_key_rhs' => 'ing_ingenieria_accountsaccounts_idb',
    'relationship_type' => 'one-to-one',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => true,
  ),
  'ing_ingenieria_aos_products' => 
  array (
    'id' => '96f504e1-1835-8496-9a8c-5b4cf3f2c87d',
    'relationship_name' => 'ing_ingenieria_aos_products',
    'lhs_module' => 'ING_Ingenieria',
    'lhs_table' => 'ing_ingenieria',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products',
    'rhs_table' => 'aos_products',
    'rhs_key' => 'id',
    'join_table' => 'ing_ingenieria_aos_products_c',
    'join_key_lhs' => 'ing_ingenieria_aos_productsing_ingenieria_ida',
    'join_key_rhs' => 'ing_ingenieria_aos_productsaos_products_idb',
    'relationship_type' => 'one-to-one',
    'relationship_role_column' => NULL,
    'relationship_role_column_value' => NULL,
    'reverse' => '0',
    'deleted' => '0',
    'readonly' => true,
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => true,
  ),
  'ing_ingenieria_aos_product_categories_1' => 
  array (
    'lhs_module' => 'ING_Ingenieria',
    'rhs_module' => 'AOS_Product_Categories',
    'relationship_type' => 'one-to-one',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'ing_ingenieria_aos_product_categories_1',
  ),
);