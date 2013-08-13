<?php
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class pro_PlantillasViewDescargar extends ViewEdit {
        var $generador;
 	function pro_PlantillasViewDescargar(){
 		parent::ViewEdit();
                 include_once('custom/include/clases/documentos/GeneradorDocumentos.php');
                $this->generador=new GeneradorDocumentos();
 	}

 	function process() {
		$this->display();
               
 	}

 	function display(){
                $tipo =  $_REQUEST['nombre'];
                $id=$_REQUEST['id'];
                $main_module=$_REQUEST['main_module'];
                $related_module=$_REQUEST['related_module'];
                $html = $this->obtenerContenido($tipo,$main_module,$id,$related_module);
		
		//$download = $this->getParam('download');
		$this->generador->generarPdf($html, $tipo, $download);
 	}
      protected function obtenerContenido($tipo,$main_module,$id,$related_module) {
		
	
		$html = $this->generador->generar($tipo,$main_module,$id,$related_module);
		return $html;
	}
     
}


?>
