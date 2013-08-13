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

require_once('include/MVC/View/SugarView.php');

require_once('include/ListView/ListViewSmarty.php');

require_once('modules/MySettings/StoreQuery.php');
class ViewList extends SugarView{
    var $type ='list';
    var $lv;
    var $searchForm;
    var $use_old_search;
    var $headers;
    var $seed;
    var $params;
    var $listViewDefs;
    var $storeQuery;
    var $where = '';
    function ViewList(){
        parent::SugarView();
    }


    function oldSearch(){

    }
    function newSearch(){

    }

    function listViewPrepare(){
        $module = $GLOBALS['module'];

        $metadataFile = $this->getMetaDataFile();

        if( !file_exists($metadataFile) )
            sugar_die($GLOBALS['app_strings']['LBL_NO_ACTION'] );

        require($metadataFile);
        $this->listViewDefs = $listViewDefs;
        if($this->bean->bean_implements('ACL'))
        ACLField::listFilter($this->listViewDefs[$module],$module, $GLOBALS['current_user']->id ,true);

        if(!empty($this->bean->object_name) && isset($_REQUEST[$module.'2_'.strtoupper($this->bean->object_name).'_offset'])) {//if you click the pagination button, it will poplate the search criteria here
            if(!empty($_REQUEST['current_query_by_page'])) {//The code support multi browser tabs pagination
                $blockVariables = array('mass', 'uid', 'massupdate', 'delete', 'merge', 'selectCount', 'request_data', 'current_query_by_page',$module.'2_'.strtoupper($this->bean->object_name).'_ORDER_BY' );
                if(isset($_REQUEST['lvso'])){
                    $blockVariables[] = 'lvso';
                }
                $current_query_by_page = unserialize(base64_decode($_REQUEST['current_query_by_page']));
                foreach($current_query_by_page as $search_key=>$search_value) {
                    if($search_key != $module.'2_'.strtoupper($this->bean->object_name).'_offset' && !in_array($search_key, $blockVariables)) {
                        if (!is_array($search_value)) {
                            $_REQUEST[$search_key] = $GLOBALS['db']->quote($search_value);
                        }
                        else {
                            foreach ($search_value as $key=>&$val) {
                                $val = $GLOBALS['db']->quote($val);
                            }
                            $_REQUEST[$search_key] = $search_value;
                        }
                    }
                }
            }
        }
        if(!empty($_REQUEST['saved_search_select'])) {
            if ($_REQUEST['saved_search_select']=='_none' || !empty($_REQUEST['button'])) {
                $_SESSION['LastSavedView'][$_REQUEST['module']] = '';
                unset($_REQUEST['saved_search_select']);
                unset($_REQUEST['saved_search_select_name']);

                //use the current search module, or the current module to clear out layout changes
                if(!empty($_REQUEST['search_module']) || !empty($_REQUEST['module'])){
                    $mod = !empty($_REQUEST['search_module']) ? $_REQUEST['search_module'] : $_REQUEST['module'];
                    global $current_user;
                    //Reset the current display columns to default.
                    $current_user->setPreference('ListViewDisplayColumns', array(), 0, $mod);
                }
            }
            else if(empty($_REQUEST['button']) && (empty($_REQUEST['clear_query']) || $_REQUEST['clear_query']!='true')) {
                $this->saved_search = loadBean('SavedSearch');
                $this->saved_search->retrieveSavedSearch($_REQUEST['saved_search_select']);
                $this->saved_search->populateRequest();
            }
            elseif(!empty($_REQUEST['button'])) { // click the search button, after retrieving from saved_search
                $_SESSION['LastSavedView'][$_REQUEST['module']] = '';
                unset($_REQUEST['saved_search_select']);
                unset($_REQUEST['saved_search_select_name']);
            }
        }
        $this->storeQuery = new StoreQuery();
        if(!isset($_REQUEST['query'])){
            $this->storeQuery->loadQuery($this->module);
            $this->storeQuery->populateRequest();
        }else{
            $this->storeQuery->saveFromRequest($this->module);
        }

        $this->seed = $this->bean;

        $displayColumns = array();
        if(!empty($_REQUEST['displayColumns'])) {
            foreach(explode('|', $_REQUEST['displayColumns']) as $num => $col) {
                if(!empty($this->listViewDefs[$module][$col]))
                    $displayColumns[$col] = $this->listViewDefs[$module][$col];
            }
        }
        else {
            foreach($this->listViewDefs[$module] as $col => $this->params) {
                if(!empty($this->params['default']) && $this->params['default'])
                    $displayColumns[$col] = $this->params;
            }
        }
        $this->params = array('massupdate' => true);
        if(!empty($_REQUEST['orderBy'])) {
            $this->params['orderBy'] = $_REQUEST['orderBy'];
            $this->params['overrideOrder'] = true;
            if(!empty($_REQUEST['sortOrder'])) $this->params['sortOrder'] = $_REQUEST['sortOrder'];
        }
        $this->lv->displayColumns = $displayColumns;

        $this->module = $module;

        $this->prepareSearchForm();

        if(isset($this->options['show_title']) && $this->options['show_title']) {
            $moduleName = isset($this->seed->module_dir) ? $this->seed->module_dir : $GLOBALS['mod_strings']['LBL_MODULE_NAME'];
            echo $this->getModuleTitle(true);
        }
    }

