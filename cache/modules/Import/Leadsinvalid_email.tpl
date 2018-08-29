
{if strval($fields.invalid_email.value) == "1" || strval($fields.invalid_email.value) == "yes" || strval($fields.invalid_email.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.invalid_email.name}" value="0"> 
<input type="checkbox" id="{$fields.invalid_email.name}" 
name="{$fields.invalid_email.name}" 
value="1" title='' tabindex="1" {$checked} >