<?php
/*
 * @author Jose Sambrano
 */
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class OpportunitiesViewContenido extends ViewEdit {

 	function OpportunitiesViewContenido(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){

            global $db;
            $nombre= $_REQUEST['medio'];
            
            
            $sql="Select * from detalle_programa  where programa_id='$nombre' and deleted=0";
            
            $result = $db->query($sql);
                     while($a = $db->fetchByAssoc($result)) {
                            $data[] = $a;
                    }
            echo $this->cargaSectores($data);
 	}

        function cargaSectores($lista){

          $cadena='<table width="100%"><thead>
	<tr>
                <th>Modulo</th>
                <th>Profesor</th>
                <th>Horas</th>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                <th>Nivel</th>
                <th>Lugar</th>
                <th>Tipo</th>

	</tr>
        </thead>';
        if(is_array($lista)){
        
       
          foreach ($lista as $key => $row):
		$pais = !empty($row['pais']) ? $row['pais'] : $row['pais2'];
                

                $modulo=$row['modulo'];
                $profesor=$row['profesor'];
                $horas=$row['horas'];
                $fechainicio=$row['fechainicio'];
                $fechafin=$row['fechafin'];
		$lugar=$row['lugar'];
                $tipo=$row['tipo'];
                $nivel=$row['nivel'];
                    $cadena.='<tr>';
			$cadena.='<td>'.$modulo;
                        $cadena.='</td>';
                        $cadena.='<td>'.$profesor;
                        $cadena.='</td>';
                        $cadena.='<td>'.$horas;
                        $cadena.='</td>';
                        $cadena.='<td>'.$fechainicio;
                        $cadena.='</td>';
                        $cadena.='<td>'.$fechafin;
                        $cadena.='</td>';
                        $cadena.='<td>'.$nivel;
                        $cadena.='</td>';
                        $cadena.='<td>'.$lugar;
                        $cadena.='</td>';
                        $cadena.='<td>'.$tipo;
                        $cadena.='</td>';
		$cadena.='</tr>';
            endforeach;
       
        }else{
            		$cadena.='<tr>';
			$cadena.='<td>No se encontraron detalles';
                        $cadena.='</td>';
                        $cadena.='</tr>';

        }

$cadena.='</table>';
return $cadena;
        }
}
?>
