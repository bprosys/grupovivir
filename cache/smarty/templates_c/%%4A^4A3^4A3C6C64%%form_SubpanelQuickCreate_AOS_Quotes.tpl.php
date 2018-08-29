<?php /* Smarty version 2.6.29, created on 2018-08-22 10:35:27
         compiled from cache/themes/SuiteP/modules/AOS_Quotes/form_SubpanelQuickCreate_AOS_Quotes.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/themes/SuiteP/modules/AOS_Quotes/form_SubpanelQuickCreate_AOS_Quotes.tpl', 62, false),array('function', 'sugar_translate', 'cache/themes/SuiteP/modules/AOS_Quotes/form_SubpanelQuickCreate_AOS_Quotes.tpl', 83, false),array('function', 'counter', 'cache/themes/SuiteP/modules/AOS_Quotes/form_SubpanelQuickCreate_AOS_Quotes.tpl', 106, false),array('function', 'sugar_number_format', 'cache/themes/SuiteP/modules/AOS_Quotes/form_SubpanelQuickCreate_AOS_Quotes.tpl', 293, false),array('modifier', 'strip_semicolon', 'cache/themes/SuiteP/modules/AOS_Quotes/form_SubpanelQuickCreate_AOS_Quotes.tpl', 100, false),array('modifier', 'default', 'cache/themes/SuiteP/modules/AOS_Quotes/form_SubpanelQuickCreate_AOS_Quotes.tpl', 218, false),)), $this); ?>


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
"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_AOS_Quotes'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_AOS_Quotes'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'AOS_Quotes_subpanel_save_button');return false;" type="submit" name="AOS_Quotes_subpanel_save_button" id="AOS_Quotes_subpanel_save_button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="AOS_Quotes_subpanel_cancel_button" id="AOS_Quotes_subpanel_cancel_button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_TITLE']; ?>
" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_AOS_Quotes'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="AOS_Quotes_subpanel_full_form_button" id="AOS_Quotes_subpanel_full_form_button" value="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_LABEL']; ?>
"> <input type="hidden" name="full_form" value="full_form">
<?php if ($this->_tpl_vars['showVCRControl']): ?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $this->_tpl_vars['app_strings']['LBL_SAVE_AND_CONTINUE']; ?>
" onClick="SUGAR.saveAndContinue(this);">
<?php echo $this->_tpl_vars['APP']['LBL_SAVE_AND_CONTINUE']; ?>

</button>
<?php endif; ?>
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')): ?><?php if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=AOS_Quotes", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif; ?><?php endif; ?>
</div>
</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
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
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_INFORMATION','module' => 'AOS_Quotes'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="LBL_ACCOUNT_INFORMATION">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_NAME">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="name" field="name"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['name']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_QUOTE_NUMBER">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_QUOTE_NUMBER','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="int" field="number"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>

<?php echo $this->_tpl_vars['fields']['number']['value']; ?>

</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_OPPORTUNITY">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_OPPORTUNITY','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="opportunity"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['opportunity']['name']; ?>
" class="sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['opportunity']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['opportunity']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['opportunity']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['opportunity']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['opportunity_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['opportunity']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['opportunity']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SELECT_BUTTON_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['opportunity']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_AOS_Quotes","field_to_name_array":{"id":"opportunity_id","name":"opportunity"}}'; ?>
, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['opportunity']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['opportunity']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['opportunity']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['opportunity']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_RELATE_LABEL'), $this);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['opportunity']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_EXPIRATION">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_EXPIRATION','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

<span class="required">*</span>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="expiration"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['expiration']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['expiration']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['expiration']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="<?php echo $this->_tpl_vars['fields']['expiration']['name']; ?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['expiration']['name']; ?>
",
form : "form_SubpanelQuickCreate_AOS_Quotes",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['expiration']['name']; ?>
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
<div class="clear"></div>
</div>                    </div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LINE_ITEMS','module' => 'AOS_Quotes'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_0" data-id="LBL_LINE_ITEMS">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_LINE_ITEMS">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_LINE_ITEMS','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="function" field="line_items" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>

<span id='line_items_span'>
<?php echo $this->_tpl_vars['fields']['line_items']['value']; ?>
</span>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_TOTAL_AMT">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_TOTAL_AMT','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="total_amt" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['total_amt']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['total_amt']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['total_amt']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['total_amt']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['total_amt']['name']; ?>
' size='30' maxlength='26,6' value='<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='0'
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_DISCOUNT_AMOUNT">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DISCOUNT_AMOUNT','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="discount_amount" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['discount_amount']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['discount_amount']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['discount_amount']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['discount_amount']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['discount_amount']['name']; ?>
' size='30' maxlength='26,6' value='<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='0'
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_SUBTOTAL_AMOUNT">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_SUBTOTAL_AMOUNT','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="subtotal_amount" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['subtotal_amount']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['subtotal_amount']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['subtotal_amount']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['subtotal_amount']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['subtotal_amount']['name']; ?>
' size='30' maxlength='26,6' value='<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='0'
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_TAX_AMOUNT">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_TAX_AMOUNT','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="tax_amount" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['tax_amount']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['tax_amount']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['tax_amount']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['tax_amount']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['tax_amount']['name']; ?>
' size='30' maxlength='26,6' value='<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='0'
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_GRAND_TOTAL">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_GRAND_TOTAL','module' => 'AOS_Quotes'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="total_amount" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['total_amount']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['total_amount']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['total_amount']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['total_amount']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['total_amount']['name']; ?>
' size='30' maxlength='26,6' value='<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='0'
>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">
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
"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_AOS_Quotes'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_AOS_Quotes'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'AOS_Quotes_subpanel_save_button');return false;" type="submit" name="AOS_Quotes_subpanel_save_button" id="AOS_Quotes_subpanel_save_button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="AOS_Quotes_subpanel_cancel_button" id="AOS_Quotes_subpanel_cancel_button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_TITLE']; ?>
" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_AOS_Quotes'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="AOS_Quotes_subpanel_full_form_button" id="AOS_Quotes_subpanel_full_form_button" value="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_LABEL']; ?>
"> <input type="hidden" name="full_form" value="full_form">
<?php if ($this->_tpl_vars['showVCRControl']): ?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $this->_tpl_vars['app_strings']['LBL_SAVE_AND_CONTINUE']; ?>
" onClick="SUGAR.saveAndContinue(this);">
<?php echo $this->_tpl_vars['APP']['LBL_SAVE_AND_CONTINUE']; ?>

</button>
<?php endif; ?>
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')): ?><?php if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=AOS_Quotes", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif; ?><?php endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block']; ?>

<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
</script>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("form_SubpanelQuickCreate_AOS_Quotes",
    function () { initEditView(document.forms.form_SubpanelQuickCreate_AOS_Quotes) });
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
addForm(\'form_SubpanelQuickCreate_AOS_Quotes\');addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'name\', \'name\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'date_entered_date\', \'date\', false,\'Fecha de Creación\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'date_modified_date\', \'date\', false,\'Fecha de Modificación\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'modified_user_id\', \'assigned_user_name\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'modified_by_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'created_by\', \'assigned_user_name\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'created_by_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'description\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'deleted\', \'bool\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'assigned_user_id\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'assigned_user_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'approval_issue\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_APPROVAL_ISSUE','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'billing_account_id\', \'id\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => '','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'billing_account\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_ACCOUNT','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'billing_contact_id\', \'id\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => '','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'billing_contact\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_CONTACT','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'billing_address_street\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_ADDRESS_STREET','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'billing_address_city\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_ADDRESS_CITY','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'billing_address_state\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_ADDRESS_STATE','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'billing_address_postalcode\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_ADDRESS_POSTALCODE','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'billing_address_country\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_BILLING_ADDRESS_COUNTRY','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'shipping_address_street\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_ADDRESS_STREET','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'shipping_address_city\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_ADDRESS_CITY','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'shipping_address_state\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_ADDRESS_STATE','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'shipping_address_postalcode\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'shipping_address_country\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_ADDRESS_COUNTRY','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'expiration\', \'date\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EXPIRATION','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'number\', \'int\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_QUOTE_NUMBER','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'opportunity_id\', \'id\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => '','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'opportunity\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_OPPORTUNITY','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'template_ddown_c[]\', \'multienum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TEMPLATE_DDOWN_C','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'line_items\', \'function\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LINE_ITEMS','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'total_amt\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TOTAL_AMT','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'total_amt_usdollar\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TOTAL_AMT_USDOLLAR','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'subtotal_amount\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SUBTOTAL_AMOUNT','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'subtotal_amount_usdollar\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SUBTOTAL_AMOUNT_USDOLLAR','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'discount_amount\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DISCOUNT_AMOUNT','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'discount_amount_usdollar\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DISCOUNT_AMOUNT_USDOLLAR','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'tax_amount\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TAX_AMOUNT','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'tax_amount_usdollar\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TAX_AMOUNT_USDOLLAR','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'shipping_amount\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_AMOUNT','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'shipping_amount_usdollar\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_AMOUNT_USDOLLAR','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'shipping_tax\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_TAX','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'shipping_tax_amt\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_TAX_AMT','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'shipping_tax_amt_usdollar\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SHIPPING_TAX_AMT_USDOLLAR','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'total_amount\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_GRAND_TOTAL','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'total_amount_usdollar\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_GRAND_TOTAL_USDOLLAR','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'currency_id\', \'id\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENCY','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'stage\', \'enum\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_STAGE','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'term\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TERM','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'terms_c\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TERMS_C','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'approval_status\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_APPROVAL_STATUS','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'invoice_status\', \'enum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_INVOICE_STATUS','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'subtotal_tax_amount\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SUBTOTAL_TAX_AMOUNT','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'subtotal_tax_amount_usdollar\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'cantidad_c\', \'int\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CANTIDAD','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'aos_products_aos_quotes_1_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_AOS_PRODUCTS_AOS_QUOTES_1_FROM_AOS_PRODUCTS_TITLE','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'valor_c\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_VALOR','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'valor_de_cuota_c\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_VALOR_DE_CUOTA','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'porcentaje_c\', \'decimal\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PORCENTAJE','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'cuotas_mensuales_c\', \'int\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CUOTAS_MENSUALES','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'leads_aos_quotes_1_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LEADS_AOS_QUOTES_1_FROM_LEADS_TITLE','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'saldo_abono_inicial_c\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SALDO_ABONO_INICIAL','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'cuota_inicial_c\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CUOTA_INICIAL','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'valor_separacion_c\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_VALOR_SEPARACION','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'credito_c\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREDITO','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AOS_Quotes\', \'monto_a_firma_de_contrato_c\', \'currency\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MONTO_A_FIRMA_DE_CONTRATO','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\' );
addToValidateBinaryDependency(\'form_SubpanelQuickCreate_AOS_Quotes\', \'assigned_user_name\', \'alpha\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\', \'assigned_user_id\' );
addToValidateBinaryDependency(\'form_SubpanelQuickCreate_AOS_Quotes\', \'opportunity\', \'alpha\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_OPPORTUNITY','module' => 'AOS_Quotes','for_js' => true), $this);?>
<?php echo '\', \'opportunity_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'form_SubpanelQuickCreate_AOS_Quotes_opportunity\']={"form":"form_SubpanelQuickCreate_AOS_Quotes","method":"query","modules":["Opportunities"],"group":"or","field_list":["name","id"],"populate_list":["opportunity","opportunity_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};</script>'; ?>
