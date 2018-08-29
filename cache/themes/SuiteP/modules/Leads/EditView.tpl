

<script>
    {literal}
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });

        if($('.edit-view-pagination').children().length == 0) $('.saveAndContinue').remove();
    });
    {/literal}
</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
<div class="edit-view-pagination-mobile-container">
<div class="edit-view-pagination edit-view-mobile-pagination">
{$PAGINATION}
</div>
</div>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="{$fields.id.value}">
{else}
<input type="hidden" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
{if (!empty($smarty.request.return_module) || !empty($smarty.request.relate_to)) && !(isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true")}
<input type="hidden" name="relate_to" value="{if $smarty.request.return_relationship}{$smarty.request.return_relationship}{elseif $smarty.request.relate_to && empty($smarty.request.from_dcmenu)}{$smarty.request.relate_to}{elseif empty($isDCForm) && empty($smarty.request.from_dcmenu)}{$smarty.request.return_module}{/if}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
{assign var='place' value="_HEADER"} <!-- to be used for id for buttons with custom code in def files-->
<input type="hidden" name="prospect_id" value="{if isset($smarty.request.prospect_id)}{$smarty.request.prospect_id}{else}{$bean->prospect_id}{/if}">   
<input type="hidden" name="account_id" value="{if isset($smarty.request.account_id)}{$smarty.request.account_id}{else}{$bean->account_id}{/if}">   
<input type="hidden" name="contact_id" value="{if isset($smarty.request.contact_id)}{$smarty.request.contact_id}{else}{$bean->contact_id}{/if}">   
<input type="hidden" name="opportunity_id" value="{if isset($smarty.request.opportunity_id)}{$smarty.request.opportunity_id}{else}{$bean->opportunity_id}{/if}">   
<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && empty($fields.id.value)) && empty($smarty.request.return_id)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && !empty($smarty.request.return_module)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action={$smarty.request.return_action}&module={$smarty.request.return_module|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Leads'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {/if}
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Leads", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
{$PAGINATION}
</div>
</td>
</tr>
</table>
{sugar_include include=$includes}
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
{sugar_translate label='LBL_CONTACT_INFORMATION' module='Leads'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="LBL_CONTACT_INFORMATION">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_IDENTIFICACION">

{capture name="label" assign="label"}{sugar_translate label='LBL_IDENTIFICACION' module='Leads'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="identificacion_c" colspan='3' >
{counter name="panelFieldCount" print=false}

{if strlen($fields.identificacion_c.value) <= 0}
{assign var="value" value=$fields.identificacion_c.default_value }
{else}
{assign var="value" value=$fields.identificacion_c.value }
{/if}  
<input type='text' name='{$fields.identificacion_c.name}' 
id='{$fields.identificacion_c.name}' size='30' 
maxlength='255' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_FIRST_NAME">

{capture name="label" assign="label"}{sugar_translate label='LBL_FIRST_NAME' module='Leads'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="first_name" colspan='3' >
{counter name="panelFieldCount"  print=false}
{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input tabindex="0"  name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_OFFICE_PHONE">

{capture name="label" assign="label"}{sugar_translate label='LBL_OFFICE_PHONE' module='Leads'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="phone_work" colspan='3' class="phone">
{counter name="panelFieldCount" print=false}

{if strlen($fields.phone_work.value) <= 0}
{assign var="value" value=$fields.phone_work.default_value }
{else}
{assign var="value" value=$fields.phone_work.value }
{/if}  
<input type='text' name='{$fields.phone_work.name}' id='{$fields.phone_work.name}' size='30' maxlength='100' value='{$value}' title='' tabindex='0'	  class="phone" >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_MOBILE_PHONE">

{capture name="label" assign="label"}{sugar_translate label='LBL_MOBILE_PHONE' module='Leads'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="phone_mobile" colspan='3' class="phone">
{counter name="panelFieldCount" print=false}

{if strlen($fields.phone_mobile.value) <= 0}
{assign var="value" value=$fields.phone_mobile.default_value }
{else}
{assign var="value" value=$fields.phone_mobile.value }
{/if}  
<input type='text' name='{$fields.phone_mobile.name}' id='{$fields.phone_mobile.name}' size='30' maxlength='100' value='{$value}' title='' tabindex='0'	  class="phone" >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_JJWG_MAPS_ADDRESS">

{capture name="label" assign="label"}{sugar_translate label='LBL_JJWG_MAPS_ADDRESS' module='Leads'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="jjwg_maps_address_c" colspan='3' >
{counter name="panelFieldCount" print=false}

{if strlen($fields.jjwg_maps_address_c.value) <= 0}
{assign var="value" value=$fields.jjwg_maps_address_c.default_value }
{else}
{assign var="value" value=$fields.jjwg_maps_address_c.value }
{/if}  
<input type='text' name='{$fields.jjwg_maps_address_c.name}' 
id='{$fields.jjwg_maps_address_c.name}' size='30' 
maxlength='255' 
value='{$value}' title='Address'      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_EMAIL_ADDRESS">

{capture name="label" assign="label"}{sugar_translate label='LBL_EMAIL_ADDRESS' module='Leads'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="email1" colspan='3' >
{counter name="panelFieldCount"  print=false}
{$custom_name_code}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_LEAD_SOURCE">

{capture name="label" assign="label"}{sugar_translate label='LBL_LEAD_SOURCE' module='Leads'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="lead_source"  >
{counter name="panelFieldCount" print=false}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="{$fields.lead_source.name}" 
id="{$fields.lead_source.name}" 
title=''       
>
{if isset($fields.lead_source.value) && $fields.lead_source.value != ''}
{html_options options=$fields.lead_source.options selected=$fields.lead_source.value}
{else}
{html_options options=$fields.lead_source.options selected=$fields.lead_source.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.lead_source.options }
{capture name="field_val"}{$fields.lead_source.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.lead_source.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.lead_source.name}" 
id="{$fields.lead_source.name}" 
title=''          
>
{if isset($fields.lead_source.value) && $fields.lead_source.value != ''}
{html_options options=$fields.lead_source.options selected=$fields.lead_source.value}
{else}
{html_options options=$fields.lead_source.options selected=$fields.lead_source.default}
{/if}
</select>
<input
id="{$fields.lead_source.name}-input"
name="{$fields.lead_source.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.lead_source.name}-image"></button><button type="button"
id="btn-clear-{$fields.lead_source.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.lead_source.name}-input', '{$fields.lead_source.name}');sync_{$fields.lead_source.name}()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{literal}
<script>
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
	{/literal}

			{literal}
		(function (){
			var selectElem = document.getElementById("{/literal}{$fields.lead_source.name}{literal}");
			
			if (typeof select_defaults =="undefined")
				select_defaults = [];
			
			select_defaults[selectElem.id] = {key:selectElem.value,text:''};

			//get default
			for (i=0;i<selectElem.options.length;i++){
				if (selectElem.options[i].value==selectElem.value)
					select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
			}

			//SUGAR.AutoComplete.{$ac_key}.ds = 
			//get options array from vardefs
			var options = SUGAR.AutoComplete.getOptionsArray("");

			YUI().use('datasource', 'datasource-jsonschema',function (Y) {
				SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
				    source: function (request) {
				    	var ret = [];
				    	for (i=0;i<selectElem.options.length;i++)
				    		if (!(selectElem.options[i].value=='' && selectElem.options[i].innerHTML==''))
				    			ret.push({'key':selectElem.options[i].value,'text':selectElem.options[i].innerHTML});
				    	return ret;
				    }
				});
			});
		})();
		{/literal}
	
	{literal}
		YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
	{/literal}
			
	SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.lead_source.name}-input');
	SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.lead_source.name}-image');
	SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.lead_source.name}');
	
			{literal}
			function SyncToHidden(selectme){
				var selectElem = document.getElementById("{/literal}{$fields.lead_source.name}{literal}");
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
					SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
			}

			//global variable 
			sync_{/literal}{$fields.lead_source.name}{literal} = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("{/literal}{$fields.lead_source.name}{literal}");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');

				SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.lead_source.name}-input{literal}'))
						SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("{/literal}{$fields.lead_source.name}{literal}", syncFromHiddenToWidget);
		{/literal}

		SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
		SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
		SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
		if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
			{/literal}
			SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
			SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
			{literal}
		}
		{/literal}
		if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
			{/literal}
			SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
			SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
			{literal}
		}
		{/literal}
		
	SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
	
	{literal}
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
		activateFirstItem: true,
		{/literal}
		minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
		queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
		zIndex: 99999,

				
		{literal}
		source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,
		
		resultTextLocator: 'text',
		resultHighlighter: 'phraseMatch',
		resultFilters: 'phraseMatch',
	});

	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover = function(ex){
		var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
		if(hover[0] != null){
			if (ex) {
				var h = '1000px';
				hover[0].style.height = h;
			}
			else{
				hover[0].style.height = '';
			}
		}
	}
		
	if({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
		// expand the dropdown options upon focus
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = true;
		});
	}

			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
		});
		
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
			var selectElem = document.getElementById("{/literal}{$fields.lead_source.name}{literal}");
			//if typed value is a valid option, do nothing
			for (i=0;i<selectElem.options.length;i++)
				if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'))
					return;
			
			//typed value is invalid, so set the text and the hidden to blank
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', select_defaults[selectElem.id].text);
			SyncToHidden(select_defaults[selectElem.id].key);
		});
	
	// when they click on the arrow image, toggle the visibility of the options
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.ancestor().on('click', function () {
		if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.blur();
		} else {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
		}
	});

	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('query', function () {
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', '');
	});

	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('visibleChange', function (e) {
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover(e.newVal); // expand
	});

	// when they select an option, set the hidden input with the KEY, to be saved
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('select', function(e) {
		SyncToHidden(e.result.raw.key);
	});
 
});
</script> 
{/literal}
{/if}
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PROYECTOINTERES1">

{capture name="label" assign="label"}{sugar_translate label='LBL_PROYECTOINTERES1' module='Leads'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="proyectointeres1_c"  >
{counter name="panelFieldCount" print=false}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="{$fields.proyectointeres1_c.name}" 
id="{$fields.proyectointeres1_c.name}" 
title=''       
>
{if isset($fields.proyectointeres1_c.value) && $fields.proyectointeres1_c.value != ''}
{html_options options=$fields.proyectointeres1_c.options selected=$fields.proyectointeres1_c.value}
{else}
{html_options options=$fields.proyectointeres1_c.options selected=$fields.proyectointeres1_c.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.proyectointeres1_c.options }
{capture name="field_val"}{$fields.proyectointeres1_c.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.proyectointeres1_c.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.proyectointeres1_c.name}" 
id="{$fields.proyectointeres1_c.name}" 
title=''          
>
{if isset($fields.proyectointeres1_c.value) && $fields.proyectointeres1_c.value != ''}
{html_options options=$fields.proyectointeres1_c.options selected=$fields.proyectointeres1_c.value}
{else}
{html_options options=$fields.proyectointeres1_c.options selected=$fields.proyectointeres1_c.default}
{/if}
</select>
<input
id="{$fields.proyectointeres1_c.name}-input"
name="{$fields.proyectointeres1_c.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.proyectointeres1_c.name}-image"></button><button type="button"
id="btn-clear-{$fields.proyectointeres1_c.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.proyectointeres1_c.name}-input', '{$fields.proyectointeres1_c.name}');sync_{$fields.proyectointeres1_c.name}()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{literal}
<script>
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
	{/literal}

			{literal}
		(function (){
			var selectElem = document.getElementById("{/literal}{$fields.proyectointeres1_c.name}{literal}");
			
			if (typeof select_defaults =="undefined")
				select_defaults = [];
			
			select_defaults[selectElem.id] = {key:selectElem.value,text:''};

			//get default
			for (i=0;i<selectElem.options.length;i++){
				if (selectElem.options[i].value==selectElem.value)
					select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
			}

			//SUGAR.AutoComplete.{$ac_key}.ds = 
			//get options array from vardefs
			var options = SUGAR.AutoComplete.getOptionsArray("");

			YUI().use('datasource', 'datasource-jsonschema',function (Y) {
				SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
				    source: function (request) {
				    	var ret = [];
				    	for (i=0;i<selectElem.options.length;i++)
				    		if (!(selectElem.options[i].value=='' && selectElem.options[i].innerHTML==''))
				    			ret.push({'key':selectElem.options[i].value,'text':selectElem.options[i].innerHTML});
				    	return ret;
				    }
				});
			});
		})();
		{/literal}
	
	{literal}
		YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
	{/literal}
			
	SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.proyectointeres1_c.name}-input');
	SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.proyectointeres1_c.name}-image');
	SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.proyectointeres1_c.name}');
	
			{literal}
			function SyncToHidden(selectme){
				var selectElem = document.getElementById("{/literal}{$fields.proyectointeres1_c.name}{literal}");
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
					SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
			}

			//global variable 
			sync_{/literal}{$fields.proyectointeres1_c.name}{literal} = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("{/literal}{$fields.proyectointeres1_c.name}{literal}");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');

				SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.proyectointeres1_c.name}-input{literal}'))
						SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("{/literal}{$fields.proyectointeres1_c.name}{literal}", syncFromHiddenToWidget);
		{/literal}

		SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
		SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
		SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
		if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
			{/literal}
			SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
			SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
			{literal}
		}
		{/literal}
		if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
			{/literal}
			SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
			SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
			{literal}
		}
		{/literal}
		
	SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
	
	{literal}
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
		activateFirstItem: true,
		{/literal}
		minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
		queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
		zIndex: 99999,

				
		{literal}
		source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,
		
		resultTextLocator: 'text',
		resultHighlighter: 'phraseMatch',
		resultFilters: 'phraseMatch',
	});

	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover = function(ex){
		var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
		if(hover[0] != null){
			if (ex) {
				var h = '1000px';
				hover[0].style.height = h;
			}
			else{
				hover[0].style.height = '';
			}
		}
	}
		
	if({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
		// expand the dropdown options upon focus
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = true;
		});
	}

			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
		});
		
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
			var selectElem = document.getElementById("{/literal}{$fields.proyectointeres1_c.name}{literal}");
			//if typed value is a valid option, do nothing
			for (i=0;i<selectElem.options.length;i++)
				if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'))
					return;
			
			//typed value is invalid, so set the text and the hidden to blank
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', select_defaults[selectElem.id].text);
			SyncToHidden(select_defaults[selectElem.id].key);
		});
	
	// when they click on the arrow image, toggle the visibility of the options
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.ancestor().on('click', function () {
		if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.blur();
		} else {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
		}
	});

	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('query', function () {
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', '');
	});

	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('visibleChange', function (e) {
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover(e.newVal); // expand
	});

	// when they select an option, set the hidden input with the KEY, to be saved
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('select', function(e) {
		SyncToHidden(e.result.raw.key);
	});
 
});
</script> 
{/literal}
{/if}
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PROYECTOINTERES2">

