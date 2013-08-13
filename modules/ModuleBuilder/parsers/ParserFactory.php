<?php
if (! defined ( 'sugarEntry' ) || ! sugarEntry)
    die ( 'Not A Valid Entry Point' ) ;

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


require_once 'modules/ModuleBuilder/parsers/constants.php' ;

class ParserFactory
{

    /*
     * Create a new parser
     *
     * @param string $view          The view, for example EditView or ListView. For search views, use advanced_search or basic_search
     * @param string $moduleName    Module name
     * @param string $packageName   Package name. If present implies that we are being called from ModuleBuilder
     * @return AbstractMetaDataParser
     */

    function getParser ( $view , $moduleName , $packageName = null , $subpanelName = null )
    {
        $GLOBALS [ 'log' ]->info ( "ParserFactory->getParser($view,$moduleName,$packageName,$subpanelName )" ) ;
		if ( empty ( $packageName ) || ( $packageName == 'studio' ) )
			$packageName = null ;
        switch ( strtolower ( $view ))
        {
            case MB_EDITVIEW :
            case MB_DETAILVIEW :
            case MB_QUICKCREATE :
                require_once 'modules/ModuleBuilder/parsers/views/GridLayoutMetaDataParser.php' ;
                return new GridLayoutMetaDataParser ( $view, $moduleName, $packageName ) ;
            case MB_WIRELESSEDITVIEW :
            case MB_WIRELESSDETAILVIEW :
                require_once 'modules/ModuleBuilder/parsers/views/WirelessGridLayoutMetaDataParser.php' ;
                return new WirelessGridLayoutMetaDataParser ( $view, $moduleName, $packageName ) ;
            case MB_WIRELESSLISTVIEW:
                require_once 'modules/ModuleBuilder/parsers/views/ListLayoutMetaDataParser.php' ;
                return new ListLayoutMetaDataParser ( $view, $moduleName, $packageName ) ;
            case MB_BASICSEARCH :
            case MB_ADVANCEDSEARCH :
            case MB_WIRELESSBASICSEARCH :
            case MB_WIRELESSADVANCEDSEARCH :
                require_once 'modules/ModuleBuilder/parsers/views/SearchViewMetaDataParser.php' ;
                return new SearchViewMetaDataParser ( $view, $moduleName, $packageName ) ;
            case MB_LISTVIEW :
                if ($subpanelName == null)
                {
                    require_once 'modules/ModuleBuilder/parsers/views/ListLayoutMetaDataParser.php' ;
                    return new ListLayoutMetaDataParser ( MB_LISTVIEW, $moduleName, $packageName ) ;
                } else
                {
                    require_once 'modules/ModuleBuilder/parsers/views/SubpanelMetaDataParser.php' ;
                    return new SubpanelMetaDataParser ( $subpanelName, $moduleName, $packageName ) ;
                }
            case MB_DASHLET :
            case MB_DASHLETSEARCH :
                require_once 'modules/ModuleBuilder/parsers/views/DashletMetaDataParser.php' ;
                return new DashletMetaDataParser($view, $moduleName, $packageName  );
            case MB_POPUPLIST :
            case MB_POPUPSEARCH :
                require_once 'modules/ModuleBuilder/parsers/views/PopupMetaDataParser.php' ;
                return new PopupMetaDataParser($view, $moduleName, $packageName  );
            case MB_LABEL :
                require_once 'modules/ModuleBuilder/parsers/parser.label.php' ;
                return new ParserLabel ( $moduleName, $packageName ) ;
            case MB_VISIBILITY :
                require_once 'modules/ModuleBuilder/parsers/parser.visibility.php' ;
                return new ParserVisibility ( $moduleName, $packageName ) ;
            default :
                $prefix = '';
                if(!is_null ( $packageName )){
                    $prefix = empty($packageName) ? 'build' :'modify';
                }
                $fileName = "modules/ModuleBuilder/parsers/parser." . strtolower ( $prefix . $view ) . ".php" ;
                if (file_exists ( $fileName ))
                {
                    require_once $fileName ;
                    $class = 'Parser' . $prefix . ucfirst ( $view ) ;
                    if (class_exists ( $class ))
                    {
                        $GLOBALS [ 'log' ]->debug ( 'Using ModuleBuilder Parser ' . $fileName ) ;
                        $parser = new $class ( ) ;
                        return $parser ;
                    }
                }

        }

        $GLOBALS [ 'log' ]->fatal ( get_class ( $this ) . ": cannot create ModuleBuilder Parser $fileName" ) ;

    }

}
?>