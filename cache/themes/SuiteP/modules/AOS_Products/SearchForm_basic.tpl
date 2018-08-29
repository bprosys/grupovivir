
<input type='hidden' id="orderByInput" name='orderBy' value=''/>
<input type='hidden' id="sortOrder" name='sortOrder' value=''/>
{if !isset($templateMeta.maxColumnsBasic)}
	{assign var="basicMaxColumns" value=$templateMeta.maxColumns}
{else}
    {assign var="basicMaxColumns" value=$templateMeta.maxColumnsBasic}
{/if}
<script>
{literal}
	$(function() {
	var $dialog = $('<div></div>')
		.html(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'))
		.dialog({
			autoOpen: false,
			title: SUGAR.language.get('app_strings', 'LBL_HELP'),
			width: 700
		});
		
		$('#filterHelp').click(function() {
		$dialog.dialog('open');
		// prevent the default action, e.g., following a link
	});
	
	});
{/literal}
</script>
<div class="row">
    
      
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='name_basic'> {sugar_translate label='LBL_NAME' module='AOS_Products'}</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
{if strlen($fields.name_basic.value) <= 0}
{assign var="value" value=$fields.name_basic.default_value }
{else}
{assign var="value" value=$fields.name_basic.value }
{/if}  
<input type='text' name='{$fields.name_basic.name}' 
    id='{$fields.name_basic.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='-1'      accesskey='9'  >
		</div>
		<div class="search-clear"></div>
	</div>
    
      
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='aos_product_category_name_basic' >{sugar_translate label='LBL_AOS_PRODUCT_CATEGORYS_NAME' module='AOS_Products'}</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
<input type="text" name="{$fields.aos_product_category_name_basic.name}"  class="sqsEnabled"   id="{$fields.aos_product_category_name_basic.name}" size="" value="{$fields.aos_product_category_name_basic.value}" title='' autocomplete="off"  >
<input type="hidden"  id="{$fields.aos_product_category_id_basic.name}" value="{$fields.aos_product_category_id_basic.value}">
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.aos_product_category_name_basic.name}"   title="{$APP.LBL_SELECT_BUTTON_TITLE}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.aos_product_category_name_basic.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"search_form","field_to_name_array":{"id":"aos_product_category_id_basic","name":"aos_product_category_name_basic"}}{/literal}, "single", true);'><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.aos_product_category_name_basic.name}"   title="{$APP.LBL_CLEAR_BUTTON_TITLE}" class="button lastChild" onclick="this.form.{$fields.aos_product_category_name_basic.name}.value = ''; this.form.{$fields.aos_product_category_id_basic.name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>

		</div>
		<div class="search-clear"></div>
	</div>
    
      
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='estado_c_basic' >{sugar_translate label='LBL_ESTADO' module='AOS_Products'}</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
{html_options id='estado_c_basic' name='estado_c_basic[]' options=$fields.estado_c_basic.options size="6" class="templateGroupChooser" multiple="1" selected=$fields.estado_c_basic.value}
		</div>
		<div class="search-clear"></div>
	</div>
    
      
	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$basicMaxColumns
          assign=modVal
    }
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 search_fields_basic">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
						<label for='modelo_c_basic' >{sugar_translate label='LBL_MODELO' module='AOS_Products'}</label>
					</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
		
{if strlen($fields.modelo_c_basic.value) <= 0}
{assign var="value" value=$fields.modelo_c_basic.default_value }
{else}
{assign var="value" value=$fields.modelo_c_basic.value }
{/if}  
<input type='text' name='{$fields.modelo_c_basic.name}' 
    id='{$fields.modelo_c_basic.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='-1'      >
		</div>
		<div class="search-clear"></div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="submitButtons">
			<input tabindex="2" title="{$APP.LBL_SEARCH_BUTTON_TITLE}" onclick="SUGAR.savedViews.setChooser();" class="button" type="submit" name="button" value="{$APP.LBL_SEARCH_BUTTON_LABEL}" id="search_form_submit"/>&nbsp;
			<input tabindex='2' title='{$APP.LBL_CLEAR_BUTTON_TITLE}' onclick='SUGAR.searchForm.clear_form(this.form); return false;' class='button' type='button' name='clear' id='search_form_clear' value='{$APP.LBL_CLEAR_BUTTON_LABEL}'/>
			{if $HAS_ADVANCED_SEARCH && !$searchFormInPopup}
				&nbsp;&nbsp;<a id="advanced_search_link" href="javascript:void(0);" accesskey="{$APP.LBL_ADV_SEARCH_LNK_KEY}">{$APP.LNK_ADVANCED_FILTER}</a>
			{/if}
		</div>
		<div class="helpIcon" width="*"><img alt="Help" border='0' id="filterHelp" src='{sugar_getimagepath file="help-dashlet.gif"}'></div>
	</div>
</div>
<script>
	{literal}
	$(document).ready(function () {
		$( '#advanced_search_link' ).one( "click", function() {
			//alert( "This will be displayed only once." );
			SUGAR.searchForm.searchFormSelect('{/literal}{$module}{literal}|advanced_search','{/literal}{$module}{literal}|basic_search');
		});
	});
	{/literal}
</script>{literal}<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['search_form_modified_by_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_basic","modified_user_id_basic"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['search_form_created_by_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_basic","created_by_basic"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['search_form_assigned_user_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['search_form_contact_basic']={"form":"search_form","method":"get_contact_array","modules":["Contacts"],"field_list":["salutation","first_name","last_name","id"],"populate_list":["contact_basic","contact_id_basic","contact_id_basic","contact_id_basic"],"required_list":["contact_id"],"group":"or","conditions":[{"name":"first_name","op":"like_custom","end":"%","value":""},{"name":"last_name","op":"like_custom","end":"%","value":""}],"order":"last_name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['search_form_aos_product_category_name_basic']={"form":"search_form","method":"query","modules":["AOS_Product_Categories"],"group":"or","field_list":["name","id"],"populate_list":["aos_product_category_name_basic","aos_product_category_id_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['search_form_rvsem_reservas_aos_products_1_name_basic']={"form":"search_form","method":"query","modules":["rvsem_reservas"],"group":"or","field_list":["name","id"],"populate_list":["rvsem_reservas_aos_products_1_name_basic","rvsem_reservas_aos_products_1rvsem_reservas_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['search_form_bugs_aos_products_1_name_basic']={"form":"search_form","method":"query","modules":["Bugs"],"group":"or","field_list":["name","id"],"populate_list":["bugs_aos_products_1_name_basic","bugs_aos_products_1bugs_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['search_form_documents_aos_products_1_name_basic']={"form":"search_form","method":"query","modules":["Documents"],"group":"or","field_list":["name","id"],"populate_list":["documents_aos_products_1_name_basic","documents_aos_products_1documents_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['search_form_ingen_ingenieria_aos_products_1_name_basic']={"form":"search_form","method":"query","modules":["ingen_ingenieria"],"group":"or","field_list":["name","id"],"populate_list":["ingen_ingenieria_aos_products_1_name_basic","ingen_ingenieria_aos_products_1ingen_ingenieria_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['search_form_ing_ingenieria_aos_products_name_basic']={"form":"search_form","method":"query","modules":["ING_Ingenieria"],"group":"or","field_list":["name","id"],"populate_list":["ing_ingenieria_aos_products_name_basic","ing_ingenieria_aos_productsing_ingenieria_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};sqs_objects['search_form_accounts_aos_products_1_name_basic']={"form":"search_form","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["search_form_accounts_aos_products_1_name_basic","accounts_aos_products_1accounts_ida_basic"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["accounts_aos_products_1accounts_ida"],"order":"name","limit":"30","no_match_text":"Sin coincidencias"};</script>{/literal}