{capture name="label" assign="label"}{sugar_translate label='LBL_PROYECTOINTERES2' module='Leads'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="dynamicenum" field="proyectointeres2_c"  >
{counter name="panelFieldCount" print=false}

<script type="text/javascript" src='{sugar_getjspath file="include/SugarFields/Fields/Dynamicenum/SugarFieldDynamicenum.js"}'></script>
{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="{$fields.proyectointeres2_c.name}"
id="{$fields.proyectointeres2_c.name}"
title=''           
>
{if isset($fields.proyectointeres2_c.value) && $fields.proyectointeres2_c.value != ''}
{html_options options=$fields.proyectointeres2_c.options selected=$fields.proyectointeres2_c.value}
{else}
{html_options options=$fields.proyectointeres2_c.options selected=$fields.proyectointeres2_c.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.proyectointeres2_c.options }
{capture name="field_val"}{$fields.proyectointeres2_c.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.proyectointeres2_c.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.proyectointeres2_c.name}"
id="{$fields.proyectointeres2_c.name}"
title=''          
>
{if isset($fields.proyectointeres2_c.value) && $fields.proyectointeres2_c.value != ''}
{html_options options=$fields.proyectointeres2_c.options selected=$fields.proyectointeres2_c.value}
{else}
{html_options options=$fields.proyectointeres2_c.options selected=$fields.proyectointeres2_c.default}
{/if}
</select>
<input
id="{$fields.proyectointeres2_c.name}-input"
name="{$fields.proyectointeres2_c.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.proyectointeres2_c.name}-image"></button><button type="button"
id="btn-clear-{$fields.proyectointeres2_c.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.proyectointeres2_c.name}-input', '{$fields.proyectointeres2_c.name}');sync_{$fields.proyectointeres2_c.name}()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{literal}
<script>
SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
{/literal}

{literal}
(function (){
    var selectElem = document.getElementById("{/literal}{$fields.proyectointeres2_c.name}{literal}");

    if (typeof select_defaults =="undefined")
        select_defaults = [];

    select_defaults[selectElem.id] = {key:selectElem.value,text:''};

    //get default
    for (i=0;i<selectElem.options.length;i++){
        if (selectElem.options[i].value==selectElem.value)
            select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
    }

    //SUGAR.AutoComplete.{$ac_key}.ds =
    //get options array from vardefs
    var options = SUGAR.AutoComplete.getOptionsArray("");

    YUI().use('datasource', 'datasource-jsonschema',function (Y) {
        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
            source: function (request) {
                var ret = [];
                for (i=0;i<selectElem.options.length;i++)
                    if (!(selectElem.options[i].value=='' && selectElem.options[i].innerHTML==''))
                        ret.push({'key':selectElem.options[i].value,'text':selectElem.options[i].innerHTML});
                return ret;
            }
        });
    });
})();
{/literal}

