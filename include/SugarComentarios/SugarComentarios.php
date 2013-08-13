<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once("include/Sugar_Smarty.php");
require_once("include/JSON.php");
require_once("data/SugarBean.php");

class SugarComentarios extends SugarBean {
	var $table_name = ' datos_modulo ';
	var $datos;
        var $campos1;
	/**
	 * Sole constructor
	 */
	function __construct($id='',$module='') {
		parent::SugarBean();
		$this->smarty = new Sugar_Smarty();
                
         }


         function mapear($contexto,$nombre){
             if (is_array($this->datos)){
                 
                 return $this->datos[$contexto][$nombre];
             }
             return '';
         }
	function variables($contexto){
            $path_variables='include/SugarComentarios/campos/'.$contexto.'.php';
           if(count($this->campos1)==0){
           if(file_exists($path_variables)){
               include_once $path_variables;
               $this->campos1=$campos;
               if(is_array($this->campos1[$contexto])){
                    foreach($this->campos1 as $contexto1 =>$field){
                       if(is_array($field)){
                           foreach ($field as $nombre =>$valor){
                                $this->smarty->assign($contexto.'_'.$nombre, self::mapear($contexto,$nombre));
                           }
                       }
                    }
               }
           }

           }else{
               if(is_array($this->campos1[$contexto])){
                    foreach($this->campos1 as $contexto1 =>$field){
                       if(is_array($field)){
                           foreach ($field as $nombre =>$valor){
                                $this->smarty->assign($contexto.'_'.$nombre, self::mapear($contexto,$nombre));
                           }
                       }
                    }
               }

           }


        }
	function save($cotizacion, $module, $in_workflow=false) {
          $data=self::getComentariosByGUID($cotizacion,$module);
           if (is_array($data)){
                 foreach ($data as $key =>$value){
                     $this->datos[$value['contexto']][$value['nombre']]=$value['id'];
                 }
              }
           $path_variables='include/SugarComentarios/campos/campos_leads.php';

           if(file_exists($path_variables)){

               include_once $path_variables;

               if(is_array($campos)){

                   foreach($campos as $contexto =>$field){
                       if(is_array($field)){

                           foreach ($field as $nombre =>$valor){


                              $variables=array(
                                 'id'=>self::mapear($contexto,$nombre),
                                 'contexto'=>$contexto,
                                 'nombre'=>$nombre,
                                 'texto'=>$_REQUEST[$contexto.'_'.$nombre],
                                 'oportunidad_id'=>$cotizacion,
                              );
                              // verificar tipos de datos

                              $form_fields[]=$variables;
                           }
                       }

                   }
               }
           }

            self::AddUpdateComentarios($form_fields);

	}



	function AddUpdateComentarios($form=array()){

            foreach($form as $key =>$data){

                if(!empty($data['id'])){
                   $query="Update ".$this->table_name."
                           set
                           contexto='".$data['contexto']."',
                           nombre='".$data['nombre']."',
                           texto='".$data['texto']."',
                           oportunidad_id='".$data['oportunidad_id']."'
                           where   id='".$data['id']."'";
		   $this->db->query($query);
		}else{


		 //$guid = create_guid();
		 $query="insert into ".$this->table_name."
                         (
                           id,
                           
                           contexto,
                           nombre,
                           texto,
                           
                           oportunidad_id
                           
                         )
                          values(
                          null,
                          
                          '".$data['contexto']."',
                          '".$data['nombre']."',
                          '".$data['texto']."',
                          
                          '".$data['oportunidad_id']."'
                          )";

	   	 $this->db->query($query);

		  }

            }


          return;

	}

        function delete($ids=array(),$actual=array()){
            if(is_array($actual)){
                $temp=$actual;
                foreach($actual as $key =>$value){

                    if(in_array($value['id'],$ids)){
                        unset($temp[$key]);
                    }
                }
                if(count($temp)){
                    foreach($temp as $key => $data){
                        $query="Update ".$this->table_name." set deleted=1 where id =".$data['id'];
                        $this->db->query($query);
                    }
                }

            }
            

        }
   
