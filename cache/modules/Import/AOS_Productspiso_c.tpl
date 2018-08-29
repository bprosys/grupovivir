
{if strlen($fields.piso_c.value) <= 0}
{assign var="value" value=$fields.piso_c.default_value }
{else}
{assign var="value" value=$fields.piso_c.value }
{/if}  
<input type='text' name='{$fields.piso_c.name}' 
id='{$fields.piso_c.name}' size='30' maxlength='255' value='{sugar_number_format precision=0 var=$value}' title='' tabindex='1'    >