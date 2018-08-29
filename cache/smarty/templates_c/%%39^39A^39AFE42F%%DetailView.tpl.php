<?php /* Smarty version 2.6.29, created on 2018-08-22 10:31:02
         compiled from cache/themes/SuiteP/modules/AOS_Quotes/DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/themes/SuiteP/modules/AOS_Quotes/DetailView.tpl', 47, false),array('function', 'sugar_translate', 'cache/themes/SuiteP/modules/AOS_Quotes/DetailView.tpl', 56, false),array('function', 'counter', 'cache/themes/SuiteP/modules/AOS_Quotes/DetailView.tpl', 124, false),array('function', 'sugar_ajax_url', 'cache/themes/SuiteP/modules/AOS_Quotes/DetailView.tpl', 200, false),array('function', 'sugar_number_format', 'cache/themes/SuiteP/modules/AOS_Quotes/DetailView.tpl', 590, false),array('modifier', 'strip_semicolon', 'cache/themes/SuiteP/modules/AOS_Quotes/DetailView.tpl', 117, false),)), $this); ?>


<script language="javascript">
    <?php echo '
    SUGAR.util.doWhen(function () {
        return $("#contentTable").length == 0;
    }, SUGAR.themes.actionMenu);
    '; ?>

</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
">
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="<?php echo $this->_tpl_vars['offset']; ?>
">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
<?php if (! $this->_tpl_vars['config']['enable_action_menu']): ?>
<div class="buttons">
<?php if ($this->_tpl_vars['bean']->aclAccess('edit')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_KEY']; ?>
" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='AOS_Quotes'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('edit')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_KEY']; ?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='AOS_Quotes'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_LABEL']; ?>
" id="duplicate_button"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('delete')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_KEY']; ?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='AOS_Quotes'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('<?php echo $this->_tpl_vars['APP']['NTC_DELETE_CONFIRMATION']; ?>
')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" id="delete_button"><?php endif; ?> 
<?php if ($this->_tpl_vars['bean']->aclAccess('edit') && $this->_tpl_vars['bean']->aclAccess('delete')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DUP_MERGE']; ?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='AOS_Quotes'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="<?php echo $this->_tpl_vars['APP']['LBL_DUP_MERGE']; ?>
" id="merge_duplicate_button"><?php endif; ?> 
<input type="button" class="button" onClick="showPopup('pdf');" value="<?php echo $this->_tpl_vars['MOD']['LBL_PRINT_AS_PDF']; ?>
"/>
<input type="button" class="button" onClick="showPopup('emailpdf');" value="<?php echo $this->_tpl_vars['MOD']['LBL_EMAIL_PDF']; ?>
"/>
<input type="button" class="button" onClick="showPopup('email');return false;" value="<?php echo $this->_tpl_vars['MOD']['LBL_EMAIL_QUOTE']; ?>
"/>
<input class="button" id="create_contract_button" title="<?php echo $this->_tpl_vars['MOD']['LBL_CREATE_OPPORTUNITY']; ?>
" onclick="var _form = document.getElementById('formDetailView');_form.action.value='createOpportunity';_form.submit();" name="Create Opportunity" type="button" value="<?php echo $this->_tpl_vars['MOD']['LBL_CREATE_OPPORTUNITY']; ?>
"/>
<input class="button" id="create_contract_button" title="<?php echo $this->_tpl_vars['MOD']['LBL_CREATE_CONTRACT']; ?>
" onclick="var _form = document.getElementById('formDetailView');_form.action.value='createContract';_form.submit();" name="Create Contract" type="button" value="<?php echo $this->_tpl_vars['MOD']['LBL_CREATE_CONTRACT']; ?>
"/>
<input class="button" id="convert_to_invoice_button" title="<?php echo $this->_tpl_vars['MOD']['LBL_CONVERT_TO_INVOICE']; ?>
" onclick="var _form = document.getElementById('formDetailView');_form.action.value='converToInvoice';_form.submit();" name="Convert to Invoice" type="button" value="<?php echo $this->_tpl_vars['MOD']['LBL_CONVERT_TO_INVOICE']; ?>
"/>
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')): ?><?php if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=AOS_Quotes", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif; ?><?php endif; ?>
</div>                    <?php endif; ?>
</form>
</div>
</td>
<td align="right" width="20%" class="buttons"><?php echo $this->_tpl_vars['ADMIN_EDIT']; ?>

<?php echo $this->_tpl_vars['PAGINATION']; ?>

</td>
</tr>
</table>
<?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<div class="detail-view">
<div class="mobile-pagination"><?php echo $this->_tpl_vars['PAGINATION']; ?>
</div>

<ul class="nav nav-tabs">

<?php if ($this->_tpl_vars['config']['enable_action_menu'] && $this->_tpl_vars['config']['enable_action_menu'] != false): ?>
<li role="presentation" class="active">
<a id="tab0" data-toggle="tab" class="hidden-xs">
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_INFORMATION','module' => 'AOS_Quotes'), $this);?>

</a>
<a id="xstab0" href="#" class="visible-xs first-tab dropdown-toggle" data-toggle="dropdown">
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_INFORMATION','module' => 'AOS_Quotes'), $this);?>

</a>
</li>




<?php endif; ?>
<?php if ($this->_tpl_vars['config']['enable_action_menu'] && $this->_tpl_vars['config']['enable_action_menu'] != false): ?>
<li id="tab-actions" class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Acciones<span class="suitepicon suitepicon-action-caret"></span></a>
<ul class="dropdown-menu">
<li><?php if ($this->_tpl_vars['bean']->aclAccess('edit')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_KEY']; ?>
" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='AOS_Quotes'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="<?php echo $this->_tpl_vars['APP']['LBL_EDIT_BUTTON_LABEL']; ?>
"><?php endif; ?> </li>
<li><?php if ($this->_tpl_vars['bean']->aclAccess('edit')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_KEY']; ?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='AOS_Quotes'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="<?php echo $this->_tpl_vars['APP']['LBL_DUPLICATE_BUTTON_LABEL']; ?>
" id="duplicate_button"><?php endif; ?> </li>
<li><?php if ($this->_tpl_vars['bean']->aclAccess('delete')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_KEY']; ?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='AOS_Quotes'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('<?php echo $this->_tpl_vars['APP']['NTC_DELETE_CONFIRMATION']; ?>
')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="<?php echo $this->_tpl_vars['APP']['LBL_DELETE_BUTTON_LABEL']; ?>
" id="delete_button"><?php endif; ?> </li>
<li><?php if ($this->_tpl_vars['bean']->aclAccess('edit') && $this->_tpl_vars['bean']->aclAccess('delete')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_DUP_MERGE']; ?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='AOS_Quotes'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $this->_tpl_vars['id']; ?>
'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="<?php echo $this->_tpl_vars['APP']['LBL_DUP_MERGE']; ?>
" id="merge_duplicate_button"><?php endif; ?> </li>
<li><input type="button" class="button" onClick="showPopup('pdf');" value="<?php echo $this->_tpl_vars['MOD']['LBL_PRINT_AS_PDF']; ?>
"/></li>
<li><input type="button" class="button" onClick="showPopup('emailpdf');" value="<?php echo $this->_tpl_vars['MOD']['LBL_EMAIL_PDF']; ?>
"/></li>
<li><input type="button" class="button" onClick="showPopup('email');return false;" value="<?php echo $this->_tpl_vars['MOD']['LBL_EMAIL_QUOTE']; ?>
"/></li>
<li><input class="button" id="create_contract_button" title="<?php echo $this->_tpl_vars['MOD']['LBL_CREATE_OPPORTUNITY']; ?>
" onclick="var _form = document.getElementById('formDetailView');_form.action.value='createOpportunity';_form.submit();" name="Create Opportunity" type="button" value="<?php echo $this->_tpl_vars['MOD']['LBL_CREATE_OPPORTUNITY']; ?>
"/></li>
<li><input class="button" id="create_contract_button" title="<?php echo $this->_tpl_vars['MOD']['LBL_CREATE_CONTRACT']; ?>
" onclick="var _form = document.getElementById('formDetailView');_form.action.value='createContract';_form.submit();" name="Create Contract" type="button" value="<?php echo $this->_tpl_vars['MOD']['LBL_CREATE_CONTRACT']; ?>
"/></li>
<li><input class="button" id="convert_to_invoice_button" title="<?php echo $this->_tpl_vars['MOD']['LBL_CONVERT_TO_INVOICE']; ?>
" onclick="var _form = document.getElementById('formDetailView');_form.action.value='converToInvoice';_form.submit();" name="Convert to Invoice" type="button" value="<?php echo $this->_tpl_vars['MOD']['LBL_CONVERT_TO_INVOICE']; ?>
"/></li>
<li><?php if ($this->_tpl_vars['bean']->aclAccess('detail')): ?><?php if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=AOS_Quotes", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif; ?><?php endif; ?></li>
</ul>        </li>
<li class="tab-inline-pagination">
<?php echo $this->_tpl_vars['PAGINATION']; ?>

</li>
<?php endif; ?>
</ul>
<div class="clearfix"></div>

<?php if ($this->_tpl_vars['config']['enable_action_menu'] && $this->_tpl_vars['config']['enable_action_menu'] != false): ?>

<div class="tab-content">
<?php else: ?>

<div class="tab-content" style="padding: 0; border: 0;">
<?php endif; ?>


<?php if ($this->_tpl_vars['config']['enable_action_menu'] && $this->_tpl_vars['config']['enable_action_menu'] != false): ?>
<div class="tab-pane-NOBOOTSTRAPTOGGLER active fade in" id='tab-content-0'>





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="name" field="name"  >

<?php if (! $this->_tpl_vars['fields']['name']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['name']['value']); ?>
<?php endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['name']['value']; ?>
</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_QUOTE_NUMBER','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="int" field="number"  >

<?php if (! $this->_tpl_vars['fields']['number']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['number']['name']; ?>
">
<?php $this->assign('value', $this->_tpl_vars['fields']['number']['value']); ?>
<?php echo $this->_tpl_vars['value']; ?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_ACCOUNT','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="billing_account"  >

<?php if (! $this->_tpl_vars['fields']['billing_account']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['billing_account_id']['value'] )): ?>
<?php ob_start(); ?>index.php?module=Accounts&action=DetailView&record=<?php echo $this->_tpl_vars['fields']['billing_account_id']['value']; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('detail_url', ob_get_contents());ob_end_clean(); ?>
<a href="<?php echo smarty_function_sugar_ajax_url(array('url' => $this->_tpl_vars['detail_url']), $this);?>
"><?php endif; ?>
<span id="billing_account_id" class="sugar_field" data-id-value="<?php echo $this->_tpl_vars['fields']['billing_account_id']['value']; ?>
"><?php echo $this->_tpl_vars['fields']['billing_account']['value']; ?>
</span>
<?php if (! empty ( $this->_tpl_vars['fields']['billing_account_id']['value'] )): ?></a><?php endif; ?>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_EXPIRATION','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="expiration"  >

<?php if (! $this->_tpl_vars['fields']['expiration']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>



<?php if (strlen ( $this->_tpl_vars['fields']['expiration']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['expiration']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['expiration']['value']); ?>
<?php endif; ?>
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['expiration']['name']; ?>
"><?php echo $this->_tpl_vars['value']; ?>
</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="assigned_user_name"  >

<?php if (! $this->_tpl_vars['fields']['assigned_user_name']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span id="assigned_user_id" class="sugar_field" data-id-value="<?php echo $this->_tpl_vars['fields']['assigned_user_id']['value']; ?>
"><?php echo $this->_tpl_vars['fields']['assigned_user_name']['value']; ?>
</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">
</div>

<div class="clear"></div>
</div>
                        </div>
<?php else: ?>

<div class="tab-pane-NOBOOTSTRAPTOGGLER panel-collapse"></div>
<?php endif; ?>
</div>

<div class="panel-content">
<div>&nbsp;</div>





<?php if ($this->_tpl_vars['config']['enable_action_menu'] && $this->_tpl_vars['config']['enable_action_menu'] != false): ?>

<?php else: ?>

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel--1" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_INFORMATION','module' => 'AOS_Quotes'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel--1" data-id="LBL_ACCOUNT_INFORMATION">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="name" field="name"  >

<?php if (! $this->_tpl_vars['fields']['name']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['name']['value']); ?>
<?php endif; ?> 
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
"><?php echo $this->_tpl_vars['fields']['name']['value']; ?>
</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_QUOTE_NUMBER','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="int" field="number"  >

<?php if (! $this->_tpl_vars['fields']['number']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['number']['name']; ?>
">
<?php $this->assign('value', $this->_tpl_vars['fields']['number']['value']); ?>
<?php echo $this->_tpl_vars['value']; ?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_ACCOUNT','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="billing_account"  >

<?php if (! $this->_tpl_vars['fields']['billing_account']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (! empty ( $this->_tpl_vars['fields']['billing_account_id']['value'] )): ?>
<?php ob_start(); ?>index.php?module=Accounts&action=DetailView&record=<?php echo $this->_tpl_vars['fields']['billing_account_id']['value']; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('detail_url', ob_get_contents());ob_end_clean(); ?>
<a href="<?php echo smarty_function_sugar_ajax_url(array('url' => $this->_tpl_vars['detail_url']), $this);?>
"><?php endif; ?>
<span id="billing_account_id" class="sugar_field" data-id-value="<?php echo $this->_tpl_vars['fields']['billing_account_id']['value']; ?>
"><?php echo $this->_tpl_vars['fields']['billing_account']['value']; ?>
</span>
<?php if (! empty ( $this->_tpl_vars['fields']['billing_account_id']['value'] )): ?></a><?php endif; ?>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_EXPIRATION','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="expiration"  >

<?php if (! $this->_tpl_vars['fields']['expiration']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>



<?php if (strlen ( $this->_tpl_vars['fields']['expiration']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['expiration']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['expiration']['value']); ?>
<?php endif; ?>
<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['expiration']['name']; ?>
"><?php echo $this->_tpl_vars['value']; ?>
</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="assigned_user_name"  >

<?php if (! $this->_tpl_vars['fields']['assigned_user_name']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span id="assigned_user_id" class="sugar_field" data-id-value="<?php echo $this->_tpl_vars['fields']['assigned_user_id']['value']; ?>
"><?php echo $this->_tpl_vars['fields']['assigned_user_name']['value']; ?>
</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">
</div>

<div class="clear"></div>
</div>
                            </div>
</div>
</div>
<?php endif; ?>





<?php if ($this->_tpl_vars['config']['enable_action_menu'] && $this->_tpl_vars['config']['enable_action_menu'] != false): ?>

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel-0" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LINE_ITEMS','module' => 'AOS_Quotes'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel-0"  data-id="LBL_LINE_ITEMS">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_LINE_ITEMS','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="function" field="line_items" colspan='3' >

<?php if (! $this->_tpl_vars['fields']['line_items']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>

<span id='line_items_span'>
<?php echo $this->_tpl_vars['fields']['line_items']['value']; ?>

</span>
<?php endif; ?>

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_TOTAL_AMT','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="currency" field="total_amt" colspan='3' >

<?php if (! $this->_tpl_vars['fields']['total_amt']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['total_amt']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['total_amt']['value']), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DISCOUNT_AMOUNT','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="currency" field="discount_amount" colspan='3' >

<?php if (! $this->_tpl_vars['fields']['discount_amount']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['discount_amount']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['discount_amount']['value']), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_GRAND_TOTAL','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="currency" field="total_amount" colspan='3' >

<?php if (! $this->_tpl_vars['fields']['total_amount']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['total_amount']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['total_amount']['value']), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">
</div>

<div class="clear"></div>
</div>
                                </div>
</div>
</div>
<?php else: ?>

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel-0" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LINE_ITEMS','module' => 'AOS_Quotes'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel-0" data-id="LBL_LINE_ITEMS">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_LINE_ITEMS','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field " type="function" field="line_items" colspan='3' >

<?php if (! $this->_tpl_vars['fields']['line_items']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>

<span id='line_items_span'>
<?php echo $this->_tpl_vars['fields']['line_items']['value']; ?>

</span>
<?php endif; ?>

</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_TOTAL_AMT','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="currency" field="total_amt" colspan='3' >

<?php if (! $this->_tpl_vars['fields']['total_amt']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['total_amt']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['total_amt']['value']), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DISCOUNT_AMOUNT','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="currency" field="discount_amount" colspan='3' >

<?php if (! $this->_tpl_vars['fields']['discount_amount']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['discount_amount']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['discount_amount']['value']), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_GRAND_TOTAL','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="currency" field="total_amount" colspan='3' >

<?php if (! $this->_tpl_vars['fields']['total_amount']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['total_amount']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['total_amount']['value']), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">
</div>

<div class="clear"></div>
</div>
                            </div>
</div>
</div>
<?php endif; ?>





<?php if ($this->_tpl_vars['config']['enable_action_menu'] && $this->_tpl_vars['config']['enable_action_menu'] != false): ?>

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel-1" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EDITVIEW_PANEL1','module' => 'AOS_Quotes'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel-1"  data-id="LBL_EDITVIEW_PANEL1">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_VALOR_SEPARACION','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="valor_separacion_c"  >

<?php if (! $this->_tpl_vars['fields']['valor_separacion_c']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['valor_separacion_c']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['valor_separacion_c']['value']), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_MONTO_A_FIRMA_DE_CONTRATO','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="monto_a_firma_de_contrato_c"  >

<?php if (! $this->_tpl_vars['fields']['monto_a_firma_de_contrato_c']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['monto_a_firma_de_contrato_c']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['monto_a_firma_de_contrato_c']['value']), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CUOTA_INICIAL','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="cuota_inicial_c"  >

<?php if (! $this->_tpl_vars['fields']['cuota_inicial_c']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['cuota_inicial_c']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['cuota_inicial_c']['value']), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_SALDO_ABONO_INICIAL','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="saldo_abono_inicial_c"  >

<?php if (! $this->_tpl_vars['fields']['saldo_abono_inicial_c']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['saldo_abono_inicial_c']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['saldo_abono_inicial_c']['value']), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>
                                </div>
</div>
</div>
<?php else: ?>

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel-1" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EDITVIEW_PANEL1','module' => 'AOS_Quotes'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel-1" data-id="LBL_EDITVIEW_PANEL1">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_VALOR_SEPARACION','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="valor_separacion_c"  >

<?php if (! $this->_tpl_vars['fields']['valor_separacion_c']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['valor_separacion_c']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['valor_separacion_c']['value']), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_MONTO_A_FIRMA_DE_CONTRATO','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="monto_a_firma_de_contrato_c"  >

<?php if (! $this->_tpl_vars['fields']['monto_a_firma_de_contrato_c']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['monto_a_firma_de_contrato_c']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['monto_a_firma_de_contrato_c']['value']), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CUOTA_INICIAL','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="cuota_inicial_c"  >

<?php if (! $this->_tpl_vars['fields']['cuota_inicial_c']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['cuota_inicial_c']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['cuota_inicial_c']['value']), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_SALDO_ABONO_INICIAL','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="saldo_abono_inicial_c"  >

<?php if (! $this->_tpl_vars['fields']['saldo_abono_inicial_c']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['saldo_abono_inicial_c']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['saldo_abono_inicial_c']['value']), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>
                            </div>
</div>
</div>
<?php endif; ?>





<?php if ($this->_tpl_vars['config']['enable_action_menu'] && $this->_tpl_vars['config']['enable_action_menu'] != false): ?>

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel-2" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EDITVIEW_PANEL2','module' => 'AOS_Quotes'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel-2"  data-id="LBL_EDITVIEW_PANEL2">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CANTIDAD','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="int" field="cantidad_c"  >

<?php if (! $this->_tpl_vars['fields']['cantidad_c']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['cantidad_c']['name']; ?>
">
<?php echo smarty_function_sugar_number_format(array('precision' => 0,'var' => $this->_tpl_vars['fields']['cantidad_c']['value']), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_VALOR','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="valor_c"  >

<?php if (! $this->_tpl_vars['fields']['valor_c']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['valor_c']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['valor_c']['value']), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>
                                </div>
</div>
</div>
<?php else: ?>

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel-2" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EDITVIEW_PANEL2','module' => 'AOS_Quotes'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel-2" data-id="LBL_EDITVIEW_PANEL2">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CANTIDAD','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="int" field="cantidad_c"  >

<?php if (! $this->_tpl_vars['fields']['cantidad_c']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['cantidad_c']['name']; ?>
">
<?php echo smarty_function_sugar_number_format(array('precision' => 0,'var' => $this->_tpl_vars['fields']['cantidad_c']['value']), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_VALOR','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="valor_c"  >

<?php if (! $this->_tpl_vars['fields']['valor_c']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['valor_c']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['valor_c']['value']), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>
                            </div>
</div>
</div>
<?php endif; ?>





<?php if ($this->_tpl_vars['config']['enable_action_menu'] && $this->_tpl_vars['config']['enable_action_menu'] != false): ?>

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel-3" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EDITVIEW_PANEL3','module' => 'AOS_Quotes'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel-3"  data-id="LBL_EDITVIEW_PANEL3">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREDITO','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="credito_c"  >

<?php if (! $this->_tpl_vars['fields']['credito_c']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['credito_c']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['credito_c']['value']), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CUOTAS_MENSUALES','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="int" field="cuotas_mensuales_c"  >

<?php if (! $this->_tpl_vars['fields']['cuotas_mensuales_c']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['cuotas_mensuales_c']['name']; ?>
">
<?php echo smarty_function_sugar_number_format(array('precision' => 0,'var' => $this->_tpl_vars['fields']['cuotas_mensuales_c']['value']), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PORCENTAJE','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="decimal" field="porcentaje_c"  >

<?php if (! $this->_tpl_vars['fields']['porcentaje_c']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['porcentaje_c']['name']; ?>
">
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['porcentaje_c']['value'],'precision' => 8), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_VALOR_DE_CUOTA','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="valor_de_cuota_c"  >

<?php if (! $this->_tpl_vars['fields']['valor_de_cuota_c']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['valor_de_cuota_c']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['valor_de_cuota_c']['value']), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>
                                </div>
</div>
</div>
<?php else: ?>

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel-3" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EDITVIEW_PANEL3','module' => 'AOS_Quotes'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel-3" data-id="LBL_EDITVIEW_PANEL3">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREDITO','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="credito_c"  >

<?php if (! $this->_tpl_vars['fields']['credito_c']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['credito_c']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['credito_c']['value']), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CUOTAS_MENSUALES','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="int" field="cuotas_mensuales_c"  >

<?php if (! $this->_tpl_vars['fields']['cuotas_mensuales_c']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['cuotas_mensuales_c']['name']; ?>
">
<?php echo smarty_function_sugar_number_format(array('precision' => 0,'var' => $this->_tpl_vars['fields']['cuotas_mensuales_c']['value']), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PORCENTAJE','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="decimal" field="porcentaje_c"  >

<?php if (! $this->_tpl_vars['fields']['porcentaje_c']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['porcentaje_c']['name']; ?>
">
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['porcentaje_c']['value'],'precision' => 8), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_VALOR_DE_CUOTA','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="valor_de_cuota_c"  >

<?php if (! $this->_tpl_vars['fields']['valor_de_cuota_c']['hidden']): ?>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span id='<?php echo $this->_tpl_vars['fields']['valor_de_cuota_c']['name']; ?>
'>
<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['fields']['valor_de_cuota_c']['value']), $this);?>

</span>
<?php endif; ?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>
                            </div>
</div>
</div>
<?php endif; ?>
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
</script>            <script type="text/javascript" src="include/InlineEditing/inlineEditing.js"></script>
<script type="text/javascript" src="modules/Favorites/favorites.js"></script>
<?php echo '
<script type="text/javascript">

                    var selectTabDetailView = function(tab) {
                        $(\'#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER\').hide();
                        $(\'#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER\').eq(tab).show().addClass(\'active\').addClass(\'in\');
                    };

                    var selectTabOnError = function(tab) {
                        selectTabDetailView(tab);
                        $(\'#content ul.nav.nav-tabs > li\').removeClass(\'active\');
                        $(\'#content ul.nav.nav-tabs > li a\').css(\'color\', \'\');

                        $(\'#content ul.nav.nav-tabs > li\').eq(tab).find(\'a\').first().css(\'color\', \'red\');
                        $(\'#content ul.nav.nav-tabs > li\').eq(tab).addClass(\'active\');

                    };

                    var selectTabOnErrorInputHandle = function(inputHandle) {
                        var tab = $(inputHandle).closest(\'.tab-pane-NOBOOTSTRAPTOGGLER\').attr(\'id\').match(/^detailpanel_(.*)$/)[1];
                        selectTabOnError(tab);
                    };


                    $(function(){
                        $(\'#content ul.nav.nav-tabs > li > a[data-toggle="tab"]\').click(function(e){
                            if(typeof $(this).parent().find(\'a\').first().attr(\'id\') != \'undefined\') {
                                var tab = parseInt($(this).parent().find(\'a\').first().attr(\'id\').match(/^tab(.)*$/)[1]);
                                selectTabDetailView(tab);
                            }
                        });
                    });

                </script>
'; ?>