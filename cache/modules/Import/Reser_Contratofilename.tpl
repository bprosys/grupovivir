
{if strlen($fields.filename.value) <= 0}
{assign var="value" value=$fields.filename.default_value }
{else}
{assign var="value" value=$fields.filename.value }
{/if}  
<input type='text' name='{$fields.filename.name}' 
    id='{$fields.filename.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >