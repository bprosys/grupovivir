

<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td>
<input type="hidden" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" name="record" value="">
{else}
<input type="hidden" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="{$smarty.request.isDuplicate}">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="contact_role">
{if !empty($smarty.request.return_module)}
<input type="hidden" name="relate_to" value="{$smarty.request.return_relationship}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = (this.form) ? this.form : document.forms[0]; {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && empty($fields.id.value)) && empty($smarty.request.return_id)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && !empty($smarty.request.return_module)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action={$smarty.request.return_action}&module={$smarty.request.return_module|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=AOS_Products'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=AOS_Products", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align='right'></td>
<td align='right' class="edit-view-pagination">
{$PAGINATION}
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
{sugar_translate label='DEFAULT' module='AOS_Products'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="DEFAULT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_NAME">

{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='AOS_Products'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="name" field="name"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}  
<input type='text' name='{$fields.name.name}' 
id='{$fields.name.name}' size='30' 
maxlength='255' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_CODIGO_UNIDAD">

{capture name="label" assign="label"}{sugar_translate label='LBL_CODIGO_UNIDAD' module='AOS_Products'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="codigo_unidad_c"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.codigo_unidad_c.value) <= 0}
{assign var="value" value=$fields.codigo_unidad_c.default_value }
{else}
{assign var="value" value=$fields.codigo_unidad_c.value }
{/if}  
<input type='text' name='{$fields.codigo_unidad_c.name}' 
id='{$fields.codigo_unidad_c.name}' size='30' 
maxlength='255' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ESTADO">

{capture name="label" assign="label"}{sugar_translate label='LBL_ESTADO' module='AOS_Products'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="estado_c"  >
{counter name="panelFieldCount" print=false}

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
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_AOS_PRODUCT_CATEGORYS_NAME">

{capture name="label" assign="label"}{sugar_translate label='LBL_AOS_PRODUCT_CATEGORYS_NAME' module='AOS_Products'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="aos_product_category_name"  >
{counter name="panelFieldCount" print=false}

<input type="text" name="{$fields.aos_product_category_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.aos_product_category_name.name}" size="" value="{$fields.aos_product_category_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.aos_product_category_name.id_name}" 
id="{$fields.aos_product_category_name.id_name}" 
value="{$fields.aos_product_category_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.aos_product_category_name.name}" id="btn_{$fields.aos_product_category_name.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.aos_product_category_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"aos_product_category_id","name":"aos_product_category_name"}}{/literal}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.aos_product_category_name.name}" id="btn_clr_{$fields.aos_product_category_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.aos_product_category_name.name}', '{$fields.aos_product_category_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.aos_product_category_name.name}']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_METRAJE">

{capture name="label" assign="label"}{sugar_translate label='LBL_METRAJE' module='AOS_Products'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="metraje_c"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.metraje_c.value) <= 0}
{assign var="value" value=$fields.metraje_c.default_value }
{else}
{assign var="value" value=$fields.metraje_c.value }
{/if}  
<input type='text' name='{$fields.metraje_c.name}' 
id='{$fields.metraje_c.name}' size='30' 
maxlength='255' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PRICE">

{capture name="label" assign="label"}{sugar_translate label='LBL_PRICE' module='AOS_Products'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="price"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.price.value) <= 0}
{assign var="value" value=$fields.price.default_value }
{else}
{assign var="value" value=$fields.price.value }
{/if}  
<input type='text' name='{$fields.price.name}' 
id='{$fields.price.name}' size='30' maxlength='26,6' value='{sugar_number_format var=$value}' title='' tabindex='0'
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DESCRIPTION">

{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='AOS_Products'}{/capture}
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
rows="6"
cols="80"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DESCUENTO">

{capture name="label" assign="label"}{sugar_translate label='LBL_DESCUENTO' module='AOS_Products'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="decimal" field="descuento_c"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.descuento_c.value) <= 0}
{assign var="value" value=$fields.descuento_c.default_value }
{else}
{assign var="value" value=$fields.descuento_c.value }
{/if}  
<input type='text' name='{$fields.descuento_c.name}'
id='{$fields.descuento_c.name}'
size='30'
maxlength='18'value='{sugar_number_format var=$value precision=8 }'
title=''
tabindex='0'
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_MODELO">

{capture name="label" assign="label"}{sugar_translate label='LBL_MODELO' module='AOS_Products'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="modelo_c"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.modelo_c.value) <= 0}
{assign var="value" value=$fields.modelo_c.default_value }
{else}
{assign var="value" value=$fields.modelo_c.value }
{/if}  
<input type='text' name='{$fields.modelo_c.name}' 
id='{$fields.modelo_c.name}' size='30' 
maxlength='255' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PISO">

