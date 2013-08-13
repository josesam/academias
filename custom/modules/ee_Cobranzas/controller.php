<?php
/**
 *Verifica la informacion , requerida y el numero de cedula
 * @author Jose Sambrano
 */
class ee_CobranzasController extends SugarController
{
    
    function  action_save() {
        parent::action_save();
        $path= 'include/SugarCobranza/SugarCobranza.php';
    
       if (file_exists($path)){
          include_once($path);
          $programa=new SugarCobranza();
          $programa->save($this->bean->id,$focus->module_dir,$this->bean->montopago);
       }

      
    }
    

}
?>