    function listViewProcess(){
        $this->processSearchForm();
        $this->lv->searchColumns = $this->searchForm->searchColumns;

        if(!$this->headers)
            return;
        if(empty($_REQUEST['search_form_only']) || $_REQUEST['search_form_only'] == false){
            $this->lv->ss->assign("SEARCH",true);
            $this->lv->setup($this->seed, 'include/ListView/ListViewGeneric.tpl', $this->where, $this->params);
            $savedSearchName = empty($_REQUEST['saved_search_select_name']) ? '' : (' - ' . $_REQUEST['saved_search_select_name']);
            echo $this->lv->display();
        }
    }
    function prepareSearchForm(){
    $this->searchForm = null;

        //search
        $view = 'basic_search';
        if(!empty($_REQUEST['search_form_view']) && $_REQUEST['search_form_view'] == 'advanced_search')
            $view = $_REQUEST['search_form_view'];
        $this->headers = true;
        if(!empty($_REQUEST['search_form_only']) && $_REQUEST['search_form_only'])
            $this->headers = false;
        elseif(!isset($_REQUEST['search_form']) || $_REQUEST['search_form'] != 'false') {
            if(isset($_REQUEST['searchFormTab']) && $_REQUEST['searchFormTab'] == 'advanced_search') {
                $view = 'advanced_search';
            }else {
                $view = 'basic_search';
            }
        }

        $this->use_old_search = true;
        if ((file_exists('modules/' . $this->module . '/SearchForm.html')
                && !file_exists('modules/' . $this->module . '/metadata/searchdefs.php'))
            || (file_exists('custom/modules/' . $this->module . '/SearchForm.html')
                && !file_exists('custom/modules/' . $this->module . '/metadata/searchdefs.php'))){
            require_once('include/SearchForm/SearchForm.php');
            $this->searchForm = new SearchForm($this->module, $this->seed);
        }else{
            $this->use_old_search = false;
            require_once('include/SearchForm/SearchForm2.php');

            if(file_exists('custom/modules/'.$this->module.'/metadata/metafiles.php')){
                require('custom/modules/'.$this->module.'/metadata/metafiles.php');
            }elseif(file_exists('modules/'.$this->module.'/metadata/metafiles.php')){
                require('modules/'.$this->module.'/metadata/metafiles.php');
            }

/*          if(!empty($metafiles[$this->module]['searchdefs']))
                require_once($metafiles[$this->module]['searchdefs']);
            elseif(file_exists('modules/'.$this->module.'/metadata/searchdefs.php'))
                require_once('modules/'.$this->module.'/metadata/searchdefs.php');
*/

            if (file_exists('custom/modules/'.$this->module.'/metadata/searchdefs.php'))
            {
                require('custom/modules/'.$this->module.'/metadata/searchdefs.php');
            }
            elseif (!empty($metafiles[$this->module]['searchdefs']))
            {
                require($metafiles[$this->module]['searchdefs']);
            }
            elseif (file_exists('modules/'.$this->module.'/metadata/searchdefs.php'))
            {
                require('modules/'.$this->module.'/metadata/searchdefs.php');
            }


            if(!empty($metafiles[$this->module]['searchfields']))
                require($metafiles[$this->module]['searchfields']);
            elseif(file_exists('modules/'.$this->module.'/metadata/SearchFields.php'))
                require('modules/'.$this->module.'/metadata/SearchFields.php');

            if(file_exists('custom/modules/'.$this->module.'/metadata/SearchFields.php')){
                require('custom/modules/'.$this->module.'/metadata/SearchFields.php');
            }


            $this->searchForm = new SearchForm($this->seed, $this->module, $this->action);
            $this->searchForm->setup($searchdefs, $searchFields, 'include/SearchForm/tpls/SearchFormGeneric.tpl', $view, $this->listViewDefs);
            $this->searchForm->lv = $this->lv;
        }
    }
    function processSearchForm(){
        if(isset($_REQUEST['query']))
        {
            // we have a query
            if(!empty($_SERVER['HTTP_REFERER']) && preg_match('/action=EditView/', $_SERVER['HTTP_REFERER'])) { // from EditView cancel
                $this->searchForm->populateFromArray($this->storeQuery->query);
            }
            else {
                $this->searchForm->populateFromRequest();
            }

            $where_clauses = $this->searchForm->generateSearchWhere(true, $this->seed->module_dir);

            if (count($where_clauses) > 0 )$this->where = '('. implode(' ) AND ( ', $where_clauses) . ')';
            $GLOBALS['log']->info("List View Where Clause: $this->where");
        }
        if($this->use_old_search){
            switch($view) {
                case 'basic_search':
                    $this->searchForm->setup();
                    $this->searchForm->displayBasic($this->headers);
                    break;
                 case 'advanced_search':
                    $this->searchForm->setup();
                    $this->searchForm->displayAdvanced($this->headers);
                    break;
                 case 'saved_views':
                    echo $this->searchForm->displaySavedViews($this->listViewDefs, $this->lv, $this->headers);
                   break;
            }
        }else{
            echo $this->searchForm->display($this->headers);
        }
    }
    function preDisplay(){
        $this->lv = new ListViewSmarty();
    }
    function display(){
        if(!$this->bean || !$this->bean->ACLAccess('list')){
            ACLController::displayNoAccess();
        } else {
            $this->listViewPrepare();
            $this->listViewProcess();
        }
    }
}
?>
