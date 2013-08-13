<?php
/*
 * @author Jose Sambrano
 */
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class ee_ItemsViewMedios extends ViewEdit {

 	function ee_ItemsViewMedios(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){

            global $db;
            $nombre= $_REQUEST['medio'];
            
            if(empty($nombre))
                $sql="Select id , name pais from ee_logistica where deleted=0";
            else
                $sql="Select id , name pais from ee_logistica where deleted=0 and name like '%$nombre%'";
            
            $result = $db->query($sql);
                     while($a = $db->fetchByAssoc($result)) {
                            $data[] = $a;
                    }
            echo $this->cargaSectores($data);
 	}

        function cargaSectores($lista){

          $cadena='<table width="100%"><thead>
	<tr>
                <th>Nombre</th>

	</tr>
        </thead>';
        if(is_array($lista)){
        
       
          foreach ($lista as $key => $row):
		$pais = !empty($row['pais']) ? $row['pais'] : $row['pais2'];
                
		
        	$cadena.='<tr>';
			$cadena.='<td><a href="javascript:void(0);" onclick="javascript:selectMedio(\''.$pais.'\')">'.$pais.'</a>';//echo CHtml::link($ciudad, 'javascript:' . $js);
                        $cadena.='</td>';
		$cadena.='</tr>';
            endforeach;
       
        }else{
            		$cadena.='<tr>';
			$cadena.='<td>No se encontraron medios';//echo CHtml::link($ciudad, 'javascript:' . $js);
                        $cadena.='</td>';
                        $cadena.='</tr>';

        }

$cadena.='</table>';
return $cadena;
        }
}
?>
