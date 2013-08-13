<?php
global $mod_strings, $app_strings;
if(ACLController::checkAccess('Campaigns', 'edit', true))
	$module_menu[] = array(
		"index.php?module=Campaigns&action=publicoobjetivo&return_module=Campaigns&return_action=index",
		$mod_strings['LNL_NEW_PUBLICOOBJETIVO'],"CampaignsWizard"
	);

?>
