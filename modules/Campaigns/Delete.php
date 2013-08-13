<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/

/*********************************************************************************

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

if(!isset($_REQUEST['record']))
	sugar_die("A record number must be specified to delete the campaign.");



$focus = new Campaign();
$focus->retrieve($_REQUEST['record']);

if (isset($_REQUEST['mode']) and  $_REQUEST['mode']=='Test') {
	//deletes all data associated with the test run.
    $query = "UPDATE emails SET emails.deleted=1 WHERE id IN (
    	SELECT related_id FROM campaign_log INNER JOIN prospect_lists
    		ON campaign_log.list_id = prospect_lists.id
    			AND prospect_lists.list_type='test'
    			AND campaign_log.campaign_id = '{$focus->id}')";
    $focus->db->query($query);

    $query="DELETE FROM emailman WHERE list_id IN (
        SELECT prospect_list_id FROM prospect_list_campaigns INNER JOIN prospect_lists
        	ON prospect_list_campaigns.prospect_list_id = prospect_lists.id
        		AND prospect_lists.list_type='test'
        		AND prospect_list_campaigns.campaign_id = '{$focus->id}')";
    $focus->db->query($query);
} else {
	if(!$focus->ACLAccess('Delete')){
		ACLController::displayNoAccess(true);
		sugar_cleanup(true);
	}
	$focus->mark_deleted($_REQUEST['record']);
}
$return_id=!empty($_REQUEST['return_id'])?$_REQUEST['return_id']:$focus->id;
require_once ('include/formbase.php');
handleRedirect($return_id, $_REQUEST['return_module']);