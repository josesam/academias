<?php
/**
 *Verifica la informacion , 
 * @author Jose Sambrano
 */
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class OpportunitiesViewVerificainfo extends ViewEdit {

 	function OpportunitiesViewVerificainfo(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){
            $data=$_REQUEST;
           if($_REQUEST['module']=='Opportunities')
            $path='custom/include/clases/varios/Oportunidad.php';
           

           if(file_exists($path)){
                include_once($path);
                if($_REQUEST['module']=='Opportunities'){
                $verificador=new Oportunidad();
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

                  $cadena.='<h1>La validación ha sido exitosa </h1><br>';
                  $cadena.= '<center><input id="save_personalizado" class="button primary" type="submit" value="Guardar" name="save_personalizado" onclick="guardar();" accesskey="S" title="Guardar [Alt+S]"></center>';
            }
            return $javascript.$cadena;
        }

}


?>
