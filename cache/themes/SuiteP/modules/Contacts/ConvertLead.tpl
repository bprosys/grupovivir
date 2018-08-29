
<div>&nbsp;</div>
<span class="color">{$ERROR}</span>
<div class="edit-view-row-item">
<input type="hidden" name="convert_create_Contacts" id="convert_create_Contacts"
{if ($def.required && empty($def.select)) || (!empty($def.default_action) && $def.default_action == "create")} value="true" {/if}/>
<input type="hidden" name="opportunity_id" value="{$smarty.request.opportunity_id}">
<input type="hidden" name="case_id" value="{$smarty.request.case_id}">
<input type="hidden" name="bug_id" value="{$smarty.request.bug_id}">
<input type="hidden" name="email_id" value="{$smarty.request.email_id}">
<input type="hidden" name="inbound_email_id" value="{$smarty.request.inbound_email_id}">
{if $def.required }
<script type="text/javascript">
                        mod_array.push('Contacts');//Bug#50590 add all required modules to mod_array
                    </script>
{/if}
{if !$def.required || !empty($def.select)}
<input class="checkbox" type="checkbox" name="newContacts" id="newContacts"
onclick="toggleDisplay('createContacts');if (typeof(addRemoveDropdownElement) == 'function') addRemoveDropdownElement('Contacts');{if !empty($def.select)}toggleContactsSelect();{/if}">
<script type="text/javascript">
                                        {if !empty($def.select)}
                    toggleContactsSelect = function () {ldelim}
                        var inputs = document.getElementById('selectContacts').getElementsByTagName('input');
                        for (var i in inputs) {
                            ldelim}inputs[i].disabled = !inputs[i].disabled;{rdelim}
                    var buttons = document.getElementById('selectContacts').getElementsByTagName('button');
                    for (var i in buttons) {
                        ldelim}buttons[i].disabled = !buttons[i].disabled;{rdelim}
                    {rdelim}
                    {/if}
                                        {if !empty($def.default_action) && $def.default_action == "create"}
                    {if $lead_conv_activity_opt == 'move' || $lead_conv_activity_opt == 'copy' || $lead_conv_activity_opt == ''}
                    YAHOO.util.Event.onContentReady('lead_conv_ac_op_sel', function () {ldelim}
                        {else}
                        YAHOO.util.Event.onContentReady('createContacts', function () {ldelim}
                            {/if}
                            toggleDisplay('createContacts');
                            document.getElementById('newContacts').checked = true;
                            if (typeof(addRemoveDropdownElement) == 'function')
                                addRemoveDropdownElement('Contacts');
                                                        {if !empty($def.select)}
                            toggleContactsSelect();
                            {/if}
                                                        {rdelim});
                    {/if}
                    {/if}
                </script>
{sugar_translate label='LNK_NEW_CONTACT' module='Leads'}
{if !empty($def.select)}
{sugar_translate label='LNK_SELECT_CONTACTS' module='Leads'}
{if $def.required }
<span class="required">*</span>
{/if}
<span id="selectContacts">

<input type="text" name="{$contact_def.report_to_name.name}" class="sqsEnabled" tabindex="" id="{$contact_def.report_to_name.name}" size="" value="{$contact_def.report_to_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$contact_def.report_to_name.id_name}" 
id="{$contact_def.report_to_name.id_name}" 
value="{$contact_def.reports_to_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$contact_def.report_to_name.name}" id="btn_{$contact_def.report_to_name.name}" tabindex="" title="{sugar_translate label="LBL_ACCESSKEY_SELECT_CONTACTS_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_ACCESSKEY_SELECT_CONTACTS_LABEL"}"
onclick='open_popup(
"{$contact_def.report_to_name.module}", 
600, 
400, 
"{$initialFilter}", 
true, 
false, 
{literal}{"call_back_function":"set_return_lead_conv","form_name":"ConvertLead","field_to_name_array":{"id":"reports_to_id","last_name":"report_to_name"}}{/literal}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$contact_def.report_to_name.name}" id="btn_clr_{$contact_def.report_to_name.name}" tabindex="" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$contact_def.report_to_name.name}', '{$contact_def.report_to_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$contact_def.report_to_name.name}']) != 'undefined'",
		enableQS
);
</script>
<script>
                    if (typeof(sqs_objects) == "undefined") sqs_objects = [];
                    sqs_objects['ConvertLead_{$selectFields.Contacts}'] = {ldelim}
                        form: 'ConvertLead',
                        method: 'query',
                        modules: ['Contacts'],
                        group: 'or',
                        field_list: ['name', 'id'],
                        populate_list: ['{$selectFields.Contacts}', '{$contact_def[$selectFields.Contacts].id_name}'],
                        conditions: [{ldelim}'name': 'name', 'op': 'like_custom', 'end': '%', 'value': ''{rdelim}],
                        required_list: ['{$contact_def[$selectFields.Contacts].id_name}'],
                        order: 'name',
                        limit: '10'
                        {rdelim}
                </script>
{/if}
</span>
</div>
<div class=""
id="createContacts"
{if !$def.required || !empty($def.select)}style="display:none"{/if}>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='first_name_label'
scope="row" class="col-xs-12 col-sm-12 label" >
{capture name="label" assign="label"}
{sugar_translate label='LBL_FIRST_NAME' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</div>
<div valign="top"
colspan='3' class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
{counter name="panelFieldCount" print=false}
{html_options name="Contactssalutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input tabindex="0"  name="Contactsfirst_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='identificacion_c_label'
scope="row" class="col-xs-12 col-sm-12 label" >
{capture name="label" assign="label"}
{sugar_translate label='LBL_IDENTIFICACION' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</div>
<div valign="top"
colspan='3' class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
{counter name="panelFieldCount" print=false}

{if strlen($fields.identificacion_c.value) <= 0}
{assign var="value" value=$fields.identificacion_c.default_value }
{else}
{assign var="value" value=$fields.identificacion_c.value }
{/if}  
<input type='text' name='Contactsidentificacion_c' 
id='Contactsidentificacion_c' size='30' 
maxlength='255' 
value='{$value}' title=''      >
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='jjwg_maps_address_c_label'
scope="row" class="col-xs-12 col-sm-12 label" >
{capture name="label" assign="label"}
{sugar_translate label='LBL_PRIMARY_ADDRESS' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</div>
<div valign="top"
colspan='3' class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
{counter name="panelFieldCount" print=false}

{if strlen($fields.jjwg_maps_address_c.value) <= 0}
{assign var="value" value=$fields.jjwg_maps_address_c.default_value }
{else}
{assign var="value" value=$fields.jjwg_maps_address_c.value }
{/if}  
<input type='text' name='Contactsjjwg_maps_address_c' 
id='Contactsjjwg_maps_address_c' size='30' 
maxlength='255' 
value='{$value}' title='Address'      >
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='lead_source_label'
scope="row" class="col-xs-12 col-sm-12 label" >
{capture name="label" assign="label"}
{sugar_translate label='LBL_LEAD_SOURCE' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</div>
<div valign="top"
colspan='3' class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
{counter name="panelFieldCount" print=false}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="Contactslead_source" 
id="Contactslead_source" 
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
<select style='display:none' name="Contactslead_source" 
id="Contactslead_source" 
title=''          
>
{if isset($fields.lead_source.value) && $fields.lead_source.value != ''}
{html_options options=$fields.lead_source.options selected=$fields.lead_source.value}
{else}
{html_options options=$fields.lead_source.options selected=$fields.lead_source.default}
{/if}
</select>
<input
id="Contactslead_source-input"
name="Contactslead_source-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="Contactslead_source-image"></button><button type="button"
id="btn-clear-Contactslead_source-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, 'Contactslead_source-input', 'Contactslead_source');sync_Contactslead_source()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{literal}
<script>
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
	{/literal}

			{literal}
		(function (){
			var selectElem = document.getElementById("{/literal}Contactslead_source{literal}");
			
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
			
	SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#Contactslead_source-input');
	SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#Contactslead_source-image');
	SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#Contactslead_source');
	
			{literal}
			function SyncToHidden(selectme){
				var selectElem = document.getElementById("{/literal}Contactslead_source{literal}");
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
			sync_{/literal}Contactslead_source{literal} = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("{/literal}Contactslead_source{literal}");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');

				SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}Contactslead_source-input{literal}'))
						SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("{/literal}Contactslead_source{literal}", syncFromHiddenToWidget);
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
			var selectElem = document.getElementById("{/literal}Contactslead_source{literal}");
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
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='phone_work_label'
scope="row" class="col-xs-12 col-sm-12 label" >
{capture name="label" assign="label"}
{sugar_translate label='LBL_OFFICE_PHONE' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</div>
<div valign="top"
colspan='3' class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
{counter name="panelFieldCount" print=false}

{if strlen($fields.phone_work.value) <= 0}
{assign var="value" value=$fields.phone_work.default_value }
{else}
{assign var="value" value=$fields.phone_work.value }
{/if}  
<input type='text' name='Contactsphone_work' id='Contactsphone_work' size='30' maxlength='100' value='{$value}' title='' tabindex='0'	  class="phone" >
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='phone_other_label'
scope="row" class="col-xs-12 col-sm-12 label" >
{capture name="label" assign="label"}
{sugar_translate label='LBL_OTHER_PHONE' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</div>
<div valign="top"
colspan='3' class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
{counter name="panelFieldCount" print=false}

{if strlen($fields.phone_other.value) <= 0}
{assign var="value" value=$fields.phone_other.default_value }
{else}
{assign var="value" value=$fields.phone_other.value }
{/if}  
<input type='text' name='Contactsphone_other' id='Contactsphone_other' size='30' maxlength='100' value='{$value}' title='' tabindex='0'	  class="phone" >
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='email1_label'
scope="row" class="col-xs-12 col-sm-12 label" >
{capture name="label" assign="label"}
{sugar_translate label='LBL_EMAIL_ADDRESS' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</div>
<div valign="top"
colspan='3' class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
{counter name="panelFieldCount" print=false}
<span id='email1_span'>
{$fields.email1.value}</span>
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='proyecto_de_interes_c_label'
scope="row" class="col-xs-12 col-sm-12 label" >
{capture name="label" assign="label"}
{sugar_translate label='LBL_PROYECTO_DE_INTERES' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</div>
<div valign="top"
colspan='3' class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
{counter name="panelFieldCount" print=false}

{if strlen($fields.proyecto_de_interes_c.value) <= 0}
{assign var="value" value=$fields.proyecto_de_interes_c.default_value }
{else}
{assign var="value" value=$fields.proyecto_de_interes_c.value }
{/if}  
<input type='text' name='Contactsproyecto_de_interes_c' 
id='Contactsproyecto_de_interes_c' size='30' 
maxlength='255' 
value='{$value}' title=''      >
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='estado_c_label'
scope="row" class="col-xs-12 col-sm-12 label" >
{capture name="label" assign="label"}
{sugar_translate label='LBL_ESTADO' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</div>
<div valign="top"
colspan='3' class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
{counter name="panelFieldCount" print=false}

<script type="text/javascript" src='{sugar_getjspath file="include/SugarFields/Fields/Dynamicenum/SugarFieldDynamicenum.js"}'></script>
{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="Contactsestado_c"
id="Contactsestado_c"
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
<select style='display:none' name="Contactsestado_c"
id="Contactsestado_c"
title=''          
>
{if isset($fields.estado_c.value) && $fields.estado_c.value != ''}
{html_options options=$fields.estado_c.options selected=$fields.estado_c.value}
{else}
{html_options options=$fields.estado_c.options selected=$fields.estado_c.default}
{/if}
</select>
<input
id="Contactsestado_c-input"
name="Contactsestado_c-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="Contactsestado_c-image"></button><button type="button"
id="btn-clear-Contactsestado_c-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, 'Contactsestado_c-input', 'Contactsestado_c');sync_Contactsestado_c()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{literal}
<script>
SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
{/literal}

{literal}
(function (){
    var selectElem = document.getElementById("{/literal}Contactsestado_c{literal}");

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

    SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#Contactsestado_c-input');
    SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#Contactsestado_c-image');
    SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#Contactsestado_c');

        {literal}
    function SyncToHidden(selectme){
        var selectElem = document.getElementById("{/literal}Contactsestado_c{literal}");
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
    sync_{/literal}Contactsestado_c{literal} = function(){
        SyncToHidden();
    }
    function syncFromHiddenToWidget(){

        var selectElem = document.getElementById("{/literal}Contactsestado_c{literal}");

        //if select no longer on page, kill timer
        if (selectElem==null || selectElem.options == null)
            return;

        var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');

        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');

        for (i=0;i<selectElem.options.length;i++){

            if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}Contactsestado_c-input{literal}'))
                SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
        }
    }

    YAHOO.util.Event.onAvailable("{/literal}Contactsestado_c{literal}", syncFromHiddenToWidget);
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
            var selectElem = document.getElementById("{/literal}Contactsestado_c{literal}");
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
    addLoadEvent(function(){literal}{loadDynamicEnum({/literal}"","Contactsestado_c"{literal})}{/literal});
    if (SUGAR.ajaxUI && SUGAR.ajaxUI.hist_loaded) {literal}{loadDynamicEnum({/literal}"","Contactsestado_c"{literal})}{/literal}
</script>
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='description_label'
scope="row" class="col-xs-12 col-sm-12 label" >
{capture name="label" assign="label"}
{sugar_translate label='LBL_DESCRIPTION' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</div>
<div valign="top"
colspan='3' class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
{counter name="panelFieldCount" print=false}

{if empty($fields.description.value)}
{assign var="value" value=$fields.description.default_value }
{else}
{assign var="value" value=$fields.description.value }
{/if}
<textarea  id='Contactsdescription' name='Contactsdescription'
rows="6"
cols="80"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
</div>
</div>
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='_label'
scope="row" class="col-xs-12 col-sm-12 label" >
</div>
<div valign="top"
class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
</div>
</div>
</div>
</div>{literal}
<script type="text/javascript">
addForm('ConvertLead');addToValidateBinaryDependency('ConvertLead', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Contacts' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Contacts' for_js=true}{literal}', 'assigned_user_id' );
</script>{/literal}
