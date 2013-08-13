<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
global $mod_strings, $app_strings, $sugar_config;
$module_menu = Array();
//if(ACLController::checkAccess('Contacts', 'edit', true))$module_menu[] = Array("index.php?module=Contacts&action=EditView&return_module=Contacts&return_action=index", $mod_strings['LNK_NEW_CONTACT'],"CreateContacts", 'Contacts');

//	if(ACLController::checkAccess('Contacts', 'import', true))$module_menu[] =Array("index.php?module=Contacts&action=ImportVCard", $mod_strings['LNK_IMPORT_VCARD'],"CreateContacts", 'Contacts');
	if(ACLController::checkAccess('Contacts', 'list', true))$module_menu[] =Array("index.php?module=Contacts&action=index&return_module=Contacts&return_action=DetailView", $mod_strings['LNK_CONTACT_LIST'],"Contacts", 'Contacts');
//if(empty($sugar_config['disc_client'])){
//	if(ACLController::checkAccess('Contacts', 'list', true))$module_menu[] =Array("index.php?module=Reports&action=index&view=contacts", $mod_strings['LNK_CONTACT_REPORTS'],"ContactReports", 'Contacts');
//}
	if(ACLController::checkAccess('Contacts', 'import', true))$module_menu[] =Array("index.php?module=Import&action=Step1&import_module=Contacts&return_module=Contacts&return_action=index", $mod_strings['LNK_IMPORT_CONTACTS'],"Import", 'Contacts');

?>
