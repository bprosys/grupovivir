<?php /* Smarty version 2.6.29, created on 2018-08-22 10:51:25
         compiled from cache/themes/SuiteP/modules/Contacts/ConvertLead.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'cache/themes/SuiteP/modules/Contacts/ConvertLead.tpl', 46, false),array('function', 'counter', 'cache/themes/SuiteP/modules/Contacts/ConvertLead.tpl', 112, false),array('function', 'html_options', 'cache/themes/SuiteP/modules/Contacts/ConvertLead.tpl', 113, false),array('function', 'sugar_getimagepath', 'cache/themes/SuiteP/modules/Contacts/ConvertLead.tpl', 217, false),array('function', 'sugar_getjspath', 'cache/themes/SuiteP/modules/Contacts/ConvertLead.tpl', 539, false),array('modifier', 'strip_semicolon', 'cache/themes/SuiteP/modules/Contacts/ConvertLead.tpl', 108, false),array('modifier', 'lookup', 'cache/themes/SuiteP/modules/Contacts/ConvertLead.tpl', 214, false),array('modifier', 'count', 'cache/themes/SuiteP/modules/Contacts/ConvertLead.tpl', 316, false),)), $this); ?>

<div>&nbsp;</div>
<span class="color"><?php echo $this->_tpl_vars['ERROR']; ?>
</span>
<div class="edit-view-row-item">
<input type="hidden" name="convert_create_Contacts" id="convert_create_Contacts"
<?php if (( $this->_tpl_vars['def']['required'] && empty ( $this->_tpl_vars['def']['select'] ) ) || ( ! empty ( $this->_tpl_vars['def']['default_action'] ) && $this->_tpl_vars['def']['default_action'] == 'create' )): ?> value="true" <?php endif; ?>/>
<input type="hidden" name="opportunity_id" value="<?php echo $_REQUEST['opportunity_id']; ?>
">
<input type="hidden" name="case_id" value="<?php echo $_REQUEST['case_id']; ?>
">
<input type="hidden" name="bug_id" value="<?php echo $_REQUEST['bug_id']; ?>
">
<input type="hidden" name="email_id" value="<?php echo $_REQUEST['email_id']; ?>
">
<input type="hidden" name="inbound_email_id" value="<?php echo $_REQUEST['inbound_email_id']; ?>
">
<?php if ($this->_tpl_vars['def']['required']): ?>
<script type="text/javascript">
                        mod_array.push('Contacts');//Bug#50590 add all required modules to mod_array
                    </script>
<?php endif; ?>
<?php if (! $this->_tpl_vars['def']['required'] || ! empty ( $this->_tpl_vars['def']['select'] )): ?>
<input class="checkbox" type="checkbox" name="newContacts" id="newContacts"
onclick="toggleDisplay('createContacts');if (typeof(addRemoveDropdownElement) == 'function') addRemoveDropdownElement('Contacts');<?php if (! empty ( $this->_tpl_vars['def']['select'] )): ?>toggleContactsSelect();<?php endif; ?>">
<script type="text/javascript">
                                        <?php if (! empty ( $this->_tpl_vars['def']['select'] )): ?>
                    toggleContactsSelect = function () {
                        var inputs = document.getElementById('selectContacts').getElementsByTagName('input');
                        for (var i in inputs) {inputs[i].disabled = !inputs[i].disabled;}
                    var buttons = document.getElementById('selectContacts').getElementsByTagName('button');
                    for (var i in buttons) {buttons[i].disabled = !buttons[i].disabled;}
                    }
                    <?php endif; ?>
                                        <?php if (! empty ( $this->_tpl_vars['def']['default_action'] ) && $this->_tpl_vars['def']['default_action'] == 'create'): ?>
                    <?php if ($this->_tpl_vars['lead_conv_activity_opt'] == 'move' || $this->_tpl_vars['lead_conv_activity_opt'] == 'copy' || $this->_tpl_vars['lead_conv_activity_opt'] == ''): ?>
                    YAHOO.util.Event.onContentReady('lead_conv_ac_op_sel', function () {
                        <?php else: ?>
                        YAHOO.util.Event.onContentReady('createContacts', function () {
                            <?php endif; ?>
                            toggleDisplay('createContacts');
                            document.getElementById('newContacts').checked = true;
                            if (typeof(addRemoveDropdownElement) == 'function')
                                addRemoveDropdownElement('Contacts');
                                                        <?php if (! empty ( $this->_tpl_vars['def']['select'] )): ?>
                            toggleContactsSelect();
                            <?php endif; ?>
                                                        });
                    <?php endif; ?>
                    <?php endif; ?>
                </script>
<?php echo smarty_function_sugar_translate(array('label' => 'LNK_NEW_CONTACT','module' => 'Leads'), $this);?>

<?php if (! empty ( $this->_tpl_vars['def']['select'] )): ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LNK_SELECT_CONTACTS','module' => 'Leads'), $this);?>

<?php if ($this->_tpl_vars['def']['required']): ?>
<span class="required">*</span>
<?php endif; ?>
<span id="selectContacts">

<input type="text" name="<?php echo $this->_tpl_vars['contact_def']['report_to_name']['name']; ?>
" class="sqsEnabled" tabindex="" id="<?php echo $this->_tpl_vars['contact_def']['report_to_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['contact_def']['report_to_name']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['contact_def']['report_to_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['contact_def']['report_to_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['contact_def']['reports_to_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['contact_def']['report_to_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['contact_def']['report_to_name']['name']; ?>
" tabindex="" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['contact_def']['report_to_name']['module']; ?>
", 
600, 
400, 
"<?php echo $this->_tpl_vars['initialFilter']; ?>
", 
true, 
false, 
<?php echo '{"call_back_function":"set_return_lead_conv","form_name":"ConvertLead","field_to_name_array":{"id":"reports_to_id","last_name":"report_to_name"}}'; ?>
, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['contact_def']['report_to_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['contact_def']['report_to_name']['name']; ?>
" tabindex="" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['contact_def']['report_to_name']['name']; ?>
', '<?php echo $this->_tpl_vars['contact_def']['report_to_name']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL'), $this);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['contact_def']['report_to_name']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script>
<script>
                    if (typeof(sqs_objects) == "undefined") sqs_objects = [];
                    sqs_objects['ConvertLead_<?php echo $this->_tpl_vars['selectFields']['Contacts']; ?>
'] = {
                        form: 'ConvertLead',
                        method: 'query',
                        modules: ['Contacts'],
                        group: 'or',
                        field_list: ['name', 'id'],
                        populate_list: ['<?php echo $this->_tpl_vars['selectFields']['Contacts']; ?>
', '<?php echo $this->_tpl_vars['contact_def'][$this->_tpl_vars['selectFields']['Contacts']]['id_name']; ?>
'],
                        conditions: [{'name': 'name', 'op': 'like_custom', 'end': '%', 'value': ''}],
                        required_list: ['<?php echo $this->_tpl_vars['contact_def'][$this->_tpl_vars['selectFields']['Contacts']]['id_name']; ?>
'],
                        order: 'name',
                        limit: '10'
                        }
                </script>
<?php endif; ?>
</span>
</div>
<div class=""
id="createContacts"
<?php if (! $this->_tpl_vars['def']['required'] || ! empty ( $this->_tpl_vars['def']['select'] )): ?>style="display:none"<?php endif; ?>>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='first_name_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_FIRST_NAME','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
colspan='3' class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>

<?php echo smarty_function_html_options(array('name' => 'Contactssalutation','options' => $this->_tpl_vars['fields']['salutation']['options'],'selected' => $this->_tpl_vars['fields']['salutation']['value']), $this);?>
&nbsp;<input tabindex="0"  name="Contactsfirst_name" size="25" maxlength="25" type="text" value="<?php echo $this->_tpl_vars['fields']['first_name']['value']; ?>
">
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='identificacion_c_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_IDENTIFICACION','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
colspan='3' class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['identificacion_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['identificacion_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['identificacion_c']['value']); ?>
<?php endif; ?>  
<input type='text' name='Contactsidentificacion_c' 
id='Contactsidentificacion_c' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='jjwg_maps_address_c_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PRIMARY_ADDRESS','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
colspan='3' class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['jjwg_maps_address_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['jjwg_maps_address_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['jjwg_maps_address_c']['value']); ?>
<?php endif; ?>  
<input type='text' name='Contactsjjwg_maps_address_c' 
id='Contactsjjwg_maps_address_c' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title='Address'      >
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='lead_source_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LEAD_SOURCE','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
colspan='3' class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (! isset ( $this->_tpl_vars['config']['enable_autocomplete'] ) || $this->_tpl_vars['config']['enable_autocomplete'] == false): ?>
<select name="Contactslead_source" 
id="Contactslead_source" 
title=''       
>
<?php if (isset ( $this->_tpl_vars['fields']['lead_source']['value'] ) && $this->_tpl_vars['fields']['lead_source']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['lead_source']['options'],'selected' => $this->_tpl_vars['fields']['lead_source']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['lead_source']['options'],'selected' => $this->_tpl_vars['fields']['lead_source']['default']), $this);?>

<?php endif; ?>
</select>
<?php else: ?>
<?php $this->assign('field_options', $this->_tpl_vars['fields']['lead_source']['options']); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['lead_source']['value']; ?>
<?php $this->_smarty_vars['capture']['field_val'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('field_val', $this->_smarty_vars['capture']['field_val']); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['lead_source']['name']; ?>
<?php $this->_smarty_vars['capture']['ac_key'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('ac_key', $this->_smarty_vars['capture']['ac_key']); ?>
<select style='display:none' name="Contactslead_source" 
id="Contactslead_source" 
title=''          
>
<?php if (isset ( $this->_tpl_vars['fields']['lead_source']['value'] ) && $this->_tpl_vars['fields']['lead_source']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['lead_source']['options'],'selected' => $this->_tpl_vars['fields']['lead_source']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['lead_source']['options'],'selected' => $this->_tpl_vars['fields']['lead_source']['default']), $this);?>

<?php endif; ?>
</select>
<input
id="Contactslead_source-input"
name="Contactslead_source-input"
size="30"
value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_val'])) ? $this->_run_mod_handler('lookup', true, $_tmp, $this->_tpl_vars['field_options']) : smarty_modifier_lookup($_tmp, $this->_tpl_vars['field_options'])); ?>
"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-down.png"), $this);?>
" id="Contactslead_source-image"></button><button type="button"
id="btn-clear-Contactslead_source-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, 'Contactslead_source-input', 'Contactslead_source');sync_Contactslead_source()"><span class="suitepicon suitepicon-action-clear"></span></button>
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
Contactslead_source<?php echo '");
			
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
.inputNode = Y.one('#Contactslead_source-input');
	SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputImage = Y.one('#Contactslead_source-image');
	SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputHidden = Y.one('#Contactslead_source');
	
			<?php echo '
			function SyncToHidden(selectme){
				var selectElem = document.getElementById("'; ?>
Contactslead_source<?php echo '");
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
Contactslead_source<?php echo ' = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("'; ?>
Contactslead_source<?php echo '");

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
Contactslead_source-input<?php echo '\'))
						SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.set(\'value\',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("'; ?>
Contactslead_source<?php echo '", syncFromHiddenToWidget);
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
Contactslead_source<?php echo '");
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
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='phone_work_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_OFFICE_PHONE','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
colspan='3' class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_work']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_work']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_work']['value']); ?>
<?php endif; ?>  
<input type='text' name='Contactsphone_work' id='Contactsphone_work' size='30' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0'	  class="phone" >
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='phone_other_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_OTHER_PHONE','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
colspan='3' class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['phone_other']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_other']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['phone_other']['value']); ?>
<?php endif; ?>  
<input type='text' name='Contactsphone_other' id='Contactsphone_other' size='30' maxlength='100' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='0'	  class="phone" >
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='email1_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_EMAIL_ADDRESS','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
colspan='3' class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>

<span id='email1_span'>
<?php echo $this->_tpl_vars['fields']['email1']['value']; ?>
</span>
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='proyecto_de_interes_c_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PROYECTO_DE_INTERES','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
colspan='3' class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['proyecto_de_interes_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['proyecto_de_interes_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['proyecto_de_interes_c']['value']); ?>
<?php endif; ?>  
<input type='text' name='Contactsproyecto_de_interes_c' 
id='Contactsproyecto_de_interes_c' size='30' 
maxlength='255' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      >
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='estado_c_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ESTADO','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
colspan='3' class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "include/SugarFields/Fields/Dynamicenum/SugarFieldDynamicenum.js"), $this);?>
'></script>
<?php if (! isset ( $this->_tpl_vars['config']['enable_autocomplete'] ) || $this->_tpl_vars['config']['enable_autocomplete'] == false): ?>
<select name="Contactsestado_c"
id="Contactsestado_c"
title=''           
>
<?php if (isset ( $this->_tpl_vars['fields']['estado_c']['value'] ) && $this->_tpl_vars['fields']['estado_c']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['estado_c']['options'],'selected' => $this->_tpl_vars['fields']['estado_c']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['estado_c']['options'],'selected' => $this->_tpl_vars['fields']['estado_c']['default']), $this);?>

<?php endif; ?>
</select>
<?php else: ?>
<?php $this->assign('field_options', $this->_tpl_vars['fields']['estado_c']['options']); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['estado_c']['value']; ?>
<?php $this->_smarty_vars['capture']['field_val'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('field_val', $this->_smarty_vars['capture']['field_val']); ?>
<?php ob_start(); ?><?php echo $this->_tpl_vars['fields']['estado_c']['name']; ?>
<?php $this->_smarty_vars['capture']['ac_key'] = ob_get_contents(); ob_end_clean(); ?>
<?php $this->assign('ac_key', $this->_smarty_vars['capture']['ac_key']); ?>
<select style='display:none' name="Contactsestado_c"
id="Contactsestado_c"
title=''          
>
<?php if (isset ( $this->_tpl_vars['fields']['estado_c']['value'] ) && $this->_tpl_vars['fields']['estado_c']['value'] != ''): ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['estado_c']['options'],'selected' => $this->_tpl_vars['fields']['estado_c']['value']), $this);?>

<?php else: ?>
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['estado_c']['options'],'selected' => $this->_tpl_vars['fields']['estado_c']['default']), $this);?>

<?php endif; ?>
</select>
<input
id="Contactsestado_c-input"
name="Contactsestado_c-input"
size="30"
value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_val'])) ? $this->_run_mod_handler('lookup', true, $_tmp, $this->_tpl_vars['field_options']) : smarty_modifier_lookup($_tmp, $this->_tpl_vars['field_options'])); ?>
"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-down.png"), $this);?>
" id="Contactsestado_c-image"></button><button type="button"
id="btn-clear-Contactsestado_c-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, 'Contactsestado_c-input', 'Contactsestado_c');sync_Contactsestado_c()"><span class="suitepicon suitepicon-action-clear"></span></button>
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
Contactsestado_c<?php echo '");

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
.inputNode = Y.one('#Contactsestado_c-input');
    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputImage = Y.one('#Contactsestado_c-image');
    SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputHidden = Y.one('#Contactsestado_c');

        <?php echo '
    function SyncToHidden(selectme){
        var selectElem = document.getElementById("'; ?>
Contactsestado_c<?php echo '");
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
Contactsestado_c<?php echo ' = function(){
        SyncToHidden();
    }
    function syncFromHiddenToWidget(){

        var selectElem = document.getElementById("'; ?>
Contactsestado_c<?php echo '");

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
Contactsestado_c-input<?php echo '\'))
                SUGAR.AutoComplete.'; ?>
<?php echo $this->_tpl_vars['ac_key']; ?>
<?php echo '.inputNode.set(\'value\',selectElem.options[i].innerHTML);
        }
    }

    YAHOO.util.Event.onAvailable("'; ?>
Contactsestado_c<?php echo '", syncFromHiddenToWidget);
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
Contactsestado_c<?php echo '");
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
"","Contactsestado_c"<?php echo ')}'; ?>
);
    if (SUGAR.ajaxUI && SUGAR.ajaxUI.hist_loaded) <?php echo '{loadDynamicEnum('; ?>
"","Contactsestado_c"<?php echo ')}'; ?>

</script>
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 edit-view-row-item">
<div class="edit-view-field col-xs-12 col-sm-12 col-md-6 col-lg-6">
<div valign="top" id='description_label'
scope="row" class="col-xs-12 col-sm-12 label" >
<?php ob_start(); ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Contacts'), $this);?>

<?php $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean(); ?>
<?php echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</div>
<div valign="top"
colspan='3' class=" col-xs-12 col-sm-8 edit-view-field pad-bottom">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','print' => false), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['description']['value'] )): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['description']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['description']['value']); ?>
<?php endif; ?>
<textarea  id='Contactsdescription' name='Contactsdescription'
rows="6"
cols="80"
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
<?php echo ''; ?>

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
</div><?php echo '
<script type="text/javascript">
addForm(\'ConvertLead\');addToValidateBinaryDependency(\'ConvertLead\', \'assigned_user_name\', \'alpha\', false,\''; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Contacts','for_js' => true), $this);?>
<?php echo ': '; ?>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Contacts','for_js' => true), $this);?>
<?php echo '\', \'assigned_user_id\' );
</script>'; ?>
