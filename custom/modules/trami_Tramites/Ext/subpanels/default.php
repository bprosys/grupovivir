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

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$module_name = 'trami_Tramites';
$subpanel_layout = array(
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateButton'),
        array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => $module_name,),
    ),

    'where' => '',

    'list_fields' => array(
        'object_image' => array(
            'widget_class' => 'SubPanelIcon',
            'width' => '2%',
            'image2' => 'attachment',
            'image2_url_field' => array(
                'id_field' => 'selected_revision_id',
                'filename_field' => 'selected_revision_filename'
            ),
            'attachment_image_only' => true,

        ),
        'Ocupacion' => array(
            'name' => 'fecha_permiso_ocupacion_c',
            'vname' => 'LBL_LIST_DOCUMENT_NAME',
            'widget_class' => 'SubPanelDetailViewLink',
            'width' => '10%',
        ),
        'Construccion' => array(
            'name' => 'fecha_permiso_construccion_c',
            'vname' => 'LBL_LIST_DOCUMENT_NAME',
            'widget_class' => 'SubPanelDetailViewLink',
            'width' => '10%',
        ),
        'IDAAN' => array(
            'name' => 'envio_paz_y_salvo_idaan',
            'vname' => 'LBL_LIST_DOCUMENT_NAME',
            'widget_class' => 'SubPanelDetailViewLink',
            'width' => '10%',
        ),
        'MANT' => array(
            'name' => 'envio_paz_y_salvo_mant',
            'vname' => 'LBL_LIST_DOCUMENT_NAME',
            'widget_class' => 'SubPanelDetailViewLink',
            'width' => '10%',
        ),

        'inmbueble' => array(
            'name' => 'ienvio_paz_y_salvo_inmueble',
            'vname' => 'LBL_DOC_ACTIVE_DATE',
            'width' => '10%',
        ),
        'recibido protocolo' => array(
            'name' => 'recibido protocolo_c',
            'vname' => 'LBL_DOC_ACTIVE_DATE',
            'width' => '10%',
        ),
        'envio protocolo' => array(
            'name' => 'envio_protocolo_c',
            'vname' => 'LBL_DOC_ACTIVE_DATE',
            'width' => '10%',
        ),
        'desembolso' => array(
            'name' => 'fecha_desembolso_c',
            'vname' => 'LBL_DOC_ACTIVE_DATE',
            'width' => '10%',
        ),
        'monto' => array(
            'name' => 'valor_desembolso_c',
            'vname' => 'LBL_DOC_ACTIVE_DATE',
            'width' => '10%',
        ),
        'edit_button' => array(
            'vname' => 'LBL_EDIT_BUTTON',
            'widget_class' => 'SubPanelEditButton',
            'module' => $module_name,
            'width' => '5%',
        ),
        'remove_button' => array(
            'vname' => 'LBL_REMOVE',
            'widget_class' => 'SubPanelRemoveButton',
            'module' => $module_name,
            'width' => '5%',
        ),
    ),
);
