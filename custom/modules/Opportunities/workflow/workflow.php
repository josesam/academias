<?php

include_once("include/workflow/alert_utils.php");
include_once("include/workflow/action_utils.php");
include_once("include/workflow/time_utils.php");
include_once("include/workflow/trigger_utils.php");
//BEGIN WFLOW PLUGINS
include_once("include/workflow/custom_utils.php");
//END WFLOW PLUGINS
	class Opportunities_workflow {
	function process_wflow_triggers(& $focus){
		include("custom/modules/Opportunities/workflow/triggers_array.php");
		include("custom/modules/Opportunities/workflow/alerts_array.php");
		include("custom/modules/Opportunities/workflow/actions_array.php");
		include("custom/modules/Opportunities/workflow/plugins_array.php");
		
 if( ( !($focus->fetched_row['sales_stage'] ==  'Closed Won' )) && 
 (isset($focus->sales_stage) && $focus->sales_stage ==  'Closed Won')){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 
	 //Secondary Trigger number #1
	 if( ( !($focus->fetched_row['sales_stage'] ==  'Closed Lost' )) && 
 (isset($focus->sales_stage) && $focus->sales_stage ==  'Closed Lost')	 ){ 
	 


	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['226bcbea_093f_0702_17b6_50f9ad711105'])){
		$triggeredWorkflows['226bcbea_093f_0702_17b6_50f9ad711105'] = true;
		$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && is_array($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = isset($_SESSION['WORKFLOW_ALERTS']['Opportunities']) && is_array($_SESSION['WORKFLOW_ALERTS']['Opportunities']) ? $_SESSION['WORKFLOW_ALERTS']['Opportunities'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = array_merge($_SESSION['WORKFLOW_ALERTS']['Opportunities'],array ('Opportunities0_alert0',));	}
 

	 //End Frame Secondary 

	 // End Secondary Trigger number #1
 	 } 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 


	//end function process_wflow_triggers
	}

	//end class
	}

?>