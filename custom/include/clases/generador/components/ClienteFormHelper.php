<?php

/**
 * Clase que se utiliza para generar los modelos compuestos del formulario de cliente
 * a partir de la configuración guardada como arreglos php
 * @package componentes.banco 
 */
include_once 'custom/include/clases/generador/components/DatosBancoRepository.php';

class ClienteFormHelper{
	public $repository;
	public $secciones;
	public $catalogos;
	
	function __construct() {
		$this->repository = new DatosBancoRepository();
	}
	
	function init() {
		$this->secciones = $this->repository->getFormularioCliente();
		if (!$this->secciones)
			throw new Exception("No se pudo cargar la estructura del formulario de cliente");
		$this->catalogos = $this->repository->getCatalogosBanco();
		if (!$this->catalogos)
			throw new Exception("No se pudo cargar los catálogos específicos del banco");
		
	}
	
	public function recuperarCatalogo($nombre) {
		if (isset($this->catalogos[$nombre]))
			return $this->catalogos[$nombre];
		$items = Catalogo::model()->mapaValores($nombre);
		$this->catalogos[$nombre] = $items;
		return $items;
	}
	
	public function recuperarValorCatalogo($catalogo, $codigo) {
		if (isset($this->catalogos[$catalogo][$codigo]))
			return $this->catalogos[$catalogo][$codigo];
		return Catalogo::model()->recuperarValor($catalogo, $codigo);
	}
	
	public function crearModelos($valores = array()){
		$modelos = array();
		foreach($this->secciones as $id => $info) {
			$valores_seccion = isset($valores[$id]) ? $valores[$id] : array();
			$model = new SeccionFormModel($valores_seccion);
			$model->llenarSeccion($info);
			$modelos[$id] = $model;
		}
		return $modelos;
	}

	public function crearModelosVista($valores = array()){
		$modelos = $this->crearModelos($valores);
		foreach($modelos as $id => $model){
			foreach($model->campos as $campo){
				$nombre = $campo->nombre;
				$valor = $model->$nombre;
				if($valor === null || $valor === '')
					continue;
				if(!$campo->catalogo)
					continue;
				$valorCat = $this->recuperarValorCatalogo($campo->catalogo, $valor);
				$model->$nombre = $valorCat;
			}
		}
		return $modelos;
	}
	
	public static function activeValidate($models, $attributes=null, $loadInput=true) {
		$result=array();
		if(!is_array($models))
			$models=array($models);
		foreach($models as $model) {
			if($loadInput && isset($_POST[$model->id]))
				$model->attributes=$_POST[$model->id];
			$model->validate($attributes);
			foreach($model->getErrors() as $attribute=>$errors)
				$result[$model->id .'_'.$attribute]=$errors;
		}
		return function_exists('json_encode') ? json_encode($result) : CJSON::encode($result);
	}
	
}

?>
