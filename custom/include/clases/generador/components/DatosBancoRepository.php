<?php

/**
 * Repositorio personalizado para datos del banco incluyendo la configuración de la trama
 * y el formulario de clientes, usa persistencia por PHP. Los nombres de las funciones
 * especifican los datos que se guardan, para ver los nombres de los archivos
 * revisart los nombres de las constantes de esta clase
 *
 * @author vsayajin
 * @package components.banco
 */
include_once 'custom/include/clases/generador/components/PhpFilePersistence.php';
class DatosBancoRepository {
	const FORM_CLIENTE = 'campos_form_cliente';
	const CATALOGO_BANCO = 'catalogo_banco';
	const TRAMA_CLIENTE = 'campos_trama_cliente';
	const TRAMA_GAF = 'campos_trama_gaf';

	/**
	 * @var PhpFilePersistence
	 */
	public $repository;

	function __construct() {
		$this->repository = new PhpFilePersistence();
	}

	public function getFormularioCliente() {
		return $this->repository->getCodigo(self::FORM_CLIENTE);
	}

	public function saveFormularioCliente($data) {
		$this->repository->persist(self::FORM_CLIENTE, $data);
	}
	
	public function getCamposCliente() {
		return $this->repository->getCodigo(self::TRAMA_CLIENTE);
	}

	public function saveCamposCliente($data) {
		$this->repository->persist(self::TRAMA_CLIENTE, $data);
	}

	public function getCamposGAF() {
		return $this->repository->getCodigo(self::TRAMA_GAF);
	}

	public function saveCamposGAF($data) {
		$this->repository->persist(self::TRAMA_GAF, $data);
	}
	
	public function getCatalogosBanco(){
		return $this->repository->getCodigo(self::CATALOGO_BANCO);
	}

	public function saveCatalogosBanco($data) {
		$this->repository->persist(self::CATALOGO_BANCO, $data);
	}
}

?>
