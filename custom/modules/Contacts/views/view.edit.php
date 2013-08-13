<?php
/*
 * Carga los scripts para telefonos
 * @author Jose Sambrano
 */

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

 * Description: This file is used to override the default Meta-data DetailView behavior
 * to provide customization specific to the Campaigns module.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

class ContactsViewEdit extends ViewEdit {

 	function ContactsViewEdit(){
 		parent::ViewEdit();
 		
 	}

 	function display() {
              $form=$_REQUEST;
               echo '<link rel="stylesheet" type="text/css" href="custom/include/scripts/genericas/jquery/css/jquery-ui.css" />
                   <link rel="stylesheet" type="text/css" href="custom/include/css/tabla/style.css" />';
	       if(file_exists('custom/include/clases/popups/ciudadPopup.php')){
                    include_once 'custom/include/clases/popups/ciudadPopup.php';
               }
               if(file_exists('custom/include/clases/popups/nacionalidadPopup.php')){
                    include_once 'custom/include/clases/popups/nacionalidadPopup.php';
               }
               if(file_exists('custom/include/clases/popups/paisPopup.php')){
                    include_once 'custom/include/clases/popups/paisPopup.php';
               }
      		 if(file_exists('custom/include/clases/popups/VerificarPopup.php')){
                    include_once 'custom/include/clases/popups/VerificarPopup.php';
                 }

                if(file_exists('custom/include/clases/popups/popInteres.php')){
                    include_once 'custom/include/clases/popups/popInteres.php';
               }


               if(!empty($form['parent_id'])&&($form['parent_type']=='Accounts') ){
                   $cuenta=new Account();
                   $cuenta->retrieve($form['parent_id']);
                  
                   $this->bean->phone_work=(empty($this->bean->phone_work))? $cuenta->phone_office : $this->bean->phone_work ;
                   $this->bean->calle_principal=(empty($this->bean->calle_principal))? $cuenta->calle_principal : $this->bean->calle_principal ;
                   $this->bean->calle2_principal=(empty($this->bean->calle2_principal))? $cuenta->calle2_principal : $this->bean->calle2_principal ;
                   $this->bean->numero_principal=(empty($this->bean->numero_principal))? $cuenta->numero_principal : $this->bean->numero_principal ;
                   $this->bean->sector_principal=(empty($this->bean->sector_principal))? $cuenta->sector_principal : $this->bean->sector_principal ;
                   $this->bean->ciudad_principal=(empty($this->bean->ciudad_principal))? $cuenta->ciudad_principal : $this->bean->ciudad_principal ;
                   $this->bean->provincia_principal=(empty($this->bean->provincia_principal))? $cuenta->provincia_principal : $this->bean->provincia_principal ;
                   $this->bean->pais_principal=(empty($this->bean->pais_principal))? $cuenta->pais_principal : $this->bean->pais_principal ;
                   $this->bean->phone_other=(empty($this->bean->phone_other))? $cuenta->phone_alternate : $this->bean->phone_other ;

                   $this->bean->calle_envio=(empty($this->bean->calle_envio))? $cuenta->calle_envio : $this->bean->envio ;
                   $this->bean->calle2_envio=(empty($this->bean->calle2_envio))? $cuenta->calle2_envio : $this->bean->calle2_envio ;
                   $this->bean->numero_envio=(empty($this->bean->numero_envio))? $cuenta->numero_envio : $this->bean->numero_envio ;
                   $this->bean->sector_envio=(empty($this->bean->sector_envio))? $cuenta->sector_envio : $this->bean->sector_envio ;
                   $this->bean->ciudad_envio=(empty($this->bean->ciudad_envio))? $cuenta->ciudad_envio : $this->bean->ciudad_envio ;
                   $this->bean->provincia_envio=(empty($this->bean->provincia_envio))? $cuenta->provincia_envio : $this->bean->provincia_envio ;
                   $this->bean->pais_envio=(empty($this->bean->pais_envio))? $cuenta->pais_envio : $this->bean->pais_envio ;

                   $this->bean->primernombre=(empty($this->bean->primerapellido))? $cuenta->primernombre : $this->bean->primerapellido ;;
                   $this->bean->segundonombre=(empty($this->bean->segundonombre))? $cuenta->segundonombre : $this->bean->segundonombre ;
                   $this->bean->primerapellido=(empty($this->bean->primerapellido))? $cuenta->primerapellido : $this->bean->primerapellido ;
                   $this->bean->segundoapellido=(empty($this->bean->segundoapellido))? $cuenta->segundoapellido : $this->bean->segundoapellido;
                   $this->bean->phone_mobile=(empty($this->bean->phone_mobile))? '593 99 000 0000' : $this->bean->phone_mobile;
                   
                   $this->bean->phone_other=(empty($this->bean->phone_other))? '593 2 000 0000' : $this->bean->phone_other ;
                   
                   $this->bean->first_name=(empty($this->bean->first_name))? $cuenta->primernombre.' '.$cuenta->segundonombre : $this->bean->first_name ;
                   $this->bean->last_name=(empty($this->bean->last_name))? $cuenta->primerapellido.' '.$cuenta->segundoapellido : $this->bean->last_name ;
                   $this->bean->nacionalidad_c=(empty($this->bean->nacionalidad_c))? $cuenta->nacionalidad_c : $this->bean->nacionalidad_c ;
                   $this->bean->ee_nacionalidad_id_c=(empty($this->bean->ee_nacionalidad_id_c))? $cuenta->ee_nacionalidad_id_c : $this->bean->ee_nacionalidad_id_c ;
                    $this->bean->ciudad_principal_ndb=$this->bean->ciudad_principal;
                   if($cuenta->tipocliente_c=="Juridico")
                          $this->bean->lugartrabajo=(empty($this->bean->lugartrabajo))? $cuenta->name : $this->bean->lugartrabajo ;

               }else if (empty($this->bean->id)){
                     $this->bean->ciudad_principal_ndb="Quito";
                     $this->bean->provincia_principal="Pichincha";
                     $this->bean->pais_principal="Ecuador";
                     $this->bean->ciudad_principal="Quito";
                     $this->bean->phone_other="593 2 000 0000";
                     $this->bean->phone_work="593 2 000 0000";
                     $this->bean->phone_mobile="593 99 000 0000";
                     $this->bean->nacionalidad_c="Ecuador";
                     $this->bean->ee_nacionalidad_id_c="c8061532-b759-a071-d560-4fded9896adb";

               }

               

     	parent::display();

        $array=explode(";",$this->bean->cursosinteres);
             if(is_array($array)){
                 $valores=array();
                 foreach($array as $key =>$data){
                     $valores[]['curso']=$data;
                 }
      		$json = new JSON(JSON_LOOSE_TYPE);
                $prefillData = $json->encode($valores);

                $script="<script type=\"text/javascript\" language=\"javascript\" >";
                $script.="cargarCursos('AccountsTable',$prefillData)";
                $script.="</script>";
                echo $script;
             }

 	}

        function  getModuleTitle() {
          global $sugar_version, $sugar_flavor, $server_unique_key, $current_language, $action,$mod_strings;
        $theTitle = "<div class='moduleTitle'>\n";

        $module = preg_replace("/ /","",$this->module);

        $params = $this->_getModuleTitleParams();

        $count = count($params);
        $index = 0;

		if(SugarThemeRegistry::current()->directionality == "rtl") {
			$params = array_reverse($params);
		}

        $paramString = '';

        $puso=false;
        foreach($params as $parm){
            $index++;
            $paramString .= $parm;
            if($index < $count){
                $paramString .= $this->getBreadCrumbSymbol();

                if(!$puso){
                 $paramString.=$mod_strings['LBL_MODULE_NAME']."  ";
                 $paramString .= $this->getBreadCrumbSymbol();
                    $puso=true;
                }
            }
        }

        if(!empty($paramString)){
               $theTitle .= "<h2>$paramString </h2>\n";
           }

        if ($show_help) {
            $theTitle .= "<span class='utils'>";

            $createImageURL = SugarThemeRegistry::current()->getImageURL('create-record.gif');
            $url = ajaxLink("index.php?module=$module&action=EditView&return_module=$module&return_action=DetailView");
            $theTitle .= <<<EOHTML
&nbsp;
<a id="create_image" href="{$url}" class="utilsLink">
<img src='{$createImageURL}' alt='{$GLOBALS['app_strings']['LNK_CREATE']}'></a>
<a id="create_link" href="{$url}" class="utilsLink">
{$GLOBALS['app_strings']['LNK_CREATE']}
</a>
EOHTML;
        }

        $theTitle .= "</span></div>\n";
        return $theTitle;
        }
}
?>