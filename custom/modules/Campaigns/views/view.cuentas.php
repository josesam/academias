<?php
/**
 *Verifica la informacion ,
 * @author Jose Sambrano
 */
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class CampaignsViewCuentas extends ViewEdit {

 	function CampaignsViewCuentas(){
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



           $seed=new Account();
           

            $busqueda=new EditViewCstm('Accounts',$seed);
            $busqueda->setup();
           echo $busqueda->displayBasic();



           }else{
               echo 'Existio un error.. Comuniquese con el Administrador';
           }

 	}
        function respuesta($lista,$pos){
            $cadena='<h1>Filtros de Busqueda</h1><form id="busqueda_pop" name="busqueda_pop"><table width="100%"  id="hor-minimalist-b">
                    <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="name" id="name"></td>                    
                    </tr></table>
                    
                    
                    </form><button onclick="javascript:buscar();">Buscar </button><input type="hidden" name="vista_busqueda" id="vista_busqueda" value="cuentasb">';
        
//        if(is_array($lista)){
//
//        $cadena.="<tbody>";
//          foreach ($lista as $key => $row):
//		$pais = !empty($row['ciudad']) ? $row['ciudad'] : $row['ciudad'];
//                $js="'".$row['ciudad']."','".$row['provincia']."','".$row['pais']."','".$pos."','".$row['ext']."'";
//
//        	$cadena.='<tr>';
//			$cadena.='<td><a href="javascript:void(0);" onclick="javascript:paste('.$js.');">'.$pais.'</a>';//echo CHtml::link($ciudad, 'javascript:' . $js);
//                        $cadena.='<td>'.$row['provincia'].'</a>';
//                        $cadena.='<td>'.$row['pais'].'</a>';
//                        $cadena.='</td>';
//		$cadena.='</tr>';
//            endforeach;
//        $cadena.="</tbody>";
//        }else{
//            $cadena.="<tbody>";
//            		$cadena.='<tr>';
//			$cadena.='<td>No se encontraron ciudades';//echo CHtml::link($ciudad, 'javascript:' . $js);
//                        $cadena.='</td>';
//                        $cadena.='</tr>';
//            $cadena.="</tbody>";
//        }
//
//            $cadena.='</table>';
            return $cadena;
       }

}
