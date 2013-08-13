<?php

/**
 * Carga el formulario de cliente desde un archivo excel
 *
 * @author vsayajin
 * @package componentes.banco 
 */
include_once 'custom/include/clases/generador/components/ICargadorBanco.php';
include_once 'custom/include/clases/generador/components/DatosBancoRepository.php';

class CargadorFormCliente implements ICargadorBanco {
	
	public function procesarArchivo($archivo){
		$reader = new ExcelBook($archivo);

		$secciones = array();
		$seccion = null;
		for ($i = 2; $i <= $reader->getNumRows(); $i++) {
			if ($reader->isRowEmpty($i))
				break;
			$row1 = $reader->getRow($i);
			$row = $row1;
			$nombre = $row[1];
			$label = $row[2];
			$check = trim($row[3]);
			if (!$check) {
				$seccion = $nombre;
				$secciones[$nombre] = array('id' => $seccion, 'nombre' => $label, 'items' => array());
				continue;
			}
			$campo = new stdClass();
			$campo->nombre = $nombre;
			$campo->label = $label;
			$campo->tipo = $row[3];
			$campo->htmlOptions = array();
			if($row[4])	$campo->htmlOptions['maxlength'] = $row[4];
			if($row[5])	$campo->htmlOptions['size'] = $row[5];
			if($row[6]) {
				$lines = explode("\n", $row[6]);
				foreach($lines as $line){
					$p = array_map('trim', explode('=', $line));
					$n = $p[0];
					$val = isset($p[1]) ? $p[1] : $n;
					$campo->htmlOptions[$n] = $val;
				}
			}
			//if($row[11]) $campo->htmlOptions['title'] = $row[10];
			$campo->validaciones = array();
			if($row[7]) 
				$campo->validaciones = array_map('trim', explode("\n", $row[7])); 
			$campo->tipoLogico = $row[8];
			$campo->catalogo = $row[9];
			$campo->especial = $row[10];
			$campo->hint = $row[11];
			$campo->seccion = $seccion;
			$secciones[$seccion]['items'][$campo->nombre] = (array) $campo;
		}
		
		$repository = new DatosBancoRepository();
		$repository->saveFormularioCliente($secciones);
		return $secciones;
	}
}

?>
