
{if strlen($fields.aos_product_category_id.value) <= 0}
{assign var="value" value=$fields.aos_product_category_id.default_value }
{else}
{assign var="value" value=$fields.aos_product_category_id.value }
{/if}  
<input type='text' name='{$fields.aos_product_category_id.name}' 
    id='{$fields.aos_product_category_id.name}' size='30' 
     
    value='{$value}' title=''  tabindex='1'      >