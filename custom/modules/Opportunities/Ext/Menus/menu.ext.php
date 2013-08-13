<?php 
 //WARNING: The contents of this file are auto-generated


global $mod_strings, $app_strings, $sugar_config;
$module_menu = Array();
//if(ACLController::checkAccess('Opportunities','edit',true)){
//	$module_menu[]=	Array("index.php?module=Opportunities&action=EditView&return_module=Opportunities&return_action=DetailView", $mod_strings['LNK_NEW_OPPORTUNITY'],"CreateOpportunities");
//}
if(ACLController::checkAccess('Opportunities','list',true)){
	$module_menu[]=	Array("index.php?module=Opportunities&action=index&return_module=Opportunities&return_action=DetailView", $mod_strings['LNK_OPPORTUNITY_LIST'],"Opportunities");
}
//if(empty($sugar_config['disc_client'])){
//	if(ACLController::checkAccess('Opportunities','view',true)){
//		$module_menu[]=	Array("index.php?module=Reports&action=index&view=opportunities", $mod_strings['LNK_OPPORTUNITY_REPORTS'],"OpportunityReports", 'Opportunities');
//	}
//}
if(ACLController::checkAccess('Opportunities','import',true)){
	$module_menu[]=  Array("index.php?module=Import&action=Step1&import_module=Opportunities&return_module=Opportunities&return_action=index", $mod_strings['LNK_IMPORT_OPPORTUNITIES'],"Import");
}



?>