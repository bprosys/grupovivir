<?php /* Smarty version 2.6.29, created on 2018-08-27 07:21:42
         compiled from cache/modules/Import/Leadsalt_address_street_2.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['alt_address_street_2']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['alt_address_street_2']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['alt_address_street_2']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['alt_address_street_2']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['alt_address_street_2']['name']; ?>
' size='30' 
    maxlength='150' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >