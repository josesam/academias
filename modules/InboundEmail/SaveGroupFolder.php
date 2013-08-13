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

 * Description:  Saves an Account record and then redirects the browser to the
 * defined return URL.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('include/SugarFolders/SugarFolders.php');
$folder = new SugarFolder();
$_REQUEST['name'] = $_REQUEST['groupFolderAddName'];
$_REQUEST['parent_folder'] = $_REQUEST['groupFoldersAdd'];
$_REQUEST['group_id'] = $_REQUEST['groupFoldersUser'];
require_once("modules/Teams/TeamSet.php");
$_REQUEST['team_id'] = $_REQUEST['primaryTeamId'];
$teamSet = new TeamSet();
$teamIds = explode(",", $_REQUEST['teamIds']);
$team_set_id = $teamSet->addTeams($teamIds);
$_REQUEST['team_set_id'] = $team_set_id;
if (empty($_REQUEST['record'])) {
	$folder->setFolder($_REQUEST);
} else {
	$folder->updateFolder($_REQUEST);
}
$body1 = "
	<script type='text/javascript'>
		function refreshOpener() {
			window.opener.refresh_group_folder_list('$folder->id','$folder->name')
			window.close();
		} // fn
		refreshOpener();
	</script>";
echo  $body1;
?>