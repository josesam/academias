<?php

/**
 * Representa un cargador de datos externo
 *
 * @author vsayajin
 * @package componentes.banco
 */
interface ICargadorBanco {
	/**
	 * @param string archivo Path del archivo a cargar
	 * @return mixed datos procesados
	 */
	function procesarArchivo($archivo);
}

?>
