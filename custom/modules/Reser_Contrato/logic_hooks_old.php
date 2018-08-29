<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will
// be automatically rebuilt in the future.
 $hook_version = 1;
$hook_array = Array();
// position, file, function
$hook_array['before_delete'] = Array();
$hook_array['before_delete'][] = Array(1, 'ActualizarUnidadinmobiliaria', 'custom/modules/Reser_Contrato/actualizarEstatusUnidad.php','ActualizarEstatusUnidad', 'actualizarStatus');
$hook_array['after_save'] = Array();
$hook_array['after_save'][] = Array(1, 'crearTramite', 'custom/modules/Reser_Contrato/crearTramite.php','crearTramite', 'crearTramiteInicializado');

?>
