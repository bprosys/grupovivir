<?php /* Smarty version 2.6.29, created on 2018-08-28 03:21:48
         compiled from modules/ACLRoles/DetailViewBody.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'capitalize', 'modules/ACLRoles/DetailViewBody.tpl', 76, false),)), $this); ?>

<?php echo '<TABLE width=\'100%\' class=\'detail view\' border=\'0\' cellpadding=0 cellspacing = 1  ><TR><td style="background: transparent;"></td>'; ?><?php $_from = $this->_tpl_vars['ACTION_NAMES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ACTION_NAME']):
?><?php echo '<td style="text-align: center;" scope="row"><b>'; ?><?php echo $this->_tpl_vars['ACTION_NAME']; ?><?php echo '</b></td>'; ?><?php endforeach; else: ?><?php echo '<td colspan="2">&nbsp;</td>'; ?><?php endif; unset($_from); ?><?php echo '</TR>'; ?><?php $_from = $this->_tpl_vars['CATEGORIES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['CATEGORY_NAME'] => $this->_tpl_vars['TYPES']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['APP_LIST']['moduleList'][$this->_tpl_vars['CATEGORY_NAME']] != 'Users'): ?><?php echo '<TR>'; ?><?php if ($this->_tpl_vars['APP_LIST']['moduleList'][$this->_tpl_vars['CATEGORY_NAME']] == 'Users'): ?><?php echo '<td nowrap width=\'1%\' scope="row"><b>'; ?><?php echo $this->_tpl_vars['MOD']['LBL_USER_NAME_FOR_ROLE']; ?><?php echo '</b></td>'; ?><?php else: ?><?php echo '<td nowrap width=\'1%\' scope="row"><b>'; ?><?php echo $this->_tpl_vars['APP_LIST']['moduleList'][$this->_tpl_vars['CATEGORY_NAME']]; ?><?php echo '</b></td>'; ?><?php endif; ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['ACTION_NAMES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ACTION_NAME'] => $this->_tpl_vars['ACTION_LABEL']):
?><?php echo ''; ?><?php $this->assign('ACTION_FIND', 'false'); ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['TYPES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['TYPE_NAME'] => $this->_tpl_vars['ACTIONS']):
?><?php echo ''; ?><?php $_from = $this->_tpl_vars['ACTIONS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ACTION_NAME_ACTIVE'] => $this->_tpl_vars['ACTION']):
?><?php echo ''; ?><?php if ($this->_tpl_vars['ACTION_NAME'] == $this->_tpl_vars['ACTION_NAME_ACTIVE']): ?><?php echo ''; ?><?php $this->assign('ACTION_FIND', 'true'); ?><?php echo '<td  width=\''; ?><?php echo $this->_tpl_vars['TDWIDTH']; ?><?php echo '%\' align=\'center\'><div align=\'center\' class="acl'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['ACTION']['accessLabel'])) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?><?php echo '"><b>'; ?><?php echo $this->_tpl_vars['ACTION']['accessName']; ?><?php echo '</b></div></td>'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php if ($this->_tpl_vars['ACTION_FIND'] == 'false'): ?><?php echo '<td nowrap width=\''; ?><?php echo $this->_tpl_vars['TDWIDTH']; ?><?php echo '%\' style="text-align: center;"><div><font color=\'red\'>N/A</font></div></td>'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '</TR>'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; else: ?><?php echo '<tr> <td colspan="2">No Actions</td></tr>'; ?><?php endif; unset($_from); ?><?php echo '</TABLE>'; ?>