	/**
	 * Returns all email addresses by parent's GUID
	 * @param string $id Parent's GUID
	 * @param string $module Parent's module
	 * @return array
	 */
	function getComentariosByGUID($id, $module,$contexto="") {
		$return = array();
                if(!empty($contexto))
                  $q = "SELECT * FROM ".$this->table_name." where oportunidad_id = '{$id}' and contexto='{$contexto}'
				order by id ";
                else
                  $q = "SELECT * FROM ".$this->table_name." where oportunidad_id = '{$id}' 
				order by id ";
		//$this->archivo($q);
		$r = $this->db->query($q);
		while($a = $this->db->fetchByAssoc($r)) {
			$return[] = $a;
		}

		return $return;
	}

	/**
	 * Returns the HTML/JS for the EmailAddress widget
	 * @param string $parent_id ID of parent bean, generally $focus
	 * @param string $module $focus' module
	 * @param bool asMetadata Default false
	 * @return string HTML/JS for widget
	 */
	function getF3WidgetEditView($id, $module,$convertida, $asMetadata=false, $tpl='') {
		global $app_strings,$current_user;
                include_once 'include/SugarComentarios/FunctionHelper.php';
                $helper=new FunctionHelper();
                $prefillDataArr = array();
                $data=self::getComentariosByGUID($id,$module,"f3");
                if (is_array($data)){
                 foreach ($data as $key =>$value){
                     $this->datos[$value['contexto']][$value['nombre']]=$value['texto'];
                 }
                }
                self::variables('f3');

		

                $this->smarty->assign('helper', $helper);
		$this->smarty->assign('module', $module);
		$this->smarty->assign('app_strings', $app_strings);

		
		$template = empty($tpl) ? "include/SugarComentarios/templates/F3EditView.html" : $tpl;
		$newEmail = $this->smarty->fetch($template);

		return $newEmail;
	}


	function getF3WidgetDetailView($focus, $tpl='') {
		global $app_strings;
		global $current_user;
                                include_once 'include/SugarComentarios/FunctionHelper.php';
                $helper=new FunctionHelper();

                  $data=self::getComentariosByGUID($focus->id,$module,"f3");
                if (is_array($data)){
                 foreach ($data as $key =>$value){
                     $this->datos[$value['contexto']][$value['nombre']]=$value['texto'];
                 }
                }
                self::variables('f3');

                $this->smarty->assign('helper', $helper);
                $this->smarty->assign('idOportunidad', $focus->id);
		$templateFile = empty($tpl) ? "include/SugarComentarios/templates/F3DetailView.html" : $tpl;
		$return = $this->smarty->fetch($templateFile);
		return $return;
	}




function getF2WidgetEditView($id, $module,$convertida, $asMetadata=false, $tpl='') {
		global $app_strings,$current_user;
                include_once 'include/SugarComentarios/FunctionHelper.php';
                $helper=new FunctionHelper();
                $prefillDataArr = array();
                $data=self::getComentariosByGUID($id,$module,"f2");
                if (is_array($data)){
                 foreach ($data as $key =>$value){
                     $this->datos[$value['contexto']][$value['nombre']]=$value['texto'];
                 }
                }
                self::variables('f2');



                $this->smarty->assign('helper', $helper);
		$this->smarty->assign('module', $module);
		$this->smarty->assign('app_strings', $app_strings);


		$template = empty($tpl) ? "include/SugarComentarios/templates/F2EditView.html" : $tpl;
		$newEmail = $this->smarty->fetch($template);

		return $newEmail;
	}


