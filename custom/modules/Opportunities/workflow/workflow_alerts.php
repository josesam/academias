<?php

include_once("include/workflow/alert_utils.php");
    class Opportunities_alerts {
    function process_wflow_Opportunities0_alert0(&$focus){
            include("custom/modules/Opportunities/workflow/alerts_array.php");

	 $alertshell_array = array(); 

	 $alertshell_array['alert_msg'] = "38a024a9-fd5a-c83f-4660-50b79c3fbd1d"; 

	 $alertshell_array['source_type'] = "Custom Template"; 

	 $alertshell_array['alert_type'] = "Email"; 

	 process_workflow_alerts($focus, $alert_meta_array['Opportunities0_alert0'], $alertshell_array, false); 
 	 unset($alertshell_array); 
	 }



    //end class
    }

?>