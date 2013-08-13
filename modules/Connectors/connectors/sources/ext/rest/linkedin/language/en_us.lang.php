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

* Description:  Defines the English language pack for the base application.
* Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
* All Rights Reserved.
* Contributor(s): ______________________________________..
********************************************************************************/

$connector_strings = array (
    //licensing information shown in config screen
    'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel">Obtain a pair of API and Secret Keys from LinkedIn&#169; by registering your Sugar instance as a new application.<br/><br>Steps to register your instance:<br/><br/><ol><li>Go to the LinkedIn&#169; Developers site: <a href=\'https://www.linkedin.com/secure/developer\' target=\'_blank\'>https://www.linkedin.com/secure/developer</a>.</li><li>Sign In using the LinkedIn&#169; account under which you would like to register the application.</li><li>Click the Add New Application link.</li><li>Complete the Add New Application form.</li><li>Select the Agree checkbox and click Add Application.</li><li>Find the API and Secret Keys for the Linkedin&#169; Connector (Admin – Connector - Linkedin&#169;) in the Application Details page and enter the keys below.</li><li>Click Save.</li></ol></td></tr></table>',

    'LBL_NAME' => 'Company Name',

	//Configuration labels
	'company_url' => 'URL',
    'oauth_consumer_key' => 'API Key',
    'oauth_consumer_secret' => 'Secret Key'
);

?>