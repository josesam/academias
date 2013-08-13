<?php
/**
 *Verifica la informacion , 
 * @author Jose Sambrano
 */
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class ContactsViewVerificainfo extends ViewEdit {

 	function ContactsViewVerificainfo(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){
           if($_REQUEST['module']=='Contacts')
            $path='custom/include/clases/varios/Contacto.php';
           

           if(file_exists($path)){
                include_once($path);
                if($_REQUEST['module']=='Contacts'){
                $verificador=new Contacto();
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

                if(count($data->avisos)>0){
                $cadena.='<h1 style="color:red">Se encontraron las siguientes coicidencias</h1>';
                $cadena.='<ul>';
                    if(is_array($data->avisos)){
                        foreach($data->avisos as $avisos){
                            $cadena.='<li>'.$avisos['name']."</li><br>";

                        }
                    }
                }


                $cadena.='</ul>';


            } else {
                $id=create_guid();







                $save="Save";
//                $javascript="<script type='text/javascript'>$(document).ready(function() {"."\n";
//                 $javascript.="$('#EditView').append('<input onclick=\"this.form.action.value='Save'; return check_form('EditView');\" type=\"submit\" name=\"button\" value=\"Guardar\"/>')"."\n";
//                 $javascript.="});</script>";

                $cadena.='<h1>La validación ha sido exitosa </h1><br>';
                  $cadena.= '<center><input id="save_personalizado" class="button primary" type="submit" value="Guardar" name="save_personalizado" onclick="guardar();" accesskey="S" title="Guardar [Alt+S]"></center>';
                  if(count($data->avisos)>0){
                  if(is_array($data->avisos)){
                    $cadena.='<h1 style="color:red">Se encontraron las siguientes coicidencias</h1>';
                    $cadena.='<ul>';
                    foreach($data->avisos as $avisos){
                        $cadena.='<li>'.$avisos['name']."</li><br>";

                    }
                    $cadena.='</ul>';
                }
                }
            }
            return $javascript.$cadena;
        }

}


?>
