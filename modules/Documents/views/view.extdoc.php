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


require_once('include/Sugar_Smarty.php');
require_once('include/externalAPI/ExternalAPIFactory.php');


class DocumentsViewExtdoc extends SugarView
{
    var $options = array('show_header' => false, 'show_title' => false, 'show_subpanels' => false, 'show_search' => true, 'show_footer' => false, 'show_javascript' => false, 'view_print' => false,);

    public function init($bean, $view_object_map) {
        $this->seed = $bean;
    }

 	public function display(){

        if ( isset($_REQUEST['name_basic']) ) {
            $file_search = trim($_REQUEST['name_basic']);
        } else {
            $file_search = '';
        }
        
        if ( !isset($_REQUEST['apiName']) ) {
            $apiName = 'LotusLive';
        } else {
            $tmpApi = ExternalAPIFactory::loadAPI($_REQUEST['apiName'],true);
            if ( $tmpApi === false ) {
                $GLOBALS['log']->error('The user attempted to access an invalid external API ('.$_REQUEST['apiName'].')');
                return;
            }
            $apiName = $_REQUEST['apiName'];
        }

        // See if we are running as a popup window
        if ( isset($_REQUEST['isPopup']) && $_REQUEST['isPopup'] == 1 && !empty($_REQUEST['elemBaseName']) ) {
            $isPopup = true;
        } else {
            $isPopup = false;
        }

        // Need to manually attempt to fetch the EAPM record, we don't want to give them the signup screen when they just have a deactivated account.
        
        if ( !$eapmBean = EAPM::getLoginInfo($apiName,true) ) {
            $smarty = new Sugar_Smarty();
            echo $smarty->fetch('include/externalAPI/'.$apiName.'/'.$apiName.'Signup.'.$GLOBALS['current_language'].'.tpl');
            return;
        }


        $api = ExternalAPIFactory::loadAPI($apiName,true);
        $api->loadEAPM($eapmBean);

        $quickCheck = $api->quickCheckLogin();
        if ( ! $quickCheck['success'] ) {
            $errorMessage = string_format(translate('LBL_ERR_FAILED_QUICKCHECK','EAPM'), array($apiName));
            $errorMessage .= '<form method="POST" target="_EAPM_CHECK" action="index.php">';
            $errorMessage .= '<input type="hidden" name="module" value="EAPM">';
            $errorMessage .= '<input type="hidden" name="action" value="Save">';
            $errorMessage .= '<input type="hidden" name="record" value="'.$eapmBean->id.'">';
            $errorMessage .= '<input type="hidden" name="active" value="1">';
            $errorMessage .= '<input type="hidden" name="closeWhenDone" value="1">';
            $errorMessage .= '<input type="hidden" name="refreshParentWindow" value="1">';

            $errorMessage .= '<br><input type="submit" value="'.$GLOBALS['app_strings']['LBL_EMAIL_OK'].'">&nbsp;';
            $errorMessage .= '<input type="button" onclick="lastLoadedMenu=undefined;DCMenu.closeOverlay();return false;" value="'.$GLOBALS['app_strings']['LBL_CANCEL_BUTTON_LABEL'].'">';
            $errorMessage .= '</form>';
            echo $errorMessage;
            return;
        }

        $searchDataLower = $api->searchDoc($file_search,true);


        // In order to emulate the list views for the SugarFields, I need to uppercase all of the key names.
        $searchData = array();

        if ( is_array($searchDataLower) ) {
            foreach ( $searchDataLower as $row ) {
                $newRow = array();
                foreach ( $row as $key => $value ) {
                    $newRow[strtoupper($key)] = $value;
                }
                
                if ( $isPopup ) {
                    // We are running as a popup window, we need to replace the direct url with some javascript
                    $newRow['DOC_URL'] = "javascript:window.opener.SUGAR.field.file.populateFromPopup('".addslashes($_REQUEST['elemBaseName'])."','".addslashes($newRow['ID'])."','".addslashes($newRow['NAME'])."','".addslashes($newRow['URL'])."','".addslashes($newRow['URL'])."'); window.close();";
                }else{
                    $newRow['DOC_URL'] = $newRow['URL'];
                }
                $searchData[] = $newRow;
            }
        }

        $displayColumns = array(
            'NAME' => array(
                'label' => 'LBL_LIST_EXT_DOCUMENT_NAME',
                'type' => 'varchar',
                'link' => true,
                ),
            'DATE_MODIFIED' => array(
                'label' => 'LBL_DATE',
                'type' => 'date',
                ),
        );

        $ss = new Sugar_Smarty();
        $ss->assign('searchFieldLabel',translate('LBL_SEARCH_EXTERNAL_DOCUMENT','Documents'));
        $ss->assign('displayedNote',translate('LBL_EXTERNAL_DOCUMENT_NOTE','Documents'));
        $ss->assign('APP',$GLOBALS['app_strings']);
        $ss->assign('MOD',$GLOBALS['mod_strings']);
        $ss->assign('data', $searchData);
        $ss->assign('displayColumns',$displayColumns);
        $ss->assign('imgPath',SugarThemeRegistry::current()->getImageURL($apiName.'_image_inline.png'));

        if ( $isPopup ) { 
            $ss->assign('linkTarget','');
            $ss->assign('isPopup',1);
            $ss->assign('elemBaseName',$_REQUEST['elemBaseName']);
        } else {
            $ss->assign('linkTarget','_new');
            $ss->assign('isPopup',0);
            $ss->assign('elemBaseName','');
        }
        $ss->assign('apiName',$apiName);
        $ss->assign('DCSEARCH',$file_search);

        if ( $isPopup ) {
            // Need the popup header... I feel so dirty.
            ob_start();
            echo('<div class="dccontent">');
            insert_popup_header($GLOBALS['theme'], false);
            $output_html = ob_get_contents();
            ob_end_clean();
            
            $output_html .= get_form_header(translate('LBL_SEARCH_FORM_TITLE','Documents'), '', false);
            
            echo($output_html);
        }

        $ss->display('modules/Documents/tpls/view.extdoc.tpl');
        
        if ( $isPopup ) {
            // Close the dccontent div
            echo('</div>');
        }
 	}
}
