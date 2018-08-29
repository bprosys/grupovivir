<?php /* Smarty version 2.6.29, created on 2018-08-23 10:07:05
         compiled from cache/modules/AOW_WorkFlow/Reser_ReservasDetailViewstatus_id.tpl */ ?>


<?php if (is_string ( $this->_tpl_vars['fields']['status_id']['options'] )): ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['status_id']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['status_id']['options']; ?>
">
<?php echo $this->_tpl_vars['fields']['status_id']['options']; ?>

<?php else: ?>
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['fields']['status_id']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['status_id']['value']; ?>
">
<?php echo $this->_tpl_vars['fields']['status_id']['options'][$this->_tpl_vars['fields']['status_id']['value']]; ?>

<?php endif; ?>