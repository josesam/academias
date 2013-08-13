<?php
/**
 *Verifica la informacion , requerida y el numero de cedula
 * @author Jose Sambrano
 */
class ee_EvaluacionSCIController extends SugarController
{
    
    function  action_save() {
        parent::action_save();
   
      
    }
 
    function action_Participante(){
        $this->view='participante';
    }
    function action_Profesor(){
        $this->view='profesor';
    }

}
?>