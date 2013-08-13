<?php
/**
 *Verifica la informacion ,
 * @author Jose Sambrano
 */
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class AccountsViewNacionalidad extends ViewEdit {

 	function AccountsViewNacionalidad(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){
           global $db;
           $ciudad=$_REQUEST["parametro"];
           
           $sql="SELECT id ,name
                 FROM  ee_nacionalidad  c where deleted=0";
           if(!empty($ciudad))
               $sql.= " and (c.name like '%$ciudad%')";

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
                    <th>Países</th>
	</tr>
        </thead>';
        if(is_array($lista)){

        $cadena.="<tbody>";
          foreach ($lista as $key => $row):
		$pais = !empty($row['name']) ? $row['name'] : $row['name'];
                $js="'".$row['name']."','".$row['id']."'";
                   
        	$cadena.='<tr>';
			$cadena.='<td><a href="javascript:void(0);" onclick="javascript:selectNacionalidad('.$js.');">'.$pais.'</a>';//echo CHtml::link($ciudad, 'javascript:' . $js);
                        $cadena.='</td>';
		$cadena.='</tr>';
            endforeach;
        $cadena.="</tbody>";
        }else{
            $cadena.="<tbody>";
            		$cadena.='<tr>';
			$cadena.='<td>No se encontraron paises';//echo CHtml::link($ciudad, 'javascript:' . $js);
                        $cadena.='</td>';
                        $cadena.='</tr>';
            $cadena.="</tbody>";
        }

            $cadena.='</table>';
            return $cadena;
        }

}