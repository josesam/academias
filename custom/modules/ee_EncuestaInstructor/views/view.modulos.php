<?php
/**
 *Verifica la informacion ,
 * @author Jose Sambrano
 */
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class ee_EncuestaInstructorViewModulos extends ViewEdit {

 	function ee_EncuestaInstructorViewModulos(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){
           global $db;
           $ejecucion=$_REQUEST['ejecucion'];
           $nombre=$_REQUEST['nombre'];
          // echo $ejecucion;
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


           $sql="SELECT  modulo
                 FROM detalle_programa d where deleted=0 and programa_id='".$ejecuta->idprograma."'";
                 
           $result=$db->query($sql);
           while ($row = $db->fetchByAssoc($result)) {
               $data[]=$row;
           }

           echo self::mostrar($data);

 	}

        function mostrar($lista=array()){
             $cadena='<table width="100%" id="hor-minimalist-b"><thead>
	<tr>
                <th scope="col">Modulo</th>

	</tr>
        </thead>';
        if(is_array($lista)){

          $cadena.="<tbody>";
          foreach ($lista as $key => $row):
		


        	$cadena.='<tr>';
			$cadena.='<td><a href="javascript:void(0);" onclick="javascript:selectModulo(\''.$row['modulo'].'\')">'.$row['modulo'].'</a>';//echo CHtml::link($ciudad, 'javascript:' . $js);
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
