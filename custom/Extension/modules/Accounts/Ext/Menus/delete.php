<?php
global $mod_strings, $app_strings, $sugar_config;

$module_menu = Array();
if(ACLController::checkAccess('Accounts', 'edit', true))$module_menu[]=Array("index.php?module=Accounts&action=EditView&return_module=Accounts&return_action=index", $mod_strings['LNK_NEW_ACCOUNT'],"CreateAccounts", 'Accounts');

if(ACLController::checkAccess('Accounts', 'list', true))$module_menu[]=Array("index.php?module=Accounts&action=index&return_module=Accounts&return_action=DetailView", $mod_strings['LNK_ACCOUNT_LIST'],"Accounts", 'Accounts');
//if(empty($sugar_config['disc_client'])){
//	if(ACLController::checkAccess('Accounts', 'list', true))$module_menu[]=Array("index.php?module=Reports&action=index&view=accounts", $mod_strings['LNK_ACCOUNT_REPORTS'],"AccountReports", 'Accounts');
//}
if(ACLController::checkAccess('Accounts', 'import', true))$module_menu[]=Array("index.php?module=Import&action=Step1&import_module=Accounts&return_module=Accounts&return_action=index", $mod_strings['LNK_IMPORT_ACCOUNTS'],"Import", 'Accounts');

if(ACLController::checkAccess('Accounts', 'edit', true))
	$module_menu[] = array(
		"index.php?module=Accounts&action=cargar&return_module=Accounts&return_action=index",
		"Carga Excel","CampaignsWizard"
	);

?>