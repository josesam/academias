<?php
/**
 *Verifica la informacion ,
 * @author Jose Sambrano
 */
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class CampaignsViewContacto extends ViewEdit {

 	function CampaignsViewContacto(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){
          global $db;
           $path='custom/include/clases/varios/EditViewCstm.php';
         if(file_exists($path)){
               include $path;



           $seed=new Contact();


            $busqueda=new EditViewCstm('Contacts',$seed);
            $busqueda->setup();
           echo $busqueda->displayBasic();



           }else{
               echo 'Existio un error.. Comuniquese con el Administrador';
           }
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
