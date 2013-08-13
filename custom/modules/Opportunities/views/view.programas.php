<?php
/*
 * @author Jose Sambrano
 */
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class OpportunitiesViewProgramas extends ViewEdit {

 	function OpportunitiesViewProgramas(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){

            global $db,$timedate;
            $cliente=$_REQUEST['cliente'];

            
            $nombre= $_REQUEST['medio'];
            $tipo=$_REQUEST['categoria'];
            $fecha_hoy= $timedate->to_db(date($timedate->get_date_format()));
            
            if(empty($nombre))
                $sql="Select id , name pais,coordinador,nrohoras_c horas,precio_c valor,estado,tipoprograma,
                     fechainicio_programa,fechafinal_programa,modalidad  from ee_programas p
                     inner join ee_programas_cstm c on p.id=c.id_c where deleted=0 and (estado='Activo' or estado='EnEjecucion') and tipoprograma like '%$tipo%'

                    ";
            else
                $sql="Select id , name pais,coordinador,nrohoras_c horas,precio_c valor, estado,tipoprograma,
                      fechainicio_programa,fechafinal_programa,modalidad  from ee_programas p
                inner join ee_programas_cstm c on p.id=c.id_c where deleted=0 and name like '%$nombre%' and (estado='Activo' or estado='EnEjecucion') and tipoprograma like '%$tipo%'";
            
            $result = $db->query($sql);
                     while($a = $db->fetchByAssoc($result)) {
                            $data[] = $a;
                    }
            echo $this->cargaSectores($data);
 	}

        function cargaSectores($lista){
        global $app_list_strings,$timedate,$current_user;
          $cadena='<table width="100%" id="hor-minimalist-b">
              <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Fecha Inicio</th>
                <th scope="col">Fecha Fin</th>
                <th scope="col">Coordinador</th>
                <th scope="col">Horas</th>
                <th scope="col">Valor</th>
                <th scope="col">Estado</th>
                <th scope="col">Tipo Programa</th>

	</tr>
        </thead>';
          $path="custom/include/clases/varios/FormatUtil.php";
          $path1="custom/include/clases/varios/DateUtils.php";
          if(file_exists($path)){
              include_once $path;
              $formato=new FormatUtil();
          }

          if(file_exists($path1)){
              include_once $path1;
              
          }

        if(is_array($lista)){
        
        $cadena.="<tbody>";
          foreach ($lista as $key => $row):
		$pais = !empty($row['pais']) ? $row['pais'] : $row['pais2'];
                $id=$row['id'];
                $id=$row['id'];
                $coordinador=$row['coordinador'];
                
                $valor=empty($row['valor'])? 0 : $row['valor'] ;
                $horas=$row['horas'];
                $estado=$app_list_strings['programa_status_dom'][$row['estado']];
                $fecha_programa=$timedate->to_display_date($row['fechainicio_programa']);
                $modalidad=$row['modalidad'];
                //$timedate->
                $fecha_validez= $timedate->to_display_date(DateUtils::add($row['fechainicio_programa'],3));
                
                $tipo=$app_list_strings['categoria_list'][$row['tipoprograma']];
	
        	$cadena.='<tr>';
			$cadena.='<td><a href="javascript:void(0);" onclick="javascript:addMaterial(\'OpportunitiesAmbienteTable\',\'\',\''.$id.'\',\''.$pais.'\',\''.$horas.'\',\''.$coordinador.'\',\''.$valor.'\',\''.$fecha_programa.'\',\''.$fecha_validez.'\',\'database\',\''.$modalidad.'\')">'.$pais.'</a>';//echo CHtml::link($ciudad, 'javascript:' . $js);
                        $cadena.='</td>';

                        $cadena.='<td>'. $formato->formatDate($row['fechainicio_programa'],$timedate->get_date_format()).'</td>';
                        
                        $cadena.='<td>'. $formato->formatDate($row['fechafinal_programa'],$timedate->get_date_format()).'</td>';                        
                        
                        $cadena.='<td>'.$coordinador.'</td>';
                        
                        $cadena.='<td>'.$horas.'</td>';
                        
                        $cadena.='<td>'.$valor.'</td>';
                        
                        $cadena.='<td>'.$estado.'</td>';
                        
                        $cadena.='<td>'.$tipo.'</td>';
                        
		$cadena.='</tr>';
            endforeach;
            $cadena.="</tbody>";
        }else{
            		$cadena.='<tr>';
			$cadena.='<td>No se encontraron programas';
                        $cadena.='</td>';
                        $cadena.='</tr>';

        }

$cadena.='</table>';
return $cadena;
        }
}
?>
