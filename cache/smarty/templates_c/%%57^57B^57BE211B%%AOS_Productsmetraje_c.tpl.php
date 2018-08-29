<?php /* Smarty version 2.6.29, created on 2018-08-25 15:24:02
         compiled from cache/modules/Import/AOS_Productsmetraje_c.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['metraje_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['metraje_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['metraje_c']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['metraje_c']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['metraje_c']['name']; ?>
' size='30' 
    maxlength='255' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >