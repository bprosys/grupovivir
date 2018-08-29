
{if strlen($fields.identificacion_c.value) <= 0}
{assign var="value" value=$fields.identificacion_c.default_value }
{else}
{assign var="value" value=$fields.identificacion_c.value }
{/if}  
<input type='text' name='{$fields.identificacion_c.name}' 
    id='{$fields.identificacion_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >