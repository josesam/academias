<?php
/**
 *Verifica la informacion , requerida y el numero de cedula
 * @author Jose Sambrano
 */
class ee_ProgramasController extends SugarController
{
    function action_Profesores(){
        $this->view = 'profesores';
    }
     function action_Modulo(){
        $this->view = 'modulo';
    }
     function action_Proveedor(){
        $this->view = 'proveedor';
    }
     function action_Ciudad(){

        $this->view = 'ciudad';
    }

    function action_Categoria(){

        $this->view = 'categoria';
    }
    function action_Items(){

        $this->view = 'items';
    }

    function  action_save() {
        parent::action_save();
        $path= 'include/SugarProgramas/SugarProgramas.php';
        $path1= 'include/SugarLogistica/SugarLogistica.php';
       if (file_exists($path)){
          include_once($path);
          $programa=new SugarProgramas();
          $programa->save($this->bean->id,$focus->module_dir);
       }

       if (file_exists($path1)){
          include_once($path1);
          $logistica=new SugarLogistica();
          $logistica->save($this->bean->id,$focus->module_dir);
       }
    }
    

}
?>