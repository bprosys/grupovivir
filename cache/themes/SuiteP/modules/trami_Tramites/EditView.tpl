

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
<div class="buttons">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('EditView'); {if $isDuplicate}_form.return_id.value=''; {/if}_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && empty($fields.id.value)) && empty($smarty.request.return_id)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && !empty($smarty.request.return_module)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action={$smarty.request.return_action}&module={$smarty.request.return_module|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=trami_Tramites'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {/if}
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=trami_Tramites", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
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
{sugar_translate label='LBL_EDITVIEW_PANEL1' module='trami_Tramites'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="LBL_EDITVIEW_PANEL1">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ACCOUNTS_TRAMI_TRAMITES_1_FROM_ACCOUNTS_TITLE">

{capture name="label" assign="label"}{sugar_translate label='LBL_ACCOUNTS_TRAMI_TRAMITES_1_FROM_ACCOUNTS_TITLE' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="accounts_trami_tramites_1_name"  >
{counter name="panelFieldCount" print=false}

<input type="text" name="{$fields.accounts_trami_tramites_1_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.accounts_trami_tramites_1_name.name}" size="" value="{$fields.accounts_trami_tramites_1_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.accounts_trami_tramites_1_name.id_name}" 
id="{$fields.accounts_trami_tramites_1_name.id_name}" 
value="{$fields.accounts_trami_tramites_1accounts_ida.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.accounts_trami_tramites_1_name.name}" id="btn_{$fields.accounts_trami_tramites_1_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL"}"
onclick='open_popup(
"{$fields.accounts_trami_tramites_1_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"accounts_trami_tramites_1accounts_ida","name":"accounts_trami_tramites_1_name"}}{/literal}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.accounts_trami_tramites_1_name.name}" id="btn_clr_{$fields.accounts_trami_tramites_1_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.accounts_trami_tramites_1_name.name}', '{$fields.accounts_trami_tramites_1_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.accounts_trami_tramites_1_name.name}']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_AOS_PRODUCT_CATEGORIES_TRAMI_TRAMITES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE">

{capture name="label" assign="label"}{sugar_translate label='LBL_AOS_PRODUCT_CATEGORIES_TRAMI_TRAMITES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="aos_product_categories_trami_tramites_1_name"  >
{counter name="panelFieldCount" print=false}

<input type="text" name="{$fields.aos_product_categories_trami_tramites_1_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.aos_product_categories_trami_tramites_1_name.name}" size="" value="{$fields.aos_product_categories_trami_tramites_1_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.aos_product_categories_trami_tramites_1_name.id_name}" 
id="{$fields.aos_product_categories_trami_tramites_1_name.id_name}" 
value="{$fields.aos_produc5787egories_ida.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.aos_product_categories_trami_tramites_1_name.name}" id="btn_{$fields.aos_product_categories_trami_tramites_1_name.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.aos_product_categories_trami_tramites_1_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"aos_produc5787egories_ida","name":"aos_product_categories_trami_tramites_1_name"}}{/literal}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.aos_product_categories_trami_tramites_1_name.name}" id="btn_clr_{$fields.aos_product_categories_trami_tramites_1_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.aos_product_categories_trami_tramites_1_name.name}', '{$fields.aos_product_categories_trami_tramites_1_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.aos_product_categories_trami_tramites_1_name.name}']) != 'undefined'",
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

{capture name="label" assign="label"}{sugar_translate label='LBL_AOS_PRODUCTS_TRAMI_TRAMITES_1_FROM_AOS_PRODUCTS_TITLE' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="aos_products_trami_tramites_1_name" colspan='3' >
{counter name="panelFieldCount" print=false}

<input type="text" name="{$fields.aos_products_trami_tramites_1_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.aos_products_trami_tramites_1_name.name}" size="" value="{$fields.aos_products_trami_tramites_1_name.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.aos_products_trami_tramites_1_name.id_name}" 
id="{$fields.aos_products_trami_tramites_1_name.id_name}" 
value="{$fields.aos_products_trami_tramites_1aos_products_ida.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.aos_products_trami_tramites_1_name.name}" id="btn_{$fields.aos_products_trami_tramites_1_name.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.aos_products_trami_tramites_1_name.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"aos_products_trami_tramites_1aos_products_ida","name":"aos_products_trami_tramites_1_name"}}{/literal}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.aos_products_trami_tramites_1_name.name}" id="btn_clr_{$fields.aos_products_trami_tramites_1_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.aos_products_trami_tramites_1_name.name}', '{$fields.aos_products_trami_tramites_1_name.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.aos_products_trami_tramites_1_name.name}']) != 'undefined'",
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
{sugar_translate label='LBL_EDITVIEW_PANEL2' module='trami_Tramites'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_0" data-id="LBL_EDITVIEW_PANEL2">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_BANCO">

{capture name="label" assign="label"}{sugar_translate label='LBL_BANCO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="dynamicenum" field="banco_c"  >
{counter name="panelFieldCount" print=false}

<script type="text/javascript" src='{sugar_getjspath file="include/SugarFields/Fields/Dynamicenum/SugarFieldDynamicenum.js"}'></script>
{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="{$fields.banco_c.name}"
id="{$fields.banco_c.name}"
title=''           
>
{if isset($fields.banco_c.value) && $fields.banco_c.value != ''}
{html_options options=$fields.banco_c.options selected=$fields.banco_c.value}
{else}
{html_options options=$fields.banco_c.options selected=$fields.banco_c.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.banco_c.options }
{capture name="field_val"}{$fields.banco_c.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.banco_c.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.banco_c.name}"
id="{$fields.banco_c.name}"
title=''          
>
{if isset($fields.banco_c.value) && $fields.banco_c.value != ''}
{html_options options=$fields.banco_c.options selected=$fields.banco_c.value}
{else}
{html_options options=$fields.banco_c.options selected=$fields.banco_c.default}
{/if}
</select>
<input
id="{$fields.banco_c.name}-input"
name="{$fields.banco_c.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.banco_c.name}-image"></button><button type="button"
id="btn-clear-{$fields.banco_c.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.banco_c.name}-input', '{$fields.banco_c.name}');sync_{$fields.banco_c.name}()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{literal}
<script>
SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
{/literal}

{literal}
(function (){
    var selectElem = document.getElementById("{/literal}{$fields.banco_c.name}{literal}");

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

    SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.banco_c.name}-input');
    SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.banco_c.name}-image');
    SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.banco_c.name}');

        {literal}
    function SyncToHidden(selectme){
        var selectElem = document.getElementById("{/literal}{$fields.banco_c.name}{literal}");
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
    sync_{/literal}{$fields.banco_c.name}{literal} = function(){
        SyncToHidden();
    }
    function syncFromHiddenToWidget(){

        var selectElem = document.getElementById("{/literal}{$fields.banco_c.name}{literal}");

        //if select no longer on page, kill timer
        if (selectElem==null || selectElem.options == null)
            return;

        var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');

        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');

        for (i=0;i<selectElem.options.length;i++){

            if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.banco_c.name}-input{literal}'))
                SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
        }
    }

    YAHOO.util.Event.onAvailable("{/literal}{$fields.banco_c.name}{literal}", syncFromHiddenToWidget);
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
            var selectElem = document.getElementById("{/literal}{$fields.banco_c.name}{literal}");
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
    addLoadEvent(function(){literal}{loadDynamicEnum({/literal}"","{$fields.banco_c.name}"{literal})}{/literal});
    if (SUGAR.ajaxUI && SUGAR.ajaxUI.hist_loaded) {literal}{loadDynamicEnum({/literal}"","{$fields.banco_c.name}"{literal})}{/literal}
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_MONTO_FINANCIADO">

{capture name="label" assign="label"}{sugar_translate label='LBL_MONTO_FINANCIADO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="monto_financiado_c"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.monto_financiado_c.value) <= 0}
{assign var="value" value=$fields.monto_financiado_c.default_value }
{else}
{assign var="value" value=$fields.monto_financiado_c.value }
{/if}  
<input type='text' name='{$fields.monto_financiado_c.name}' 
id='{$fields.monto_financiado_c.name}' size='30' maxlength='26' value='{sugar_number_format var=$value}' title='' tabindex='0'
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_TIPOPAGO">

{capture name="label" assign="label"}{sugar_translate label='LBL_TIPOPAGO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="tipopago_c"  >
{counter name="panelFieldCount" print=false}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="{$fields.tipopago_c.name}" 
id="{$fields.tipopago_c.name}" 
title=''       
>
{if isset($fields.tipopago_c.value) && $fields.tipopago_c.value != ''}
{html_options options=$fields.tipopago_c.options selected=$fields.tipopago_c.value}
{else}
{html_options options=$fields.tipopago_c.options selected=$fields.tipopago_c.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.tipopago_c.options }
{capture name="field_val"}{$fields.tipopago_c.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.tipopago_c.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.tipopago_c.name}" 
id="{$fields.tipopago_c.name}" 
title=''          
>
{if isset($fields.tipopago_c.value) && $fields.tipopago_c.value != ''}
{html_options options=$fields.tipopago_c.options selected=$fields.tipopago_c.value}
{else}
{html_options options=$fields.tipopago_c.options selected=$fields.tipopago_c.default}
{/if}
</select>
<input
id="{$fields.tipopago_c.name}-input"
name="{$fields.tipopago_c.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.tipopago_c.name}-image"></button><button type="button"
id="btn-clear-{$fields.tipopago_c.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.tipopago_c.name}-input', '{$fields.tipopago_c.name}');sync_{$fields.tipopago_c.name}()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{literal}
<script>
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
	{/literal}

			{literal}
		(function (){
			var selectElem = document.getElementById("{/literal}{$fields.tipopago_c.name}{literal}");
			
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
			
	SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.tipopago_c.name}-input');
	SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.tipopago_c.name}-image');
	SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.tipopago_c.name}');
	
			{literal}
			function SyncToHidden(selectme){
				var selectElem = document.getElementById("{/literal}{$fields.tipopago_c.name}{literal}");
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
			sync_{/literal}{$fields.tipopago_c.name}{literal} = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("{/literal}{$fields.tipopago_c.name}{literal}");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');

				SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.tipopago_c.name}-input{literal}'))
						SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("{/literal}{$fields.tipopago_c.name}{literal}", syncFromHiddenToWidget);
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
			var selectElem = document.getElementById("{/literal}{$fields.tipopago_c.name}{literal}");
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


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DIAS_TRASCURRIDOS">

{capture name="label" assign="label"}{sugar_translate label='LBL_DIAS_TRASCURRIDOS' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="dias_trascurridos"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.dias_trascurridos.value) <= 0}
{assign var="value" value=$fields.dias_trascurridos.default_value }
{else}
{assign var="value" value=$fields.dias_trascurridos.value }
{/if}  
<input type='text' name='{$fields.dias_trascurridos.name}' 
id='{$fields.dias_trascurridos.name}' size='30' 
maxlength='3' 
value='{$value}' title=''      >
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
{sugar_translate label='DEFAULT' module='trami_Tramites'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_1" data-id="DEFAULT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_NUMERODEFINCA">

{capture name="label" assign="label"}{sugar_translate label='LBL_NUMERODEFINCA' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="numerodefinca_c" colspan='3' >
{counter name="panelFieldCount" print=false}

{if strlen($fields.numerodefinca_c.value) <= 0}
{assign var="value" value=$fields.numerodefinca_c.default_value }
{else}
{assign var="value" value=$fields.numerodefinca_c.value }
{/if}  
<input type='text' name='{$fields.numerodefinca_c.name}' 
id='{$fields.numerodefinca_c.name}' size='30' 
maxlength='255' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FECHA_PERMISO_OCUPACION">

{capture name="label" assign="label"}{sugar_translate label='LBL_FECHA_PERMISO_OCUPACION' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="fecha_permiso_ocupacion_c"  >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.fecha_permiso_ocupacion_c.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.fecha_permiso_ocupacion_c.name}" id="{$fields.fecha_permiso_ocupacion_c.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="{$fields.fecha_permiso_ocupacion_c.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.fecha_permiso_ocupacion_c.name}",
form : "EditView",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.fecha_permiso_ocupacion_c.name}_trigger",
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


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_PERMISO_OCUPACION">

{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_PERMISO_OCUPACION' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_permiso_ocupacion_c"  >
{counter name="panelFieldCount" print=false}

{if empty($fields.comentario_permiso_ocupacion_c.value)}
{assign var="value" value=$fields.comentario_permiso_ocupacion_c.default_value }
{else}
{assign var="value" value=$fields.comentario_permiso_ocupacion_c.value }
{/if}
<textarea  id='{$fields.comentario_permiso_ocupacion_c.name}' name='{$fields.comentario_permiso_ocupacion_c.name}'
rows="4"
cols="20"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FECHA_PERMISO_CONSTRUCCION">

{capture name="label" assign="label"}{sugar_translate label='LBL_FECHA_PERMISO_CONSTRUCCION' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="fecha_permiso_construccion_c"  >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.fecha_permiso_construccion_c.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.fecha_permiso_construccion_c.name}" id="{$fields.fecha_permiso_construccion_c.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="{$fields.fecha_permiso_construccion_c.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.fecha_permiso_construccion_c.name}",
form : "EditView",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.fecha_permiso_construccion_c.name}_trigger",
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


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_PERMISO_CONSTRUCC">

{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_PERMISO_CONSTRUCC' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_permiso_construcc_c"  >
{counter name="panelFieldCount" print=false}

{if empty($fields.comentario_permiso_construcc_c.value)}
{assign var="value" value=$fields.comentario_permiso_construcc_c.default_value }
{else}
{assign var="value" value=$fields.comentario_permiso_construcc_c.value }
{/if}
<textarea  id='{$fields.comentario_permiso_construcc_c.name}' name='{$fields.comentario_permiso_construcc_c.name}'
rows="4"
cols="20"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_CARTA_PROMESA_PAGO">

{capture name="label" assign="label"}{sugar_translate label='LBL_CARTA_PROMESA_PAGO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="carta_promesa_pago_c" colspan='3' >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.carta_promesa_pago_c.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.carta_promesa_pago_c.name}" id="{$fields.carta_promesa_pago_c.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="{$fields.carta_promesa_pago_c.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.carta_promesa_pago_c.name}",
form : "EditView",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.carta_promesa_pago_c.name}_trigger",
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


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ENVIO_PAZ_Y_SALVO_MANT">

{capture name="label" assign="label"}{sugar_translate label='LBL_ENVIO_PAZ_Y_SALVO_MANT' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="envio_paz_y_salvo_mant_c"  >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.envio_paz_y_salvo_mant_c.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.envio_paz_y_salvo_mant_c.name}" id="{$fields.envio_paz_y_salvo_mant_c.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="{$fields.envio_paz_y_salvo_mant_c.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.envio_paz_y_salvo_mant_c.name}",
form : "EditView",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.envio_paz_y_salvo_mant_c.name}_trigger",
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


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_PAZ_SALVO_MANT">

{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_PAZ_SALVO_MANT' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_paz_salvo_mant_c"  >
{counter name="panelFieldCount" print=false}

{if empty($fields.comentario_paz_salvo_mant_c.value)}
{assign var="value" value=$fields.comentario_paz_salvo_mant_c.default_value }
{else}
{assign var="value" value=$fields.comentario_paz_salvo_mant_c.value }
{/if}
<textarea  id='{$fields.comentario_paz_salvo_mant_c.name}' name='{$fields.comentario_paz_salvo_mant_c.name}'
rows="4"
cols="20"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ENVIO_PAZ_Y_SALVO_IDAAN">

{capture name="label" assign="label"}{sugar_translate label='LBL_ENVIO_PAZ_Y_SALVO_IDAAN' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="envio_paz_y_salvo_idaan_c"  >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.envio_paz_y_salvo_idaan_c.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.envio_paz_y_salvo_idaan_c.name}" id="{$fields.envio_paz_y_salvo_idaan_c.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="{$fields.envio_paz_y_salvo_idaan_c.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.envio_paz_y_salvo_idaan_c.name}",
form : "EditView",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.envio_paz_y_salvo_idaan_c.name}_trigger",
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


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIOS_PAZ_SALVO">

{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIOS_PAZ_SALVO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentarios_paz_salvo_c"  >
{counter name="panelFieldCount" print=false}

{if empty($fields.comentarios_paz_salvo_c.value)}
{assign var="value" value=$fields.comentarios_paz_salvo_c.default_value }
{else}
{assign var="value" value=$fields.comentarios_paz_salvo_c.value }
{/if}
<textarea  id='{$fields.comentarios_paz_salvo_c.name}' name='{$fields.comentarios_paz_salvo_c.name}'
rows="4"
cols="20"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FECHA_RECIBO_CONTRATO">

{capture name="label" assign="label"}{sugar_translate label='LBL_FECHA_RECIBO_CONTRATO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="fecha_recibo_contrato_c"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.fecha_recibo_contrato_c.value) <= 0}
{assign var="value" value=$fields.fecha_recibo_contrato_c.default_value }
{else}
{assign var="value" value=$fields.fecha_recibo_contrato_c.value }
{/if}  
<input type='text' name='{$fields.fecha_recibo_contrato_c.name}' 
id='{$fields.fecha_recibo_contrato_c.name}' size='30' 
maxlength='255' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_FECHA_RECIBO_CONT">

{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_FECHA_RECIBO_CONT' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_fecha_recibo_cont_c"  >
{counter name="panelFieldCount" print=false}

{if empty($fields.comentario_fecha_recibo_cont_c.value)}
{assign var="value" value=$fields.comentario_fecha_recibo_cont_c.default_value }
{else}
{assign var="value" value=$fields.comentario_fecha_recibo_cont_c.value }
{/if}
<textarea  id='{$fields.comentario_fecha_recibo_cont_c.name}' name='{$fields.comentario_fecha_recibo_cont_c.name}'
rows="4"
cols="20"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ENVIO_PAZ_Y_SALVO_INMUEBLE">

{capture name="label" assign="label"}{sugar_translate label='LBL_ENVIO_PAZ_Y_SALVO_INMUEBLE' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="envio_paz_y_salvo_inmueble_c"  >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.envio_paz_y_salvo_inmueble_c.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.envio_paz_y_salvo_inmueble_c.name}" id="{$fields.envio_paz_y_salvo_inmueble_c.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="{$fields.envio_paz_y_salvo_inmueble_c.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.envio_paz_y_salvo_inmueble_c.name}",
form : "EditView",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.envio_paz_y_salvo_inmueble_c.name}_trigger",
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


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_PAZ_SALVO_INM">

{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_PAZ_SALVO_INM' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_paz_salvo_inm_c"  >
{counter name="panelFieldCount" print=false}

{if empty($fields.comentario_paz_salvo_inm_c.value)}
{assign var="value" value=$fields.comentario_paz_salvo_inm_c.default_value }
{else}
{assign var="value" value=$fields.comentario_paz_salvo_inm_c.value }
{/if}
<textarea  id='{$fields.comentario_paz_salvo_inm_c.name}' name='{$fields.comentario_paz_salvo_inm_c.name}'
rows="4"
cols="20"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_RECIBIDO_PROTOCOLO">

{capture name="label" assign="label"}{sugar_translate label='LBL_RECIBIDO_PROTOCOLO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="recibido_protocolo_c"  >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.recibido_protocolo_c.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.recibido_protocolo_c.name}" id="{$fields.recibido_protocolo_c.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="{$fields.recibido_protocolo_c.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.recibido_protocolo_c.name}",
form : "EditView",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.recibido_protocolo_c.name}_trigger",
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


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_RECIBO_PROT">

{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_RECIBO_PROT' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_recibo_prot_c"  >
{counter name="panelFieldCount" print=false}

{if empty($fields.comentario_recibo_prot_c.value)}
{assign var="value" value=$fields.comentario_recibo_prot_c.default_value }
{else}
{assign var="value" value=$fields.comentario_recibo_prot_c.value }
{/if}
<textarea  id='{$fields.comentario_recibo_prot_c.name}' name='{$fields.comentario_recibo_prot_c.name}'
rows="4"
cols="20"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ENVIO_PROTOCOLO">

{capture name="label" assign="label"}{sugar_translate label='LBL_ENVIO_PROTOCOLO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="envio_protocolo_c"  >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.envio_protocolo_c.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.envio_protocolo_c.name}" id="{$fields.envio_protocolo_c.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="{$fields.envio_protocolo_c.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.envio_protocolo_c.name}",
form : "EditView",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.envio_protocolo_c.name}_trigger",
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


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_ENVIO_PROTOCOLO">

{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_ENVIO_PROTOCOLO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_envio_protocolo_c"  >
{counter name="panelFieldCount" print=false}

{if empty($fields.comentario_envio_protocolo_c.value)}
{assign var="value" value=$fields.comentario_envio_protocolo_c.default_value }
{else}
{assign var="value" value=$fields.comentario_envio_protocolo_c.value }
{/if}
<textarea  id='{$fields.comentario_envio_protocolo_c.name}' name='{$fields.comentario_envio_protocolo_c.name}'
rows="4"
cols="20"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FECHA_DESEMBOLSO">

{capture name="label" assign="label"}{sugar_translate label='LBL_FECHA_DESEMBOLSO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="fecha_desembolso_c"  >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.fecha_desembolso_c.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.fecha_desembolso_c.name}" id="{$fields.fecha_desembolso_c.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="{$fields.fecha_desembolso_c.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.fecha_desembolso_c.name}",
form : "EditView",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.fecha_desembolso_c.name}_trigger",
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


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_FECHA_DESEMBOLSO">

{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_FECHA_DESEMBOLSO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_fecha_desembolso_c"  >
{counter name="panelFieldCount" print=false}

{if empty($fields.comentario_fecha_desembolso_c.value)}
{assign var="value" value=$fields.comentario_fecha_desembolso_c.default_value }
{else}
{assign var="value" value=$fields.comentario_fecha_desembolso_c.value }
{/if}
<textarea  id='{$fields.comentario_fecha_desembolso_c.name}' name='{$fields.comentario_fecha_desembolso_c.name}'
rows="4"
cols="20"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_VALOR_DESEMBOLSO">

{capture name="label" assign="label"}{sugar_translate label='LBL_VALOR_DESEMBOLSO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="valor_desembolso_c"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.valor_desembolso_c.value) <= 0}
{assign var="value" value=$fields.valor_desembolso_c.default_value }
{else}
{assign var="value" value=$fields.valor_desembolso_c.value }
{/if}  
<input type='text' name='{$fields.valor_desembolso_c.name}' 
id='{$fields.valor_desembolso_c.name}' size='30' maxlength='26' value='{sugar_number_format var=$value}' title='' tabindex='0'
>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_VALOR_DESEMBOLSO">

{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_VALOR_DESEMBOLSO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="comentario_valor_desembolso_c"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.comentario_valor_desembolso_c.value) <= 0}
{assign var="value" value=$fields.comentario_valor_desembolso_c.default_value }
{else}
{assign var="value" value=$fields.comentario_valor_desembolso_c.value }
{/if}  
<input type='text' name='{$fields.comentario_valor_desembolso_c.name}' 
id='{$fields.comentario_valor_desembolso_c.name}' size='30' 
maxlength='255' 
value='{$value}' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FECHA_REGISTRO">

{capture name="label" assign="label"}{sugar_translate label='LBL_FECHA_REGISTRO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="fecha_registro_c"  >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.fecha_registro_c.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.fecha_registro_c.name}" id="{$fields.fecha_registro_c.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="{$fields.fecha_registro_c.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.fecha_registro_c.name}",
form : "EditView",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.fecha_registro_c.name}_trigger",
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


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_FECHA_REGISTRO">

{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_FECHA_REGISTRO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_fecha_registro_c"  >
{counter name="panelFieldCount" print=false}

{if empty($fields.comentario_fecha_registro_c.value)}
{assign var="value" value=$fields.comentario_fecha_registro_c.default_value }
{else}
{assign var="value" value=$fields.comentario_fecha_registro_c.value }
{/if}
<textarea  id='{$fields.comentario_fecha_registro_c.name}' name='{$fields.comentario_fecha_registro_c.name}'
rows="4"
cols="20"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PAGO_DEL_DOSPUNTOCINCO">

{capture name="label" assign="label"}{sugar_translate label='LBL_PAGO_DEL_DOSPUNTOCINCO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="pago_del_dospuntocinco_c"  >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.pago_del_dospuntocinco_c.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.pago_del_dospuntocinco_c.name}" id="{$fields.pago_del_dospuntocinco_c.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="{$fields.pago_del_dospuntocinco_c.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.pago_del_dospuntocinco_c.name}",
form : "EditView",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.pago_del_dospuntocinco_c.name}_trigger",
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


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_2_5">

{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_2_5' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_2_5_c"  >
{counter name="panelFieldCount" print=false}

{if empty($fields.comentario_2_5_c.value)}
{assign var="value" value=$fields.comentario_2_5_c.default_value }
{else}
{assign var="value" value=$fields.comentario_2_5_c.value }
{/if}
<textarea  id='{$fields.comentario_2_5_c.name}' name='{$fields.comentario_2_5_c.name}'
rows="4"
cols="20"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ENVIO_TASA_UNICA_BANCO">

{capture name="label" assign="label"}{sugar_translate label='LBL_ENVIO_TASA_UNICA_BANCO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="envio_tasa_unica_banco_c"  >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.envio_tasa_unica_banco_c.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.envio_tasa_unica_banco_c.name}" id="{$fields.envio_tasa_unica_banco_c.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="{$fields.envio_tasa_unica_banco_c.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.envio_tasa_unica_banco_c.name}",
form : "EditView",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.envio_tasa_unica_banco_c.name}_trigger",
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


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_TASA_UNICA_BCO">

{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_TASA_UNICA_BCO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_tasa_unica_bco_c"  >
{counter name="panelFieldCount" print=false}

{if empty($fields.comentario_tasa_unica_bco_c.value)}
{assign var="value" value=$fields.comentario_tasa_unica_bco_c.default_value }
{else}
{assign var="value" value=$fields.comentario_tasa_unica_bco_c.value }
{/if}
<textarea  id='{$fields.comentario_tasa_unica_bco_c.name}' name='{$fields.comentario_tasa_unica_bco_c.name}'
rows="4"
cols="20"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FECHA_FIRMA_CONTRATO">

{capture name="label" assign="label"}{sugar_translate label='LBL_FECHA_FIRMA_CONTRATO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="fecha_firma_contrato_c"  >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.fecha_firma_contrato_c.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.fecha_firma_contrato_c.name}" id="{$fields.fecha_firma_contrato_c.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="{$fields.fecha_firma_contrato_c.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.fecha_firma_contrato_c.name}",
form : "EditView",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.fecha_firma_contrato_c.name}_trigger",
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


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_FIRMA_CONTRATO">

{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_FIRMA_CONTRATO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_firma_contrato_c"  >
{counter name="panelFieldCount" print=false}

{if empty($fields.comentario_firma_contrato_c.value)}
{assign var="value" value=$fields.comentario_firma_contrato_c.default_value }
{else}
{assign var="value" value=$fields.comentario_firma_contrato_c.value }
{/if}
<textarea  id='{$fields.comentario_firma_contrato_c.name}' name='{$fields.comentario_firma_contrato_c.name}'
rows="4"
cols="20"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_MINUTA_DE_LIB_RECIBIDA">

{capture name="label" assign="label"}{sugar_translate label='LBL_MINUTA_DE_LIB_RECIBIDA' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="minuta_de_lib_recibida_c"  >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.minuta_de_lib_recibida_c.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.minuta_de_lib_recibida_c.name}" id="{$fields.minuta_de_lib_recibida_c.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="{$fields.minuta_de_lib_recibida_c.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.minuta_de_lib_recibida_c.name}",
form : "EditView",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.minuta_de_lib_recibida_c.name}_trigger",
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


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_MIN_LIB_REC">

{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_MIN_LIB_REC' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_min_lib_rec_c"  >
{counter name="panelFieldCount" print=false}

{if empty($fields.comentario_min_lib_rec_c.value)}
{assign var="value" value=$fields.comentario_min_lib_rec_c.default_value }
{else}
{assign var="value" value=$fields.comentario_min_lib_rec_c.value }
{/if}
<textarea  id='{$fields.comentario_min_lib_rec_c.name}' name='{$fields.comentario_min_lib_rec_c.name}'
rows="4"
cols="20"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_MINUTA_DE_VENTAS_RECIBIDA">

{capture name="label" assign="label"}{sugar_translate label='LBL_MINUTA_DE_VENTAS_RECIBIDA' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="minuta_de_ventas_recibida_c"  >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.minuta_de_ventas_recibida_c.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.minuta_de_ventas_recibida_c.name}" id="{$fields.minuta_de_ventas_recibida_c.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="{$fields.minuta_de_ventas_recibida_c.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.minuta_de_ventas_recibida_c.name}",
form : "EditView",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.minuta_de_ventas_recibida_c.name}_trigger",
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


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIO_MIN_VENTAS">

{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_MIN_VENTAS' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentario_min_ventas_c"  >
{counter name="panelFieldCount" print=false}

{if empty($fields.comentario_min_ventas_c.value)}
{assign var="value" value=$fields.comentario_min_ventas_c.default_value }
{else}
{assign var="value" value=$fields.comentario_min_ventas_c.value }
{/if}
<textarea  id='{$fields.comentario_min_ventas_c.name}' name='{$fields.comentario_min_ventas_c.name}'
rows="4"
cols="20"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIOS">

{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIOS' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentarios_c"  >
{counter name="panelFieldCount" print=false}

{if empty($fields.comentarios_c.value)}
{assign var="value" value=$fields.comentarios_c.default_value }
{else}
{assign var="value" value=$fields.comentarios_c.value }
{/if}
<textarea  id='{$fields.comentarios_c.name}' name='{$fields.comentarios_c.name}'
rows="4"
cols="20"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_COMENTARIOS_DEL_BANCO">

{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIOS_DEL_BANCO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="comentarios_del_banco_c"  >
{counter name="panelFieldCount" print=false}

{if empty($fields.comentarios_del_banco_c.value)}
{assign var="value" value=$fields.comentarios_del_banco_c.default_value }
{else}
{assign var="value" value=$fields.comentarios_del_banco_c.value }
{/if}
<textarea  id='{$fields.comentarios_del_banco_c.name}' name='{$fields.comentarios_del_banco_c.name}'
rows="4"
cols="20"
title='' tabindex="0" 
 >{$value}</textarea>
{literal}{/literal}
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
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && empty($fields.id.value)) && empty($smarty.request.return_id)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && !empty($smarty.request.return_module)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action={$smarty.request.return_action}&module={$smarty.request.return_module|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=trami_Tramites'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {/if}
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=trami_Tramites", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
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
addForm('EditView');addToValidate('EditView', 'date_entered_date', 'date', false,'Fecha de Creación' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Última Modificación' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'document_name', 'name', true,'{/literal}{sugar_translate label='LBL_NAME' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'filename', 'varchar', true,'{/literal}{sugar_translate label='LBL_FILENAME' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'file_ext', 'varchar', false,'{/literal}{sugar_translate label='LBL_FILE_EXTENSION' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'file_mime_type', 'varchar', false,'{/literal}{sugar_translate label='LBL_MIME' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'uploadfile', 'file', false,'{/literal}{sugar_translate label='LBL_FILE_UPLOAD' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'active_date', 'date', true,'{/literal}{sugar_translate label='LBL_DOC_ACTIVE_DATE' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'exp_date', 'date', false,'{/literal}{sugar_translate label='LBL_DOC_EXP_DATE' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'category_id', 'enum', false,'{/literal}{sugar_translate label='LBL_SF_CATEGORY' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'subcategory_id', 'enum', false,'{/literal}{sugar_translate label='LBL_SF_SUBCATEGORY' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'status_id', 'enum', false,'{/literal}{sugar_translate label='LBL_DOC_STATUS' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'status', 'varchar', false,'{/literal}{sugar_translate label='LBL_DOC_STATUS' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'envio_paz_y_salvo_mant_c', 'date', false,'{/literal}{sugar_translate label='LBL_ENVIO_PAZ_Y_SALVO_MANT' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'comentario_paz_salvo_mant_c', 'text', false,'{/literal}{sugar_translate label='LBL_COMENTARIO_PAZ_SALVO_MANT' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'banco_c', 'dynamicenum', false,'{/literal}{sugar_translate label='LBL_BANCO' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'comentarios_c', 'text', false,'{/literal}{sugar_translate label='LBL_COMENTARIOS' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'comentario_min_lib_rec_c', 'text', false,'{/literal}{sugar_translate label='LBL_COMENTARIO_MIN_LIB_REC' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'comentario_2_5_c', 'text', false,'{/literal}{sugar_translate label='LBL_COMENTARIO_2_5' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'comentario_permiso_construcc_c', 'text', false,'{/literal}{sugar_translate label='LBL_COMENTARIO_PERMISO_CONSTRUCC' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'monto_financiado_c', 'currency', false,'{/literal}{sugar_translate label='LBL_MONTO_FINANCIADO' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'envio_paz_y_salvo_inmueble_c', 'date', false,'{/literal}{sugar_translate label='LBL_ENVIO_PAZ_Y_SALVO_INMUEBLE' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'fecha_registro_c', 'date', false,'{/literal}{sugar_translate label='LBL_FECHA_REGISTRO' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'aos_product_categories_trami_tramites_1_name', 'relate', false,'{/literal}{sugar_translate label='LBL_AOS_PRODUCT_CATEGORIES_TRAMI_TRAMITES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'comentario_valor_desembolso_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_COMENTARIO_VALOR_DESEMBOLSO' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'carta_promesa_pago_c', 'date', false,'{/literal}{sugar_translate label='LBL_CARTA_PROMESA_PAGO' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'comentario_tasa_unica_bco_c', 'text', false,'{/literal}{sugar_translate label='LBL_COMENTARIO_TASA_UNICA_BCO' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'comentario_paz_salvo_inm_c', 'text', false,'{/literal}{sugar_translate label='LBL_COMENTARIO_PAZ_SALVO_INM' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'valor_desembolso_c', 'currency', false,'{/literal}{sugar_translate label='LBL_VALOR_DESEMBOLSO' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'comentario_recibo_prot_c', 'text', false,'{/literal}{sugar_translate label='LBL_COMENTARIO_RECIBO_PROT' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'envio_paz_y_salvo_idaan_c', 'date', false,'{/literal}{sugar_translate label='LBL_ENVIO_PAZ_Y_SALVO_IDAAN' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'comentario_permiso_ocupacion_c', 'text', false,'{/literal}{sugar_translate label='LBL_COMENTARIO_PERMISO_OCUPACION' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'pago_del_dospuntocinco_c', 'date', false,'{/literal}{sugar_translate label='LBL_PAGO_DEL_DOSPUNTOCINCO' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'comentario_fecha_registro_c', 'text', false,'{/literal}{sugar_translate label='LBL_COMENTARIO_FECHA_REGISTRO' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'comentario_min_ventas_c', 'text', false,'{/literal}{sugar_translate label='LBL_COMENTARIO_MIN_VENTAS' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'comentarios_paz_salvo_c', 'text', false,'{/literal}{sugar_translate label='LBL_COMENTARIOS_PAZ_SALVO' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'fecha_permiso_ocupacion_c', 'date', false,'{/literal}{sugar_translate label='LBL_FECHA_PERMISO_OCUPACION' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'comentario_fecha_recibo_cont_c', 'text', false,'{/literal}{sugar_translate label='LBL_COMENTARIO_FECHA_RECIBO_CONT' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'comentario_firma_contrato_c', 'text', false,'{/literal}{sugar_translate label='LBL_COMENTARIO_FIRMA_CONTRATO' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'comentario_fecha_desembolso_c', 'text', false,'{/literal}{sugar_translate label='LBL_COMENTARIO_FECHA_DESEMBOLSO' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'comentario_envio_protocolo_c', 'text', false,'{/literal}{sugar_translate label='LBL_COMENTARIO_ENVIO_PROTOCOLO' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'numerodefinca_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_NUMERODEFINCA' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'envio_protocolo_c', 'date', false,'{/literal}{sugar_translate label='LBL_ENVIO_PROTOCOLO' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'dias_trascurridos', 'varchar', false,'{/literal}{sugar_translate label='LBL_DIAS_TRASCURRIDOS' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'fecha_firma_contrato_c', 'date', false,'{/literal}{sugar_translate label='LBL_FECHA_FIRMA_CONTRATO' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'minuta_de_lib_recibida_c', 'date', false,'{/literal}{sugar_translate label='LBL_MINUTA_DE_LIB_RECIBIDA' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'minuta_de_ventas_recibida_c', 'date', false,'{/literal}{sugar_translate label='LBL_MINUTA_DE_VENTAS_RECIBIDA' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'tipopago_c', 'enum', false,'{/literal}{sugar_translate label='LBL_TIPOPAGO' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'fecha_permiso_construccion_c', 'date', false,'{/literal}{sugar_translate label='LBL_FECHA_PERMISO_CONSTRUCCION' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'aos_products_trami_tramites_1_name', 'relate', false,'{/literal}{sugar_translate label='LBL_AOS_PRODUCTS_TRAMI_TRAMITES_1_FROM_AOS_PRODUCTS_TITLE' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'currency_id', 'currency_id', false,'{/literal}{sugar_translate label='LBL_CURRENCY' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'recibido_protocolo_c', 'date', false,'{/literal}{sugar_translate label='LBL_RECIBIDO_PROTOCOLO' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'fecha_desembolso_c', 'date', false,'{/literal}{sugar_translate label='LBL_FECHA_DESEMBOLSO' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'comentarios_del_banco_c', 'text', false,'{/literal}{sugar_translate label='LBL_COMENTARIOS_DEL_BANCO' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'fecha_recibo_contrato_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_FECHA_RECIBO_CONTRATO' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'envio_declaracion_jurada_c', 'date', false,'{/literal}{sugar_translate label='LBL_ENVIO_DECLARACION_JURADA' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'accounts_trami_tramites_1_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ACCOUNTS_TRAMI_TRAMITES_1_FROM_ACCOUNTS_TITLE' module='trami_Tramites' for_js=true}{literal}' );
addToValidate('EditView', 'envio_tasa_unica_banco_c', 'date', false,'{/literal}{sugar_translate label='LBL_ENVIO_TASA_UNICA_BANCO' module='trami_Tramites' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='trami_Tramites' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='trami_Tramites' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'aos_product_categories_trami_tramites_1_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='trami_Tramites' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_AOS_PRODUCT_CATEGORIES_TRAMI_TRAMITES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE' module='trami_Tramites' for_js=true}{literal}', 'aos_produc5787egories_ida' );
addToValidateBinaryDependency('EditView', 'aos_products_trami_tramites_1_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='trami_Tramites' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_AOS_PRODUCTS_TRAMI_TRAMITES_1_FROM_AOS_PRODUCTS_TITLE' module='trami_Tramites' for_js=true}{literal}', 'aos_products_trami_tramites_1aos_products_ida' );
addToValidateBinaryDependency('EditView', 'accounts_trami_tramites_1_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='trami_Tramites' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ACCOUNTS_TRAMI_TRAMITES_1_FROM_ACCOUNTS_TITLE' module='trami_Tramites' for_js=true}{literal}', 'accounts_trami_tramites_1accounts_ida' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_accounts_trami_tramites_1_name']={"form":"EditView","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["EditView_accounts_trami_tramites_1_name","accounts_trami_tramites_1accounts_ida"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["accounts_trami_tramites_1accounts_ida"],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['EditView_aos_product_categories_trami_tramites_1_name']={"form":"EditView","method":"query","modules":["AOS_Product_Categories"],"group":"or","field_list":["name","id"],"populate_list":["aos_product_categories_trami_tramites_1_name","aos_produc5787egories_ida"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['EditView_aos_products_trami_tramites_1_name']={"form":"EditView","method":"query","modules":["AOS_Products"],"group":"or","field_list":["name","id"],"populate_list":["aos_products_trami_tramites_1_name","aos_products_trami_tramites_1aos_products_ida"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};</script>{/literal}
