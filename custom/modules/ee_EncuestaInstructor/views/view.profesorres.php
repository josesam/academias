<?php
/**
 *Verifica la informacion ,
 * @author Jose Sambrano
 */
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class ee_EncuestaInstructorViewProfesor extends ViewEdit {

 	function ee_EvaluacionGlobalViewProfesor(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){
           global $db;
           $ejecucion=$_REQUEST['ejecucion'];
           $nombre=$_REQUEST['nombre'];

           if(empty($ejecucion)){
               echo 'El campo Ejecucion Programa debe estar lleno';
               return '';
           }
           $ejecuta= new ee_EjecucionPrograma();
           $ejecuta->retrieve($ejecucion);
           if(empty($ejecuta->id)){
               echo 'No existe ningun programa atado a esta ejecucion';
               return '';
           }


           $sql="SELECT  profesor ,modulo,idprofesor,idmodulo
                 FROM detalle_programa d where deleted=0 and programa_id='".$ejecuta->idprograma."' and
                 idmodulo not in
                 (
                   SELECT idmodulo FROM ee_ejecucionprograma ej inner join ee_ejecucionprograma_ee_encuestainstructor_c r1 on ej.id=r1.ee_ejecuci54adrograma_ida and ej.deleted=0 and r1.deleted=0
                  inner join ee_encuestainstructor i on i.id=r1.ee_ejecucic277tructor_idb
                  and i.deleted=0 where ej.id='".$ejecuta->id."'
                 )
                 and idprofesor not in
                 (
                  SELECT idprofesor FROM ee_ejecucionprograma ej inner join ee_ejecucionprograma_ee_encuestainstructor_c r1 on ej.id=r1.ee_ejecuci54adrograma_ida and ej.deleted=0 and r1.deleted=0
                  inner join ee_encuestainstructor i on i.id=r1.ee_ejecucic277tructor_idb
                  and i.deleted=0 where ej.id='".$ejecuta->id."'
                )
                 ";

           $result=$db->query($sql);
           while ($row = $db->fetchByAssoc($result)) {
               $data[]=$row;
           }

           echo self::mostrar($data);

 	}

        function mostrar($lista=array()){
             $cadena='<table width="100%" id="hor-minimalist-b"><thead>
	<tr>
                <th scope="col">Instructor</th>
                <th scope="col">Módulo</th>

	</tr>
        </thead>';
        if(is_array($lista)){

          $cadena.="<tbody>";
          foreach ($lista as $key => $row):



        	$cadena.='<tr>';
                $cadena.='<td><a href="javascript:void(0);" onclick="javascript:selectProfesor(\''.$row['profesor'].'\',\''.$row['modulo'].'\',\''.$row['idprofesor'].'\',\''.$row['idmodulo'].'\')">'.$row['profesor'].'</a>';
                $cadena.='</td>';
                $cadena.='<td>'.$row['modulo'].'</a>';
                $cadena.='</td>';
		$cadena.='</tr>';
            endforeach;
          $cadena.="</tbody>";
        }else{
            $cadena.="<tbody>";
            		$cadena.='<tr>';
			$cadena.='<td>No se encontraron modulos';//echo CHtml::link($ciudad, 'javascript:' . $js);
                        $cadena.='</td>';
                        $cadena.='</tr>';
           $cadena.="</tbody>";

        }

$cadena.='</table>';
return $cadena;

        }

}


?>