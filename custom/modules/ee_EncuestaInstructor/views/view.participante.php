<?php
/**
 *Verifica la informacion ,
 * @author Jose Sambrano
 */
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class ee_EncuestaInstructorViewParticipante extends ViewEdit {

 	function ee_EncuestaInstructorViewParticipante(){
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


           $sql="SELECT concat(c.last_name,' ' , c.first_name) modulo , c.id FROM
                contacts c  inner join  ee_ejecucionprograma_contacts_c r  on c.id=r.ee_ejecucionprograma_contactscontacts_idb
                and r.deleted=0 and c.deleted=0
                inner join ee_ejecucionprograma e on
                e.id=r.ee_ejecucionprograma_contactsee_ejecucionprograma_ida
                and e.deleted=0 and e.id='".$ejecuta->id."'";
          
           $result=$db->query($sql);
           $data=array();
           $anonimo[]=array('modulo'=>'Anonimo','id'=>'-99');
           $resultado=array();
           while ($row = $db->fetchByAssoc($result)) {
               $data[]=$row;
           }
           
           $resultado=array_merge($data,$anonimo);
           echo self::mostrar($resultado);

 	}

        function mostrar($lista=array()){
             $cadena='<table width="100%" id="hor-minimalist-b"><thead>
	<tr>
                <th scope="col">Participante</th>

	</tr>
        </thead>';
        if(is_array($lista)){

          $cadena.="<tbody>";
          foreach ($lista as $key => $row):



        	$cadena.='<tr>';
			$cadena.='<td><a href="javascript:void(0);" onclick="javascript:selectParticipante(\''.$row['modulo'].'\',\''.$row['id'].'\')">'.$row['modulo'].'</a>';
                        $cadena.='</td>';
		$cadena.='</tr>';
            endforeach;
          $cadena.="</tbody>";
        }else{
            $cadena.="<tbody>";
            		$cadena.='<tr>';
			$cadena.='<td>No se encontraron participantes';//echo CHtml::link($ciudad, 'javascript:' . $js);
                        $cadena.='</td>';
                        $cadena.='</tr>';
           $cadena.="</tbody>";

        }

$cadena.='</table>';
return $cadena;

        }

}


?>
