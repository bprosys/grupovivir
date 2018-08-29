

<script language="javascript">
    {literal}
    SUGAR.util.doWhen(function () {
        return $("#contentTable").length == 0;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
{if !$config.enable_action_menu}
<div class="buttons">
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='trami_Tramites'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='trami_Tramites'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} 
{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='trami_Tramites'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} 
</div>                    {/if}
</form>
</div>
</td>
<td align="right" width="20%" class="buttons">{$ADMIN_EDIT}
{$PAGINATION}
</td>
</tr>
</table>
{sugar_include include=$includes}
<div class="detail-view">
<div class="mobile-pagination">{$PAGINATION}</div>

<ul class="nav nav-tabs">

{if $config.enable_action_menu and $config.enable_action_menu != false}
<li role="presentation" class="active">
<a id="tab0" data-toggle="tab" class="hidden-xs">
{sugar_translate label='LBL_EDITVIEW_PANEL1' module='trami_Tramites'}
</a>
<a id="xstab0" href="#" class="visible-xs first-tab dropdown-toggle" data-toggle="dropdown">
{sugar_translate label='LBL_EDITVIEW_PANEL1' module='trami_Tramites'}
</a>
</li>


{/if}
{if $config.enable_action_menu and $config.enable_action_menu != false}
<li id="tab-actions" class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">Acciones<span class="suitepicon suitepicon-action-caret"></span></a>
<ul class="dropdown-menu">
<li>{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='trami_Tramites'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} </li>
<li>{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='trami_Tramites'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} </li>
<li>{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='trami_Tramites'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} </li>
</ul>        </li>
<li class="tab-inline-pagination">
{$PAGINATION}
</li>
{/if}
</ul>
<div class="clearfix"></div>

{if $config.enable_action_menu and $config.enable_action_menu != false}

<div class="tab-content">
{else}

<div class="tab-content" style="padding: 0; border: 0;">
{/if}


{if $config.enable_action_menu and $config.enable_action_menu != false}
<div class="tab-pane-NOBOOTSTRAPTOGGLER active fade in" id='tab-content-0'>





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_ACCOUNTS_TRAMI_TRAMITES_1_FROM_ACCOUNTS_TITLE' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="accounts_trami_tramites_1_name"  >

{if !$fields.accounts_trami_tramites_1_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.accounts_trami_tramites_1accounts_ida.value)}
{capture assign="detail_url"}index.php?module=Accounts&action=DetailView&record={$fields.accounts_trami_tramites_1accounts_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="accounts_trami_tramites_1accounts_ida" class="sugar_field" data-id-value="{$fields.accounts_trami_tramites_1accounts_ida.value}">{$fields.accounts_trami_tramites_1_name.value}</span>
{if !empty($fields.accounts_trami_tramites_1accounts_ida.value)}</a>{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_AOS_PRODUCT_CATEGORIES_TRAMI_TRAMITES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="aos_product_categories_trami_tramites_1_name"  >

{if !$fields.aos_product_categories_trami_tramites_1_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.aos_produc5787egories_ida.value)}
{capture assign="detail_url"}index.php?module=AOS_Product_Categories&action=DetailView&record={$fields.aos_produc5787egories_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="aos_produc5787egories_ida" class="sugar_field" data-id-value="{$fields.aos_produc5787egories_ida.value}">{$fields.aos_product_categories_trami_tramites_1_name.value}</span>
{if !empty($fields.aos_produc5787egories_ida.value)}</a>{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_AOS_PRODUCTS_TRAMI_TRAMITES_1_FROM_AOS_PRODUCTS_TITLE' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="relate" field="aos_products_trami_tramites_1_name" colspan='3' >

{if !$fields.aos_products_trami_tramites_1_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.aos_products_trami_tramites_1aos_products_ida.value)}
{capture assign="detail_url"}index.php?module=AOS_Products&action=DetailView&record={$fields.aos_products_trami_tramites_1aos_products_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="aos_products_trami_tramites_1aos_products_ida" class="sugar_field" data-id-value="{$fields.aos_products_trami_tramites_1aos_products_ida.value}">{$fields.aos_products_trami_tramites_1_name.value}</span>
{if !empty($fields.aos_products_trami_tramites_1aos_products_ida.value)}</a>{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>
                        </div>
{else}

<div class="tab-pane-NOBOOTSTRAPTOGGLER panel-collapse"></div>
{/if}
</div>

<div class="panel-content">
<div>&nbsp;</div>





{if $config.enable_action_menu and $config.enable_action_menu != false}

{else}

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel--1" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_EDITVIEW_PANEL1' module='trami_Tramites'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel--1" data-id="LBL_EDITVIEW_PANEL1">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_ACCOUNTS_TRAMI_TRAMITES_1_FROM_ACCOUNTS_TITLE' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="accounts_trami_tramites_1_name"  >

{if !$fields.accounts_trami_tramites_1_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.accounts_trami_tramites_1accounts_ida.value)}
{capture assign="detail_url"}index.php?module=Accounts&action=DetailView&record={$fields.accounts_trami_tramites_1accounts_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="accounts_trami_tramites_1accounts_ida" class="sugar_field" data-id-value="{$fields.accounts_trami_tramites_1accounts_ida.value}">{$fields.accounts_trami_tramites_1_name.value}</span>
{if !empty($fields.accounts_trami_tramites_1accounts_ida.value)}</a>{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_AOS_PRODUCT_CATEGORIES_TRAMI_TRAMITES_1_FROM_AOS_PRODUCT_CATEGORIES_TITLE' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="aos_product_categories_trami_tramites_1_name"  >

{if !$fields.aos_product_categories_trami_tramites_1_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.aos_produc5787egories_ida.value)}
{capture assign="detail_url"}index.php?module=AOS_Product_Categories&action=DetailView&record={$fields.aos_produc5787egories_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="aos_produc5787egories_ida" class="sugar_field" data-id-value="{$fields.aos_produc5787egories_ida.value}">{$fields.aos_product_categories_trami_tramites_1_name.value}</span>
{if !empty($fields.aos_produc5787egories_ida.value)}</a>{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_AOS_PRODUCTS_TRAMI_TRAMITES_1_FROM_AOS_PRODUCTS_TITLE' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="relate" field="aos_products_trami_tramites_1_name" colspan='3' >

{if !$fields.aos_products_trami_tramites_1_name.hidden}
{counter name="panelFieldCount" print=false}

{if !empty($fields.aos_products_trami_tramites_1aos_products_ida.value)}
{capture assign="detail_url"}index.php?module=AOS_Products&action=DetailView&record={$fields.aos_products_trami_tramites_1aos_products_ida.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="aos_products_trami_tramites_1aos_products_ida" class="sugar_field" data-id-value="{$fields.aos_products_trami_tramites_1aos_products_ida.value}">{$fields.aos_products_trami_tramites_1_name.value}</span>
{if !empty($fields.aos_products_trami_tramites_1aos_products_ida.value)}</a>{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>
                            </div>
</div>
</div>
{/if}





{if $config.enable_action_menu and $config.enable_action_menu != false}

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel-0" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_EDITVIEW_PANEL2' module='trami_Tramites'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel-0"  data-id="LBL_EDITVIEW_PANEL2">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_BANCO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="dynamicenum" field="banco_c"  >

{if !$fields.banco_c.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.banco_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.banco_c.name}" value="{ $fields.banco_c.options }">
{ $fields.banco_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.banco_c.name}" value="{ $fields.banco_c.value }">
{ $fields.banco_c.options[$fields.banco_c.value]}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_MONTO_FINANCIADO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="monto_financiado_c"  >

{if !$fields.monto_financiado_c.hidden}
{counter name="panelFieldCount" print=false}

<span id='{$fields.monto_financiado_c.name}'>
{sugar_number_format var=$fields.monto_financiado_c.value }
</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TIPOPAGO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="enum" field="tipopago_c"  >

{if !$fields.tipopago_c.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.tipopago_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.tipopago_c.name}" value="{ $fields.tipopago_c.options }">
{ $fields.tipopago_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.tipopago_c.name}" value="{ $fields.tipopago_c.value }">
{ $fields.tipopago_c.options[$fields.tipopago_c.value]}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DIAS_TRASCURRIDOS' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="dias_trascurridos"  >

{if !$fields.dias_trascurridos.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.dias_trascurridos.value) <= 0}
{assign var="value" value=$fields.dias_trascurridos.default_value }
{else}
{assign var="value" value=$fields.dias_trascurridos.value }
{/if} 
<span class="sugar_field" id="{$fields.dias_trascurridos.name}">{$fields.dias_trascurridos.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>
                                </div>
</div>
</div>
{else}

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel-0" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_EDITVIEW_PANEL2' module='trami_Tramites'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel-0" data-id="LBL_EDITVIEW_PANEL2">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_BANCO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="dynamicenum" field="banco_c"  >

{if !$fields.banco_c.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.banco_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.banco_c.name}" value="{ $fields.banco_c.options }">
{ $fields.banco_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.banco_c.name}" value="{ $fields.banco_c.value }">
{ $fields.banco_c.options[$fields.banco_c.value]}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_MONTO_FINANCIADO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="monto_financiado_c"  >

{if !$fields.monto_financiado_c.hidden}
{counter name="panelFieldCount" print=false}

<span id='{$fields.monto_financiado_c.name}'>
{sugar_number_format var=$fields.monto_financiado_c.value }
</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_TIPOPAGO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="enum" field="tipopago_c"  >

{if !$fields.tipopago_c.hidden}
{counter name="panelFieldCount" print=false}


{if is_string($fields.tipopago_c.options)}
<input type="hidden" class="sugar_field" id="{$fields.tipopago_c.name}" value="{ $fields.tipopago_c.options }">
{ $fields.tipopago_c.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.tipopago_c.name}" value="{ $fields.tipopago_c.value }">
{ $fields.tipopago_c.options[$fields.tipopago_c.value]}
{/if}
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_DIAS_TRASCURRIDOS' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="dias_trascurridos"  >

{if !$fields.dias_trascurridos.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.dias_trascurridos.value) <= 0}
{assign var="value" value=$fields.dias_trascurridos.default_value }
{else}
{assign var="value" value=$fields.dias_trascurridos.value }
{/if} 
<span class="sugar_field" id="{$fields.dias_trascurridos.name}">{$fields.dias_trascurridos.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>
                            </div>
</div>
</div>
{/if}





{if $config.enable_action_menu and $config.enable_action_menu != false}

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel-1" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='DEFAULT' module='trami_Tramites'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel-1"  data-id="DEFAULT">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_NUMERODEFINCA' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="varchar" field="numerodefinca_c" colspan='3' >

{if !$fields.numerodefinca_c.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.numerodefinca_c.value) <= 0}
{assign var="value" value=$fields.numerodefinca_c.default_value }
{else}
{assign var="value" value=$fields.numerodefinca_c.value }
{/if} 
<span class="sugar_field" id="{$fields.numerodefinca_c.name}">{$fields.numerodefinca_c.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_FECHA_PERMISO_OCUPACION' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="fecha_permiso_ocupacion_c"  >

{if !$fields.fecha_permiso_ocupacion_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.fecha_permiso_ocupacion_c.value) <= 0}
{assign var="value" value=$fields.fecha_permiso_ocupacion_c.default_value }
{else}
{assign var="value" value=$fields.fecha_permiso_ocupacion_c.value }
{/if}
<span class="sugar_field" id="{$fields.fecha_permiso_ocupacion_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_PERMISO_OCUPACION' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_permiso_ocupacion_c"  >

{if !$fields.comentario_permiso_ocupacion_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_permiso_ocupacion_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_permiso_ocupacion_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_FECHA_PERMISO_CONSTRUCCION' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="fecha_permiso_construccion_c"  >

{if !$fields.fecha_permiso_construccion_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.fecha_permiso_construccion_c.value) <= 0}
{assign var="value" value=$fields.fecha_permiso_construccion_c.default_value }
{else}
{assign var="value" value=$fields.fecha_permiso_construccion_c.value }
{/if}
<span class="sugar_field" id="{$fields.fecha_permiso_construccion_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_PERMISO_CONSTRUCC' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_permiso_construcc_c"  >

{if !$fields.comentario_permiso_construcc_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_permiso_construcc_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_permiso_construcc_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_CARTA_PROMESA_PAGO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="date" field="carta_promesa_pago_c" colspan='3' >

{if !$fields.carta_promesa_pago_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.carta_promesa_pago_c.value) <= 0}
{assign var="value" value=$fields.carta_promesa_pago_c.default_value }
{else}
{assign var="value" value=$fields.carta_promesa_pago_c.value }
{/if}
<span class="sugar_field" id="{$fields.carta_promesa_pago_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_ENVIO_PAZ_Y_SALVO_MANT' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="envio_paz_y_salvo_mant_c"  >

{if !$fields.envio_paz_y_salvo_mant_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.envio_paz_y_salvo_mant_c.value) <= 0}
{assign var="value" value=$fields.envio_paz_y_salvo_mant_c.default_value }
{else}
{assign var="value" value=$fields.envio_paz_y_salvo_mant_c.value }
{/if}
<span class="sugar_field" id="{$fields.envio_paz_y_salvo_mant_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_PAZ_SALVO_MANT' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_paz_salvo_mant_c"  >

{if !$fields.comentario_paz_salvo_mant_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_paz_salvo_mant_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_paz_salvo_mant_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_ENVIO_PAZ_Y_SALVO_IDAAN' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="envio_paz_y_salvo_idaan_c"  >

{if !$fields.envio_paz_y_salvo_idaan_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.envio_paz_y_salvo_idaan_c.value) <= 0}
{assign var="value" value=$fields.envio_paz_y_salvo_idaan_c.default_value }
{else}
{assign var="value" value=$fields.envio_paz_y_salvo_idaan_c.value }
{/if}
<span class="sugar_field" id="{$fields.envio_paz_y_salvo_idaan_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIOS_PAZ_SALVO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentarios_paz_salvo_c"  >

{if !$fields.comentarios_paz_salvo_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentarios_paz_salvo_c.name|escape:'html'|url2html|nl2br}">{$fields.comentarios_paz_salvo_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_FECHA_RECIBO_CONTRATO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="fecha_recibo_contrato_c"  >

{if !$fields.fecha_recibo_contrato_c.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.fecha_recibo_contrato_c.value) <= 0}
{assign var="value" value=$fields.fecha_recibo_contrato_c.default_value }
{else}
{assign var="value" value=$fields.fecha_recibo_contrato_c.value }
{/if} 
<span class="sugar_field" id="{$fields.fecha_recibo_contrato_c.name}">{$fields.fecha_recibo_contrato_c.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_FECHA_RECIBO_CONT' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_fecha_recibo_cont_c"  >

{if !$fields.comentario_fecha_recibo_cont_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_fecha_recibo_cont_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_fecha_recibo_cont_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_ENVIO_PAZ_Y_SALVO_INMUEBLE' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="envio_paz_y_salvo_inmueble_c"  >

{if !$fields.envio_paz_y_salvo_inmueble_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.envio_paz_y_salvo_inmueble_c.value) <= 0}
{assign var="value" value=$fields.envio_paz_y_salvo_inmueble_c.default_value }
{else}
{assign var="value" value=$fields.envio_paz_y_salvo_inmueble_c.value }
{/if}
<span class="sugar_field" id="{$fields.envio_paz_y_salvo_inmueble_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_PAZ_SALVO_INM' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_paz_salvo_inm_c"  >

{if !$fields.comentario_paz_salvo_inm_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_paz_salvo_inm_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_paz_salvo_inm_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_RECIBIDO_PROTOCOLO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="recibido_protocolo_c"  >

{if !$fields.recibido_protocolo_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.recibido_protocolo_c.value) <= 0}
{assign var="value" value=$fields.recibido_protocolo_c.default_value }
{else}
{assign var="value" value=$fields.recibido_protocolo_c.value }
{/if}
<span class="sugar_field" id="{$fields.recibido_protocolo_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_RECIBO_PROT' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_recibo_prot_c"  >

{if !$fields.comentario_recibo_prot_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_recibo_prot_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_recibo_prot_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_ENVIO_PROTOCOLO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="envio_protocolo_c"  >

{if !$fields.envio_protocolo_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.envio_protocolo_c.value) <= 0}
{assign var="value" value=$fields.envio_protocolo_c.default_value }
{else}
{assign var="value" value=$fields.envio_protocolo_c.value }
{/if}
<span class="sugar_field" id="{$fields.envio_protocolo_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_ENVIO_PROTOCOLO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_envio_protocolo_c"  >

{if !$fields.comentario_envio_protocolo_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_envio_protocolo_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_envio_protocolo_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_FECHA_DESEMBOLSO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="fecha_desembolso_c"  >

{if !$fields.fecha_desembolso_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.fecha_desembolso_c.value) <= 0}
{assign var="value" value=$fields.fecha_desembolso_c.default_value }
{else}
{assign var="value" value=$fields.fecha_desembolso_c.value }
{/if}
<span class="sugar_field" id="{$fields.fecha_desembolso_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_FECHA_DESEMBOLSO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_fecha_desembolso_c"  >

{if !$fields.comentario_fecha_desembolso_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_fecha_desembolso_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_fecha_desembolso_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_VALOR_DESEMBOLSO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="valor_desembolso_c"  >

{if !$fields.valor_desembolso_c.hidden}
{counter name="panelFieldCount" print=false}

<span id='{$fields.valor_desembolso_c.name}'>
{sugar_number_format var=$fields.valor_desembolso_c.value }
</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_VALOR_DESEMBOLSO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="comentario_valor_desembolso_c"  >

{if !$fields.comentario_valor_desembolso_c.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.comentario_valor_desembolso_c.value) <= 0}
{assign var="value" value=$fields.comentario_valor_desembolso_c.default_value }
{else}
{assign var="value" value=$fields.comentario_valor_desembolso_c.value }
{/if} 
<span class="sugar_field" id="{$fields.comentario_valor_desembolso_c.name}">{$fields.comentario_valor_desembolso_c.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_FECHA_REGISTRO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="fecha_registro_c"  >

{if !$fields.fecha_registro_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.fecha_registro_c.value) <= 0}
{assign var="value" value=$fields.fecha_registro_c.default_value }
{else}
{assign var="value" value=$fields.fecha_registro_c.value }
{/if}
<span class="sugar_field" id="{$fields.fecha_registro_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_FECHA_REGISTRO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_fecha_registro_c"  >

{if !$fields.comentario_fecha_registro_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_fecha_registro_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_fecha_registro_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_PAGO_DEL_DOSPUNTOCINCO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="pago_del_dospuntocinco_c"  >

{if !$fields.pago_del_dospuntocinco_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.pago_del_dospuntocinco_c.value) <= 0}
{assign var="value" value=$fields.pago_del_dospuntocinco_c.default_value }
{else}
{assign var="value" value=$fields.pago_del_dospuntocinco_c.value }
{/if}
<span class="sugar_field" id="{$fields.pago_del_dospuntocinco_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_2_5' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_2_5_c"  >

{if !$fields.comentario_2_5_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_2_5_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_2_5_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_ENVIO_TASA_UNICA_BANCO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="envio_tasa_unica_banco_c"  >

{if !$fields.envio_tasa_unica_banco_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.envio_tasa_unica_banco_c.value) <= 0}
{assign var="value" value=$fields.envio_tasa_unica_banco_c.default_value }
{else}
{assign var="value" value=$fields.envio_tasa_unica_banco_c.value }
{/if}
<span class="sugar_field" id="{$fields.envio_tasa_unica_banco_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_TASA_UNICA_BCO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_tasa_unica_bco_c"  >

{if !$fields.comentario_tasa_unica_bco_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_tasa_unica_bco_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_tasa_unica_bco_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_FECHA_FIRMA_CONTRATO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="fecha_firma_contrato_c"  >

{if !$fields.fecha_firma_contrato_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.fecha_firma_contrato_c.value) <= 0}
{assign var="value" value=$fields.fecha_firma_contrato_c.default_value }
{else}
{assign var="value" value=$fields.fecha_firma_contrato_c.value }
{/if}
<span class="sugar_field" id="{$fields.fecha_firma_contrato_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_FIRMA_CONTRATO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_firma_contrato_c"  >

{if !$fields.comentario_firma_contrato_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_firma_contrato_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_firma_contrato_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_MINUTA_DE_LIB_RECIBIDA' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="minuta_de_lib_recibida_c"  >

{if !$fields.minuta_de_lib_recibida_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.minuta_de_lib_recibida_c.value) <= 0}
{assign var="value" value=$fields.minuta_de_lib_recibida_c.default_value }
{else}
{assign var="value" value=$fields.minuta_de_lib_recibida_c.value }
{/if}
<span class="sugar_field" id="{$fields.minuta_de_lib_recibida_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_MIN_LIB_REC' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_min_lib_rec_c"  >

{if !$fields.comentario_min_lib_rec_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_min_lib_rec_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_min_lib_rec_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_MINUTA_DE_VENTAS_RECIBIDA' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="minuta_de_ventas_recibida_c"  >

{if !$fields.minuta_de_ventas_recibida_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.minuta_de_ventas_recibida_c.value) <= 0}
{assign var="value" value=$fields.minuta_de_ventas_recibida_c.default_value }
{else}
{assign var="value" value=$fields.minuta_de_ventas_recibida_c.value }
{/if}
<span class="sugar_field" id="{$fields.minuta_de_ventas_recibida_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_MIN_VENTAS' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_min_ventas_c"  >

{if !$fields.comentario_min_ventas_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_min_ventas_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_min_ventas_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIOS' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentarios_c"  >

{if !$fields.comentarios_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentarios_c.name|escape:'html'|url2html|nl2br}">{$fields.comentarios_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIOS_DEL_BANCO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentarios_del_banco_c"  >

{if !$fields.comentarios_del_banco_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentarios_del_banco_c.name|escape:'html'|url2html|nl2br}">{$fields.comentarios_del_banco_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>
                                </div>
</div>
</div>
{else}

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel-1" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='DEFAULT' module='trami_Tramites'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel-1" data-id="DEFAULT">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_NUMERODEFINCA' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="varchar" field="numerodefinca_c" colspan='3' >

{if !$fields.numerodefinca_c.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.numerodefinca_c.value) <= 0}
{assign var="value" value=$fields.numerodefinca_c.default_value }
{else}
{assign var="value" value=$fields.numerodefinca_c.value }
{/if} 
<span class="sugar_field" id="{$fields.numerodefinca_c.name}">{$fields.numerodefinca_c.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_FECHA_PERMISO_OCUPACION' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="fecha_permiso_ocupacion_c"  >

{if !$fields.fecha_permiso_ocupacion_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.fecha_permiso_ocupacion_c.value) <= 0}
{assign var="value" value=$fields.fecha_permiso_ocupacion_c.default_value }
{else}
{assign var="value" value=$fields.fecha_permiso_ocupacion_c.value }
{/if}
<span class="sugar_field" id="{$fields.fecha_permiso_ocupacion_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_PERMISO_OCUPACION' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_permiso_ocupacion_c"  >

{if !$fields.comentario_permiso_ocupacion_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_permiso_ocupacion_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_permiso_ocupacion_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_FECHA_PERMISO_CONSTRUCCION' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="fecha_permiso_construccion_c"  >

{if !$fields.fecha_permiso_construccion_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.fecha_permiso_construccion_c.value) <= 0}
{assign var="value" value=$fields.fecha_permiso_construccion_c.default_value }
{else}
{assign var="value" value=$fields.fecha_permiso_construccion_c.value }
{/if}
<span class="sugar_field" id="{$fields.fecha_permiso_construccion_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_PERMISO_CONSTRUCC' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_permiso_construcc_c"  >

{if !$fields.comentario_permiso_construcc_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_permiso_construcc_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_permiso_construcc_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item">


<div class="col-xs-12 col-sm-2 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_CARTA_PROMESA_PAGO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="date" field="carta_promesa_pago_c" colspan='3' >

{if !$fields.carta_promesa_pago_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.carta_promesa_pago_c.value) <= 0}
{assign var="value" value=$fields.carta_promesa_pago_c.default_value }
{else}
{assign var="value" value=$fields.carta_promesa_pago_c.value }
{/if}
<span class="sugar_field" id="{$fields.carta_promesa_pago_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_ENVIO_PAZ_Y_SALVO_MANT' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="envio_paz_y_salvo_mant_c"  >

{if !$fields.envio_paz_y_salvo_mant_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.envio_paz_y_salvo_mant_c.value) <= 0}
{assign var="value" value=$fields.envio_paz_y_salvo_mant_c.default_value }
{else}
{assign var="value" value=$fields.envio_paz_y_salvo_mant_c.value }
{/if}
<span class="sugar_field" id="{$fields.envio_paz_y_salvo_mant_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_PAZ_SALVO_MANT' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_paz_salvo_mant_c"  >

{if !$fields.comentario_paz_salvo_mant_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_paz_salvo_mant_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_paz_salvo_mant_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_ENVIO_PAZ_Y_SALVO_IDAAN' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="envio_paz_y_salvo_idaan_c"  >

{if !$fields.envio_paz_y_salvo_idaan_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.envio_paz_y_salvo_idaan_c.value) <= 0}
{assign var="value" value=$fields.envio_paz_y_salvo_idaan_c.default_value }
{else}
{assign var="value" value=$fields.envio_paz_y_salvo_idaan_c.value }
{/if}
<span class="sugar_field" id="{$fields.envio_paz_y_salvo_idaan_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIOS_PAZ_SALVO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentarios_paz_salvo_c"  >

{if !$fields.comentarios_paz_salvo_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentarios_paz_salvo_c.name|escape:'html'|url2html|nl2br}">{$fields.comentarios_paz_salvo_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_FECHA_RECIBO_CONTRATO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="fecha_recibo_contrato_c"  >

{if !$fields.fecha_recibo_contrato_c.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.fecha_recibo_contrato_c.value) <= 0}
{assign var="value" value=$fields.fecha_recibo_contrato_c.default_value }
{else}
{assign var="value" value=$fields.fecha_recibo_contrato_c.value }
{/if} 
<span class="sugar_field" id="{$fields.fecha_recibo_contrato_c.name}">{$fields.fecha_recibo_contrato_c.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_FECHA_RECIBO_CONT' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_fecha_recibo_cont_c"  >

{if !$fields.comentario_fecha_recibo_cont_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_fecha_recibo_cont_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_fecha_recibo_cont_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_ENVIO_PAZ_Y_SALVO_INMUEBLE' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="envio_paz_y_salvo_inmueble_c"  >

{if !$fields.envio_paz_y_salvo_inmueble_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.envio_paz_y_salvo_inmueble_c.value) <= 0}
{assign var="value" value=$fields.envio_paz_y_salvo_inmueble_c.default_value }
{else}
{assign var="value" value=$fields.envio_paz_y_salvo_inmueble_c.value }
{/if}
<span class="sugar_field" id="{$fields.envio_paz_y_salvo_inmueble_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_PAZ_SALVO_INM' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_paz_salvo_inm_c"  >

{if !$fields.comentario_paz_salvo_inm_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_paz_salvo_inm_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_paz_salvo_inm_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_RECIBIDO_PROTOCOLO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="recibido_protocolo_c"  >

{if !$fields.recibido_protocolo_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.recibido_protocolo_c.value) <= 0}
{assign var="value" value=$fields.recibido_protocolo_c.default_value }
{else}
{assign var="value" value=$fields.recibido_protocolo_c.value }
{/if}
<span class="sugar_field" id="{$fields.recibido_protocolo_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_RECIBO_PROT' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_recibo_prot_c"  >

{if !$fields.comentario_recibo_prot_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_recibo_prot_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_recibo_prot_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_ENVIO_PROTOCOLO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="envio_protocolo_c"  >

{if !$fields.envio_protocolo_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.envio_protocolo_c.value) <= 0}
{assign var="value" value=$fields.envio_protocolo_c.default_value }
{else}
{assign var="value" value=$fields.envio_protocolo_c.value }
{/if}
<span class="sugar_field" id="{$fields.envio_protocolo_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_ENVIO_PROTOCOLO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_envio_protocolo_c"  >

{if !$fields.comentario_envio_protocolo_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_envio_protocolo_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_envio_protocolo_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_FECHA_DESEMBOLSO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="fecha_desembolso_c"  >

{if !$fields.fecha_desembolso_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.fecha_desembolso_c.value) <= 0}
{assign var="value" value=$fields.fecha_desembolso_c.default_value }
{else}
{assign var="value" value=$fields.fecha_desembolso_c.value }
{/if}
<span class="sugar_field" id="{$fields.fecha_desembolso_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_FECHA_DESEMBOLSO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_fecha_desembolso_c"  >

{if !$fields.comentario_fecha_desembolso_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_fecha_desembolso_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_fecha_desembolso_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_VALOR_DESEMBOLSO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="valor_desembolso_c"  >

{if !$fields.valor_desembolso_c.hidden}
{counter name="panelFieldCount" print=false}

<span id='{$fields.valor_desembolso_c.name}'>
{sugar_number_format var=$fields.valor_desembolso_c.value }
</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_VALOR_DESEMBOLSO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="comentario_valor_desembolso_c"  >

{if !$fields.comentario_valor_desembolso_c.hidden}
{counter name="panelFieldCount" print=false}

{if strlen($fields.comentario_valor_desembolso_c.value) <= 0}
{assign var="value" value=$fields.comentario_valor_desembolso_c.default_value }
{else}
{assign var="value" value=$fields.comentario_valor_desembolso_c.value }
{/if} 
<span class="sugar_field" id="{$fields.comentario_valor_desembolso_c.name}">{$fields.comentario_valor_desembolso_c.value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_FECHA_REGISTRO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="fecha_registro_c"  >

{if !$fields.fecha_registro_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.fecha_registro_c.value) <= 0}
{assign var="value" value=$fields.fecha_registro_c.default_value }
{else}
{assign var="value" value=$fields.fecha_registro_c.value }
{/if}
<span class="sugar_field" id="{$fields.fecha_registro_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_FECHA_REGISTRO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_fecha_registro_c"  >

{if !$fields.comentario_fecha_registro_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_fecha_registro_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_fecha_registro_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_PAGO_DEL_DOSPUNTOCINCO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="pago_del_dospuntocinco_c"  >

{if !$fields.pago_del_dospuntocinco_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.pago_del_dospuntocinco_c.value) <= 0}
{assign var="value" value=$fields.pago_del_dospuntocinco_c.default_value }
{else}
{assign var="value" value=$fields.pago_del_dospuntocinco_c.value }
{/if}
<span class="sugar_field" id="{$fields.pago_del_dospuntocinco_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_2_5' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_2_5_c"  >

{if !$fields.comentario_2_5_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_2_5_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_2_5_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_ENVIO_TASA_UNICA_BANCO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="envio_tasa_unica_banco_c"  >

{if !$fields.envio_tasa_unica_banco_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.envio_tasa_unica_banco_c.value) <= 0}
{assign var="value" value=$fields.envio_tasa_unica_banco_c.default_value }
{else}
{assign var="value" value=$fields.envio_tasa_unica_banco_c.value }
{/if}
<span class="sugar_field" id="{$fields.envio_tasa_unica_banco_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_TASA_UNICA_BCO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_tasa_unica_bco_c"  >

{if !$fields.comentario_tasa_unica_bco_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_tasa_unica_bco_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_tasa_unica_bco_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_FECHA_FIRMA_CONTRATO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="fecha_firma_contrato_c"  >

{if !$fields.fecha_firma_contrato_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.fecha_firma_contrato_c.value) <= 0}
{assign var="value" value=$fields.fecha_firma_contrato_c.default_value }
{else}
{assign var="value" value=$fields.fecha_firma_contrato_c.value }
{/if}
<span class="sugar_field" id="{$fields.fecha_firma_contrato_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_FIRMA_CONTRATO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_firma_contrato_c"  >

{if !$fields.comentario_firma_contrato_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_firma_contrato_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_firma_contrato_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_MINUTA_DE_LIB_RECIBIDA' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="minuta_de_lib_recibida_c"  >

{if !$fields.minuta_de_lib_recibida_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.minuta_de_lib_recibida_c.value) <= 0}
{assign var="value" value=$fields.minuta_de_lib_recibida_c.default_value }
{else}
{assign var="value" value=$fields.minuta_de_lib_recibida_c.value }
{/if}
<span class="sugar_field" id="{$fields.minuta_de_lib_recibida_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_MIN_LIB_REC' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_min_lib_rec_c"  >

{if !$fields.comentario_min_lib_rec_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_min_lib_rec_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_min_lib_rec_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_MINUTA_DE_VENTAS_RECIBIDA' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="minuta_de_ventas_recibida_c"  >

{if !$fields.minuta_de_ventas_recibida_c.hidden}
{counter name="panelFieldCount" print=false}


{if strlen($fields.minuta_de_ventas_recibida_c.value) <= 0}
{assign var="value" value=$fields.minuta_de_ventas_recibida_c.default_value }
{else}
{assign var="value" value=$fields.minuta_de_ventas_recibida_c.value }
{/if}
<span class="sugar_field" id="{$fields.minuta_de_ventas_recibida_c.name}">{$value}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIO_MIN_VENTAS' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentario_min_ventas_c"  >

{if !$fields.comentario_min_ventas_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentario_min_ventas_c.name|escape:'html'|url2html|nl2br}">{$fields.comentario_min_ventas_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-1-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIOS' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentarios_c"  >

{if !$fields.comentarios_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentarios_c.name|escape:'html'|url2html|nl2br}">{$fields.comentarios_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item">


<div class="col-xs-12 col-sm-4 label col-2-label">


{capture name="label" assign="label"}{sugar_translate label='LBL_COMENTARIOS_DEL_BANCO' module='trami_Tramites'}{/capture}
{$label|strip_semicolon}:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="text" field="comentarios_del_banco_c"  >

{if !$fields.comentarios_del_banco_c.hidden}
{counter name="panelFieldCount" print=false}

<span class="sugar_field" id="{$fields.comentarios_del_banco_c.name|escape:'html'|url2html|nl2br}">{$fields.comentarios_del_banco_c.value|escape:'html'|escape:'html_entity_decode'|url2html|nl2br}</span>
{/if}

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>
                            </div>
</div>
</div>
{/if}
</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>            <script type="text/javascript" src="include/InlineEditing/inlineEditing.js"></script>
<script type="text/javascript" src="modules/Favorites/favorites.js"></script>
{literal}
<script type="text/javascript">

                    var selectTabDetailView = function(tab) {
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
                    };

                    var selectTabOnError = function(tab) {
                        selectTabDetailView(tab);
                        $('#content ul.nav.nav-tabs > li').removeClass('active');
                        $('#content ul.nav.nav-tabs > li a').css('color', '');

                        $('#content ul.nav.nav-tabs > li').eq(tab).find('a').first().css('color', 'red');
                        $('#content ul.nav.nav-tabs > li').eq(tab).addClass('active');

                    };

                    var selectTabOnErrorInputHandle = function(inputHandle) {
                        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^detailpanel_(.*)$/)[1];
                        selectTabOnError(tab);
                    };


                    $(function(){
                        $('#content ul.nav.nav-tabs > li > a[data-toggle="tab"]').click(function(e){
                            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(.)*$/)[1]);
                                selectTabDetailView(tab);
                            }
                        });
                    });

                </script>
{/literal}