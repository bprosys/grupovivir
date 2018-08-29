<?php /* Smarty version 2.6.29, created on 2018-08-25 09:32:12
         compiled from cache/themes/SuiteP/modules/trami_Tramites/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'cache/themes/SuiteP/modules/trami_Tramites/EditView.tpl', 47, false),array('modifier', 'strip_semicolon', 'cache/themes/SuiteP/modules/trami_Tramites/EditView.tpl', 101, false),array('modifier', 'lookup', 'cache/themes/SuiteP/modules/trami_Tramites/EditView.tpl', 296, false),array('modifier', 'count', 'cache/themes/SuiteP/modules/trami_Tramites/EditView.tpl', 398, false),array('modifier', 'default', 'cache/themes/SuiteP/modules/trami_Tramites/EditView.tpl', 931, false),array('function', 'sugar_include', 'cache/themes/SuiteP/modules/trami_Tramites/EditView.tpl', 63, false),array('function', 'sugar_translate', 'cache/themes/SuiteP/modules/trami_Tramites/EditView.tpl', 84, false),array('function', 'counter', 'cache/themes/SuiteP/modules/trami_Tramites/EditView.tpl', 106, false),array('function', 'sugar_getjspath', 'cache/themes/SuiteP/modules/trami_Tramites/EditView.tpl', 264, false),array('function', 'html_options', 'cache/themes/SuiteP/modules/trami_Tramites/EditView.tpl', 271, false),array('function', 'sugar_getimagepath', 'cache/themes/SuiteP/modules/trami_Tramites/EditView.tpl', 299, false),array('function', 'sugar_number_format', 'cache/themes/SuiteP/modules/trami_Tramites/EditView.tpl', 545, false),array('function', 'sugar_getscript', 'cache/themes/SuiteP/modules/trami_Tramites/EditView.tpl', 2161, false),)), $this); ?>


<script>
    <?php echo '
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });

        if($(\'.edit-view-pagination\').children().length == 0) $(\'.saveAndContinue\').remove();
    });
    '; ?>

</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="<?php echo $this->_tpl_vars['form_name']; ?>
" id="<?php echo $this->_tpl_vars['form_id']; ?>
" <?php echo $this->_tpl_vars['enctype']; ?>
>
<div class="edit-view-pagination-mobile-container">
<div class="edit-view-pagination edit-view-mobile-pagination">
<?php echo $this->_tpl_vars['PAGINATION']; ?>

</div>
</div>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
">
<?php if (isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true'): ?>
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php else: ?>
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php endif; ?>
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="<?php echo $_REQUEST['return_module']; ?>
">
<input type="hidden" name="return_action" value="<?php echo $_REQUEST['return_action']; ?>
">
<input type="hidden" name="return_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
<?php if (( ! empty ( $_REQUEST['return_module'] ) || ! empty ( $_REQUEST['relate_to'] ) ) && ! ( isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true' )): ?>
<input type="hidden" name="relate_to" value="<?php if ($_REQUEST['return_relationship']): ?><?php echo $_REQUEST['return_relationship']; ?>
<?php elseif ($_REQUEST['relate_to'] && empty ( $_REQUEST['from_dcmenu'] )): ?><?php echo $_REQUEST['relate_to']; ?>
<?php elseif (empty ( $this->_tpl_vars['isDCForm'] ) && empty ( $_REQUEST['from_dcmenu'] )): ?><?php echo $_REQUEST['return_module']; ?>
<?php endif; ?>">
<input type="hidden" name="relate_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<?php endif; ?>
<input type="hidden" name="offset" value="<?php echo $this->_tpl_vars['offset']; ?>
">
<?php $this->assign('place', '_HEADER'); ?> <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
<?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button primary" onclick="var _form = document.getElementById('EditView'); <?php if ($this->_tpl_vars['isDuplicate']): ?>_form.return_id.value=''; <?php endif; ?>_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" id="SAVE"><?php endif; ?> 
<?php if (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $_REQUEST['return_id'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo ((is_array($_tmp=$_REQUEST['return_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
'); return false;" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" type="button" id="CANCEL"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $this->_tpl_vars['fields']['id']['value'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && empty ( $this->_tpl_vars['fields']['id']['value'] ) ) && empty ( $_REQUEST['return_id'] )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ! empty ( $_REQUEST['return_module'] )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=<?php echo $_REQUEST['return_action']; ?>
&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php elseif (empty ( $_REQUEST['return_action'] ) || empty ( $_REQUEST['return_id'] ) && ! empty ( $this->_tpl_vars['fields']['id']['value'] )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=trami_Tramites'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php else: ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo ((is_array($_tmp=$_REQUEST['return_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php endif; ?>
<?php if ($this->_tpl_vars['showVCRControl']): ?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $this->_tpl_vars['app_strings']['LBL_SAVE_AND_CONTINUE']; ?>
" onClick="SUGAR.saveAndContinue(this);">
<?php echo $this->_tpl_vars['APP']['LBL_SAVE_AND_CONTINUE']; ?>

</button>
<?php endif; ?>
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')): ?><?php if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=trami_Tramites", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif; ?><?php endif; ?>
</div>
</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
<?php echo $this->_tpl_vars['PAGINATION']; ?>

</div>
</td>
</tr>
</table>
<?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<div id="EditView_tabs">

<ul class="nav nav-tabs">
</ul>
<div class="clearfix"></div>
<div class="tab-content" style="padding: 0; border: 0;">

<div class="tab-pane panel-collapse">&nbsp;</div>
</div>

<div class="panel-content">
<div>&nbsp;</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EDITVIEW_PANEL1','module' => 'trami_Tramites'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="LBL_EDITVIEW_PANEL1">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ACCOUNTS_TRAMI_TRAMITES_1_FROM_ACCOUNTS_TITLE">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNTS_TRAMI_TRAMITES_1_FROM_ACCOUNTS_TITLE','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="accounts_trami_tramites_1_name"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['accounts_trami_tramites_1_name']['name']; ?>
" class="sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['accounts_trami_tramites_1_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['accounts_trami_tramites_1_name']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['accounts_trami_tramites_1_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['accounts_trami_tramites_1_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['accounts_trami_tramites_1accounts_ida']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['accounts_trami_tramites_1_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['accounts_trami_tramites_1_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['accounts_trami_tramites_1_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"accounts_trami_tramites_1accounts_ida","name":"accounts_trami_tramites_1_name"}}'; ?>
, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['accounts_trami_tramites_1_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['accounts_trami_tramites_1_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['accounts_trami_tramites_1_name']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['accounts_trami_tramites_1_name']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL'), $this);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['accounts_trami_tramites_1_name']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_AOS_PRODUCT_CATEGORIES_TRAMI_TRAMITES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_AOS_PRODUCT_CATEGORIES_TRAMI_TRAMITES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="aos_product_categories_trami_tramites_1_name"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['aos_product_categories_trami_tramites_1_name']['name']; ?>
" class="sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['aos_product_categories_trami_tramites_1_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['aos_product_categories_trami_tramites_1_name']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['aos_product_categories_trami_tramites_1_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['aos_product_categories_trami_tramites_1_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['aos_produc5787egories_ida']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['aos_product_categories_trami_tramites_1_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['aos_product_categories_trami_tramites_1_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['aos_product_categories_trami_tramites_1_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"aos_produc5787egories_ida","name":"aos_product_categories_trami_tramites_1_name"}}'; ?>
, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['aos_product_categories_trami_tramites_1_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['aos_product_categories_trami_tramites_1_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['aos_product_categories_trami_tramites_1_name']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['aos_product_categories_trami_tramites_1_name']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_LABEL'), $this);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['aos_product_categories_trami_tramites_1_name']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_AOS_PRODUCTS_TRAMI_TRAMITES_1_FROM_AOS_PRODUCTS_TITLE">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_AOS_PRODUCTS_TRAMI_TRAMITES_1_FROM_AOS_PRODUCTS_TITLE','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="aos_products_trami_tramites_1_name" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['aos_products_trami_tramites_1_name']['name']; ?>
" class="sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['aos_products_trami_tramites_1_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['aos_products_trami_tramites_1_name']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['aos_products_trami_tramites_1_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['aos_products_trami_tramites_1_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['aos_products_trami_tramites_1aos_products_ida']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['aos_products_trami_tramites_1_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['aos_products_trami_tramites_1_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['aos_products_trami_tramites_1_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"aos_products_trami_tramites_1aos_products_ida","name":"aos_products_trami_tramites_1_name"}}'; ?>
, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['aos_products_trami_tramites_1_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['aos_products_trami_tramites_1_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['aos_products_trami_tramites_1_name']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['aos_products_trami_tramites_1_name']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_LABEL'), $this);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['aos_products_trami_tramites_1_name']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>                    </div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EDITVIEW_PANEL2','module' => 'trami_Tramites'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_0" data-id="LBL_EDITVIEW_PANEL2">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_BANCO">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_BANCO','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="dynamicenum" field="banco_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Dynamicenum/SugarFieldDynamicenum.js"), $this);?>
'></script>
<?php if (! isset ( $this->_tpl_vars['config']['enable_autocomplete'] ) || $this->_tpl_vars['config']['enable_autocomplete'] == false): ?>
<select name="<?php echo $this->_tpl_vars['fields']['banco_c']['name']; ?>
"
id="<?php echo $this->_tpl_vars['fields']['banco_c']['name']; ?>
"
title=''           
>
<?php if (isset ( $this->_tpl_vars['fields']['banco_c']['value'] ) && $this->_tpl_vars['fields']['banco_c']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['banco_c']['options'],'selected' => $this->_tpl_vars['fields']['banco_c']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['banco_c']['options'],'selected' => $this->_tpl_vars['fields']['banco_c']['default']), $this);?>

<?php endif; ?>
</select>
<?php else: ?>
<?php $this->assign('field_options', $this->_tpl_vars['fields']['banco_c']['options']); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['banco_c']['value']; ?>
<?php $this->_smarty_vars['capture']['field_val'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('field_val', $this->_smarty_vars['capture']['field_val']); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['banco_c']['name']; ?>
<?php $this->_smarty_vars['capture']['ac_key'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('ac_key', $this->_smarty_vars['capture']['ac_key']); ?>
<select style='display:none' name="<?php echo $this->_tpl_vars['fields']['banco_c']['name']; ?>
"
id="<?php echo $this->_tpl_vars['fields']['banco_c']['name']; ?>
"
title=''          
>
<?php if (isset ( $this->_tpl_vars['fields']['banco_c']['value'] ) && $this->_tpl_vars['fields']['banco_c']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['banco_c']['options'],'selected' => $this->_tpl_vars['fields']['banco_c']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['banco_c']['options'],'selected' => $this->_tpl_vars['fields']['banco_c']['default']), $this);?>

<?php endif; ?>
</select>
<input
id="<?php echo $this->_tpl_vars['fields']['banco_c']['name']; ?>
-input"
name="<?php echo $this->_tpl_vars['fields']['banco_c']['name']; ?>
-input"
size="30"
value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_val'])) ? $this->_run_mod_handler('lookup', true, $_tmp, $this->_tpl_vars['field_options']) : smarty_modifier_lookup($_tmp, $this->_tpl_vars['field_options'])); ?>
"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-down.png"), $this);?>
" id="<?php echo $this->_tpl_vars['fields']['banco_c']['name']; ?>
-image"></button><button type="button"
id="btn-clear-<?php echo $this->_tpl_vars['fields']['banco_c']['name']; ?>
-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['banco_c']['name']; ?>
-input', '<?php echo $this->_tpl_vars['fields']['banco_c']['name']; ?>
');sync_<?php echo $this->_tpl_vars['fields']['banco_c']['name']; ?>
()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<?php echo '
<script>
SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo ' = [];
'; ?>


<?php echo '
(function (){
    var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['banco_c']['name']; ?>
<?php echo '");

    if (typeof select_defaults =="undefined")
        select_defaults = [];

    select_defaults[selectElem.id] = {key:selectElem.value,text:\'\'};

    //get default
    for (i=0;i<selectElem.options.length;i++){
        if (selectElem.options[i].value==selectElem.value)
            select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
    }

    //SUGAR.AutoComplete.{$ac_key}.ds =
    //get options array from vardefs
    var options = SUGAR.AutoComplete.getOptionsArray("");

    YUI().use(\'datasource\', \'datasource-jsonschema\',function (Y) {
        SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.ds = new Y.DataSource.Function({
            source: function (request) {
                var ret = [];
                for (i=0;i<selectElem.options.length;i++)
                    if (!(selectElem.options[i].value==\'\' && selectElem.options[i].innerHTML==\'\'))
                        ret.push({\'key\':selectElem.options[i].value,\'text\':selectElem.options[i].innerHTML});
                return ret;
            }
        });
    });
})();
'; ?>


<?php echo '
YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
    '; ?>


    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputNode = Y.one('#<?php echo $this->_tpl_vars['fields']['banco_c']['name']; ?>
-input');
    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputImage = Y.one('#<?php echo $this->_tpl_vars['fields']['banco_c']['name']; ?>
-image');
    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputHidden = Y.one('#<?php echo $this->_tpl_vars['fields']['banco_c']['name']; ?>
');

        <?php echo '
    function SyncToHidden(selectme){
        var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['banco_c']['name']; ?>
<?php echo '");
        var doSimulateChange = false;

        if (selectElem.value!=selectme)
            doSimulateChange=true;

        selectElem.value=selectme;

        for (i=0;i<selectElem.options.length;i++){
            selectElem.options[i].selected=false;
            if (selectElem.options[i].value==selectme)
                selectElem.options[i].selected=true;
        }

        if (doSimulateChange)
            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'change\');
    }

    //global variable
    sync_'; ?>
<?php echo $this->_tpl_vars['fields']['banco_c']['name']; ?>
<?php echo ' = function(){
        SyncToHidden();
    }
    function syncFromHiddenToWidget(){

        var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['banco_c']['name']; ?>
<?php echo '");

        //if select no longer on page, kill timer
        if (selectElem==null || selectElem.options == null)
            return;

        var currentvalue = SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.get(\'value\');

        SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.simulate(\'keyup\');

        for (i=0;i<selectElem.options.length;i++){

            if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById(\''; ?>
<?php echo $this->_tpl_vars['fields']['banco_c']['name']; ?>
-input<?php echo '\'))
                SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.set(\'value\',selectElem.options[i].innerHTML);
        }
    }

    YAHOO.util.Event.onAvailable("'; ?>
<?php echo $this->_tpl_vars['fields']['banco_c']['name']; ?>
<?php echo '", syncFromHiddenToWidget);
    '; ?>


    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 0;
    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 0;
    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions = <?php echo count($this->_tpl_vars['field_options']); ?>
;
    if(SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 300) <?php echo '{
        '; ?>

        SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
        SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 200;
        <?php echo '
    }
    '; ?>

    if(SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 3000) <?php echo '{
        '; ?>

        SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
        SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 500;
        <?php echo '
    }
    '; ?>

    
    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.optionsVisible = false;

    <?php echo '
    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.plug(Y.Plugin.AutoComplete, {
        activateFirstItem: true,
        '; ?>

        minQueryLength: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen,
        queryDelay: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay,
        zIndex: 99999,

        
        <?php echo '
        source: SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.ds,

        resultTextLocator: \'text\',
        resultHighlighter: \'phraseMatch\',
        resultFilters: \'phraseMatch\',
    });

    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.expandHover = function(ex){
        var hover = YAHOO.util.Dom.getElementsByClassName(\'dccontent\');
        if(hover[0] != null){
            if (ex) {
                var h = \'1000px\';
                hover[0].style.height = h;
            }
            else{
                hover[0].style.height = \'\';
            }
        }
    }

    if('; ?>
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen<?php echo ' == 0){
        // expand the dropdown options upon focus
        SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'focus\', function () {
            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.sendRequest(\'\');
            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.optionsVisible = true;
        });
    }

            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'click\', function(e) {
            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'click\');
        });

        SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'dblclick\', function(e) {
            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'dblclick\');
        });

        SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'focus\', function(e) {
            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'focus\');
        });

        SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'mouseup\', function(e) {
            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'mouseup\');
        });

        SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'mousedown\', function(e) {
            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'mousedown\');
        });

        SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'blur\', function(e) {
            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'blur\');
            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.optionsVisible = false;
            var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['banco_c']['name']; ?>
<?php echo '");
            //if typed value is a valid option, do nothing
            for (i=0;i<selectElem.options.length;i++)
                if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.get(\'value\'))
                    return;

            //typed value is invalid, so set the text and the hidden to blank
            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.set(\'value\', select_defaults[selectElem.id].text);
            SyncToHidden(select_defaults[selectElem.id].key);
        });
        
            // when they click on the arrow image, toggle the visibility of the options
            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputImage.ancestor().on(\'click\', function () {
                if (SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.optionsVisible) {
                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.blur();
                } else {
                    SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.focus();
                }
            });

            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.on(\'query\', function () {
                SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.set(\'value\', \'\');
            });

            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.on(\'visibleChange\', function (e) {
                SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.expandHover(e.newVal); // expand
            });

            // when they select an option, set the hidden input with the KEY, to be saved
            SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.on(\'select\', function(e) {
                SyncToHidden(e.result.raw.key);
            });

        });
</script>
'; ?>

<?php endif; ?>
<script type="text/javascript">
    if(typeof de_entries == 'undefined')<?php echo '{var de_entries = new Array;}'; ?>

    var el = document.getElementById("");
    addLoadEvent(function()<?php echo '{loadDynamicEnum('; ?>
"","<?php echo $this->_tpl_vars['fields']['banco_c']['name']; ?>
"<?php echo ')}'; ?>
);
    if (SUGAR.ajaxUI && SUGAR.ajaxUI.hist_loaded) <?php echo '{loadDynamicEnum('; ?>
"","<?php echo $this->_tpl_vars['fields']['banco_c']['name']; ?>
"<?php echo ')}'; ?>

</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_MONTO_FINANCIADO">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_MONTO_FINANCIADO','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="monto_financiado_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['monto_financiado_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['monto_financiado_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['monto_financiado_c']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['monto_financiado_c']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['monto_financiado_c']['name']; ?>
' size='30' maxlength='26' value='<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='0'
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_TIPOPAGO">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_TIPOPAGO','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="tipopago_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (! isset ( $this->_tpl_vars['config']['enable_autocomplete'] ) || $this->_tpl_vars['config']['enable_autocomplete'] == false): ?>
<select name="<?php echo $this->_tpl_vars['fields']['tipopago_c']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['tipopago_c']['name']; ?>
" 
title=''       
>
<?php if (isset ( $this->_tpl_vars['fields']['tipopago_c']['value'] ) && $this->_tpl_vars['fields']['tipopago_c']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['tipopago_c']['options'],'selected' => $this->_tpl_vars['fields']['tipopago_c']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['tipopago_c']['options'],'selected' => $this->_tpl_vars['fields']['tipopago_c']['default']), $this);?>

<?php endif; ?>
</select>
<?php else: ?>
<?php $this->assign('field_options', $this->_tpl_vars['fields']['tipopago_c']['options']); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['tipopago_c']['value']; ?>
<?php $this->_smarty_vars['capture']['field_val'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('field_val', $this->_smarty_vars['capture']['field_val']); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['tipopago_c']['name']; ?>
<?php $this->_smarty_vars['capture']['ac_key'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('ac_key', $this->_smarty_vars['capture']['ac_key']); ?>
<select style='display:none' name="<?php echo $this->_tpl_vars['fields']['tipopago_c']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['tipopago_c']['name']; ?>
" 
title=''          
>
<?php if (isset ( $this->_tpl_vars['fields']['tipopago_c']['value'] ) && $this->_tpl_vars['fields']['tipopago_c']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['tipopago_c']['options'],'selected' => $this->_tpl_vars['fields']['tipopago_c']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['tipopago_c']['options'],'selected' => $this->_tpl_vars['fields']['tipopago_c']['default']), $this);?>

<?php endif; ?>
</select>
<input
id="<?php echo $this->_tpl_vars['fields']['tipopago_c']['name']; ?>
-input"
name="<?php echo $this->_tpl_vars['fields']['tipopago_c']['name']; ?>
-input"
size="30"
value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_val'])) ? $this->_run_mod_handler('lookup', true, $_tmp, $this->_tpl_vars['field_options']) : smarty_modifier_lookup($_tmp, $this->_tpl_vars['field_options'])); ?>
"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-down.png"), $this);?>
" id="<?php echo $this->_tpl_vars['fields']['tipopago_c']['name']; ?>
-image"></button><button type="button"
id="btn-clear-<?php echo $this->_tpl_vars['fields']['tipopago_c']['name']; ?>
-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['tipopago_c']['name']; ?>
-input', '<?php echo $this->_tpl_vars['fields']['tipopago_c']['name']; ?>
');sync_<?php echo $this->_tpl_vars['fields']['tipopago_c']['name']; ?>
()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<?php echo '
<script>
	SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo ' = [];
	'; ?>


			<?php echo '
		(function (){
			var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['tipopago_c']['name']; ?>
<?php echo '");
			
			if (typeof select_defaults =="undefined")
				select_defaults = [];
			
			select_defaults[selectElem.id] = {key:selectElem.value,text:\'\'};

			//get default
			for (i=0;i<selectElem.options.length;i++){
				if (selectElem.options[i].value==selectElem.value)
					select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
			}

			//SUGAR.AutoComplete.{$ac_key}.ds = 
			//get options array from vardefs
			var options = SUGAR.AutoComplete.getOptionsArray("");

			YUI().use(\'datasource\', \'datasource-jsonschema\',function (Y) {
				SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.ds = new Y.DataSource.Function({
				    source: function (request) {
				    	var ret = [];
				    	for (i=0;i<selectElem.options.length;i++)
				    		if (!(selectElem.options[i].value==\'\' && selectElem.options[i].innerHTML==\'\'))
				    			ret.push({\'key\':selectElem.options[i].value,\'text\':selectElem.options[i].innerHTML});
				    	return ret;
				    }
				});
			});
		})();
		'; ?>

	
	<?php echo '
		YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
	'; ?>

			
	SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputNode = Y.one('#<?php echo $this->_tpl_vars['fields']['tipopago_c']['name']; ?>
-input');
	SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputImage = Y.one('#<?php echo $this->_tpl_vars['fields']['tipopago_c']['name']; ?>
-image');
	SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputHidden = Y.one('#<?php echo $this->_tpl_vars['fields']['tipopago_c']['name']; ?>
');
	
			<?php echo '
			function SyncToHidden(selectme){
				var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['tipopago_c']['name']; ?>
<?php echo '");
				var doSimulateChange = false;
				
				if (selectElem.value!=selectme)
					doSimulateChange=true;
				
				selectElem.value=selectme;

				for (i=0;i<selectElem.options.length;i++){
					selectElem.options[i].selected=false;
					if (selectElem.options[i].value==selectme)
						selectElem.options[i].selected=true;
				}

				if (doSimulateChange)
					SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'change\');
			}

			//global variable 
			sync_'; ?>
<?php echo $this->_tpl_vars['fields']['tipopago_c']['name']; ?>
<?php echo ' = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['tipopago_c']['name']; ?>
<?php echo '");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.get(\'value\');

				SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.simulate(\'keyup\');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById(\''; ?>
<?php echo $this->_tpl_vars['fields']['tipopago_c']['name']; ?>
-input<?php echo '\'))
						SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.set(\'value\',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("'; ?>
<?php echo $this->_tpl_vars['fields']['tipopago_c']['name']; ?>
<?php echo '", syncFromHiddenToWidget);
		'; ?>


		SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 0;
		SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 0;
		SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions = <?php echo count($this->_tpl_vars['field_options']); ?>
;
		if(SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 300) <?php echo '{
			'; ?>

			SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
			SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 200;
			<?php echo '
		}
		'; ?>

		if(SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 3000) <?php echo '{
			'; ?>

			SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
			SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 500;
			<?php echo '
		}
		'; ?>

		
	SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.optionsVisible = false;
	
	<?php echo '
	SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.plug(Y.Plugin.AutoComplete, {
		activateFirstItem: true,
		'; ?>

		minQueryLength: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen,
		queryDelay: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay,
		zIndex: 99999,

				
		<?php echo '
		source: SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.ds,
		
		resultTextLocator: \'text\',
		resultHighlighter: \'phraseMatch\',
		resultFilters: \'phraseMatch\',
	});

	SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.expandHover = function(ex){
		var hover = YAHOO.util.Dom.getElementsByClassName(\'dccontent\');
		if(hover[0] != null){
			if (ex) {
				var h = \'1000px\';
				hover[0].style.height = h;
			}
			else{
				hover[0].style.height = \'\';
			}
		}
	}
		
	if('; ?>
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen<?php echo ' == 0){
		// expand the dropdown options upon focus
		SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'focus\', function () {
			SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.sendRequest(\'\');
			SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.optionsVisible = true;
		});
	}

			SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'click\', function(e) {
			SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'click\');
		});
		
		SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'dblclick\', function(e) {
			SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'dblclick\');
		});

		SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'focus\', function(e) {
			SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'focus\');
		});

		SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'mouseup\', function(e) {
			SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'mouseup\');
		});

		SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'mousedown\', function(e) {
			SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'mousedown\');
		});

		SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.on(\'blur\', function(e) {
			SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.simulate(\'blur\');
			SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.optionsVisible = false;
			var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['tipopago_c']['name']; ?>
<?php echo '");
			//if typed value is a valid option, do nothing
			for (i=0;i<selectElem.options.length;i++)
				if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.get(\'value\'))
					return;
			
			//typed value is invalid, so set the text and the hidden to blank
			SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.set(\'value\', select_defaults[selectElem.id].text);
			SyncToHidden(select_defaults[selectElem.id].key);
		});
	
	// when they click on the arrow image, toggle the visibility of the options
	SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputImage.ancestor().on(\'click\', function () {
		if (SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.optionsVisible) {
			SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.blur();
		} else {
			SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.focus();
		}
	});

	SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.on(\'query\', function () {
		SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputHidden.set(\'value\', \'\');
	});

	SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.on(\'visibleChange\', function (e) {
		SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.expandHover(e.newVal); // expand
	});

	// when they select an option, set the hidden input with the KEY, to be saved
	SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.ac.on(\'select\', function(e) {
		SyncToHidden(e.result.raw.key);
	});
 
});
</script> 
'; ?>

<?php endif; ?>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DIAS_TRASCURRIDOS">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DIAS_TRASCURRIDOS','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="dias_trascurridos"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['dias_trascurridos']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['dias_trascurridos']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['dias_trascurridos']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['dias_trascurridos']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['dias_trascurridos']['name']; ?>
' size='30' 
maxlength='3' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>                    </div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label' => 'DEFAULT','module' => 'trami_Tramites'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_1" data-id="DEFAULT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_NUMERODEFINCA">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_NUMERODEFINCA','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="numerodefinca_c" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['numerodefinca_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['numerodefinca_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['numerodefinca_c']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['numerodefinca_c']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['numerodefinca_c']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FECHA_PERMISO_OCUPACION">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_FECHA_PERMISO_OCUPACION','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="fecha_permiso_ocupacion_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['fecha_permiso_ocupacion_c']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['fecha_permiso_ocupacion_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['fecha_permiso_ocupacion_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="<?php echo $this->_tpl_vars['fields']['fecha_permiso_ocupacion_c']['name']; ?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['fecha_permiso_ocupacion_c']['name']; ?>
",
form : "EditView",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['fecha_permiso_ocupacion_c']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
step : 1,
weekNumbers:false
}
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_PERMISO_OCUPACION">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_PERMISO_OCUPACION','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_permiso_ocupacion_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['comentario_permiso_ocupacion_c']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_permiso_ocupacion_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_permiso_ocupacion_c']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['comentario_permiso_ocupacion_c']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['comentario_permiso_ocupacion_c']['name']; ?>
'
rows="4"
cols="20"
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FECHA_PERMISO_CONSTRUCCION">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_FECHA_PERMISO_CONSTRUCCION','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="fecha_permiso_construccion_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['fecha_permiso_construccion_c']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['fecha_permiso_construccion_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['fecha_permiso_construccion_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="<?php echo $this->_tpl_vars['fields']['fecha_permiso_construccion_c']['name']; ?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['fecha_permiso_construccion_c']['name']; ?>
",
form : "EditView",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['fecha_permiso_construccion_c']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
step : 1,
weekNumbers:false
}
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_PERMISO_CONSTRUCC">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_PERMISO_CONSTRUCC','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_permiso_construcc_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['comentario_permiso_construcc_c']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_permiso_construcc_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_permiso_construcc_c']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['comentario_permiso_construcc_c']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['comentario_permiso_construcc_c']['name']; ?>
'
rows="4"
cols="20"
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_CARTA_PROMESA_PAGO">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CARTA_PROMESA_PAGO','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="carta_promesa_pago_c" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['carta_promesa_pago_c']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['carta_promesa_pago_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['carta_promesa_pago_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="<?php echo $this->_tpl_vars['fields']['carta_promesa_pago_c']['name']; ?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['carta_promesa_pago_c']['name']; ?>
",
form : "EditView",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['carta_promesa_pago_c']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
step : 1,
weekNumbers:false
}
);
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ENVIO_PAZ_Y_SALVO_MANT">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ENVIO_PAZ_Y_SALVO_MANT','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="envio_paz_y_salvo_mant_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['envio_paz_y_salvo_mant_c']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['envio_paz_y_salvo_mant_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['envio_paz_y_salvo_mant_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="<?php echo $this->_tpl_vars['fields']['envio_paz_y_salvo_mant_c']['name']; ?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['envio_paz_y_salvo_mant_c']['name']; ?>
",
form : "EditView",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['envio_paz_y_salvo_mant_c']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
step : 1,
weekNumbers:false
}
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_PAZ_SALVO_MANT">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_PAZ_SALVO_MANT','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_paz_salvo_mant_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['comentario_paz_salvo_mant_c']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_paz_salvo_mant_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_paz_salvo_mant_c']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['comentario_paz_salvo_mant_c']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['comentario_paz_salvo_mant_c']['name']; ?>
'
rows="4"
cols="20"
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ENVIO_PAZ_Y_SALVO_IDAAN">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ENVIO_PAZ_Y_SALVO_IDAAN','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="envio_paz_y_salvo_idaan_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['envio_paz_y_salvo_idaan_c']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['envio_paz_y_salvo_idaan_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['envio_paz_y_salvo_idaan_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="<?php echo $this->_tpl_vars['fields']['envio_paz_y_salvo_idaan_c']['name']; ?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['envio_paz_y_salvo_idaan_c']['name']; ?>
",
form : "EditView",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['envio_paz_y_salvo_idaan_c']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
step : 1,
weekNumbers:false
}
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIOS_PAZ_SALVO">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIOS_PAZ_SALVO','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentarios_paz_salvo_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['comentarios_paz_salvo_c']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentarios_paz_salvo_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentarios_paz_salvo_c']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['comentarios_paz_salvo_c']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['comentarios_paz_salvo_c']['name']; ?>
'
rows="4"
cols="20"
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FECHA_RECIBO_CONTRATO">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_FECHA_RECIBO_CONTRATO','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="fecha_recibo_contrato_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['fecha_recibo_contrato_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['fecha_recibo_contrato_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['fecha_recibo_contrato_c']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['fecha_recibo_contrato_c']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['fecha_recibo_contrato_c']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_FECHA_RECIBO_CONT">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_FECHA_RECIBO_CONT','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_fecha_recibo_cont_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['comentario_fecha_recibo_cont_c']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_fecha_recibo_cont_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_fecha_recibo_cont_c']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['comentario_fecha_recibo_cont_c']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['comentario_fecha_recibo_cont_c']['name']; ?>
'
rows="4"
cols="20"
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ENVIO_PAZ_Y_SALVO_INMUEBLE">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ENVIO_PAZ_Y_SALVO_INMUEBLE','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="envio_paz_y_salvo_inmueble_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['envio_paz_y_salvo_inmueble_c']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['envio_paz_y_salvo_inmueble_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['envio_paz_y_salvo_inmueble_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="<?php echo $this->_tpl_vars['fields']['envio_paz_y_salvo_inmueble_c']['name']; ?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['envio_paz_y_salvo_inmueble_c']['name']; ?>
",
form : "EditView",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['envio_paz_y_salvo_inmueble_c']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
step : 1,
weekNumbers:false
}
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_PAZ_SALVO_INM">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_PAZ_SALVO_INM','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_paz_salvo_inm_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['comentario_paz_salvo_inm_c']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_paz_salvo_inm_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_paz_salvo_inm_c']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['comentario_paz_salvo_inm_c']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['comentario_paz_salvo_inm_c']['name']; ?>
'
rows="4"
cols="20"
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_RECIBIDO_PROTOCOLO">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_RECIBIDO_PROTOCOLO','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="recibido_protocolo_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['recibido_protocolo_c']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['recibido_protocolo_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['recibido_protocolo_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="<?php echo $this->_tpl_vars['fields']['recibido_protocolo_c']['name']; ?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['recibido_protocolo_c']['name']; ?>
",
form : "EditView",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['recibido_protocolo_c']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
step : 1,
weekNumbers:false
}
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_RECIBO_PROT">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_RECIBO_PROT','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_recibo_prot_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['comentario_recibo_prot_c']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_recibo_prot_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_recibo_prot_c']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['comentario_recibo_prot_c']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['comentario_recibo_prot_c']['name']; ?>
'
rows="4"
cols="20"
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ENVIO_PROTOCOLO">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ENVIO_PROTOCOLO','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="envio_protocolo_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['envio_protocolo_c']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['envio_protocolo_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['envio_protocolo_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="<?php echo $this->_tpl_vars['fields']['envio_protocolo_c']['name']; ?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['envio_protocolo_c']['name']; ?>
",
form : "EditView",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['envio_protocolo_c']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
step : 1,
weekNumbers:false
}
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_ENVIO_PROTOCOLO">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_ENVIO_PROTOCOLO','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_envio_protocolo_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['comentario_envio_protocolo_c']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_envio_protocolo_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_envio_protocolo_c']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['comentario_envio_protocolo_c']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['comentario_envio_protocolo_c']['name']; ?>
'
rows="4"
cols="20"
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FECHA_DESEMBOLSO">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_FECHA_DESEMBOLSO','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="fecha_desembolso_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['fecha_desembolso_c']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['fecha_desembolso_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['fecha_desembolso_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="<?php echo $this->_tpl_vars['fields']['fecha_desembolso_c']['name']; ?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['fecha_desembolso_c']['name']; ?>
",
form : "EditView",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['fecha_desembolso_c']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
step : 1,
weekNumbers:false
}
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_FECHA_DESEMBOLSO">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_FECHA_DESEMBOLSO','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_fecha_desembolso_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['comentario_fecha_desembolso_c']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_fecha_desembolso_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_fecha_desembolso_c']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['comentario_fecha_desembolso_c']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['comentario_fecha_desembolso_c']['name']; ?>
'
rows="4"
cols="20"
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_VALOR_DESEMBOLSO">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_VALOR_DESEMBOLSO','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="valor_desembolso_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['valor_desembolso_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['valor_desembolso_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['valor_desembolso_c']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['valor_desembolso_c']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['valor_desembolso_c']['name']; ?>
' size='30' maxlength='26' value='<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='0'
>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_VALOR_DESEMBOLSO">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_VALOR_DESEMBOLSO','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="comentario_valor_desembolso_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['comentario_valor_desembolso_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_valor_desembolso_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_valor_desembolso_c']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['comentario_valor_desembolso_c']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['comentario_valor_desembolso_c']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FECHA_REGISTRO">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_FECHA_REGISTRO','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="fecha_registro_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['fecha_registro_c']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['fecha_registro_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['fecha_registro_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="<?php echo $this->_tpl_vars['fields']['fecha_registro_c']['name']; ?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['fecha_registro_c']['name']; ?>
",
form : "EditView",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['fecha_registro_c']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
step : 1,
weekNumbers:false
}
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_FECHA_REGISTRO">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_FECHA_REGISTRO','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_fecha_registro_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['comentario_fecha_registro_c']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_fecha_registro_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_fecha_registro_c']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['comentario_fecha_registro_c']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['comentario_fecha_registro_c']['name']; ?>
'
rows="4"
cols="20"
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PAGO_DEL_DOSPUNTOCINCO">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_PAGO_DEL_DOSPUNTOCINCO','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="pago_del_dospuntocinco_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['pago_del_dospuntocinco_c']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['pago_del_dospuntocinco_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['pago_del_dospuntocinco_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="<?php echo $this->_tpl_vars['fields']['pago_del_dospuntocinco_c']['name']; ?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['pago_del_dospuntocinco_c']['name']; ?>
",
form : "EditView",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['pago_del_dospuntocinco_c']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
step : 1,
weekNumbers:false
}
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_2_5">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_2_5','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_2_5_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['comentario_2_5_c']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_2_5_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_2_5_c']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['comentario_2_5_c']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['comentario_2_5_c']['name']; ?>
'
rows="4"
cols="20"
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ENVIO_TASA_UNICA_BANCO">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_ENVIO_TASA_UNICA_BANCO','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="envio_tasa_unica_banco_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['envio_tasa_unica_banco_c']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['envio_tasa_unica_banco_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['envio_tasa_unica_banco_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="<?php echo $this->_tpl_vars['fields']['envio_tasa_unica_banco_c']['name']; ?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['envio_tasa_unica_banco_c']['name']; ?>
",
form : "EditView",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['envio_tasa_unica_banco_c']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
step : 1,
weekNumbers:false
}
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_TASA_UNICA_BCO">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_TASA_UNICA_BCO','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_tasa_unica_bco_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['comentario_tasa_unica_bco_c']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_tasa_unica_bco_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_tasa_unica_bco_c']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['comentario_tasa_unica_bco_c']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['comentario_tasa_unica_bco_c']['name']; ?>
'
rows="4"
cols="20"
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FECHA_FIRMA_CONTRATO">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_FECHA_FIRMA_CONTRATO','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="fecha_firma_contrato_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['fecha_firma_contrato_c']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['fecha_firma_contrato_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['fecha_firma_contrato_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="<?php echo $this->_tpl_vars['fields']['fecha_firma_contrato_c']['name']; ?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['fecha_firma_contrato_c']['name']; ?>
",
form : "EditView",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['fecha_firma_contrato_c']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
step : 1,
weekNumbers:false
}
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_FIRMA_CONTRATO">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_FIRMA_CONTRATO','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_firma_contrato_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['comentario_firma_contrato_c']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_firma_contrato_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_firma_contrato_c']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['comentario_firma_contrato_c']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['comentario_firma_contrato_c']['name']; ?>
'
rows="4"
cols="20"
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_MINUTA_DE_LIB_RECIBIDA">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_MINUTA_DE_LIB_RECIBIDA','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="minuta_de_lib_recibida_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['minuta_de_lib_recibida_c']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['minuta_de_lib_recibida_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['minuta_de_lib_recibida_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="<?php echo $this->_tpl_vars['fields']['minuta_de_lib_recibida_c']['name']; ?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['minuta_de_lib_recibida_c']['name']; ?>
",
form : "EditView",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['minuta_de_lib_recibida_c']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
step : 1,
weekNumbers:false
}
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_MIN_LIB_REC">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_MIN_LIB_REC','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_min_lib_rec_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['comentario_min_lib_rec_c']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_min_lib_rec_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_min_lib_rec_c']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['comentario_min_lib_rec_c']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['comentario_min_lib_rec_c']['name']; ?>
'
rows="4"
cols="20"
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_MINUTA_DE_VENTAS_RECIBIDA">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_MINUTA_DE_VENTAS_RECIBIDA','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="minuta_de_ventas_recibida_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['minuta_de_ventas_recibida_c']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['minuta_de_ventas_recibida_c']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['minuta_de_ventas_recibida_c']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="<?php echo $this->_tpl_vars['fields']['minuta_de_ventas_recibida_c']['name']; ?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['minuta_de_ventas_recibida_c']['name']; ?>
",
form : "EditView",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['minuta_de_ventas_recibida_c']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
step : 1,
weekNumbers:false
}
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_MIN_VENTAS">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_MIN_VENTAS','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_min_ventas_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['comentario_min_ventas_c']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_min_ventas_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentario_min_ventas_c']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['comentario_min_ventas_c']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['comentario_min_ventas_c']['name']; ?>
'
rows="4"
cols="20"
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIOS">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIOS','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentarios_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['comentarios_c']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentarios_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentarios_c']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['comentarios_c']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['comentarios_c']['name']; ?>
'
rows="4"
cols="20"
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIOS_DEL_BANCO">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIOS_DEL_BANCO','module' => 'trami_Tramites'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentarios_del_banco_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['comentarios_del_banco_c']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentarios_del_banco_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['comentarios_del_banco_c']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['comentarios_del_banco_c']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['comentarios_del_banco_c']['name']; ?>
'
rows="4"
cols="20"
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>                    </div>
</div>
</div>
</div>
</div>

<script language="javascript">
    var _form_id = '<?php echo $this->_tpl_vars['form_id']; ?>
';
    <?php echo '
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == \'\') ? \'EditView\' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    '; ?>

</script>
<?php $this->assign('place', '_FOOTER'); ?> <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
<?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button primary" onclick="var _form = document.getElementById('EditView'); <?php if ($this->_tpl_vars['isDuplicate']): ?>_form.return_id.value=''; <?php endif; ?>_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" id="SAVE"><?php endif; ?> 
<?php if (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $_REQUEST['return_id'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo ((is_array($_tmp=$_REQUEST['return_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
'); return false;" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" type="button" id="CANCEL"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && ! empty ( $this->_tpl_vars['fields']['id']['value'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ( $_REQUEST['return_action'] == 'DetailView' && empty ( $this->_tpl_vars['fields']['id']['value'] ) ) && empty ( $_REQUEST['return_id'] )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php elseif (! empty ( $_REQUEST['return_action'] ) && ! empty ( $_REQUEST['return_module'] )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=<?php echo $_REQUEST['return_action']; ?>
&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php elseif (empty ( $_REQUEST['return_action'] ) || empty ( $_REQUEST['return_id'] ) && ! empty ( $this->_tpl_vars['fields']['id']['value'] )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=trami_Tramites'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php else: ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=<?php echo ((is_array($_tmp=$_REQUEST['return_module'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
&record=<?php echo ((is_array($_tmp=$_REQUEST['return_id'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'url') : smarty_modifier_escape($_tmp, 'url')); ?>
'); return false;" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL"> <?php endif; ?>
<?php if ($this->_tpl_vars['showVCRControl']): ?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $this->_tpl_vars['app_strings']['LBL_SAVE_AND_CONTINUE']; ?>
" onClick="SUGAR.saveAndContinue(this);">
<?php echo $this->_tpl_vars['APP']['LBL_SAVE_AND_CONTINUE']; ?>

</button>
<?php endif; ?>
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')): ?><?php if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=trami_Tramites", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif; ?><?php endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block']; ?>

<!-- Begin Meta-Data Javascript -->
<?php echo smarty_function_sugar_getscript(array('file' => "include/javascript/popup_parent_helper.js"), $this);?>

<?php echo smarty_function_sugar_getscript(array('file' => "cache/include/javascript/sugar_grp_jsolait.js"), $this);?>

<?php echo smarty_function_sugar_getscript(array('file' => "modules/Documents/documents.js"), $this);?>

<!-- End Meta-Data Javascript -->
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
</script>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () { initEditView(document.forms.EditView) });
//window.setTimeout(, 100);
window.onbeforeunload = function () { return onUnloadEditView(); };
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {
$(document).ready(function() {
    $(".collapseLink,.expandLink").click(function (e) { e.preventDefault(); });
  });
}
</script>
<?php echo '
<script type="text/javascript">

    var selectTab = function(tab) {
        $(\'#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER\').hide();
        $(\'#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER\').eq(tab).show().addClass(\'active\').addClass(\'in\');
    };

    var selectTabOnError = function(tab) {
        selectTab(tab);
        $(\'#EditView_tabs ul.nav.nav-tabs li\').removeClass(\'active\');
        $(\'#EditView_tabs ul.nav.nav-tabs li a\').css(\'color\', \'\');

        $(\'#EditView_tabs ul.nav.nav-tabs li\').eq(tab).find(\'a\').first().css(\'color\', \'red\');
        $(\'#EditView_tabs ul.nav.nav-tabs li\').eq(tab).addClass(\'active\');

    };

    var selectTabOnErrorInputHandle = function(inputHandle) {
        var tab = $(inputHandle).closest(\'.tab-pane-NOBOOTSTRAPTOGGLER\').attr(\'id\').match(/^detailpanel_(.*)$/)[1];
        selectTabOnError(tab);
    };


    $(function(){
        $(\'#EditView_tabs ul.nav.nav-tabs li > a[data-toggle="tab"]\').click(function(e){
            if(typeof $(this).parent().find(\'a\').first().attr(\'id\') != \'undefined\') {
                var tab = parseInt($(this).parent().find(\'a\').first().attr(\'id\').match(/^tab(.)*$/)[1]);
                selectTab(tab);
            }
        });

        $(\'a[data-toggle="collapse-edit"]\').click(function(e){
            if($(this).hasClass(\'collapsed\')) {
              // Expand panel
                // Change style of .panel-header
                $(this).removeClass(\'collapsed\');
                // Expand .panel-body
                $(this).parents(\'.panel\').find(\'.panel-body\').removeClass(\'in\').addClass(\'in\');
            } else {
              // Collapse panel
                // Change style of .panel-header
                $(this).addClass(\'collapsed\');
                // Collapse .panel-body
                $(this).parents(\'.panel\').find(\'.panel-body\').removeClass(\'in\').removeClass(\'in\');
            }
        });
    });

    </script>
'; ?>
<?php echo '
<script type="text/javascript">
addForm(\'EditView\');addToValidate(\'EditView\', \'date_entered_date\', \'date\', false,\'Fecha de Creación\' );
addToValidate(\'EditView\', \'date_modified_date\', \'date\', false,\'Última Modificación\' );
addToValidate(\'EditView\', \'modified_user_id\', \'assigned_user_name\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'modified_by_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'created_by\', \'assigned_user_name\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'created_by_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'description\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'deleted\', \'bool\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'assigned_user_id\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'assigned_user_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'document_name\', \'name\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'filename\', \'varchar\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_FILENAME','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'file_ext\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_FILE_EXTENSION','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'file_mime_type\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MIME','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'uploadfile\', \'file\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_FILE_UPLOAD','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'active_date\', \'date\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_ACTIVE_DATE','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'exp_date\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_EXP_DATE','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'category_id\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SF_CATEGORY','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'subcategory_id\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SF_SUBCATEGORY','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'status_id\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_STATUS','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'status\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DOC_STATUS','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'envio_paz_y_salvo_mant_c\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ENVIO_PAZ_Y_SALVO_MANT','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'comentario_paz_salvo_mant_c\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_PAZ_SALVO_MANT','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'banco_c\', \'dynamicenum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_BANCO','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'comentarios_c\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIOS','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'comentario_min_lib_rec_c\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_MIN_LIB_REC','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'comentario_2_5_c\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_2_5','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'comentario_permiso_construcc_c\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_PERMISO_CONSTRUCC','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'monto_financiado_c\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MONTO_FINANCIADO','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'envio_paz_y_salvo_inmueble_c\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ENVIO_PAZ_Y_SALVO_INMUEBLE','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'fecha_registro_c\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_FECHA_REGISTRO','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'aos_product_categories_trami_tramites_1_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_AOS_PRODUCT_CATEGORIES_TRAMI_TRAMITES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'comentario_valor_desembolso_c\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_VALOR_DESEMBOLSO','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'carta_promesa_pago_c\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CARTA_PROMESA_PAGO','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'comentario_tasa_unica_bco_c\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_TASA_UNICA_BCO','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'comentario_paz_salvo_inm_c\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_PAZ_SALVO_INM','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'valor_desembolso_c\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_VALOR_DESEMBOLSO','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'comentario_recibo_prot_c\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_RECIBO_PROT','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'envio_paz_y_salvo_idaan_c\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ENVIO_PAZ_Y_SALVO_IDAAN','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'comentario_permiso_ocupacion_c\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_PERMISO_OCUPACION','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'pago_del_dospuntocinco_c\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PAGO_DEL_DOSPUNTOCINCO','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'comentario_fecha_registro_c\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_FECHA_REGISTRO','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'comentario_min_ventas_c\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_MIN_VENTAS','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'comentarios_paz_salvo_c\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIOS_PAZ_SALVO','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'fecha_permiso_ocupacion_c\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_FECHA_PERMISO_OCUPACION','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'comentario_fecha_recibo_cont_c\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_FECHA_RECIBO_CONT','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'comentario_firma_contrato_c\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_FIRMA_CONTRATO','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'comentario_fecha_desembolso_c\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_FECHA_DESEMBOLSO','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'comentario_envio_protocolo_c\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIO_ENVIO_PROTOCOLO','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'numerodefinca_c\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_NUMERODEFINCA','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'envio_protocolo_c\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ENVIO_PROTOCOLO','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'dias_trascurridos\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DIAS_TRASCURRIDOS','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'fecha_firma_contrato_c\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_FECHA_FIRMA_CONTRATO','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'minuta_de_lib_recibida_c\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MINUTA_DE_LIB_RECIBIDA','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'minuta_de_ventas_recibida_c\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MINUTA_DE_VENTAS_RECIBIDA','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'tipopago_c\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TIPOPAGO','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'fecha_permiso_construccion_c\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_FECHA_PERMISO_CONSTRUCCION','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'aos_products_trami_tramites_1_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_AOS_PRODUCTS_TRAMI_TRAMITES_1_FROM_AOS_PRODUCTS_TITLE','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'currency_id\', \'currency_id\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'recibido_protocolo_c\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_RECIBIDO_PROTOCOLO','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'fecha_desembolso_c\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_FECHA_DESEMBOLSO','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'comentarios_del_banco_c\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_COMENTARIOS_DEL_BANCO','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'fecha_recibo_contrato_c\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_FECHA_RECIBO_CONTRATO','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'envio_declaracion_jurada_c\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ENVIO_DECLARACION_JURADA','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'accounts_trami_tramites_1_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNTS_TRAMI_TRAMITES_1_FROM_ACCOUNTS_TITLE','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'EditView\', \'envio_tasa_unica_banco_c\', \'date\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ENVIO_TASA_UNICA_BANCO','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\' );
addToValidateBinaryDependency(\'EditView\', \'assigned_user_name\', \'alpha\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\', \'assigned_user_id\' );
addToValidateBinaryDependency(\'EditView\', \'aos_product_categories_trami_tramites_1_name\', \'alpha\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_AOS_PRODUCT_CATEGORIES_TRAMI_TRAMITES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\', \'aos_produc5787egories_ida\' );
addToValidateBinaryDependency(\'EditView\', \'aos_products_trami_tramites_1_name\', \'alpha\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_AOS_PRODUCTS_TRAMI_TRAMITES_1_FROM_AOS_PRODUCTS_TITLE','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\', \'aos_products_trami_tramites_1aos_products_ida\' );
addToValidateBinaryDependency(\'EditView\', \'accounts_trami_tramites_1_name\', \'alpha\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNTS_TRAMI_TRAMITES_1_FROM_ACCOUNTS_TITLE','module' => 'trami_Tramites','for_js' => true), $this);?>
<?php echo '\', \'accounts_trami_tramites_1accounts_ida\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'EditView_accounts_trami_tramites_1_name\']={"form":"EditView","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["EditView_accounts_trami_tramites_1_name","accounts_trami_tramites_1accounts_ida"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["accounts_trami_tramites_1accounts_ida"],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects[\'EditView_aos_product_categories_trami_tramites_1_name\']={"form":"EditView","method":"query","modules":["AOS_Product_Categories"],"group":"or","field_list":["name","id"],"populate_list":["aos_product_categories_trami_tramites_1_name","aos_produc5787egories_ida"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects[\'EditView_aos_products_trami_tramites_1_name\']={"form":"EditView","method":"query","modules":["AOS_Products"],"group":"or","field_list":["name","id"],"populate_list":["aos_products_trami_tramites_1_name","aos_products_trami_tramites_1aos_products_ida"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};</script>'; ?>
