<?php /* Smarty version 2.6.29, created on 2018-08-29 05:39:07
         compiled from cache/modules/Import/Leadsinvalid_email.tpl */ ?>

<?php if (strval ( $this->_tpl_vars['fields']['invalid_email']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['invalid_email']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['invalid_email']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'checked="checked"'); ?>
<?php else: ?>
<?php $this->assign('checked', ""); ?>
<?php endif; ?>
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['invalid_email']['name']; ?>
" value="0"> 
<input type="checkbox" id="<?php echo $this->_tpl_vars['fields']['invalid_email']['name']; ?>
" 
name="<?php echo $this->_tpl_vars['fields']['invalid_email']['name']; ?>
" 
value="1" title='' tabindex="1" <?php echo $this->_tpl_vars['checked']; ?>
 >