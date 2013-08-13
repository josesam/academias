<?php 
 //WARNING: The contents of this file are auto-generated

$module_menu=array();
// Gantt
if(ACLController::checkAccess('gm_Reportes', 'list', true)) {
    $module_menu[] = array('index.php?module=gm_Reportes&action=reportes','Ver Reportes' );
}



?>