	function getF2WidgetDetailView($focus, $tpl='') {
		global $app_strings;
		global $current_user;
                                include_once 'include/SugarComentarios/FunctionHelper.php';
                $helper=new FunctionHelper();

                  $data=self::getComentariosByGUID($focus->id,$module,"f2");
                if (is_array($data)){
                 foreach ($data as $key =>$value){
                     $this->datos[$value['contexto']][$value['nombre']]=$value['texto'];
                 }
                }
                self::variables('f2');

                $this->smarty->assign('helper', $helper);
                $this->smarty->assign('idOportunidad', $focus->id);
		$templateFile = empty($tpl) ? "include/SugarComentarios/templates/F2DetailView.html" : $tpl;
		$return = $this->smarty->fetch($templateFile);
		return $return;
	}




        function getF1WidgetEditView($id, $module,$convertida, $asMetadata=false, $tpl='') {
		global $app_strings,$current_user;
                include_once 'include/SugarComentarios/FunctionHelper.php';
                $helper=new FunctionHelper();
                $prefillDataArr = array();
                $data=self::getComentariosByGUID($id,$module);
                if (is_array($data)){
                 foreach ($data as $key =>$value){
                     $this->datos[$value['contexto']][$value['nombre']]=$value['texto'];
                 }
                }
                self::variables('f1');



                $this->smarty->assign('helper', $helper);
		$this->smarty->assign('module', $module);
		$this->smarty->assign('app_strings', $app_strings);


		$template = empty($tpl) ? "include/SugarComentarios/templates/F1EditView.html" : $tpl;
		$newEmail = $this->smarty->fetch($template);

		return $newEmail;
	}


	function getF1WidgetDetailView($focus, $tpl='') {
		global $app_strings;
		global $current_user;
                                include_once 'include/SugarComentarios/FunctionHelper.php';
                $helper=new FunctionHelper();

                  $data=self::getComentariosByGUID($focus->id,$module);
                if (is_array($data)){
                 foreach ($data as $key =>$value){
                     $this->datos[$value['contexto']][$value['nombre']]=$value['texto'];
                 }
                }
                self::variables('f1');

                $this->smarty->assign('helper', $helper);
                $this->smarty->assign('idOportunidad', $focus->id);
		$templateFile = empty($tpl) ? "include/SugarComentarios/templates/F1DetailView.html" : $tpl;
		$return = $this->smarty->fetch($templateFile);
		return $return;
	}

    function setView($view) {
	   $this->view = $view;
	}


} // end class def


/**
 * Convenience function for MVC (Mystique)
 * @param object $focus SugarBean
 * @param string $field unused
 * @param string $value unused
 * @param string $view DetailView or EditView
 * @return string
 */
function getF3Widget($focus, $field, $value, $view) {
	$sea = new SugarComentarios($focus->id,$focus->module_dir);
	$sea->setView($view);
	if($view == 'EditView' || $view == 'QuickCreate') {
			return $sea->getF3WidgetEditView($focus->id, $focus->module_dir,$focus->convertida, false);
	}

		return $sea->getF3WidgetDetailView($focus);
}

/**
 * Convenience function for MVC (Mystique)
 * @param object $focus SugarBean
 * @param string $field unused
 * @param string $value unused
 * @param string $view DetailView or EditView
 * @return string
 */
function getF2Widget($focus, $field, $value, $view) {
	$sea = new SugarComentarios($focus->id,$focus->module_dir);
	$sea->setView($view);
	if($view == 'EditView' || $view == 'QuickCreate') {
			return $sea->getF2WidgetEditView($focus->id, $focus->module_dir,$focus->convertida, false);
	}

		return $sea->getF2WidgetDetailView($focus);
}


/**
 * Convenience function for MVC (Mystique)
 * @param object $focus SugarBean
 * @param string $field unused
 * @param string $value unused
 * @param string $view DetailView or EditView
 * @return string
 */
function getF1Widget($focus, $field, $value, $view) {
	$sea = new SugarComentarios($focus->id,$focus->module_dir);
	$sea->setView($view);
	if($view == 'EditView' || $view == 'QuickCreate') {
			return $sea->getF1WidgetEditView($focus->id, $focus->module_dir,$focus->convertida, false);
	}

		return $sea->getF1WidgetDetailView($focus);
}
?>
