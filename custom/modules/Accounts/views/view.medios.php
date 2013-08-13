<?php
/*
 * @author Jose Sambrano
 */
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class AccountsViewMedios extends ViewEdit {

 	function AccountsViewMedios(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){

            global $db;
            $nombre= $_REQUEST['medio'];
            
            if(empty($nombre))
                $sql="Select id , name pais from ee_mediocontacto where deleted=0";
            else
                $sql="Select id , name pais from ee_mediocontacto where deleted=0 and name like '%$nombre%'";
            
            $result = $db->query($sql);
                     while($a = $db->fetchByAssoc($result)) {
                            $data[] = $a;
                    }
            echo $this->cargaSectores($data);
 	}

        function cargaSectores($lista){

           $cadena='<table width="100%" id="hor-minimalist-b"><thead>
	<tr>
                <th scope="col">Nombre</th>

	</tr>
        </thead>';
        if(is_array($lista)){
        
         $cadena.="<tbody>";
          foreach ($lista as $key => $row):
		$pais = !empty($row['pais']) ? $row['pais'] : $row['pais2'];
                
		
        	$cadena.='<tr>';
			$cadena.='<td><a href="javascript:void(0);" onclick="javascript:selectMedio(\''.$pais.'\')">'.$pais.'</a>';//echo CHtml::link($ciudad, 'javascript:' . $js);
                        $cadena.='</td>';
		$cadena.='</tr>';
            endforeach;
            $cadena.="</tbody>";
        }else{
                        $cadena.="<tbody>";
            		$cadena.='<tr>';
			$cadena.='<td>No se encontraron medios';//echo CHtml::link($ciudad, 'javascript:' . $js);
                        $cadena.='</td>';
                        $cadena.='</tr>';
                        $cadena.="</tbody>";

        }

$cadena.='</table>';
return $cadena;
        }
}
?>
