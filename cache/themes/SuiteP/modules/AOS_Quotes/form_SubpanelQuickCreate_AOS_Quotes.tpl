

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
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_AOS_Quotes'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_AOS_Quotes'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'AOS_Quotes_subpanel_save_button');return false;" type="submit" name="AOS_Quotes_subpanel_save_button" id="AOS_Quotes_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="AOS_Quotes_subpanel_cancel_button" id="AOS_Quotes_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> 
<input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_AOS_Quotes'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="AOS_Quotes_subpanel_full_form_button" id="AOS_Quotes_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form">
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=AOS_Quotes", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
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
{sugar_translate label='LBL_ACCOUNT_INFORMATION' module='AOS_Quotes'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="LBL_ACCOUNT_INFORMATION">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_NAME">

{capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='AOS_Quotes'}{/capture}
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


<div class="col-xs-12 col-sm-4 label" data-label="LBL_QUOTE_NUMBER">

{capture name="label" assign="label"}{sugar_translate label='LBL_QUOTE_NUMBER' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="int" field="number"  >
{counter name="panelFieldCount"  print=false}
{$fields.number.value}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_OPPORTUNITY">

{capture name="label" assign="label"}{sugar_translate label='LBL_OPPORTUNITY' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="opportunity"  >
{counter name="panelFieldCount" print=false}

<input type="text" name="{$fields.opportunity.name}" class="sqsEnabled" tabindex="0" id="{$fields.opportunity.name}" size="" value="{$fields.opportunity.value}" title='' autocomplete="off"  	 >
<input type="hidden" name="{$fields.opportunity.id_name}" 
id="{$fields.opportunity.id_name}" 
value="{$fields.opportunity_id.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.opportunity.name}" id="btn_{$fields.opportunity.name}" tabindex="0" title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup(
"{$fields.opportunity.module}", 
600, 
400, 
"", 
true, 
false, 
{literal}{"call_back_function":"set_return","form_name":"form_SubpanelQuickCreate_AOS_Quotes","field_to_name_array":{"id":"opportunity_id","name":"opportunity"}}{/literal}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.opportunity.name}" id="btn_clr_{$fields.opportunity.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '{$fields.opportunity.name}', '{$fields.opportunity.id_name}');"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_RELATE_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.opportunity.name}']) != 'undefined'",
		enableQS
);
</script>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_EXPIRATION">

{capture name="label" assign="label"}{sugar_translate label='LBL_EXPIRATION' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="expiration"  >
{counter name="panelFieldCount" print=false}

<span class="dateTime">
{assign var=date_value value=$fields.expiration.value }
<input class="date_input" autocomplete="off" type="text" name="{$fields.expiration.name}" id="{$fields.expiration.name}" value="{$date_value}" title=''  tabindex='0'    size="11" maxlength="10" >
<button type="button" id="{$fields.expiration.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
</span>
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.expiration.name}",
form : "form_SubpanelQuickCreate_AOS_Quotes",
ifFormat : "{$CALENDAR_FORMAT}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.expiration.name}_trigger",
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
<div class="clear"></div>
</div>                    </div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_LINE_ITEMS' module='AOS_Quotes'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_0" data-id="LBL_LINE_ITEMS">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_LINE_ITEMS">

{capture name="label" assign="label"}{sugar_translate label='LBL_LINE_ITEMS' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="function" field="line_items" colspan='3' >
{counter name="panelFieldCount" print=false}
<span id='line_items_span'>
{$fields.line_items.value}</span>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_TOTAL_AMT">

{capture name="label" assign="label"}{sugar_translate label='LBL_TOTAL_AMT' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="total_amt" colspan='3' >
{counter name="panelFieldCount" print=false}

{if strlen($fields.total_amt.value) <= 0}
{assign var="value" value=$fields.total_amt.default_value }
{else}
{assign var="value" value=$fields.total_amt.value }
{/if}  
<input type='text' name='{$fields.total_amt.name}' 
id='{$fields.total_amt.name}' size='30' maxlength='26,6' value='{sugar_number_format var=$value}' title='' tabindex='0'
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_DISCOUNT_AMOUNT">

{capture name="label" assign="label"}{sugar_translate label='LBL_DISCOUNT_AMOUNT' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="discount_amount" colspan='3' >
{counter name="panelFieldCount" print=false}

{if strlen($fields.discount_amount.value) <= 0}
{assign var="value" value=$fields.discount_amount.default_value }
{else}
{assign var="value" value=$fields.discount_amount.value }
{/if}  
<input type='text' name='{$fields.discount_amount.name}' 
id='{$fields.discount_amount.name}' size='30' maxlength='26,6' value='{sugar_number_format var=$value}' title='' tabindex='0'
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_SUBTOTAL_AMOUNT">

{capture name="label" assign="label"}{sugar_translate label='LBL_SUBTOTAL_AMOUNT' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="subtotal_amount" colspan='3' >
{counter name="panelFieldCount" print=false}

{if strlen($fields.subtotal_amount.value) <= 0}
{assign var="value" value=$fields.subtotal_amount.default_value }
{else}
{assign var="value" value=$fields.subtotal_amount.value }
{/if}  
<input type='text' name='{$fields.subtotal_amount.name}' 
id='{$fields.subtotal_amount.name}' size='30' maxlength='26,6' value='{sugar_number_format var=$value}' title='' tabindex='0'
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_TAX_AMOUNT">

{capture name="label" assign="label"}{sugar_translate label='LBL_TAX_AMOUNT' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="tax_amount" colspan='3' >
{counter name="panelFieldCount" print=false}

{if strlen($fields.tax_amount.value) <= 0}
{assign var="value" value=$fields.tax_amount.default_value }
{else}
{assign var="value" value=$fields.tax_amount.value }
{/if}  
<input type='text' name='{$fields.tax_amount.name}' 
id='{$fields.tax_amount.name}' size='30' maxlength='26,6' value='{sugar_number_format var=$value}' title='' tabindex='0'
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_GRAND_TOTAL">

{capture name="label" assign="label"}{sugar_translate label='LBL_GRAND_TOTAL' module='AOS_Quotes'}{/capture}
{$label|strip_semicolon}:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="total_amount" colspan='3' >
{counter name="panelFieldCount" print=false}

{if strlen($fields.total_amount.value) <= 0}
{assign var="value" value=$fields.total_amount.default_value }
{else}
{assign var="value" value=$fields.total_amount.value }
{/if}  
<input type='text' name='{$fields.total_amount.name}' 
id='{$fields.total_amount.name}' size='30' maxlength='26,6' value='{sugar_number_format var=$value}' title='' tabindex='0'
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
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_AOS_Quotes'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_AOS_Quotes'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'AOS_Quotes_subpanel_save_button');return false;" type="submit" name="AOS_Quotes_subpanel_save_button" id="AOS_Quotes_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="AOS_Quotes_subpanel_cancel_button" id="AOS_Quotes_subpanel_cancel_button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> 
<input title="{$APP.LBL_FULL_FORM_BUTTON_TITLE}" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_AOS_Quotes'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="AOS_Quotes_subpanel_full_form_button" id="AOS_Quotes_subpanel_full_form_button" value="{$APP.LBL_FULL_FORM_BUTTON_LABEL}"> <input type="hidden" name="full_form" value="full_form">
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=AOS_Quotes", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("form_SubpanelQuickCreate_AOS_Quotes",
    function () {ldelim} initEditView(document.forms.form_SubpanelQuickCreate_AOS_Quotes) {rdelim});
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
addForm('form_SubpanelQuickCreate_AOS_Quotes');addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_NAME' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'date_entered_date', 'date', false,'Fecha de Creación' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'date_modified_date', 'date', false,'Fecha de Modificación' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'approval_issue', 'text', false,'{/literal}{sugar_translate label='LBL_APPROVAL_ISSUE' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'billing_account_id', 'id', false,'{/literal}{sugar_translate label='' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'billing_account', 'relate', false,'{/literal}{sugar_translate label='LBL_BILLING_ACCOUNT' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'billing_contact_id', 'id', false,'{/literal}{sugar_translate label='' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'billing_contact', 'relate', false,'{/literal}{sugar_translate label='LBL_BILLING_CONTACT' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'billing_address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_STREET' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'billing_address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_CITY' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'billing_address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_STATE' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'billing_address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_POSTALCODE' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'billing_address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_COUNTRY' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'shipping_address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_STREET' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'shipping_address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_CITY' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'shipping_address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_STATE' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'shipping_address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_POSTALCODE' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'shipping_address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_COUNTRY' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'expiration', 'date', true,'{/literal}{sugar_translate label='LBL_EXPIRATION' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'number', 'int', true,'{/literal}{sugar_translate label='LBL_QUOTE_NUMBER' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'opportunity_id', 'id', false,'{/literal}{sugar_translate label='' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'opportunity', 'relate', false,'{/literal}{sugar_translate label='LBL_OPPORTUNITY' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'template_ddown_c[]', 'multienum', false,'{/literal}{sugar_translate label='LBL_TEMPLATE_DDOWN_C' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'line_items', 'function', false,'{/literal}{sugar_translate label='LBL_LINE_ITEMS' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'total_amt', 'currency', false,'{/literal}{sugar_translate label='LBL_TOTAL_AMT' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'total_amt_usdollar', 'currency', false,'{/literal}{sugar_translate label='LBL_TOTAL_AMT_USDOLLAR' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'subtotal_amount', 'currency', false,'{/literal}{sugar_translate label='LBL_SUBTOTAL_AMOUNT' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'subtotal_amount_usdollar', 'currency', false,'{/literal}{sugar_translate label='LBL_SUBTOTAL_AMOUNT_USDOLLAR' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'discount_amount', 'currency', false,'{/literal}{sugar_translate label='LBL_DISCOUNT_AMOUNT' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'discount_amount_usdollar', 'currency', false,'{/literal}{sugar_translate label='LBL_DISCOUNT_AMOUNT_USDOLLAR' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'tax_amount', 'currency', false,'{/literal}{sugar_translate label='LBL_TAX_AMOUNT' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'tax_amount_usdollar', 'currency', false,'{/literal}{sugar_translate label='LBL_TAX_AMOUNT_USDOLLAR' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'shipping_amount', 'currency', false,'{/literal}{sugar_translate label='LBL_SHIPPING_AMOUNT' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'shipping_amount_usdollar', 'currency', false,'{/literal}{sugar_translate label='LBL_SHIPPING_AMOUNT_USDOLLAR' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'shipping_tax', 'enum', false,'{/literal}{sugar_translate label='LBL_SHIPPING_TAX' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'shipping_tax_amt', 'currency', false,'{/literal}{sugar_translate label='LBL_SHIPPING_TAX_AMT' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'shipping_tax_amt_usdollar', 'currency', false,'{/literal}{sugar_translate label='LBL_SHIPPING_TAX_AMT_USDOLLAR' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'total_amount', 'currency', false,'{/literal}{sugar_translate label='LBL_GRAND_TOTAL' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'total_amount_usdollar', 'currency', false,'{/literal}{sugar_translate label='LBL_GRAND_TOTAL_USDOLLAR' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'currency_id', 'id', false,'{/literal}{sugar_translate label='LBL_CURRENCY' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'stage', 'enum', true,'{/literal}{sugar_translate label='LBL_STAGE' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'term', 'enum', false,'{/literal}{sugar_translate label='LBL_TERM' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'terms_c', 'text', false,'{/literal}{sugar_translate label='LBL_TERMS_C' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'approval_status', 'enum', false,'{/literal}{sugar_translate label='LBL_APPROVAL_STATUS' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'invoice_status', 'enum', false,'{/literal}{sugar_translate label='LBL_INVOICE_STATUS' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'subtotal_tax_amount', 'currency', false,'{/literal}{sugar_translate label='LBL_SUBTOTAL_TAX_AMOUNT' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'subtotal_tax_amount_usdollar', 'currency', false,'{/literal}{sugar_translate label='LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'cantidad_c', 'int', false,'{/literal}{sugar_translate label='LBL_CANTIDAD' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'aos_products_aos_quotes_1_name', 'relate', false,'{/literal}{sugar_translate label='LBL_AOS_PRODUCTS_AOS_QUOTES_1_FROM_AOS_PRODUCTS_TITLE' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'valor_c', 'currency', false,'{/literal}{sugar_translate label='LBL_VALOR' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'valor_de_cuota_c', 'currency', false,'{/literal}{sugar_translate label='LBL_VALOR_DE_CUOTA' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'porcentaje_c', 'decimal', false,'{/literal}{sugar_translate label='LBL_PORCENTAJE' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'cuotas_mensuales_c', 'int', false,'{/literal}{sugar_translate label='LBL_CUOTAS_MENSUALES' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'leads_aos_quotes_1_name', 'relate', false,'{/literal}{sugar_translate label='LBL_LEADS_AOS_QUOTES_1_FROM_LEADS_TITLE' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'saldo_abono_inicial_c', 'currency', false,'{/literal}{sugar_translate label='LBL_SALDO_ABONO_INICIAL' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'cuota_inicial_c', 'currency', false,'{/literal}{sugar_translate label='LBL_CUOTA_INICIAL' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'valor_separacion_c', 'currency', false,'{/literal}{sugar_translate label='LBL_VALOR_SEPARACION' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'credito_c', 'currency', false,'{/literal}{sugar_translate label='LBL_CREDITO' module='AOS_Quotes' for_js=true}{literal}' );
addToValidate('form_SubpanelQuickCreate_AOS_Quotes', 'monto_a_firma_de_contrato_c', 'currency', false,'{/literal}{sugar_translate label='LBL_MONTO_A_FIRMA_DE_CONTRATO' module='AOS_Quotes' for_js=true}{literal}' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_AOS_Quotes', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='AOS_Quotes' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='AOS_Quotes' for_js=true}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('form_SubpanelQuickCreate_AOS_Quotes', 'opportunity', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='AOS_Quotes' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_OPPORTUNITY' module='AOS_Quotes' for_js=true}{literal}', 'opportunity_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['form_SubpanelQuickCreate_AOS_Quotes_opportunity']={"form":"form_SubpanelQuickCreate_AOS_Quotes","method":"query","modules":["Opportunities"],"group":"or","field_list":["name","id"],"populate_list":["opportunity","opportunity_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};</script>{/literal}
