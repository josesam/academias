<?php
/* 
 * 
 * 
 */

class GeneradorFormController{
    private $model;

    private $path_model='custom/include/clases/generador/model/GeneradorForm.php';
    function  __construct() {
        ;
    }
    
    function actionIndex(){
       if(file_exists($this->path_model)){
           include_once $this->path_model;
           $this->model=new GeneradorForm();
           $data=$this->model->listarArchivos('custom/include/clases/generador/forms/');
           return $data;
       }else{
           return $error;
       }

    }
}

?>
