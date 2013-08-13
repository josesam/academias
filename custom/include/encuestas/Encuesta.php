<?php

/*
 *
 * Clase destinada para cargar encuenstas
 * al sistema, 
 */
include_once 'custom/include/clases/varios/CargadorExcel.php';
class Encuesta  extends CargadorExcel{
    /*
     * @var <string>  Id del modulo que se esta ejecutando
     */
    private $id_ejecucion;
    /*
     * @var <string> Id del modulo con el cual se relaciona la encuesta
     * 
     */
    private $parent_id;
    /*
     * @var <string> Nombre del modulo de la encuesta , esta se carga desde el formulario
     */
    private $parent_type;
    /*
     * @var <array> Coleccion de arrays, datos de tipo participante m modulos o instructores
     *              puede cargarse cualquier otro concepto para otras areas , se cargara el id y el nombre de cada tabla
     * 
     */
    private $objetos=array();
    /*
     * @var <string> Esta variable permite cargar objetos dependiendo del concepto,
     *               para la escuela de empresa , el concpeto seria participantes, modulos
     * 
     */
    private $concepto;
    /*
     * @var <array> Detalle de errores
     */
    private $error=array(
        'fila'=>'',
        'detalle'=>'',
    );
    /*
     * @var <array> Conjunto de errores 
     */
    private $errores=array();
    
    /*
     * @var <string> Cadena que se pasa en la primera fila del excel, donde se relaciona las tablas
     *               de los catalogos, puede ser una tabla o maximo dos por concepto de customizacion
     *               de sugarcrm
     */
    private $relacion=array();
    /* Set values on variables*/
    public  function setIdEjecucion($var){
        $this->id_ejecucion=$var;
    }
    
    public  function setRelacion($var){
        $this->relacion=$var;
    }
    public  function setConcepto($var){
        $this->concepto=$var;
    }
    public function setParentId($var){
        $this->parent_id=$var;
    }
    public function setParentType($var){
        $this->parent_type=$var;
    }
    /* Getters */
    public  function getConcepto(){
        return  $this->concepto;
    }
    public  function getRelacion(){
        return  $this->relacion;
    }
    public function getParentId(){
        return  $this->parent_id;
    }
    public function getParentType(){
        return $this->parent_type;
    }
      public  function getIdEjecucion(){
        return $this->id_ejecucion;
    }
  
    /* 
     * Funcion que carga en el objeto , los valores registrados 
     * con esto podemos asociar el valor del excel con el valor que se encuentra registradoy 
     * extrae el id  de la tabla
     * @param <string> 
     * @return <void>
     */
    public function cargarObjeto($selects){
        global $db;
        $sql = "Select $selects  from ".self::getRelacion()."  where deleted=0";
        $result=$db->query($sql);
        while ($a=$db->fetchByAssoc($result)){
            if(!is_null($a['id']))
                $this->objetos[self::getConcepto()][$a['id']]=$a['nombre'];
            
        }
    }
    
    public function procesarArchivo($archivo) {
		$reader = new Spreadsheet_Excel_Reader();
		$reader->setOutputEncoding('ISO-8859-1');
		//$reader->setOutputEncoding('UTF-8');
		$reader->read($archivo['tmp_name']);
		$lista = $this->procesarHoja($reader);
                $this->guardarLista($lista);
		//return $lista;
	}

	public function procesarYGuardar($archivo) {
		$lista = $this->procesarArchivo($archivo);
		$this->guardarLista($lista);
		return $lista;
	}

	protected function procesarHoja(Spreadsheet_Excel_Reader $reader) {
		$hoja = $reader->sheets[0];
		$cells = $hoja["cells"];
		$rows = $hoja["numRows"];
		$cols = $hoja["numCols"];

                
                
		$mapa = array();
		
		
		$limite = $this->limite ? $this->limite : $rows;
		$lista = array();
                $pos_inicial=0;
                $pos_final=0;
                $row_tmp=array();
                if ($limite>0){
                    $row = $this->encodeRow($cells[1]);
                    $row_tmp=$row;
                    for ($j=0;$j<=$cols;$j++){
                        if ($row[$j]=="flag"){
                            $pos_inicial=$j;
                        }
                        if ($row[$j]=="end"){
                            $pos_final=$j;
                        }
                    }     
                }   
                $componentes=array();
                for ($l=$pos_inicial+1;$l<=$pos_final-1;$l++){
                    $componentes=explode(";",$row[$l]);
                    self::setRelacion(trim($componentes[0]));
                    self::setConcepto(trim($componentes[2]));
                    self::cargarObjeto(trim($componentes[1]));
                    
                }
                if(count($this->objetos)==0){
                    $this->error['fila']=1;
                    $this->error['detalle']="Revise la cabecera de la plantilla , no se pudieron cargar los catalogos propuestos";
                    $this->errores[]=$this->error;
                    $lista['error']=$this->errores;
                    return $lista;
                }
           //     return "";
                $bandera=false;
                $data_erronea=false;
		for ($i = 2; $i <= $limite; $i++) {
			$row = $this->encodeRow($cells[$i]);
			if ($this->filaVacia($row))
				break;
                        for ($columnas=1;$columnas<=$cols;$columnas++){
                            
                            if ($row[$columnas]=="flag"){
                                $bandera=true;
                                
                                continue;
                                }
                            if ($row[$columnas]=="end"){
                                $bandera=false;
                                if (!$data_erronea)
                                    $lista['datos'][]=$data;
                                $data=array();
                                break;
                            }   
                            if ($bandera){
                                $componentes=explode(";",$row_tmp[$columnas]);
                                self::setConcepto(trim($componentes[2]));
//                                $a=utf8_decode($row[$columnas]);
//                                $b=utf8_encode($row[$columnas]);
                                
                                $valor=$this->objetos[self::getConcepto()][utf8_encode($row[$columnas])];
                                if (empty($valor)){
                                    $data_erronea=true;
                                    $this->error['fila']=$i;
                                    $this->error['detalle']=$concepto." : No se encuentra";
                                    $this->errores[]=$this->error;
                                }
                                $data[self::getConcepto()]=$valor;
                                $c=$componentes[3];
                                $data[$c]=utf8_encode($row[$columnas]);
                                continue;
                            }
                            $data[$row_tmp[$columnas]]=$row[$columnas];
                            
                        }
			
			
			
			//$lista[] = $data;
		}
		return $lista;
	}

	

	/**
	 * Toma una lista de objetos tipo Catálogo y los guarda en la base, enlazando padres e hijos si corresponde
	 * TODO: hacer que se compruebe los que esten en desorden para enlazar
	 * @param array $lista
	 * @param boolean $update Si se debe comprobar que el codigo exista y actualizarlo o crear nuevos
	 */
        
        function guardarLista($lista) {
            
            
		try {
                        $path='custom/include/encuestas/Cabecera.php';
                    if (file_exists($path)){   
                       include_once $path;  
                       $obj=new Cabecera();
                       $function="create_".self::getParentType();
                       $obj->$function($lista,self::getIdEjecucion());
                       
                    }   
                        
		} catch (Exception $ex) {

			throw $ex;
		}
	}
        /*
         * 
         */
        
}
?>