{literal}
YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
    {/literal}

    SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.proyectointeres2_c.name}-input');
    SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.proyectointeres2_c.name}-image');
    SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.proyectointeres2_c.name}');

        {literal}
    function SyncToHidden(selectme){
        var selectElem = document.getElementById("{/literal}{$fields.proyectointeres2_c.name}{literal}");
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
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
    }

    //global variable
    sync_{/literal}{$fields.proyectointeres2_c.name}{literal} = function(){
        SyncToHidden();
    }
    function syncFromHiddenToWidget(){

        var selectElem = document.getElementById("{/literal}{$fields.proyectointeres2_c.name}{literal}");

        //if select no longer on page, kill timer
        if (selectElem==null || selectElem.options == null)
            return;

        var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');

        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');

        for (i=0;i<selectElem.options.length;i++){

            if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.proyectointeres2_c.name}-input{literal}'))
                SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
        }
    }

    YAHOO.util.Event.onAvailable("{/literal}{$fields.proyectointeres2_c.name}{literal}", syncFromHiddenToWidget);
    {/literal}

    SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
    SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
    SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
    if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
        {/literal}
        SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
        SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
        {literal}
    }
    {/literal}
    if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
        {/literal}
        SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
        SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
        {literal}
    }
    {/literal}
    
    SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;

    {literal}
    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
        activateFirstItem: true,
        {/literal}
        minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
        queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
        zIndex: 99999,

        
        {literal}
        source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,

        resultTextLocator: 'text',
        resultHighlighter: 'phraseMatch',
        resultFilters: 'phraseMatch',
    });

    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover = function(ex){
        var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
        if(hover[0] != null){
            if (ex) {
                var h = '1000px';
                hover[0].style.height = h;
            }
            else{
                hover[0].style.height = '';
            }
        }
    }

    if({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
        // expand the dropdown options upon focus
        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = true;
        });
    }

            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
        });

        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
        });

        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
        });

        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
        });

        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
        });

        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
            var selectElem = document.getElementById("{/literal}{$fields.proyectointeres2_c.name}{literal}");
            //if typed value is a valid option, do nothing
            for (i=0;i<selectElem.options.length;i++)
                if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'))
                    return;

            //typed value is invalid, so set the text and the hidden to blank
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', select_defaults[selectElem.id].text);
            SyncToHidden(select_defaults[selectElem.id].key);
        });
        
            // when they click on the arrow image, toggle the visibility of the options
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.ancestor().on('click', function () {
                if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible) {
                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.blur();
                } else {
                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
                }
            });

            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('query', function () {
                SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', '');
            });

            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('visibleChange', function (e) {
                SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover(e.newVal); // expand
            });

            // when they select an option, set the hidden input with the KEY, to be saved
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('select', function(e) {
                SyncToHidden(e.result.raw.key);
            });

        });
</script>
{/literal}
{/if}
<script type="text/javascript">
    if(typeof de_entries == 'undefined'){literal}{var de_entries = new Array;}{/literal}
    var el = document.getElementById("");
    addLoadEvent(function(){literal}{loadDynamicEnum({/literal}"","{$fields.proyectointeres2_c.name}"{literal})}{/literal});
    if (SUGAR.ajaxUI && SUGAR.ajaxUI.hist_loaded) {literal}{loadDynamicEnum({/literal}"","{$fields.proyectointeres2_c.name}"{literal})}{/literal}
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PROYECTOINTERES3">

{capture name="label" assign="label"}{sugar_translate label='LBL_PROYECTOINTERES3' module='Leads'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="dynamicenum" field="proyectointeres3_c"  >
{counter name="panelFieldCount" print=false}

<script type="text/javascript" src='{sugar_getjspath file="include/SugarFields/Fields/Dynamicenum/SugarFieldDynamicenum.js"}'></script>
{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="{$fields.proyectointeres3_c.name}"
id="{$fields.proyectointeres3_c.name}"
title=''           
>
{if isset($fields.proyectointeres3_c.value) && $fields.proyectointeres3_c.value != ''}
{html_options options=$fields.proyectointeres3_c.options selected=$fields.proyectointeres3_c.value}
{else}
{html_options options=$fields.proyectointeres3_c.options selected=$fields.proyectointeres3_c.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.proyectointeres3_c.options }
{capture name="field_val"}{$fields.proyectointeres3_c.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.proyectointeres3_c.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.proyectointeres3_c.name}"
id="{$fields.proyectointeres3_c.name}"
title=''          
>
{if isset($fields.proyectointeres3_c.value) && $fields.proyectointeres3_c.value != ''}
{html_options options=$fields.proyectointeres3_c.options selected=$fields.proyectointeres3_c.value}
{else}
{html_options options=$fields.proyectointeres3_c.options selected=$fields.proyectointeres3_c.default}
{/if}
</select>
<input
id="{$fields.proyectointeres3_c.name}-input"
name="{$fields.proyectointeres3_c.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.proyectointeres3_c.name}-image"></button><button type="button"
id="btn-clear-{$fields.proyectointeres3_c.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.proyectointeres3_c.name}-input', '{$fields.proyectointeres3_c.name}');sync_{$fields.proyectointeres3_c.name}()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{literal}
<script>
SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
{/literal}

{literal}
(function (){
    var selectElem = document.getElementById("{/literal}{$fields.proyectointeres3_c.name}{literal}");

    if (typeof select_defaults =="undefined")
        select_defaults = [];

    select_defaults[selectElem.id] = {key:selectElem.value,text:''};

    //get default
    for (i=0;i<selectElem.options.length;i++){
        if (selectElem.options[i].value==selectElem.value)
            select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
    }

    //SUGAR.AutoComplete.{$ac_key}.ds =
    //get options array from vardefs
    var options = SUGAR.AutoComplete.getOptionsArray("");

    YUI().use('datasource', 'datasource-jsonschema',function (Y) {
        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
            source: function (request) {
                var ret = [];
                for (i=0;i<selectElem.options.length;i++)
                    if (!(selectElem.options[i].value=='' && selectElem.options[i].innerHTML==''))
                        ret.push({'key':selectElem.options[i].value,'text':selectElem.options[i].innerHTML});
                return ret;
            }
        });
    });
})();
{/literal}

{literal}
YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
    {/literal}

    SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.proyectointeres3_c.name}-input');
    SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.proyectointeres3_c.name}-image');
    SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.proyectointeres3_c.name}');

        {literal}
    function SyncToHidden(selectme){
        var selectElem = document.getElementById("{/literal}{$fields.proyectointeres3_c.name}{literal}");
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
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
    }

    //global variable
    sync_{/literal}{$fields.proyectointeres3_c.name}{literal} = function(){
        SyncToHidden();
    }
    function syncFromHiddenToWidget(){

        var selectElem = document.getElementById("{/literal}{$fields.proyectointeres3_c.name}{literal}");

        //if select no longer on page, kill timer
        if (selectElem==null || selectElem.options == null)
            return;

        var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');

        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');

        for (i=0;i<selectElem.options.length;i++){

            if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.proyectointeres3_c.name}-input{literal}'))
                SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
        }
    }

    YAHOO.util.Event.onAvailable("{/literal}{$fields.proyectointeres3_c.name}{literal}", syncFromHiddenToWidget);
    {/literal}

    SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
    SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
    SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
    if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
        {/literal}
        SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
        SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
        {literal}
    }
    {/literal}
    if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
        {/literal}
        SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
        SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
        {literal}
    }
    {/literal}
    
    SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;

    {literal}
    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
        activateFirstItem: true,
        {/literal}
        minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
        queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
        zIndex: 99999,

        
        {literal}
        source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,

        resultTextLocator: 'text',
        resultHighlighter: 'phraseMatch',
        resultFilters: 'phraseMatch',
    });

    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover = function(ex){
        var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
        if(hover[0] != null){
            if (ex) {
                var h = '1000px';
                hover[0].style.height = h;
            }
            else{
                hover[0].style.height = '';
            }
        }
    }

    if({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
        // expand the dropdown options upon focus
        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = true;
        });
    }

            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
        });

        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
        });

        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
        });

        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
        });

        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
        });

        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
            var selectElem = document.getElementById("{/literal}{$fields.proyectointeres3_c.name}{literal}");
            //if typed value is a valid option, do nothing
            for (i=0;i<selectElem.options.length;i++)
                if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'))
                    return;

            //typed value is invalid, so set the text and the hidden to blank
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', select_defaults[selectElem.id].text);
            SyncToHidden(select_defaults[selectElem.id].key);
        });
        
            // when they click on the arrow image, toggle the visibility of the options
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.ancestor().on('click', function () {
                if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible) {
                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.blur();
                } else {
                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
                }
            });

            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('query', function () {
                SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', '');
            });

            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('visibleChange', function (e) {
                SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover(e.newVal); // expand
            });

            // when they select an option, set the hidden input with the KEY, to be saved
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('select', function(e) {
                SyncToHidden(e.result.raw.key);
            });

        });
</script>
{/literal}
{/if}
<script type="text/javascript">
    if(typeof de_entries == 'undefined'){literal}{var de_entries = new Array;}{/literal}
    var el = document.getElementById("");
    addLoadEvent(function(){literal}{loadDynamicEnum({/literal}"","{$fields.proyectointeres3_c.name}"{literal})}{/literal});
    if (SUGAR.ajaxUI && SUGAR.ajaxUI.hist_loaded) {literal}{loadDynamicEnum({/literal}"","{$fields.proyectointeres3_c.name}"{literal})}{/literal}
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ESTADO">

{capture name="label" assign="label"}{sugar_translate label='LBL_ESTADO' module='Leads'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="dynamicenum" field="estado_c"  >
{counter name="panelFieldCount" print=false}

<script type="text/javascript" src='{sugar_getjspath file="include/SugarFields/Fields/Dynamicenum/SugarFieldDynamicenum.js"}'></script>
{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="{$fields.estado_c.name}"
id="{$fields.estado_c.name}"
title=''           
>
{if isset($fields.estado_c.value) && $fields.estado_c.value != ''}
{html_options options=$fields.estado_c.options selected=$fields.estado_c.value}
{else}
{html_options options=$fields.estado_c.options selected=$fields.estado_c.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.estado_c.options }
{capture name="field_val"}{$fields.estado_c.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.estado_c.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.estado_c.name}"
id="{$fields.estado_c.name}"
title=''          
>
{if isset($fields.estado_c.value) && $fields.estado_c.value != ''}
{html_options options=$fields.estado_c.options selected=$fields.estado_c.value}
{else}
{html_options options=$fields.estado_c.options selected=$fields.estado_c.default}
{/if}
</select>
<input
id="{$fields.estado_c.name}-input"
name="{$fields.estado_c.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.estado_c.name}-image"></button><button type="button"
id="btn-clear-{$fields.estado_c.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.estado_c.name}-input', '{$fields.estado_c.name}');sync_{$fields.estado_c.name}()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{literal}
<script>
SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
{/literal}

{literal}
(function (){
    var selectElem = document.getElementById("{/literal}{$fields.estado_c.name}{literal}");

    if (typeof select_defaults =="undefined")
        select_defaults = [];

    select_defaults[selectElem.id] = {key:selectElem.value,text:''};

    //get default
    for (i=0;i<selectElem.options.length;i++){
        if (selectElem.options[i].value==selectElem.value)
            select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
    }

    //SUGAR.AutoComplete.{$ac_key}.ds =
    //get options array from vardefs
    var options = SUGAR.AutoComplete.getOptionsArray("");

    YUI().use('datasource', 'datasource-jsonschema',function (Y) {
        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
            source: function (request) {
                var ret = [];
                for (i=0;i<selectElem.options.length;i++)
                    if (!(selectElem.options[i].value=='' && selectElem.options[i].innerHTML==''))
                        ret.push({'key':selectElem.options[i].value,'text':selectElem.options[i].innerHTML});
                return ret;
            }
        });
    });
})();
{/literal}

