<?php

/**
 * Gestiona el contenido físico de las plantillas de documentos
 *
 * @author vsayajin
 * @package components.documentos
 */
class RepositorioPlantillas {
        var $path_repositorio="custom/include/plantillas/";
        function __construct(){
            
        }
	public function contenidoPlantilla($archivo)	{
		$path = $this->getPathArchivo($archivo);
             
		if(!file_exists($path))
			return false;
		return file_get_contents($path);
	}

	public function guardarContenido($archivo, $contenido){
		$path = $this->getPathArchivo($archivo);
		file_put_contents($path, $contenido);
	}

	public function getPathArchivo($archivo){
		$base =$this->path_repositorio;
		return $base.'/'.$archivo.'.html';
	}

}

?>
