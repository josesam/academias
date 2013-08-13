<?php
/**
 *Verifica la informacion , 
 * @author Jose Sambrano
 */
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class ee_ProgramasViewProfesores extends ViewEdit {

 	function ee_ProgramasViewProfesores(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){
           if($_REQUEST['modulo']=='ee_Profesores')
            $path='custom/include/clases/varios/Profesor.php';
          

           if(file_exists($path)){
                include_once($path);
                if($_REQUEST['modulo']=='ee_Profesores'){
                    $tipo=$_REQUEST['tipo'];
                    $term=$_REQUEST['term'];
                 
                    $verificador=new Profesor();
                    $data=$verificador->consultar($tipo,$term);
                    $json = new JSON(JSON_LOOSE_TYPE);
		//echo $retorno;
                    echo $_GET['callback'] . '(' . $json->encode($data). ')';


                }

           }else{
               echo "Se genero un error , Favor Comuniquese con el administrador";
           }
 	}
       
}


?>
