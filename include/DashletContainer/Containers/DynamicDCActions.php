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

if(isset($_SESSION['current_db_version']) && isset($_SESSION['target_db_version']) && $_SESSION['current_db_version'] != $_SESSION['target_db_version'])
{
    // check if we are in upgrade. If yes, skip EAPM for now, until the DB is upgraded
    $lotusLiveUrl = '';
    $llNowButton = '';
    return;
}
require_once('include/externalAPI/ExternalAPIFactory.php');
$api = ExternalAPIFactory::loadAPI('LotusLive');
if ( is_object($api) ) {
    $lotusLiveUrl = $api->hostURL;
    $lotusLiveMeetNowLabel = translate('LBL_MEET_NOW_BUTTON','EAPM');
    $llNowButton = '<button onclick=\\\'DCMenu.hostMeeting();\\\'>'.$lotusLiveMeetNowLabel.'</button>';
} else {
    // No meet now button if you don't have an account
    $lotusLiveUrl = '';
    $llNowButton = '';
}

if ( !isset($dynamicDCActions) || !is_array($dynamicDCActions) ) {
    $dynamicDCActions = array();
}

if ( is_object(ExternalAPIFactory::loadAPI('LotusLive',true)) ) {
    $dynamicDCActions['LotusLiveMeetings'] = array(
        'module' => 'Meetings',
        'label' => translate('LBL_VIEW_LOTUS_LIVE_MEETINGS','EAPM'),
        'action'=> "DCMenu.hostMeetingUrl='".$lotusLiveUrl."'; DCMenu.loadView('".translate('LBL_TITLE_LOTUS_LIVE_MEETINGS','EAPM')."','index.php?module=Meetings&action=listbytype&type=LotusLive',undefined,undefined,undefined,'".$llNowButton."');",
        'icon'=> 'icon_LotusMeetings_bar_32.png',
        );

    $dynamicDCActions['LotusLiveDocuments'] = array(
		'module' => 'Documents',
		'label' => translate('LBL_VIEW_LOTUS_LIVE_DOCUMENTS','EAPM'),
		'action' => 'DCMenu.loadView(\''.translate('LBL_TITLE_LOTUS_LIVE_DOCUMENTS','EAPM').'\',\'index.php?module=Documents&action=extdoc&type=LotusLive\');',
		'icon' => 'icon_LotusDocuments_bar_32.png',
        );
}