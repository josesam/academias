<?php
/**
 *Verifica la informacion , 
 * @author Jose Sambrano
 */
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class ee_ProgramasViewModulo extends ViewEdit {

 	function ee_ProgramasViewModulo(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){
           if($_REQUEST['modulo']=='ee_Modulo')
            $path='custom/include/clases/varios/Modulo.php';
          

           if(file_exists($path)){
                include_once($path);
                if($_REQUEST['modulo']=='ee_Modulo'){
                    $term=$_REQUEST['term'];
                    $verificador=new Modulo();
                    $data=$verificador->consultar($term);
                    $json = new JSON(JSON_LOOSE_TYPE);
		
                    echo $_GET['callback'] . '(' . $json->encode($data). ')';


                }

           }else{
               echo "Se genero un error , Favor Comuniquese con el administrador";
           }
 	}
       
}


?>
