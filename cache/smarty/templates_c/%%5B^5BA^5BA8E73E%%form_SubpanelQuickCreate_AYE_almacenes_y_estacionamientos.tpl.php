<?php /* Smarty version 2.6.29, created on 2018-08-25 15:08:20
         compiled from cache/themes/SuiteP/modules/AYE_almacenes_y_estacionamientos/form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/themes/SuiteP/modules/AYE_almacenes_y_estacionamientos/form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos.tpl', 62, false),array('function', 'sugar_translate', 'cache/themes/SuiteP/modules/AYE_almacenes_y_estacionamientos/form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos.tpl', 83, false),array('function', 'counter', 'cache/themes/SuiteP/modules/AYE_almacenes_y_estacionamientos/form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos.tpl', 105, false),array('function', 'sugar_getjspath', 'cache/themes/SuiteP/modules/AYE_almacenes_y_estacionamientos/form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos.tpl', 135, false),array('function', 'html_options', 'cache/themes/SuiteP/modules/AYE_almacenes_y_estacionamientos/form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos.tpl', 142, false),array('function', 'sugar_getimagepath', 'cache/themes/SuiteP/modules/AYE_almacenes_y_estacionamientos/form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos.tpl', 170, false),array('modifier', 'strip_semicolon', 'cache/themes/SuiteP/modules/AYE_almacenes_y_estacionamientos/form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos.tpl', 100, false),array('modifier', 'lookup', 'cache/themes/SuiteP/modules/AYE_almacenes_y_estacionamientos/form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos.tpl', 167, false),array('modifier', 'count', 'cache/themes/SuiteP/modules/AYE_almacenes_y_estacionamientos/form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos.tpl', 269, false),)), $this); ?>


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
"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'AYE_almacenes_y_estacionamientos_subpanel_save_button');return false;" type="submit" name="AYE_almacenes_y_estacionamientos_subpanel_save_button" id="AYE_almacenes_y_estacionamientos_subpanel_save_button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="AYE_almacenes_y_estacionamientos_subpanel_cancel_button" id="AYE_almacenes_y_estacionamientos_subpanel_cancel_button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_TITLE']; ?>
" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="AYE_almacenes_y_estacionamientos_subpanel_full_form_button" id="AYE_almacenes_y_estacionamientos_subpanel_full_form_button" value="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_LABEL']; ?>
"> <input type="hidden" name="full_form" value="full_form">
<?php if ($this->_tpl_vars['showVCRControl']): ?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $this->_tpl_vars['app_strings']['LBL_SAVE_AND_CONTINUE']; ?>
" onClick="SUGAR.saveAndContinue(this);">
<?php echo $this->_tpl_vars['APP']['LBL_SAVE_AND_CONTINUE']; ?>

</button>
<?php endif; ?>
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')): ?><?php if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=AYE_almacenes_y_estacionamientos", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
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
<?php echo smarty_function_sugar_translate(array('label' => 'DEFAULT','module' => 'AYE_almacenes_y_estacionamientos'), $this);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="DEFAULT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_CODIGO">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_CODIGO','module' => 'AYE_almacenes_y_estacionamientos'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="codigo"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['codigo']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['codigo']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['codigo']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['codigo']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['codigo']['name']; ?>
' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_TIPO">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_TIPO','module' => 'AYE_almacenes_y_estacionamientos'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="dynamicenum" field="tipo_c"  >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Dynamicenum/SugarFieldDynamicenum.js"), $this);?>
'></script>
<?php if (! isset ( $this->_tpl_vars['config']['enable_autocomplete'] ) || $this->_tpl_vars['config']['enable_autocomplete'] == false): ?>
<select name="<?php echo $this->_tpl_vars['fields']['tipo_c']['name']; ?>
"
id="<?php echo $this->_tpl_vars['fields']['tipo_c']['name']; ?>
"
title=''           
>
<?php if (isset ( $this->_tpl_vars['fields']['tipo_c']['value'] ) && $this->_tpl_vars['fields']['tipo_c']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['tipo_c']['options'],'selected' => $this->_tpl_vars['fields']['tipo_c']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['tipo_c']['options'],'selected' => $this->_tpl_vars['fields']['tipo_c']['default']), $this);?>

<?php endif; ?>
</select>
<?php else: ?>
<?php $this->assign('field_options', $this->_tpl_vars['fields']['tipo_c']['options']); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['tipo_c']['value']; ?>
<?php $this->_smarty_vars['capture']['field_val'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('field_val', $this->_smarty_vars['capture']['field_val']); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['tipo_c']['name']; ?>
<?php $this->_smarty_vars['capture']['ac_key'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('ac_key', $this->_smarty_vars['capture']['ac_key']); ?>
<select style='display:none' name="<?php echo $this->_tpl_vars['fields']['tipo_c']['name']; ?>
"
id="<?php echo $this->_tpl_vars['fields']['tipo_c']['name']; ?>
"
title=''          
>
<?php if (isset ( $this->_tpl_vars['fields']['tipo_c']['value'] ) && $this->_tpl_vars['fields']['tipo_c']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['tipo_c']['options'],'selected' => $this->_tpl_vars['fields']['tipo_c']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['tipo_c']['options'],'selected' => $this->_tpl_vars['fields']['tipo_c']['default']), $this);?>

<?php endif; ?>
</select>
<input
id="<?php echo $this->_tpl_vars['fields']['tipo_c']['name']; ?>
-input"
name="<?php echo $this->_tpl_vars['fields']['tipo_c']['name']; ?>
-input"
size="30"
value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_val'])) ? $this->_run_mod_handler('lookup', true, $_tmp, $this->_tpl_vars['field_options']) : smarty_modifier_lookup($_tmp, $this->_tpl_vars['field_options'])); ?>
"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-down.png"), $this);?>
" id="<?php echo $this->_tpl_vars['fields']['tipo_c']['name']; ?>
-image"></button><button type="button"
id="btn-clear-<?php echo $this->_tpl_vars['fields']['tipo_c']['name']; ?>
-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['tipo_c']['name']; ?>
-input', '<?php echo $this->_tpl_vars['fields']['tipo_c']['name']; ?>
');sync_<?php echo $this->_tpl_vars['fields']['tipo_c']['name']; ?>
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
<?php echo $this->_tpl_vars['fields']['tipo_c']['name']; ?>
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
.inputNode = Y.one('#<?php echo $this->_tpl_vars['fields']['tipo_c']['name']; ?>
-input');
    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputImage = Y.one('#<?php echo $this->_tpl_vars['fields']['tipo_c']['name']; ?>
-image');
    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputHidden = Y.one('#<?php echo $this->_tpl_vars['fields']['tipo_c']['name']; ?>
');

        <?php echo '
    function SyncToHidden(selectme){
        var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['tipo_c']['name']; ?>
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
<?php echo $this->_tpl_vars['fields']['tipo_c']['name']; ?>
<?php echo ' = function(){
        SyncToHidden();
    }
    function syncFromHiddenToWidget(){

        var selectElem = document.getElementById("'; ?>
<?php echo $this->_tpl_vars['fields']['tipo_c']['name']; ?>
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
<?php echo $this->_tpl_vars['fields']['tipo_c']['name']; ?>
-input<?php echo '\'))
                SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.set(\'value\',selectElem.options[i].innerHTML);
        }
    }

    YAHOO.util.Event.onAvailable("'; ?>
<?php echo $this->_tpl_vars['fields']['tipo_c']['name']; ?>
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
<?php echo $this->_tpl_vars['fields']['tipo_c']['name']; ?>
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
"","<?php echo $this->_tpl_vars['fields']['tipo_c']['name']; ?>
"<?php echo ')}'; ?>
);
    if (SUGAR.ajaxUI && SUGAR.ajaxUI.hist_loaded) <?php echo '{loadDynamicEnum('; ?>
"","<?php echo $this->_tpl_vars['fields']['tipo_c']['name']; ?>
"<?php echo ')}'; ?>

</script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_DESCRIPCION">

<?php ob_start(); ?><?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPCION','module' => 'AYE_almacenes_y_estacionamientos'), $this);?>
<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:

</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="descripcion" colspan='3' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['descripcion']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['descripcion']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['descripcion']['value']); ?>
<?php endif; ?>
<textarea  id='<?php echo $this->_tpl_vars['fields']['descripcion']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['descripcion']['name']; ?>
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
"  class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos'); disableOnUnloadEditView(); _form.action.value='Save';if(check_form('form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'AYE_almacenes_y_estacionamientos_subpanel_save_button');return false;" type="submit" name="AYE_almacenes_y_estacionamientos_subpanel_save_button" id="AYE_almacenes_y_estacionamientos_subpanel_save_button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
"><?php endif; ?> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" class="button" onclick="return SUGAR.subpanelUtils.cancelCreate($(this).attr('id'));return false;" type="submit" name="AYE_almacenes_y_estacionamientos_subpanel_cancel_button" id="AYE_almacenes_y_estacionamientos_subpanel_cancel_button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
"> 
<input title="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_TITLE']; ?>
" class="button" onclick="var _form = document.getElementById('form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos'); disableOnUnloadEditView(_form); _form.return_action.value='DetailView'; _form.action.value='EditView'; if(typeof(_form.to_pdf)!='undefined') _form.to_pdf.value='0';" type="submit" name="AYE_almacenes_y_estacionamientos_subpanel_full_form_button" id="AYE_almacenes_y_estacionamientos_subpanel_full_form_button" value="<?php echo $this->_tpl_vars['APP']['LBL_FULL_FORM_BUTTON_LABEL']; ?>
"> <input type="hidden" name="full_form" value="full_form">
<?php if ($this->_tpl_vars['showVCRControl']): ?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $this->_tpl_vars['app_strings']['LBL_SAVE_AND_CONTINUE']; ?>
" onClick="SUGAR.saveAndContinue(this);">
<?php echo $this->_tpl_vars['APP']['LBL_SAVE_AND_CONTINUE']; ?>

</button>
<?php endif; ?>
<?php if ($this->_tpl_vars['bean']->aclAccess('detail')): ?><?php if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=AYE_almacenes_y_estacionamientos", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif; ?><?php endif; ?>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block']; ?>

<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
</script>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos",
    function () { initEditView(document.forms.form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos) });
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
addForm(\'form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos\');addToValidate(\'form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos\', \'name\', \'name\', true,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'AYE_almacenes_y_estacionamientos','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos\', \'date_entered_date\', \'date\', false,\'Fecha de Creación\' );
addToValidate(\'form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos\', \'date_modified_date\', \'date\', false,\'Última Modificación\' );
addToValidate(\'form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos\', \'modified_user_id\', \'assigned_user_name\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED','module' => 'AYE_almacenes_y_estacionamientos','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos\', \'modified_by_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'AYE_almacenes_y_estacionamientos','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos\', \'created_by\', \'assigned_user_name\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'AYE_almacenes_y_estacionamientos','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos\', \'created_by_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'AYE_almacenes_y_estacionamientos','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos\', \'description\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'AYE_almacenes_y_estacionamientos','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos\', \'deleted\', \'bool\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'AYE_almacenes_y_estacionamientos','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos\', \'assigned_user_id\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_ID','module' => 'AYE_almacenes_y_estacionamientos','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos\', \'assigned_user_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO_NAME','module' => 'AYE_almacenes_y_estacionamientos','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos\', \'codigo\', \'varchar\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CODIGO','module' => 'AYE_almacenes_y_estacionamientos','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos\', \'descripcion\', \'text\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPCION','module' => 'AYE_almacenes_y_estacionamientos','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos\', \'aye_almacenes_y_estacionamientos_aos_products_name\', \'relate\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_AYE_ALMACENES_Y_ESTACIONAMIENTOS_AOS_PRODUCTS_FROM_AOS_PRODUCTS_TITLE','module' => 'AYE_almacenes_y_estacionamientos','for_js' => true), $this);?>
<?php echo '\' );
addToValidate(\'form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos\', \'tipo_c\', \'dynamicenum\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TIPO','module' => 'AYE_almacenes_y_estacionamientos','for_js' => true), $this);?>
<?php echo '\' );
addToValidateBinaryDependency(\'form_SubpanelQuickCreate_AYE_almacenes_y_estacionamientos\', \'assigned_user_name\', \'alpha\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'AYE_almacenes_y_estacionamientos','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'AYE_almacenes_y_estacionamientos','for_js' => true), $this);?>
<?php echo '\', \'assigned_user_id\' );
</script>'; ?>