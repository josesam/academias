<?php

/**
 * Sirve para llenar datos del catálogo a partir de un archivo de excel
 * @author vsayajin
 * @package components.carga
 */
include_once 'custom/include/clases/varios/CargadorExcel.php';
class CargadorCatalogo extends CargadorExcel {

	/**
	 * Toma el path de un archivo de excel con el formato del catálogo, lo
	 * procesa y guarda los resultados en la tabla catálogo. Solo se toma en cuenta
	 * la primera hoja del libro de excel
	 * TODO: controles y validaciones de formato
	 * @param string $archivo
	 * @param boolean $guardar Si se guarda o no en la base, default true
	 */
        
        private $db;
        private $idOportunidad;
        public function __construct($var){
            $this->idOportunidad=$var;
             $this->db = DBManagerFactory::getInstance();
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
		for ($i = 2; $i <= $limite; $i++) {
			$row = $this->encodeRow($cells[$i]);
			if ($this->filaVacia($row))
				break;
			$data['item'] = $row[1];
			$data['proceso'] = $row[2];
		//	$cat = isset($mapa[$clase][$codigo]) ? $mapa[$clase][$codigo] : new Catalogo();
			$data['proveedor'] = $row[3];
                        $data['tipoPorveedor'] = $row[4];
			$data['cantidad'] = $row[5];
			$data['codigo'] = $row[6];
                        $data['descripcion']=$row[7];
                        $data['costo']=$row[8];
                        $data['comisionTecnica']=$row[9];
                        $data['comisionVentas']=$row[10];
                        $data['utilidad']=$row[11];
                        $data['comisionTarjeta']=$row[12];

                        $data['precioFinal']=$row[13];
                        $data['observaciones']=$row[14];

			
			
			
			$lista[] = $data;
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
            global $beanList,$beanFiles,$current_language,$current_user;
            
		try {
                    $sql="Delete  from det_materiales where cotizacion_id='".$this->idOportunidad."'";
                    $result = $this->db->query($sql);
			foreach ($lista as $key => $value) {

                        $tot+=(float)$value['precioFinal'];

                        $sql="insert into det_materiales
                            (cotizacion_id,
                                item,
                                procesoTipo,
                                proveedor,
                                tipoProveedor,
                                cantidad,
                                codigo,
                                descripcion,
                                valorUnitario,
                                comisionAreaTecnica,
                                comisionVentas,
                                utilidad,
                                comisionTarjeta,
                                valorTotal,
                                observaciones
                            )
                            values ('$this->idOportunidad',
                                    '".$value['item']."',
                                    '".$value['proceso']."',
                                    '".$value['proveedor']."',
                                    '".$value['tipoproveedor']."',
                                    '".$value['cantidad']."',
                                    '".$value['codigo']."',
                                   '".$value['descripcion']."',
                                    '".$value['costo']."',
                                    '".$value['comisionTecnica']."',
                                    '".$value['comisionVentas']."',
                                    '".$value['utilidad']."',
                                    '".$value['comisionTarjeta']."',
                                    '".$value['precioFinal']."',
                                    '".$value['observaciones']."')";
                         $result = $this->db->query($sql);
                        }
                        $sql="Update opportunities set amount=".round($tot,2)." where id='".$this->idOportunidad."'";
                        $result = $this->db->query($sql);
		} catch (Exception $ex) {

			throw $ex;
		}
	}


    function muestraDatosCreados(){

        $sql="Select           item,
                                procesoTipo,
                                proveedor,
                                tipoProveedor,
                                cantidad,
                                codigo,
                                descripcion,
                                valorUnitario,
                                comisionAreaTecnica,
                                comisionVentas,
                                utilidad,
                                comisionTarjeta,
                                valorTotal,
                                observaciones from det_materiales where cotizacion_id='$this->idOportunidad'";

        $result = $this->db->query($sql);


        while($a = $this->db->fetchByAssoc($result)) {
            $creados[] = $a;
        }

    $retorno="<table width='100%' id=\"rounded-corner\" >";
      if(is_array($creados)&&(!empty($creados))){
            $retorno.='<thead>';
            $retorno.='<tr>';
            $retorno.='<th scope="col" class="rounded-company1">';
            $retorno.='Items';
            $retorno.='</th>';
            $retorno.='<th scope="col" class="rounded-company2">';
            $retorno.='Proceso / Tipo ';
            $retorno.='</th>';
            $retorno.='<th scope="col" class="rounded-company3">';
            $retorno.='Proveedor';
            $retorno.='</th>';
            $retorno.='<th scope="col" class="rounded-company4">';
            $retorno.='Tipo Proveedor';
            $retorno.='</th>';
            $retorno.='<th scope="col" class="rounded-company5">';
            $retorno.='Cantidad';
            $retorno.='</th>';
            $retorno.='<th scope="col" class="rounded-company6">';
            $retorno.='Codigo';
            $retorno.='</th>';
            $retorno.='<th scope="col" class="rounded-company7">';
            $retorno.='Descripcion';
            $retorno.='</th>';
            $retorno.='<th scope="col" class="rounded-company8">';
            $retorno.='Valor Unitario';
            $retorno.='</th>';
            $retorno.='<th scope="col" class="rounded-company9">';
            $retorno.='Comisión Area Técnica';
            $retorno.='</th>';
$retorno.='<th scope="col" class="rounded-company10">';
            $retorno.='Comisión Ventas';
            $retorno.='</th>';
$retorno.='<th scope="col" class="rounded-company11">';
            $retorno.='Comisión Utilidad';
            $retorno.='</th>';

            $retorno.='<th scope="col" class="rounded-company12">';
            $retorno.='Comisión Tarjetas';
            $retorno.='</th>';

            $retorno.='<th scope="col" class="rounded-company13">';
            $retorno.='Valor Total';
            $retorno.='</th>';
            $retorno.='<th scope="col" class="rounded-company14">';
            $retorno.='Observaciones';
            $retorno.='</th>';

            $retorno.='</tr>';
            $retorno.='</thead>';
            $retorno.='<tfoot>
    	<tr>
        	<td colspan="13" class="rounded-foot-left"><em>Informacion Importada</em></td>
        	<td class="rounded-foot-right">&nbsp;</td>
        </tr>
    </tfoot>';
            $retorno.='<tbody>';

            foreach($creados as $key =>$value){
                    $retorno.='<tr>';
                    $retorno.='<td>';
                    $retorno.=$value['item'];
                    $retorno.='</td>';
                    $retorno.='<td>';
                    $retorno.=$value['procesoTipo'];
                    $retorno.='</td>';
                    $retorno.='<td>';
                    $retorno.=$value['proveedor'];
                    $retorno.='</td>';
                    $retorno.='<td>';
                    $retorno.=$value['tipoProveedor'];
                    $retorno.='</td>';
                    $retorno.='<td>';
                    $retorno.=$value['cantidad'];
                    $retorno.='</td>';
                    $retorno.='<td>';
                    $retorno.=$value['codigo'];
                    $retorno.='</td>';
                    
                    $retorno.='<td>';
                    $retorno.=$value['descripcion'];
                    $retorno.='</td>';
                    $retorno.='<td>';
                    $retorno.=$value['valorUnitario'];
                    $retorno.='</td>';

                    $retorno.='<td>';
                    $retorno.=$value['comisionAreaTecnica'];
                    $retorno.='</td>';
                    $retorno.='<td>';
                    $retorno.=$value['comisionVentas'];
                    $retorno.='</td>';
                    $retorno.='<td>';
                    $retorno.=$value['utilidad'];
                    $retorno.='</td>';
                    $retorno.='<td>';
                    $retorno.=$value['comisionTarjeta'];
                    $retorno.='</td>';
                    $retorno.='<td>';
                    $retorno.=$value['valorTotal'];
                    $retorno.='</td>';

                    $retorno.='<td>';
                    $retorno.=$value['observaciones'];
                    $retorno.='</td>';

                    $retorno.='</tr>';
            }
            $retorno.='</tbody>';

      }else
          $retorno.="<tr><td>No se genero ningun registro</td></tr>";
          $retorno.="</table>";
          return $retorno;
    }

}


