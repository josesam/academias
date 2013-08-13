<?php
/**
 *Verifica la informacion ,
 * @author Jose Sambrano
 */
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class ee_EvaluacionSCIViewParticipante extends ViewEdit {

 	function ee_EvaluacionSCIViewParticipante(){
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
               echo 'El campo Ejecución Programa debe estar lleno';
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
                and e.deleted=0 and e.id='".$ejecuta->id."' 
                and c.id not in (
                  SELECT itc.idparticipante FROM ee_ejecucionprograma ej inner join
                   ee_ejecucionprograma_ee_evaluacionsci_c r1
                  on ej.id=r1.ee_ejecucionprograma_ee_evaluacionsciee_ejecucionprograma_ida
                  and r1.deleted=0 and ej.deleted=0
                  inner join ee_evaluacionsci itc on
                  itc.id=r1.ee_ejecucionprograma_ee_evaluacionsciee_evaluacionsci_idb
                  and itc.deleted=0 where ej.id='".trim($ejecuta->id)."'  )
                ";
          
           $result=$db->query($sql);
           while ($row = $db->fetchByAssoc($result)) {
               $data[]=$row;
           }

           echo self::mostrar($data);

 	}

        function mostrar($lista=array(),$encuestas=array()){
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


