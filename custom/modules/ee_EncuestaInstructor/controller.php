<?php
/**
 *Verifica la informacion , requerida y el numero de cedula
 * @author Jose Sambrano
 */
class ee_EncuestaInstructorController extends SugarController
{
    
    function  action_save() {
        parent::action_save();
        $path= 'include/SugarComentarios/SugarComentarios.php';
    
       if (file_exists($path)){
          include_once($path);
          $programa=new SugarComentarios($this->bean->id,$focus->module_dir);
          $programa->save($this->bean->id,$focus->module_dir);
       }

      
    }

    function action_Modulos(){
        $this->view='modulos';
    }
    function action_Participante(){
        $this->view='participante';
    }
    function action_Profesor(){
        $this->view='profesor';
    }

}
?>