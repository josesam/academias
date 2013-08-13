<?php
/**
 *Verifica la informacion , 
 * @author Jose Sambrano
 */
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class ee_ProfesoresViewVerificainfo extends ViewEdit {

 	function ee_ProfesoresViewVerificainfo(){
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
                $verificador=new Profesor();
                $data=$verificador->tramitarRequest($_REQUEST);
                echo $this->respuesta($data);

                }

           }else{
               echo "Se genero un error , Favor Comuniquese con el administrador";
           }
 	}
        function respuesta($data){
            if ($data->estado=='error'){
                $cadena.='<h1 style="color:red">Completar la información con asterisco</h1>';
                $cadena.='<ul>';
                if(is_array($data->errores)){
                    foreach($data->errores as $error){
                        $cadena.='<li>'.$error."</li><br>";

                    }
                }
                $cadena.='</ul>';

            } else {
                $id=create_guid();



                $save="Save";
//                $javascript="<script type='text/javascript'>$(document).ready(function() {"."\n";
//                 $javascript.="$('#EditView').append('<input onclick=\"this.form.action.value='Save'; return check_form('EditView');\" type=\"submit\" name=\"button\" value=\"Guardar\"/>')"."\n";
//                 $javascript.="});</script>";
                  $cadena.='<h1>La validacion ha sido exitosa </h1><br>';
                  $cadena.= '<center><input id="SAVE_FOOTER" class="button primary" type="submit" value="Guardar" name="button" onclick="guardar();" accesskey="S" title="Guardar [Alt+S]"></center>';
            }
            return $javascript.$cadena;
        }

}


?>
