<?php
/*
 * @author Jose Sambrano
 */
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class OpportunitiesViewParticipantes extends ViewEdit {

 	function OpportunitiesViewParticipantes(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){

            global $db,$timedate;
            $nombre= $_REQUEST['medio'];
            $cliente=$_REQUEST['cliente'];
            
            
            if(empty($nombre))
                $sql="Select c.id,c.first_name,c.last_name,c.calle_principal direccion,
                        c.phone_work telefono,a.name,c.cedula,em.email_address email
                       from contacts c inner join accounts_contacts r on c.id=r.contact_id and r.deleted=0
                      inner join contacts_cstm cstm on cstm.id_c=c.id
                      inner join accounts a on a.id=r.account_id and a.deleted=0
                      LEFT JOIN email_addr_bean_rel h ON c.id = h.bean_id
                    AND h.bean_module = 'Contacts'   and h.primary_address=1
                    AND h.deleted =0
                    LEFT JOIN email_addresses em on em.id=h.email_address_id
                      where c.deleted=0 and cstm.participante_c=1  and a.id='$cliente' ";
            else
                $sql="Select c.id,c.first_name,c.last_name,c.calle_principal direccion,
                        c.phone_work telefono,a.name,c.cedula,,em.email_address email
                      from contacts c inner join accounts_contacts r on c.id=r.contact_id and r.deleted=0
                      inner join contacts_cstm cstm on cstm.id_c=c.id
                      inner join accounts a on a.id=r.account_id and a.deleted=0
                      LEFT JOIN email_addr_bean_rel h ON c.id = h.bean_id
                      AND h.bean_module = 'Contacts'   and h.primary_address=1
                      AND h.deleted =0
                      LEFT JOIN email_addresses em on em.id=h.email_address_id
                      where c.deleted=0 and cstm.participante_c=1  and a.id='$cliente'
                      and c.first_name like '%$nombre%' or c.last_name like '%$nombre%'";
          //echo $sql;
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
                   <th scope="col">Nombres y Apellidos</th>
                   <th scope="col">Cédula</th>
                   <th scope="col">Dirección</th>
                   <th scope="col">Teléfonos</th>
                      <th scope="col">Correos</th>
                
	</tr>
        </thead>';
          
        
        if(is_array($lista)){
        
        $cadena.="<tbody>";
          foreach ($lista as $key => $row):		
                $id=$row['id'];                
                $first_name=$row['first_name'];
                $last_name=$row['last_name'];
                $sustituye = array("(\r\n)", "(\n\r)", "(\n)", "(\r)");
                $direccion=preg_replace($sustituye, "", $row['direccion']);
                $telefono=$row['telefono'];
                $cedula=$row['cedula'];
                $email=$row['email'];
        	$cadena.='<tr>';
			$cadena.='<td><a href="javascript:void(0);" onclick="javascript:addParticipante(\'OpportunitiesAmbienteTableP\',\'\',\''.$id.'\',\''.$first_name.'\',\''.$last_name.'\',\''.$direccion.'\',\''.$telefono.'\',\''.$cedula.'\',\'database\',\''.$email.'\')">'.$first_name.' '.$last_name.'</a>';
                        $cadena.='</td>';
                        $cadena.='<td>'.$cedula.'</td>';
                        $cadena.='<td>'.$direccion.'</td>';                        
                        $cadena.='<td>'. $telefono.'</td>';
                        $cadena.='<td>'. $email.'</td>';
		$cadena.='</tr>';
            endforeach;
            $cadena.="</tbody>";
        }else{
            		$cadena.='<tr>';
			$cadena.='<td>No se encontraron contactos';
                        $cadena.='</td>';
                        $cadena.='</tr>';

        }

$cadena.='</table>';
return $cadena;
        }
}
?>
