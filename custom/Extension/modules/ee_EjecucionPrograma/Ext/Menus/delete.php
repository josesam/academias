<?php
global $mod_strings, $app_strings, $sugar_config;

$module_menu = Array();
//if(ACLController::checkAccess('ee_Cobranzas', 'edit', true))$module_menu[]=Array("index.php?module=Accounts&action=EditView&return_module=Accounts&return_action=index", $mod_strings['LNK_NEW_ACCOUNT'],"CreateAccounts", 'Accounts');

if(ACLController::checkAccess('ee_EjecucionPrograma', 'list', true))$module_menu[]=Array("index.php?module=ee_EjecucionPrograma&action=index&return_module=ee_EjecucionPrograma&return_action=DetailView", $mod_strings['LNK_LIST'],"ee_EjecucionPrograma", 'ee_EjecucionPrograma');
//if(empty($sugar_config['disc_client'])){
//	if(ACLController::checkAccess('Accounts', 'list', true))$module_menu[]=Array("index.php?module=Reports&action=index&view=accounts", $mod_strings['LNK_ACCOUNT_REPORTS'],"AccountReports", 'Accounts');
//}
if(ACLController::checkAccess('ee_EjecucionPrograma', 'import', true))$module_menu[]=Array("index.php?module=Import&action=Step1&import_module=ee_EjecucionPrograma&return_module=ee_EjecucionPrograma&return_action=index", $app_strings['LBL_IMPORT'],"Import", 'ee_EjecucionPrograma');

$module_menu[] = array(
		"index.php?module=ee_EjecucionPrograma&action=cargar&return_module=ee_EjecucionPrograma&return_action=index",
		'Cargar Encuestas',"CampaignsWizard"
	);
?>