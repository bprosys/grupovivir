<?php /* Smarty version 2.6.29, created on 2018-08-25 15:24:28
         compiled from cache/modules/Import/AOS_Productsprice.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_number_format', 'cache/modules/Import/AOS_Productsprice.tpl', 8, false),)), $this); ?>

<?php if (strlen ( $this->_tpl_vars['fields']['price']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['price']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['price']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['price']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['price']['name']; ?>
' size='30' maxlength='26,6' value='<?php echo smarty_function_sugar_number_format(array('var' => $this->_tpl_vars['value']), $this);?>
' title='' tabindex='1'
 >