{capture name="label" assign="label"}{sugar_translate label='LBL_PISO' module='AOS_Products'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="int" field="piso_c"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.piso_c.value) <= 0}
{assign var="value" value=$fields.piso_c.default_value }
{else}
{assign var="value" value=$fields.piso_c.value }
{/if}  
<input type='text' name='{$fields.piso_c.name}' 
id='{$fields.piso_c.name}' size='30' maxlength='255' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='0'    >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_BANOS">

{capture name="label" assign="label"}{sugar_translate label='LBL_BANOS' module='AOS_Products'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="int" field="banos_c"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.banos_c.value) <= 0}
{assign var="value" value=$fields.banos_c.default_value }
{else}
{assign var="value" value=$fields.banos_c.value }
{/if}  
<input type='text' name='{$fields.banos_c.name}' 
id='{$fields.banos_c.name}' size='30' maxlength='255' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='0'    >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DEPOSITOS">

{capture name="label" assign="label"}{sugar_translate label='LBL_DEPOSITOS' module='AOS_Products'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="int" field="depositos_c"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.depositos_c.value) <= 0}
{assign var="value" value=$fields.depositos_c.default_value }
{else}
{assign var="value" value=$fields.depositos_c.value }
{/if}  
<input type='text' name='{$fields.depositos_c.name}' 
id='{$fields.depositos_c.name}' size='30' maxlength='255' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='0'    >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ESTACIONAMIENTOS">

{capture name="label" assign="label"}{sugar_translate label='LBL_ESTACIONAMIENTOS' module='AOS_Products'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="int" field="estacionamientos_c"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.estacionamientos_c.value) <= 0}
{assign var="value" value=$fields.estacionamientos_c.default_value }
{else}
{assign var="value" value=$fields.estacionamientos_c.value }
{/if}  
<input type='text' name='{$fields.estacionamientos_c.name}' 
id='{$fields.estacionamientos_c.name}' size='30' maxlength='255' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='0'    >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_HABITACIONES">

{capture name="label" assign="label"}{sugar_translate label='LBL_HABITACIONES' module='AOS_Products'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="int" field="habitaciones_c"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.habitaciones_c.value) <= 0}
{assign var="value" value=$fields.habitaciones_c.default_value }
{else}
{assign var="value" value=$fields.habitaciones_c.value }
{/if}  
<input type='text' name='{$fields.habitaciones_c.name}' 
id='{$fields.habitaciones_c.name}' size='30' maxlength='255' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='0'    >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_TORRE">

{capture name="label" assign="label"}{sugar_translate label='LBL_TORRE' module='AOS_Products'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="torre_c"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.torre_c.value) <= 0}
{assign var="value" value=$fields.torre_c.default_value }
{else}
{assign var="value" value=$fields.torre_c.value }
{/if}  
<input type='text' name='{$fields.torre_c.name}' 
id='{$fields.torre_c.name}' size='30' 
maxlength='255' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ALA">

{capture name="label" assign="label"}{sugar_translate label='LBL_ALA' module='AOS_Products'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="ala_c"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.ala_c.value) <= 0}
{assign var="value" value=$fields.ala_c.default_value }
{else}
{assign var="value" value=$fields.ala_c.value }
{/if}  
<input type='text' name='{$fields.ala_c.name}' 
id='{$fields.ala_c.name}' size='30' 
maxlength='255' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_TERRAZA">

{capture name="label" assign="label"}{sugar_translate label='LBL_TERRAZA' module='AOS_Products'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="terraza_c"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.terraza_c.value) <= 0}
{assign var="value" value=$fields.terraza_c.default_value }
{else}
{assign var="value" value=$fields.terraza_c.value }
{/if}  
<input type='text' name='{$fields.terraza_c.name}' 
id='{$fields.terraza_c.name}' size='30' 
maxlength='255' 
value='{$value}' title=''      >
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




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_EDITVIEW_PANEL3' module='AOS_Products'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_0" data-id="LBL_EDITVIEW_PANEL3">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_PRODUCT_IMAGE">

