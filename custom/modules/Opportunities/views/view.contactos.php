<?php
/*
 * @author Jose Sambrano
 */
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class OpportunitiesViewContactos extends ViewEdit {

 	function OpportunitiesViewContactos(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){

            global $db;
            $nombre= $_REQUEST['medio'];
            $codigo=$_REQUEST['codigo'];
            
            if (!empty($codigo)) 
               $filtro=" and c.codigobanner like '%$codigo%'";  
            $sql="";
            if(empty($nombre))
                $sql="Select c.id,c.first_name,c.last_name,c.calle_principal direccion,
                        c.phone_work telefono,a.name cliente,c.cedula,em.email_address email,c.title cargo 
                       from contacts c inner join accounts_contacts r on c.id=r.contact_id 
                      inner join contacts_cstm cstm on cstm.id_c=c.id
                      inner join accounts a on a.id=r.account_id 
                       LEFT JOIN email_addr_bean_rel h ON c.id = h.bean_id
                    AND h.bean_module = 'Contacts'   and h.primary_address=1
                    AND h.deleted =0
                    LEFT JOIN email_addresses em on em.id=h.email_address_id
                      where c.deleted=0 and cstm.participante_c=1 and a.deleted=0 and r.deleted=0
                      $filtro
                      order by last_name asc limit 0,10";
            else
                $sql="Select c.id,c.first_name,c.last_name,c.calle_principal direccion,
                        c.phone_work telefono,a.name cliente,c.cedula,em.email_address email,c.title cargo 
                      from contacts c inner join accounts_contacts r on c.id=r.contact_id and r.deleted=0
                      inner join contacts_cstm cstm on cstm.id_c=c.id
                      inner join accounts a on a.id=r.account_id
                       LEFT JOIN email_addr_bean_rel h ON c.id = h.bean_id
                    AND h.bean_module = 'Contacts'   and h.primary_address=1
                    AND h.deleted =0
                    LEFT JOIN email_addresses em on em.id=h.email_address_id
                      where c.first_name like '%$nombre%' or c.last_name like '%$nombre%' and a.deleted=0 and r.deleted=0 
                      $filtro
                     order by last_name asc
                      limit 0,10";
          //  echo $sql;
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
                   <th scope="col">Cliente</th>
                   <th scope="col">Email</th>
                   <th scope="col">Cargo</th>
                
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
                $cliente=$row['cliente'];
                $email=$row['email'];
                $cargo=$row['cargo'];
        	$cadena.='<tr>';
			$cadena.='<td><a href="javascript:void(0);" onclick="javascript:addParticipante(\'OpportunitiesAmbienteTableP\',\'\',\''.$id.'\',\''.$first_name.'\',\''.$last_name.'\',\''.$direccion.'\',\''.$telefono.'\',\''.$cedula.'\',\'todos\',\''.$email.'\',\''.$cargo.'\')">'.$last_name.' '.$first_name.'</a>';
                        $cadena.='</td>';
                        $cadena.='<td>'.$cedula.'</td>';
                        $cadena.='<td>'.$direccion.'</td>';                        
                        $cadena.='<td>'. $telefono.'</td>';
                        $cadena.='<td>'. $cliente.'</td>';
                        $cadena.='<td>'. $email.'</td>';
                        $cadena.='<td>'. $cargo.'</td>';
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
