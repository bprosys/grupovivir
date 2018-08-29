
{if strlen($fields.metraje_c.value) <= 0}
{assign var="value" value=$fields.metraje_c.default_value }
{else}
{assign var="value" value=$fields.metraje_c.value }
{/if}  
<input type='text' name='{$fields.metraje_c.name}' 
    id='{$fields.metraje_c.name}' size='30' 
    maxlength='255' 
    value='{$value}' title=''  tabindex='1'      >