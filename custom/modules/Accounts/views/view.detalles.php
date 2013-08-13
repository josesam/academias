<?php
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class AccountsViewDetalles extends ViewEdit {

 	function AccountsViewDetalles(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){
            $nombre= $_REQUEST['nombre'];

             $db = DBManagerFactory::getInstance();
             if(empty($nombre))
                 $sql="SELECT d.id, d.name pais
                       FROM ee_mediocontacto m
                       INNER JOIN ee_mediocontacto_ee_detallemedio_c r ON m.id = r.ee_mediocontacto_ee_detallemedioee_mediocontacto_ida
                       AND m.deleted =0
                       INNER JOIN ee_detallemedio d ON d.id = r.ee_mediocontacto_ee_detallemedioee_detallemedio_idb
                       AND r.deleted =0
                       AND d.deleted =0
                            ORDER BY pais ";
            else
                $sql="SELECT d.id, d.name pais
                      FROM ee_mediocontacto m
                      INNER JOIN ee_mediocontacto_ee_detallemedio_c r ON m.id = r.ee_mediocontacto_ee_detallemedioee_mediocontacto_ida
                      AND m.deleted =0
                      INNER JOIN ee_detallemedio d ON d.id = r.ee_mediocontacto_ee_detallemedioee_detallemedio_idb
                      AND r.deleted =0
                      AND d.deleted =0
                      where m.name like '%$nombre%'
                      ORDER BY pais";

                      $result = $db->query($sql);
         while($a = $db->fetchByAssoc($result)) {
                            $data[] = $a;
         }
          
          echo $this->cargaSectores($data);
 	}
        function cargaSectores($lista){

          $cadena='<table width="100%"  id="hor-minimalist-b"><thead>
	<tr>
                <th scope="col">Nombre</th>

	</tr></thead>';
        if(is_array($lista)){
            
        $cadena.="<tbody>";
	foreach ($lista as $row):
                 
		$pais = !empty($row['pais']) ? $row['pais'] : $row['pais2'];
		$js = "selectDetalle('$pais')";
		$cadena.='<tr>';
			$cadena.='<td><a href="javascript:'.$js.'">'.$pais.'</a>';//echo CHtml::link($ciudad, 'javascript:' . $js);
                        $cadena.='</td>';
		$cadena.='</tr>';
            endforeach;
        $cadena.="</tbody>";
        }else{
            $cadena.="<tbody>";
            	$cadena.='<tr>';
			$cadena.='<td>No se encontraron detalles';//echo CHtml::link($ciudad, 'javascript:' . $js);
                        $cadena.='</td>';
		$cadena.='</tr>';
            $cadena.="</tbody>";
        }
$cadena.='</table>';
return $cadena;
        }
}


?>