<?php
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



/**
 * MeetingsController.php
 *
 * This is the controller file to handle the Meetings module specific actions
 */

require_once('include/MVC/Controller/SugarController.php');
class MeetingsController extends SugarController
{

    /**
     * action_DisplayInline
     *
     * This method handles the request to display an Ajax view of related many to many records.  It expects a bean_id
     * $_REQUEST parameter and an option related_id $_REQUEST parameter from the request.
     */
    public function action_DisplayInline()
    {
   		$this->view = 'ajax';
   		$body = '';
   		$bean_id = isset($_REQUEST['bean_id']) ? $_REQUEST['bean_id'] : '';
   		$caption = '';
   		if(!empty($bean_id))
           {
               global $locale;
               $query = "SELECT c.first_name, c.last_name, c.salutation, c.title FROM contacts c LEFT JOIN meetings_contacts mc ON c.id = mc.contact_id WHERE mc.meeting_id = '{$bean_id}'";
               if(!empty($_REQUEST['related_id']))
               {
                   $query .= " AND c.id != '{$_REQUEST['related_id']}' AND c.deleted=0";
               }

               $result = $GLOBALS['db']->query($query);
               while(($row = $GLOBALS['db']->fetchByAssoc($result)) != null)
               {
   				    $body .= $locale->getLocaleFormattedName($row['first_name'], $row['last_name'], $row['salutation'], $row['title']) . '<br/>';
               }
   		}

   		global $theme;
   		$json = getJSONobj();
   		$retArray = array();
   		$retArray['body'] = $body;
   		$retArray['caption'] = $caption;
   	    $retArray['width'] = '100';
   	    $retArray['theme'] = $theme;
   	    echo 'result = ' . $json->encode($retArray);
   	}
}
?>