{capture name="label" assign="label"}{sugar_translate label='LBL_PRODUCT_IMAGE' module='AOS_Products'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="product_image" colspan='3' >
{counter name="panelFieldCount"  print=false}
{$PRODUCT_IMAGE}
</div>

<!-- [/hide] -->
</div>
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
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && empty($fields.id.value)) && empty($smarty.request.return_id)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && !empty($smarty.request.return_module)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action={$smarty.request.return_action}&module={$smarty.request.return_module|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=AOS_Products'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {/if}
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=AOS_Products", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}
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
addForm('EditView');addToValidate('EditView', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_NAME' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Fecha de Creación' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Fecha de Modificación' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'maincode', 'enum', false,'{/literal}{sugar_translate label='LBL_MAINCODE' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'part_number', 'varchar', false,'{/literal}{sugar_translate label='LBL_PART_NUMBER' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'category', 'enum', false,'{/literal}{sugar_translate label='LBL_CATEGORY' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'type', 'enum', false,'{/literal}{sugar_translate label='LBL_TYPE' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'cost', 'currency', false,'{/literal}{sugar_translate label='LBL_COST' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'cost_usdollar', 'currency', false,'{/literal}{sugar_translate label='LBL_COST_USDOLLAR' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'currency_id', 'id', false,'{/literal}{sugar_translate label='LBL_CURRENCY' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'price', 'currency', true,'{/literal}{sugar_translate label='LBL_PRICE' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'price_usdollar', 'currency', false,'{/literal}{sugar_translate label='LBL_PRICE_USDOLLAR' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'url', 'varchar', false,'{/literal}{sugar_translate label='LBL_URL' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'contact_id', 'id', false,'{/literal}{sugar_translate label='' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'contact', 'relate', false,'{/literal}{sugar_translate label='LBL_CONTACT' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'product_image', 'varchar', false,'{/literal}{sugar_translate label='LBL_PRODUCT_IMAGE' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'file_url', 'function', false,'{/literal}{sugar_translate label='LBL_FILE_URL' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'aos_product_category_name', 'relate', false,'{/literal}{sugar_translate label='LBL_AOS_PRODUCT_CATEGORYS_NAME' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'aos_product_category_id', 'id', false,'{/literal}{sugar_translate label='LBL_AOS_PRODUCT_CATEGORY' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'rvsem_reservas_aos_products_1_name', 'relate', false,'{/literal}{sugar_translate label='LBL_RVSEM_RESERVAS_AOS_PRODUCTS_1_FROM_RVSEM_RESERVAS_TITLE' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'piso_c', 'int', false,'{/literal}{sugar_translate label='LBL_PISO' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'bugs_aos_products_1_name', 'relate', false,'{/literal}{sugar_translate label='LBL_BUGS_AOS_PRODUCTS_1_FROM_BUGS_TITLE' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'documents_aos_products_1_name', 'relate', false,'{/literal}{sugar_translate label='LBL_DOCUMENTS_AOS_PRODUCTS_1_FROM_DOCUMENTS_TITLE' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'descuento_c', 'decimal', false,'{/literal}{sugar_translate label='LBL_DESCUENTO' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'estado_c', 'enum', false,'{/literal}{sugar_translate label='LBL_ESTADO' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'fecha_reserva_c', 'date', false,'{/literal}{sugar_translate label='LBL_FECHA_RESERVA' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'codigo_unidad_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_CODIGO_UNIDAD' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'ala_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_ALA' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'torre_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_TORRE' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'ingen_ingenieria_aos_products_1_name', 'relate', false,'{/literal}{sugar_translate label='LBL_INGEN_INGENIERIA_AOS_PRODUCTS_1_FROM_INGEN_INGENIERIA_TITLE' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'areaconstruida_c', 'int', false,'{/literal}{sugar_translate label='LBL_AREACONSTRUIDA' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'modelo_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_MODELO' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'url_plano_c', 'url', false,'{/literal}{sugar_translate label='LBL_URL_PLANO' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'habitaciones_c', 'int', false,'{/literal}{sugar_translate label='LBL_HABITACIONES' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'plano_c', 'image', false,'{/literal}{sugar_translate label='LBL_PLANO' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'terraza_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_TERRAZA' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'banos_c', 'int', false,'{/literal}{sugar_translate label='LBL_BANOS' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'ing_ingenieria_aos_products_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ING_INGENIERIA_AOS_PRODUCTS_FROM_ING_INGENIERIA_TITLE' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'accounts_aos_products_1_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ACCOUNTS_AOS_PRODUCTS_1_FROM_ACCOUNTS_TITLE' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'metraje_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_METRAJE' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'estacionamientos_c', 'int', false,'{/literal}{sugar_translate label='LBL_ESTACIONAMIENTOS' module='AOS_Products' for_js=true}{literal}' );
addToValidate('EditView', 'depositos_c', 'int', false,'{/literal}{sugar_translate label='LBL_DEPOSITOS' module='AOS_Products' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='AOS_Products' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='AOS_Products' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'aos_product_category_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='AOS_Products' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_AOS_PRODUCT_CATEGORYS_NAME' module='AOS_Products' for_js=true}{literal}', 'aos_product_category_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_aos_product_category_name']={"form":"EditView","method":"query","modules":["AOS_Product_Categories"],"group":"or","field_list":["name","id"],"populate_list":["aos_product_category_name","aos_product_category_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};</script>{/literal}