{literal}
YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
    {/literal}

    SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.estado_c.name}-input');
    SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.estado_c.name}-image');
    SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.estado_c.name}');

        {literal}
    function SyncToHidden(selectme){
        var selectElem = document.getElementById("{/literal}{$fields.estado_c.name}{literal}");
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
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
    }

    //global variable
    sync_{/literal}{$fields.estado_c.name}{literal} = function(){
        SyncToHidden();
    }
    function syncFromHiddenToWidget(){

        var selectElem = document.getElementById("{/literal}{$fields.estado_c.name}{literal}");

        //if select no longer on page, kill timer
        if (selectElem==null || selectElem.options == null)
            return;

        var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');

        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');

        for (i=0;i<selectElem.options.length;i++){

            if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.estado_c.name}-input{literal}'))
                SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
        }
    }

    YAHOO.util.Event.onAvailable("{/literal}{$fields.estado_c.name}{literal}", syncFromHiddenToWidget);
    {/literal}

    SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
    SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
    SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
    if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
        {/literal}
        SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
        SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
        {literal}
    }
    {/literal}
    if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
        {/literal}
        SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
        SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
        {literal}
    }
    {/literal}
    
    SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;

    {literal}
    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
        activateFirstItem: true,
        {/literal}
        minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
        queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
        zIndex: 99999,

        
        {literal}
        source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,

        resultTextLocator: 'text',
        resultHighlighter: 'phraseMatch',
        resultFilters: 'phraseMatch',
    });

    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover = function(ex){
        var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
        if(hover[0] != null){
            if (ex) {
                var h = '1000px';
                hover[0].style.height = h;
            }
            else{
                hover[0].style.height = '';
            }
        }
    }

    if({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
        // expand the dropdown options upon focus
        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = true;
        });
    }

            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
        });

        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
        });

        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
        });

        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
        });

        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
        });

        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
            var selectElem = document.getElementById("{/literal}{$fields.estado_c.name}{literal}");
            //if typed value is a valid option, do nothing
            for (i=0;i<selectElem.options.length;i++)
                if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'))
                    return;

            //typed value is invalid, so set the text and the hidden to blank
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', select_defaults[selectElem.id].text);
            SyncToHidden(select_defaults[selectElem.id].key);
        });
        
            // when they click on the arrow image, toggle the visibility of the options
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.ancestor().on('click', function () {
                if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible) {
                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.blur();
                } else {
                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
                }
            });

            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('query', function () {
                SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', '');
            });

            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('visibleChange', function (e) {
                SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover(e.newVal); // expand
            });

            // when they select an option, set the hidden input with the KEY, to be saved
            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('select', function(e) {
                SyncToHidden(e.result.raw.key);
            });

        });
</script>
{/literal}
{/if}
<script type="text/javascript">
    if(typeof de_entries == 'undefined'){literal}{var de_entries = new Array;}{/literal}
    var el = document.getElementById("");
    addLoadEvent(function(){literal}{loadDynamicEnum({/literal}"","{$fields.estado_c.name}"{literal})}{/literal});
    if (SUGAR.ajaxUI && SUGAR.ajaxUI.hist_loaded) {literal}{loadDynamicEnum({/literal}"","{$fields.estado_c.name}"{literal})}{/literal}
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DATE_ENTERED">

{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_ENTERED' module='Leads'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="datetime" field="date_entered"  >
{counter name="panelFieldCount" print=false}


{assign var="value" value=08/28/2018 }
<span class="sugar_field" id="{$fields.date_entered.name}">{$value}</span>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIOS">

{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIOS' module='Leads'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="comentarios_c"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.comentarios_c.value) <= 0}
{assign var="value" value=$fields.comentarios_c.default_value }
{else}
{assign var="value" value=$fields.comentarios_c.value }
{/if}  
<input type='text' name='{$fields.comentarios_c.name}' 
id='{$fields.comentarios_c.name}' size='30' 
maxlength='255' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_BROKER">

{capture name="label" assign="label"}{sugar_translate label='LBL_BROKER' module='Leads'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="broker_c"  >
{counter name="panelFieldCount" print=false}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="{$fields.broker_c.name}" 
id="{$fields.broker_c.name}" 
title=''       
>
{if isset($fields.broker_c.value) && $fields.broker_c.value != ''}
{html_options options=$fields.broker_c.options selected=$fields.broker_c.value}
{else}
{html_options options=$fields.broker_c.options selected=$fields.broker_c.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.broker_c.options }
{capture name="field_val"}{$fields.broker_c.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.broker_c.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.broker_c.name}" 
id="{$fields.broker_c.name}" 
title=''          
>
{if isset($fields.broker_c.value) && $fields.broker_c.value != ''}
{html_options options=$fields.broker_c.options selected=$fields.broker_c.value}
{else}
{html_options options=$fields.broker_c.options selected=$fields.broker_c.default}
{/if}
</select>
<input
id="{$fields.broker_c.name}-input"
name="{$fields.broker_c.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.broker_c.name}-image"></button><button type="button"
id="btn-clear-{$fields.broker_c.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.broker_c.name}-input', '{$fields.broker_c.name}');sync_{$fields.broker_c.name}()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{literal}
<script>
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
	{/literal}

			{literal}
		(function (){
			var selectElem = document.getElementById("{/literal}{$fields.broker_c.name}{literal}");
			
			if (typeof select_defaults =="undefined")
				select_defaults = [];
			
			select_defaults[selectElem.id] = {key:selectElem.value,text:''};

			//get default
			for (i=0;i<selectElem.options.length;i++){
				if (selectElem.options[i].value==selectElem.value)
					select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
			}

			//SUGAR.AutoComplete.{$ac_key}.ds = 
			//get options array from vardefs
			var options = SUGAR.AutoComplete.getOptionsArray("");

			YUI().use('datasource', 'datasource-jsonschema',function (Y) {
				SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
				    source: function (request) {
				    	var ret = [];
				    	for (i=0;i<selectElem.options.length;i++)
				    		if (!(selectElem.options[i].value=='' && selectElem.options[i].innerHTML==''))
				    			ret.push({'key':selectElem.options[i].value,'text':selectElem.options[i].innerHTML});
				    	return ret;
				    }
				});
			});
		})();
		{/literal}
	
	{literal}
		YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
	{/literal}
			
	SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.broker_c.name}-input');
	SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.broker_c.name}-image');
	SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.broker_c.name}');
	
			{literal}
			function SyncToHidden(selectme){
				var selectElem = document.getElementById("{/literal}{$fields.broker_c.name}{literal}");
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
					SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
			}

			//global variable 
			sync_{/literal}{$fields.broker_c.name}{literal} = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("{/literal}{$fields.broker_c.name}{literal}");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');

				SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.broker_c.name}-input{literal}'))
						SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("{/literal}{$fields.broker_c.name}{literal}", syncFromHiddenToWidget);
		{/literal}

		SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
		SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
		SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
		if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
			{/literal}
			SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
			SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
			{literal}
		}
		{/literal}
		if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
			{/literal}
			SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
			SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
			{literal}
		}
		{/literal}
		
	SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
	
	{literal}
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
		activateFirstItem: true,
		{/literal}
		minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
		queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
		zIndex: 99999,

				
		{literal}
		source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,
		
		resultTextLocator: 'text',
		resultHighlighter: 'phraseMatch',
		resultFilters: 'phraseMatch',
	});

	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover = function(ex){
		var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
		if(hover[0] != null){
			if (ex) {
				var h = '1000px';
				hover[0].style.height = h;
			}
			else{
				hover[0].style.height = '';
			}
		}
	}
		
	if({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
		// expand the dropdown options upon focus
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = true;
		});
	}

			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
		});
		
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
			var selectElem = document.getElementById("{/literal}{$fields.broker_c.name}{literal}");
			//if typed value is a valid option, do nothing
			for (i=0;i<selectElem.options.length;i++)
				if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'))
					return;
			
			//typed value is invalid, so set the text and the hidden to blank
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', select_defaults[selectElem.id].text);
			SyncToHidden(select_defaults[selectElem.id].key);
		});
	
	// when they click on the arrow image, toggle the visibility of the options
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.ancestor().on('click', function () {
		if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.blur();
		} else {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
		}
	});

	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('query', function () {
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', '');
	});

	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('visibleChange', function (e) {
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover(e.newVal); // expand
	});

	// when they select an option, set the hidden input with the KEY, to be saved
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('select', function(e) {
		SyncToHidden(e.result.raw.key);
	});
 
});
</script> 
{/literal}
{/if}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ASSIGNED_TO_NAME">

{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO' module='Leads'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="assigned_user_name"  >
{counter name="panelFieldCount" print=false}

<input type="text" name="{$fields.assigned_user_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.assigned_user_name.name}" size="" value="{$fields.assigned_user_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.assigned_user_name.id_name}" 
id="{$fields.assigned_user_name.id_name}" 
value="{$fields.assigned_user_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.assigned_user_name.name}" id="btn_{$fields.assigned_user_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_LABEL"}"
onclick='open_popup(
"{$fields.assigned_user_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}{/literal}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.assigned_user_name.name}" id="btn_clr_{$fields.assigned_user_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.assigned_user_name.name}', '{$fields.assigned_user_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.assigned_user_name.name}']) != 'undefined'",
		enableQS
);
</script>
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
    var _form_id = '{$form_id}';
    {literal}
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>
{assign var='place' value="_FOOTER"} <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && empty($fields.id.value)) && empty($smarty.request.return_id)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && !empty($smarty.request.return_module)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action={$smarty.request.return_action}&module={$smarty.request.return_module|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Leads'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {/if}
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Leads", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}
<!-- Begin Meta-Data Javascript -->
<script type="text/javascript" language="Javascript">function copyAddressRight(form)  {ldelim} form.alt_address_street.value = form.primary_address_street.value;form.alt_address_city.value = form.primary_address_city.value;form.alt_address_state.value = form.primary_address_state.value;form.alt_address_postalcode.value = form.primary_address_postalcode.value;form.alt_address_country.value = form.primary_address_country.value;return true; {rdelim} function copyAddressLeft(form)  {ldelim} form.primary_address_street.value =form.alt_address_street.value;form.primary_address_city.value = form.alt_address_city.value;form.primary_address_state.value = form.alt_address_state.value;form.primary_address_postalcode.value =form.alt_address_postalcode.value;form.primary_address_country.value = form.alt_address_country.value;return true; {rdelim} </script>
<!-- End Meta-Data Javascript -->
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () {ldelim} initEditView(document.forms.EditView) {rdelim});
//window.setTimeout(, 100);
window.onbeforeunload = function () {ldelim} return onUnloadEditView(); {rdelim};
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {ldelim}
$(document).ready(function() {ldelim}
    $(".collapseLink,.expandLink").click(function (e) {ldelim} e.preventDefault(); {rdelim});
  {rdelim});
{rdelim}
</script>
{literal}
<script type="text/javascript">

    var selectTab = function(tab) {
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
    };

    var selectTabOnError = function(tab) {
        selectTab(tab);
        $('#EditView_tabs ul.nav.nav-tabs li').removeClass('active');
        $('#EditView_tabs ul.nav.nav-tabs li a').css('color', '');

        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).find('a').first().css('color', 'red');
        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).addClass('active');

    };

    var selectTabOnErrorInputHandle = function(inputHandle) {
        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^detailpanel_(.*)$/)[1];
        selectTabOnError(tab);
    };


    $(function(){
        $('#EditView_tabs ul.nav.nav-tabs li > a[data-toggle="tab"]').click(function(e){
            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(.)*$/)[1]);
                selectTab(tab);
            }
        });

        $('a[data-toggle="collapse-edit"]').click(function(e){
            if($(this).hasClass('collapsed')) {
              // Expand panel
                // Change style of .panel-header
                $(this).removeClass('collapsed');
                // Expand .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').addClass('in');
            } else {
              // Collapse panel
                // Change style of .panel-header
                $(this).addClass('collapsed');
                // Collapse .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').removeClass('in');
            }
        });
    });

    </script>
{/literal}{literal}
<script type="text/javascript">
addForm('EditView');addToValidate('EditView', 'name', 'name', false,'{/literal}{sugar_translate label='LBL_NAME' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Fecha de Creación' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Última Modificación' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'salutation', 'enum', false,'{/literal}{sugar_translate label='LBL_SALUTATION' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'first_name', 'varchar', true,'{/literal}{sugar_translate label='LBL_FIRST_NAME' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'last_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_LAST_NAME' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'full_name', 'fullname', false,'{/literal}{sugar_translate label='LBL_NAME' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'title', 'varchar', false,'{/literal}{sugar_translate label='LBL_TITLE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'photo', 'image', false,'{/literal}{sugar_translate label='LBL_PHOTO' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'department', 'varchar', false,'{/literal}{sugar_translate label='LBL_DEPARTMENT' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'do_not_call', 'bool', false,'{/literal}{sugar_translate label='LBL_DO_NOT_CALL' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'phone_home', 'phone', false,'{/literal}{sugar_translate label='LBL_HOME_PHONE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'email', 'email', false,'{/literal}{sugar_translate label='LBL_ANY_EMAIL' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'phone_mobile', 'phone', false,'{/literal}{sugar_translate label='LBL_MOBILE_PHONE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'phone_work', 'phone', false,'{/literal}{sugar_translate label='LBL_OFFICE_PHONE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'phone_other', 'phone', false,'{/literal}{sugar_translate label='LBL_OTHER_PHONE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'phone_fax', 'phone', false,'{/literal}{sugar_translate label='LBL_FAX_PHONE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'email1', 'varchar', true,'{/literal}{sugar_translate label='LBL_EMAIL_ADDRESS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'email2', 'varchar', false,'{/literal}{sugar_translate label='LBL_OTHER_EMAIL_ADDRESS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'invalid_email', 'bool', false,'{/literal}{sugar_translate label='LBL_INVALID_EMAIL' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'email_opt_out', 'bool', false,'{/literal}{sugar_translate label='LBL_EMAIL_OPT_OUT' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'primary_address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'primary_address_street_2', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET_2' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'primary_address_street_3', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STREET_3' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'primary_address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_CITY' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'primary_address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_STATE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'primary_address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_POSTALCODE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'primary_address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRIMARY_ADDRESS_COUNTRY' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'alt_address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_STREET' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'alt_address_street_2', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_STREET_2' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'alt_address_street_3', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_STREET_3' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'alt_address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_CITY' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'alt_address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_STATE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'alt_address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_POSTALCODE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'alt_address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALT_ADDRESS_COUNTRY' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'assistant', 'varchar', false,'{/literal}{sugar_translate label='LBL_ASSISTANT' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'assistant_phone', 'phone', false,'{/literal}{sugar_translate label='LBL_ASSISTANT_PHONE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'email_addresses_non_primary', 'email', false,'{/literal}{sugar_translate label='LBL_EMAIL_NON_PRIMARY' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'converted', 'bool', false,'{/literal}{sugar_translate label='LBL_CONVERTED' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'refered_by', 'varchar', false,'{/literal}{sugar_translate label='LBL_REFERED_BY' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'lead_source', 'enum', false,'{/literal}{sugar_translate label='LBL_LEAD_SOURCE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'lead_source_description', 'text', false,'{/literal}{sugar_translate label='LBL_LEAD_SOURCE_DESCRIPTION' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'status', 'enum', false,'{/literal}{sugar_translate label='LBL_STATUS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'status_description', 'text', false,'{/literal}{sugar_translate label='LBL_STATUS_DESCRIPTION' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'reports_to_id', 'id', false,'{/literal}{sugar_translate label='LBL_REPORTS_TO_ID' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'report_to_name', 'relate', false,'{/literal}{sugar_translate label='LBL_REPORTS_TO' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'account_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_ACCOUNT_NAME' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'account_description', 'text', false,'{/literal}{sugar_translate label='LBL_ACCOUNT_DESCRIPTION' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'contact_id', 'id', false,'{/literal}{sugar_translate label='LBL_CONTACT_ID' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'account_id', 'id', false,'{/literal}{sugar_translate label='LBL_ACCOUNT_ID' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'opportunity_id', 'id', false,'{/literal}{sugar_translate label='LBL_OPPORTUNITY_ID' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'opportunity_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_OPPORTUNITY_NAME' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'opportunity_amount', 'varchar', false,'{/literal}{sugar_translate label='LBL_OPPORTUNITY_AMOUNT' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'campaign_id', 'id', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_ID' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'campaign_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'c_accept_status_fields', 'relate', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'm_accept_status_fields', 'relate', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'accept_status_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'accept_status_name', 'enum', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'webtolead_email1', 'email', false,'{/literal}{sugar_translate label='LBL_EMAIL_ADDRESS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'webtolead_email2', 'email', false,'{/literal}{sugar_translate label='LBL_OTHER_EMAIL_ADDRESS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'webtolead_email_opt_out', 'bool', false,'{/literal}{sugar_translate label='LBL_EMAIL_OPT_OUT' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'webtolead_invalid_email', 'bool', false,'{/literal}{sugar_translate label='LBL_INVALID_EMAIL' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'birthdate', 'date', false,'{/literal}{sugar_translate label='LBL_BIRTHDATE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'portal_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_PORTAL_NAME' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'portal_app', 'varchar', false,'{/literal}{sugar_translate label='LBL_PORTAL_APP' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'website', 'url', false,'{/literal}{sugar_translate label='LBL_WEBSITE' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'e_invite_status_fields', 'relate', false,'{/literal}{sugar_translate label='LBL_CONT_INVITE_STATUS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'event_status_name', 'enum', false,'{/literal}{sugar_translate label='LBL_LIST_INVITE_STATUS_EVENT' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'event_invite_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_LIST_INVITE_STATUS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'e_accept_status_fields', 'relate', false,'{/literal}{sugar_translate label='LBL_CONT_ACCEPT_STATUS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'event_accept_status', 'enum', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS_EVENT' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'event_status_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_LIST_ACCEPT_STATUS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'comentarios_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_COMENTARIOS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'proyectointeres1_c', 'enum', false,'{/literal}{sugar_translate label='LBL_PROYECTOINTERES1' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'estado_c', 'dynamicenum', false,'{/literal}{sugar_translate label='LBL_ESTADO' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'jjwg_maps_lng_c', 'float', false,'{/literal}{sugar_translate label='LBL_JJWG_MAPS_LNG' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'proyectointeres3_c', 'dynamicenum', false,'{/literal}{sugar_translate label='LBL_PROYECTOINTERES3' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'jjwg_maps_lat_c', 'float', false,'{/literal}{sugar_translate label='LBL_JJWG_MAPS_LAT' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'proyectointeres2_c', 'dynamicenum', false,'{/literal}{sugar_translate label='LBL_PROYECTOINTERES2' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'aos_product_categories_id_c', 'id', false,'{/literal}{sugar_translate label='LBL_PRUEBA_AOS_PRODUCT_CATEGORIES_ID' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'broker_c', 'enum', false,'{/literal}{sugar_translate label='LBL_BROKER' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'prueba_c', 'relate', false,'{/literal}{sugar_translate label='LBL_PRUEBA' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'numerodeidentificacion_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_NUMERODEIDENTIFICACION' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'jjwg_maps_geocode_status_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_JJWG_MAPS_GEOCODE_STATUS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'jjwg_maps_address_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_JJWG_MAPS_ADDRESS' module='Leads' for_js=true}{literal}' );
addToValidate('EditView', 'identificacion_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_IDENTIFICACION' module='Leads' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Leads' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Leads' for_js=true}{literal}', 'assigned_user_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_assigned_user_name']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Sin coincidencias"};</script>{/literal}
