
{if strlen($fields.comentarios_c.value) <= 0}
{assign var="value" value=$fields.comentarios_c.default_value }
{else}
{assign var="value" value=$fields.comentarios_c.value }
{/if}  
<input type='text' name='{$fields.comentarios_c.name}' 
    id='{$fields.comentarios_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >