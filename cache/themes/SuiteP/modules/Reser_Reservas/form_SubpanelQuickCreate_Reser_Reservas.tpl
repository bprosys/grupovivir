

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
<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Reser_Reservas'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_Reser_Reservas'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'Reser_Reservas_subpanel_save_button');return false;" type="submit" name="Reser_Reservas_subpanel_save_button" id="Reser_Reservas_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="Reser_Reservas_subpanel_cancel_button" id="Reser_Reservas_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> 
<input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Reser_Reservas'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="Reser_Reservas_subpanel_full_form_button" id="Reser_Reservas_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form">
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Reser_Reservas", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
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
{sugar_translate label='DEFAULT' module='Reser_Reservas'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="DEFAULT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_NAME">

{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='Reser_Reservas'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="name" field="document_name"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.document_name.value) <= 0}
{assign var="value" value=$fields.document_name.default_value }
{else}
{assign var="value" value=$fields.document_name.value }
{/if}  
<input type='text' name='{$fields.document_name.name}' 
id='{$fields.document_name.name}' size='30' 
maxlength='255' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FILE_UPLOAD">

{capture name="label" assign="label"}{sugar_translate label='LBL_FILE_UPLOAD' module='Reser_Reservas'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="file" field="uploadfile"  >
{counter name="panelFieldCount"  print=false}
{if $fields.id.value!=""}
{assign var="type" value="hidden"}
{else}
{assign var="type" value="file"}
{/if}
<input tabindex="0"  name="uploadfile" type = {$type} size="30" maxlength="" onchange="setvalue(this);" value="{$fields.filename.value}">{$fields.filename.value}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_DOC_ACTIVE_DATE">

{capture name="label" assign="label"}{sugar_translate label='LBL_DOC_ACTIVE_DATE' module='Reser_Reservas'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="active_date" colspan='3' >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.active_date.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.active_date.name}" id="{$fields.active_date.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="{$fields.active_date.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.active_date.name}",
form : "form_SubpanelQuickCreate_Reser_Reservas",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.active_date.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
startWeekday: {$CALENDAR_FDOW|default:'0'},
step : 1,
weekNumbers:false
{rdelim}
);
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DESCRIPTION">

{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='Reser_Reservas'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="description"  >
{counter name="panelFieldCount" print=false}

{if empty($fields.description.value)}
{assign var="value" value=$fields.description.default_value }
{else}
{assign var="value" value=$fields.description.value }
{/if}
<textarea  id='{$fields.description.name}' name='{$fields.description.name}'
rows="10"
cols="120"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_AOS_PRODUCTS_RESER_RESERVAS_1_FROM_AOS_PRODUCTS_TITLE">

{capture name="label" assign="label"}{sugar_translate label='LBL_AOS_PRODUCTS_RESER_RESERVAS_1_FROM_AOS_PRODUCTS_TITLE' module='Reser_Reservas'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="aos_products_reser_reservas_1_name"  >
{counter name="panelFieldCount" print=false}

<input type="text" name="{$fields.aos_products_reser_reservas_1_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.aos_products_reser_reservas_1_name.name}" size="" value="{$fields.aos_products_reser_reservas_1_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.aos_products_reser_reservas_1_name.id_name}" 
id="{$fields.aos_products_reser_reservas_1_name.id_name}" 
value="{$fields.aos_products_reser_reservas_1aos_products_ida.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.aos_products_reser_reservas_1_name.name}" id="btn_{$fields.aos_products_reser_reservas_1_name.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.aos_products_reser_reservas_1_name.module}", 
600, 
400, 
"&estado_c_advanced={"Disponible"}", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_Reser_Reservas","field_to_name_array":{"id":"aos_products_reser_reservas_1aos_products_ida","name":"aos_products_reser_reservas_1_name"}}{/literal}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.aos_products_reser_reservas_1_name.name}" id="btn_clr_{$fields.aos_products_reser_reservas_1_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.aos_products_reser_reservas_1_name.name}', '{$fields.aos_products_reser_reservas_1_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.aos_products_reser_reservas_1_name.name}']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_VALOR">

{capture name="label" assign="label"}{sugar_translate label='LBL_VALOR' module='Reser_Reservas'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="valor_c"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.valor_c.value) <= 0}
{assign var="value" value=$fields.valor_c.default_value }
{else}
{assign var="value" value=$fields.valor_c.value }
{/if}  
<input type='text' name='{$fields.valor_c.name}' 
id='{$fields.valor_c.name}' size='30' 
maxlength='255' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_OPPORTUNITIES_RESER_RESERVAS_1_FROM_OPPORTUNITIES_TITLE">

{capture name="label" assign="label"}{sugar_translate label='LBL_OPPORTUNITIES_RESER_RESERVAS_1_FROM_OPPORTUNITIES_TITLE' module='Reser_Reservas'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="opportunities_reser_reservas_1_name" colspan='3' >
{counter name="panelFieldCount" print=false}

<input type="text" name="{$fields.opportunities_reser_reservas_1_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.opportunities_reser_reservas_1_name.name}" size="" value="{$fields.opportunities_reser_reservas_1_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.opportunities_reser_reservas_1_name.id_name}" 
id="{$fields.opportunities_reser_reservas_1_name.id_name}" 
value="{$fields.opportunities_reser_reservas_1opportunities_ida.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.opportunities_reser_reservas_1_name.name}" id="btn_{$fields.opportunities_reser_reservas_1_name.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.opportunities_reser_reservas_1_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_Reser_Reservas","field_to_name_array":{"id":"opportunities_reser_reservas_1opportunities_ida","name":"opportunities_reser_reservas_1_name"}}{/literal}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.opportunities_reser_reservas_1_name.name}" id="btn_clr_{$fields.opportunities_reser_reservas_1_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.opportunities_reser_reservas_1_name.name}', '{$fields.opportunities_reser_reservas_1_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.opportunities_reser_reservas_1_name.name}']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DESCRIPCION">

{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPCION' module='Reser_Reservas'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="descripcion_c"  >
{counter name="panelFieldCount" print=false}

{if empty($fields.descripcion_c.value)}
{assign var="value" value=$fields.descripcion_c.default_value }
{else}
{assign var="value" value=$fields.descripcion_c.value }
{/if}
<textarea  id='{$fields.descripcion_c.name}' name='{$fields.descripcion_c.name}'
rows="4"
cols="20"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DOC_STATUS">

{capture name="label" assign="label"}{sugar_translate label='LBL_DOC_STATUS' module='Reser_Reservas'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="status_id"  >
{counter name="panelFieldCount" print=false}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="{$fields.status_id.name}" 
id="{$fields.status_id.name}" 
title=''       
>
{if isset($fields.status_id.value) && $fields.status_id.value != ''}
{html_options options=$fields.status_id.options selected=$fields.status_id.value}
{else}
{html_options options=$fields.status_id.options selected=$fields.status_id.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.status_id.options }
{capture name="field_val"}{$fields.status_id.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.status_id.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.status_id.name}" 
id="{$fields.status_id.name}" 
title=''          
>
{if isset($fields.status_id.value) && $fields.status_id.value != ''}
{html_options options=$fields.status_id.options selected=$fields.status_id.value}
{else}
{html_options options=$fields.status_id.options selected=$fields.status_id.default}
{/if}
</select>
<input
id="{$fields.status_id.name}-input"
name="{$fields.status_id.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.status_id.name}-image"></button><button type="button"
id="btn-clear-{$fields.status_id.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.status_id.name}-input', '{$fields.status_id.name}');sync_{$fields.status_id.name}()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{literal}
<script>
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
	{/literal}

			{literal}
		(function (){
			var selectElem = document.getElementById("{/literal}{$fields.status_id.name}{literal}");
			
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
			
	SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.status_id.name}-input');
	SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.status_id.name}-image');
	SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.status_id.name}');
	
			{literal}
			function SyncToHidden(selectme){
				var selectElem = document.getElementById("{/literal}{$fields.status_id.name}{literal}");
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
			sync_{/literal}{$fields.status_id.name}{literal} = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("{/literal}{$fields.status_id.name}{literal}");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');

				SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.status_id.name}-input{literal}'))
						SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("{/literal}{$fields.status_id.name}{literal}", syncFromHiddenToWidget);
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
			var selectElem = document.getElementById("{/literal}{$fields.status_id.name}{literal}");
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
</div>                    </div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_EDITVIEW_PANEL1' module='Reser_Reservas'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_0" data-id="LBL_EDITVIEW_PANEL1">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item">
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
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Reser_Reservas'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_Reser_Reservas'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'Reser_Reservas_subpanel_save_button');return false;" type="submit" name="Reser_Reservas_subpanel_save_button" id="Reser_Reservas_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="Reser_Reservas_subpanel_cancel_button" id="Reser_Reservas_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> 
<input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_Reser_Reservas'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="Reser_Reservas_subpanel_full_form_button" id="Reser_Reservas_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form">
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Reser_Reservas", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}
<!-- Begin Meta-Data Javascript -->
{sugar_getscript file="include/javascript/popup_parent_helper.js"}
{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
{sugar_getscript file="modules/Documents/documents.js"}
<!-- End Meta-Data Javascript -->
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("form_SubpanelQuickCreate_Reser_Reservas",
    function () {ldelim} initEditView(document.forms.form_SubpanelQuickCreate_Reser_Reservas) {rdelim});
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
addForm('form_SubpanelQuickCreate_Reser_Reservas');addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'date_entered_date', 'date', false,'Fecha de Creación' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'date_modified_date', 'date', false,'Última Modificación' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='Reser_Reservas' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Reser_Reservas' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Reser_Reservas' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Reser_Reservas' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Reser_Reservas' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Reser_Reservas' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Reser_Reservas' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Reser_Reservas' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'document_name', 'name', true,'{/literal}{sugar_translate label='LBL_NAME' module='Reser_Reservas' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'filename', 'varchar', true,'{/literal}{sugar_translate label='LBL_FILENAME' module='Reser_Reservas' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'file_ext', 'varchar', false,'{/literal}{sugar_translate label='LBL_FILE_EXTENSION' module='Reser_Reservas' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'file_mime_type', 'varchar', false,'{/literal}{sugar_translate label='LBL_MIME' module='Reser_Reservas' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'uploadfile', 'file', true,'{/literal}{sugar_translate label='LBL_FILE_UPLOAD' module='Reser_Reservas' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'active_date', 'date', true,'{/literal}{sugar_translate label='LBL_DOC_ACTIVE_DATE' module='Reser_Reservas' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'exp_date', 'date', false,'{/literal}{sugar_translate label='LBL_DOC_EXP_DATE' module='Reser_Reservas' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'category_id', 'enum', false,'{/literal}{sugar_translate label='LBL_SF_CATEGORY' module='Reser_Reservas' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'subcategory_id', 'enum', false,'{/literal}{sugar_translate label='LBL_SF_SUBCATEGORY' module='Reser_Reservas' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'status_id', 'enum', false,'{/literal}{sugar_translate label='LBL_DOC_STATUS' module='Reser_Reservas' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'status', 'varchar', false,'{/literal}{sugar_translate label='LBL_DOC_STATUS' module='Reser_Reservas' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'descripcion_c', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPCION' module='Reser_Reservas' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'valor_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_VALOR' module='Reser_Reservas' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'opportunities_reser_reservas_1_name', 'relate', true,'{/literal}{sugar_translate label='LBL_OPPORTUNITIES_RESER_RESERVAS_1_FROM_OPPORTUNITIES_TITLE' module='Reser_Reservas' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'aos_products_reser_reservas_1_name', 'relate', true,'{/literal}{sugar_translate label='LBL_AOS_PRODUCTS_RESER_RESERVAS_1_FROM_AOS_PRODUCTS_TITLE' module='Reser_Reservas' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'reser_reservas_aos_product_categories_1_name', 'relate', false,'{/literal}{sugar_translate label='LBL_RESER_RESERVAS_AOS_PRODUCT_CATEGORIES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE' module='Reser_Reservas' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_Reser_Reservas', 'reser_reservas_contacts_1_name', 'relate', false,'{/literal}{sugar_translate label='LBL_RESER_RESERVAS_CONTACTS_1_FROM_CONTACTS_TITLE' module='Reser_Reservas' for_js=true}{literal}' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_Reser_Reservas', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Reser_Reservas' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Reser_Reservas' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_Reser_Reservas', 'opportunities_reser_reservas_1_name', 'alpha', true,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Reser_Reservas' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_OPPORTUNITIES_RESER_RESERVAS_1_FROM_OPPORTUNITIES_TITLE' module='Reser_Reservas' for_js=true}{literal}', 'opportunities_reser_reservas_1opportunities_ida' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_Reser_Reservas', 'aos_products_reser_reservas_1_name', 'alpha', true,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Reser_Reservas' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_AOS_PRODUCTS_RESER_RESERVAS_1_FROM_AOS_PRODUCTS_TITLE' module='Reser_Reservas' for_js=true}{literal}', 'aos_products_reser_reservas_1aos_products_ida' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['form_SubpanelQuickCreate_Reser_Reservas_aos_products_reser_reservas_1_name']={"form":"form_SubpanelQuickCreate_Reser_Reservas","method":"query","modules":["AOS_Products"],"group":"or","field_list":["name","id"],"populate_list":["aos_products_reser_reservas_1_name","aos_products_reser_reservas_1aos_products_ida"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['form_SubpanelQuickCreate_Reser_Reservas_opportunities_reser_reservas_1_name']={"form":"form_SubpanelQuickCreate_Reser_Reservas","method":"query","modules":["Opportunities"],"group":"or","field_list":["name","id"],"populate_list":["opportunities_reser_reservas_1_name","opportunities_reser_reservas_1opportunities_ida"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};</script>{/literal}
