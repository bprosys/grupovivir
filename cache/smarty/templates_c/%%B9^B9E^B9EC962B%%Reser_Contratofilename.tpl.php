<?php /* Smarty version 2.6.29, created on 2018-08-26 09:24:21
         compiled from cache/modules/Import/Reser_Contratofilename.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['filename']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['filename']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['filename']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['filename']['name']; ?>
' size='30' 
    maxlength='255' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >