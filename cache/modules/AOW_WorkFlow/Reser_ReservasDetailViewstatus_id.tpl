

{if is_string($fields.status_id.options)}
<input type="hidden" class="sugar_field" id="{$fields.status_id.name}" value="{ $fields.status_id.options }">
{ $fields.status_id.options }
{else}
<input type="hidden" class="sugar_field" id="{$fields.status_id.name}" value="{ $fields.status_id.value }">
{ $fields.status_id.options[$fields.status_id.value]}
{/if}
