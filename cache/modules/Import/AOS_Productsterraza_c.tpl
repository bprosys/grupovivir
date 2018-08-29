
{if strlen($fields.terraza_c.value) <= 0}
{assign var="value" value=$fields.terraza_c.default_value }
{else}
{assign var="value" value=$fields.terraza_c.value }
{/if}  
<input type='text' name='{$fields.terraza_c.name}' 
    id='{$fields.terraza_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >