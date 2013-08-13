<?php
/**
 *Verifica la informacion ,
 * @author Jose Sambrano
 */
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class ContactsViewDireccion extends ViewEdit {

 	function ContactsViewDireccion(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){
           global $db;
           $ciudad=$_REQUEST["parametro"];
           $pos=$_REQUEST["pos"];
           $sql="SELECT p.name pais, pr.name provincia, c.name ciudad,pr.description ext
                 FROM ee_pais p
                 INNER JOIN ee_pais_ee_provincia_c r1 ON p.id = r1.ee_pais_ee_provinciaee_pais_ida
                 AND p.deleted =0
                 INNER JOIN ee_provincia pr ON pr.id = r1.ee_pais_ee_provinciaee_provincia_idb
                 AND r1.deleted =0
                 INNER JOIN ee_provincia_ee_ciudad_c r2 ON r2.ee_provincia_ee_ciudadee_provincia_ida = pr.id
                 INNER JOIN ee_ciudad c ON c.id = r2.ee_provincia_ee_ciudadee_ciudad_idb
                AND c.deleted =0 ";
           if(!empty($ciudad))
               $sql.= " where (c.name like '%$ciudad%' or pr.name like '%$ciudad%')";

          // echo $sql;
           $result=$db->query($sql);
           while ($row = $db->fetchByAssoc($result)) {
               $data[]=$row;
           }
           echo $this->respuesta($data,$pos);
 	}
        function respuesta($lista,$pos){
            $cadena='<table width="100%"  id="hor-minimalist-b"><thead>
	<tr>
                    <th>Ciudad</th>
                    <th>Provincia</th>
                    <th>Pais</th>

	</tr>
        </thead>';
        if(is_array($lista)){

        $cadena.="<tbody>";
          foreach ($lista as $key => $row):
		$pais = !empty($row['ciudad']) ? $row['ciudad'] : $row['ciudad'];
                $js="'".$row['ciudad']."','".$row['provincia']."','".$row['pais']."','".$pos."','".$row['ext']."'";
                   
        	$cadena.='<tr>';
			$cadena.='<td><a href="javascript:void(0);" onclick="javascript:paste('.$js.');">'.$pais.'</a>';//echo CHtml::link($ciudad, 'javascript:' . $js);
                        $cadena.='<td>'.$row['provincia'].'</a>';
                        $cadena.='<td>'.$row['pais'].'</a>';
                        $cadena.='</td>';
		$cadena.='</tr>';
            endforeach;
        $cadena.="</tbody>";
        }else{
            $cadena.="<tbody>";
            		$cadena.='<tr>';
			$cadena.='<td>No se encontraron ciudades';//echo CHtml::link($ciudad, 'javascript:' . $js);
                        $cadena.='</td>';
                        $cadena.='</tr>';
            $cadena.="</tbody>";
        }

            $cadena.='</table>';
            return $cadena;
        }

}