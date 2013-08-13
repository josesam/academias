<?php

include_once("include/workflow/alert_utils.php");
include_once("include/workflow/action_utils.php");
include_once("include/workflow/time_utils.php");
include_once("include/workflow/trigger_utils.php");
//BEGIN WFLOW PLUGINS
include_once("include/workflow/custom_utils.php");
//END WFLOW PLUGINS
	class Accounts_workflow {
	function process_wflow_triggers(& $focus){
		include("custom/modules/Accounts/workflow/triggers_array.php");
		include("custom/modules/Accounts/workflow/alerts_array.php");
		include("custom/modules/Accounts/workflow/actions_array.php");
		include("custom/modules/Accounts/workflow/plugins_array.php");
		
	//end function process_wflow_triggers
	}

	//end class
	}

?>