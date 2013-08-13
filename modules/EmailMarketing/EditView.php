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

require_once('modules/EmailMarketing/Forms.php');

global $timedate;
global $app_strings;
global $app_list_strings;
global $mod_strings;
global $current_user;

// Unimplemented until jscalendar language files are fixed
// global $current_language;
// global $default_language;
// global $cal_codes;

$focus = new EmailMarketing();
if(isset($_REQUEST['record'])) {
    $focus->retrieve($_REQUEST['record']);
}

if(isset($_REQUEST['isDuplicate']) && $_REQUEST['isDuplicate'] == 'true') {
	$focus->id = "";
}
global $theme;



$GLOBALS['log']->info("EmailMarketing Edit View");
$xtpl=new XTemplate ('modules/EmailMarketing/EditView.html');
if(!ACLController::checkAccess('EmailTemplates', 'edit', true)){
	unset($mod_strings['LBL_CREATE_EMAIL_TEMPLATE']);
	unset($mod_strings['LBL_EDIT_EMAIL_TEMPLATE']);
}
$xtpl->assign("MOD", $mod_strings);
$xtpl->assign("APP", $app_strings);
$xtpl->assign("THEME", SugarThemeRegistry::current()->__toString());
// Unimplemented until jscalendar language files are fixed
// $xtpl->assign("CALENDAR_LANG", ((empty($cal_codes[$current_language])) ? $cal_codes[$default_language] : $cal_codes[$current_language]));
$xtpl->assign("CALENDAR_LANG", "en");
$xtpl->assign("USER_DATEFORMAT", '('. $timedate->get_user_date_format().')');
$xtpl->assign("CALENDAR_DATEFORMAT", $timedate->get_cal_date_format());
$time_ampm = $timedate->AMPMMenu('', $focus->time_start);
$xtpl->assign("TIME_MERIDIEM", $time_ampm);

if (isset($_REQUEST['return_module'])) {
	$xtpl->assign("RETURN_MODULE", $_REQUEST['return_module']);
} else {
	$xtpl->assign("RETURN_MODULE", 'Campaigns');
}
if (isset($_REQUEST['return_action'])) {
	$xtpl->assign("RETURN_ACTION", $_REQUEST['return_action']);
} else {
	$xtpl->assign("RETURN_ACTION", 'DetailView');
}
if (isset($_REQUEST['return_id'])) {
	$xtpl->assign("RETURN_ID", $_REQUEST['return_id']);
} else {
	if (!empty($focus->campaign_id)) {
		$xtpl->assign("RETURN_ID", $focus->campaign_id);
	}
}

if($focus->campaign_id) {
	$campaign_id=$focus->campaign_id;
} else {
	$campaign_id=$_REQUEST['campaign_id'];
}
$xtpl->assign("CAMPAIGN_ID", $campaign_id);

if(empty($time_ampm) || empty($focus->time_start)) {
    $time_start = $focus->time_start;
} else {
    $split = $timedate->splitTime($focus->time_start, $timedate->get_time_format());
    $time_start = $split['h'].$timedate->timeSeparator().$split['m'];
}
$xtpl->assign("PRINT_URL", "index.php?".$GLOBALS['request_string']);
$xtpl->assign("JAVASCRIPT", get_set_focus_js().get_validate_record_js());
$xtpl->assign("DATE_ENTERED", $focus->date_entered);
$xtpl->assign("DATE_MODIFIED", $focus->date_modified);
$xtpl->assign("ID", $focus->id);
$xtpl->assign("NAME", $focus->name);
$xtpl->assign("FROM_NAME", $focus->from_name);
$xtpl->assign("FROM_ADDR", $focus->from_addr);
$xtpl->assign("DATE_START", $focus->date_start);
$xtpl->assign("TIME_START", $time_start);
$xtpl->assign("TIME_FORMAT", '('. $timedate->get_user_time_format().')');

$email_templates_arr = get_bean_select_array(true, 'EmailTemplate','name','','name');
if($focus->template_id) {
	$xtpl->assign("TEMPLATE_ID", $focus->template_id);
	$xtpl->assign("EMAIL_TEMPLATE_OPTIONS", get_select_options_with_id($email_templates_arr, $focus->template_id));
	$xtpl->assign("EDIT_TEMPLATE","visibility:inline");
}
else {
	$xtpl->assign("EMAIL_TEMPLATE_OPTIONS", get_select_options_with_id($email_templates_arr, ""));
	$xtpl->assign("EDIT_TEMPLATE","visibility:hidden");
}

//include campaign utils..
require_once('modules/Campaigns/utils.php');
if (empty($_REQUEST['campaign_name'])) {

	$campaign = new Campaign();
	$campaign->retrieve($campaign_id);
	$campaign_name=$campaign->name;
} else {
	$campaign_name=$_REQUEST['campaign_name'];
}

$params = array();
$params[] = "<a href='index.php?module=Campaigns&action=index'>{$mod_strings['LNK_CAMPAIGN_LIST']}</a>";
$params[] = "<a href='index.php?module=Campaigns&action=DetailView&record={$campaign_id}'>{$campaign_name}</a>";
if(empty($focus->id)){
	$params[] = $GLOBALS['app_strings']['LBL_CREATE_BUTTON_LABEL']." ".$mod_strings['LBL_MODULE_NAME'];
}else{
	$params[] = "<a href='index.php?module={$focus->module_dir}&action=DetailView&record={$focus->id}'>{$focus->name}</a>";
	$params[] = $GLOBALS['app_strings']['LBL_EDIT_BUTTON_LABEL'];
}

echo getClassicModuleTitle($focus->module_dir, $params, true);
$scope_options=get_message_scope_dom($campaign_id,$campaign_name,$focus->db);
$prospectlists=array();
if (isset($focus->all_prospect_lists) && $focus->all_prospect_lists==1) {
	$xtpl->assign("ALL_PROSPECT_LISTS_CHECKED","checked");
	$xtpl->assign("MESSAGE_FOR_DISABLED","disabled");
}
else {
	//get select prospect list.
	if (!empty($focus->id)) {
		$focus->load_relationship('prospectlists');
		$prospectlists=$focus->prospectlists->get();
	};
}
if (empty($prospectlists)) $prospectlists=array();
if (empty($scope_options)) $scope_options=array();
$xtpl->assign("SCOPE_OPTIONS", get_select_options_with_id($scope_options, $prospectlists));

$emails=array();
$mailboxes=get_campaign_mailboxes($emails);
$mailboxes_with_from_name = get_campaign_mailboxes($emails, false);

//add empty options.
$emails['']='nobody@example.com';
$mailboxes['']='';

//inbound_email_id
$default_email_address='nobody@example.com';
$from_emails = '';
foreach ($mailboxes_with_from_name as $id=>$name) {
	if (!empty($from_emails)) {
		$from_emails.=',';
	}
	if ($id=='') {
		$from_emails.="'EMPTY','$name','$emails[$id]'";
	} else {
		$from_emails.="'$id','$name','$emails[$id]'";
	}
	if ($id==$focus->inbound_email_id) {
		$default_email_address=$emails[$id];
	}
}
$xtpl->assign("FROM_EMAILS",$from_emails);
$xtpl->assign("DEFAULT_FROM_EMAIL",$default_email_address);

if (empty($focus->inbound_email_id)) {
	$xtpl->assign("MAILBOXES", get_select_options_with_id($mailboxes, ''));
} else {
	$xtpl->assign("MAILBOXES", get_select_options_with_id($mailboxes, $focus->inbound_email_id));
}

$xtpl->assign("STATUS_OPTIONS", get_select_options_with_id($app_list_strings['email_marketing_status_dom'], $focus->status));

$xtpl->parse("main");
$xtpl->out("main");



$javascript = new javascript();
$javascript->setFormName('EditView');
$javascript->setSugarBean($focus);
$javascript->addAllFields('');
echo $javascript->getScript();
?>
