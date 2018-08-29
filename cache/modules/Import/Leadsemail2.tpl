
{if strlen($fields.email2.value) <= 0}
{assign var="value" value=$fields.email2.default_value }
{else}
{assign var="value" value=$fields.email2.value }
{/if}  
<input type='text' name='{$fields.email2.name}' 
    id='{$fields.email2.name}' size='30' 
     
    value='{$value}' title=''  tabindex='1'      >