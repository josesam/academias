<?php
global $mod_strings, $app_strings, $sugar_config;

$module_menu = Array();
if(ACLController::checkAccess('ee_Profesores', 'edit', true))$module_menu[]=Array("index.php?module=ee_Profesores&action=EditView&return_module=ee_Profesores&return_action=index", $mod_strings['LNK_NEW_RECORD'],"ee_Profesores", 'ee_Profesores');

if(ACLController::checkAccess('ee_Profesores', 'list', true))$module_menu[]=Array("index.php?module=ee_Profesores&action=index&return_module=ee_Profesores&return_action=DetailView", $mod_strings['LNK_LIST'],"ee_Profesores", 'ee_Profesores');
//if(empty($sugar_config['disc_client'])){
//	if(ACLController::checkAccess('Accounts', 'list', true))$module_menu[]=Array("index.php?module=Reports&action=index&view=accounts", $mod_strings['LNK_ACCOUNT_REPORTS'],"AccountReports", 'Accounts');
//}
if(ACLController::checkAccess('ee_Profesores', 'import', true))$module_menu[]=Array("index.php?module=Import&action=Step1&import_module=ee_Profesores&return_module=ee_Profesores&return_action=index", $app_strings['LBL_IMPORT'],"Import", 'ee_Profesores');
?>