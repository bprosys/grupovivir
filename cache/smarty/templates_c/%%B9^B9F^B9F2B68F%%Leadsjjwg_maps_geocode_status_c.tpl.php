<?php /* Smarty version 2.6.29, created on 2018-08-29 05:39:08
         compiled from cache/modules/Import/Leadsjjwg_maps_geocode_status_c.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['jjwg_maps_geocode_status_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['jjwg_maps_geocode_status_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['jjwg_maps_geocode_status_c']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['jjwg_maps_geocode_status_c']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['jjwg_maps_geocode_status_c']['name']; ?>
' size='30' 
    maxlength='255' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title='Geocode Status'  tabindex='1'      >