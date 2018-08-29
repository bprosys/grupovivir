
{if strlen($fields.alt_address_street_2.value) <= 0}
{assign var="value" value=$fields.alt_address_street_2.default_value }
{else}
{assign var="value" value=$fields.alt_address_street_2.value }
{/if}  
<input type='text' name='{$fields.alt_address_street_2.name}' 
    id='{$fields.alt_address_street_2.name}' size='30' 
    maxlength='150' 
    value='{$value}' title=''  tabindex='1'      >