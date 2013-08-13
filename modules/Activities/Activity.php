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


/**
 * Activity.php
 *
 * This is class to encapsulate Activity specific behavior.  Subclasses include Meetings and Calls.  This was used
 * to manage the unique many-to-many handling relationships present in the Meetings and Calls beans.
 *
 */

require_once('data/SugarBean.php');
abstract class Activity extends SugarBean
{

    //Member variable to store value of related records when secondary selects are made via create_new_list_query
    protected $secondary_select_count;

    //Member variable to indicate whether or not this create_new_list_query is called from list view display
    //If so, we set this to true so we may allow for the bean subclasses to appropriately format
    protected $alter_many_to_many_query;

    /**
     * createManyToManyDetailHoverLink
     *
     * This is a function to encapsulate creating a hover link for additional data.  It is called from subclasses that set alter_many_to_many_query
     * to true and wish to display a popup window listing the additional data from the many-to-many relationship.
     *
     * @param string $displayText String value to display in the link portion
     * @param string $exclude_id String id of the displayed related record so as to exclude it from the popup window
     * @return String HTML formatted contents to display a link with a + sign to generate a call to render a popup window
     *
     */
    public function createManyToManyDetailHoverLink($displayText, $exclude_id)
    {
        return "<span id='span_{$this->id}_{$this->table_name}'>{$displayText}<a href='#' style='text-decoration:none;'
        onMouseOver=\"javascript:toggleMore('span_{$this->id}_{$this->table_name}','','{$this->module_dir}','DisplayInline','bean_id={$this->id}&related_id={$exclude_id}');\"
        onFocus=\"javascript:toggleMore('span_{$this->id}_{$this->table_name}','','{$this->module_dir}','DisplayInline','bean_id={$this->id}&related_id={$exclude_id}');\"> +</a></span>";
    }


    /**
      * create_new_list_query
      *
      * Override from SugarBean.  The key here is that we are always setting $singleSelect to false for list views.
      *
      * @param string $order_by custom order by clause
      * @param string $where custom where clause
      * @param array $filter Optioanal
      * @param array $params Optional     *
      * @param int $show_deleted Optional, default 0, show deleted records is set to 1.
      * @param string $join_type
      * @param boolean $return_array Optional, default false, response as array
      * @param object $parentbean creating a subquery for this bean.
      * @param boolean $singleSelect Optional, default false.
      * @return String select query string, optionally an array value will be returned if $return_array= true.
      */
 	function create_new_list_query($order_by, $where,$filter=array(),$params=array(), $show_deleted = 0,$join_type='', $return_array = false,$parentbean=null, $singleSelect = true, $ifListForExport = false)
    {
        if(!isset($params['collection_list']))
        {
            $this->alter_many_to_many_query = true;
            $singleSelect = false;
        }

        return parent::create_new_list_query($order_by, $where, $filter, $params, $show_deleted, $join_type, $return_array, $parentbean, $singleSelect, $ifListForExport);
    }


    /**
      * loadFromRow
      *
      * Loads a row of data into instance of a bean. The data is passed as an array to this function
      * We override this instead of populateFromRow since this function is called from list view displays whereas
      * populateFromRow could be called in many other views.
      *
      * @param array $arr Array of data fetched from the database
      *
      */
     function loadFromRow($arr)
     {
         parent::loadFromRow($arr);
         if(isset($arr['secondary_select_count']))
         {
            $this->secondary_select_count = $arr['secondary_select_count'];
         }
     }

}