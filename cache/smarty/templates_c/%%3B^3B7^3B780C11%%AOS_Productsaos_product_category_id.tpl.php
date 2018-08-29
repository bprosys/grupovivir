<?php /* Smarty version 2.6.29, created on 2018-08-25 15:28:01
         compiled from cache/modules/Import/AOS_Productsaos_product_category_id.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['aos_product_category_id']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['aos_product_category_id']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['aos_product_category_id']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['aos_product_category_id']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['aos_product_category_id']['name']; ?>
' size='30' 
     
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >