
{if strlen($fields.modelo_c.value) <= 0}
{assign var="value" value=$fields.modelo_c.default_value }
{else}
{assign var="value" value=$fields.modelo_c.value }
{/if}  
<input type='text' name='{$fields.modelo_c.name}' 
    id='{$fields.modelo_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >