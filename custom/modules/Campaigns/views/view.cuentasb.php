<?php
/**
 *Verifica la informacion ,
 * @author Jose Sambrano
 */
require_once('include/MVC/View/views/view.edit.php');
require_once("include/JSON.php");


class CampaignsViewCuentasb extends ViewEdit {

 	function CampaignsViewCuentasb(){
 		parent::ViewEdit();
 	}

 	function process() {
		$this->display();
 	}

 	function display(){
           global $db;
           $sql="Select * from accounts a inner join accounts_cstm c on a.id=c.id_c where a.deleted=0";
           $result=$db->query($sql);
           while ($a=$db->fetchByAssoc($result)){
               $data[]=$a;
           }
           echo self::respuesta($data,1);
 	}
        function respuesta($data,$pos){
            if(is_array($data)){
           $cadena.='<script type="text/javascript">
                jQuery(document).ready(function() {
                    jQuery("#example").dataTable( {
                                "sPaginationType": "full_numbers"
                            } );
            var url_carga = "index.php?&module=Campaigns&action=cuentac";
            var options = {
			target: \'#lista\',
			url: url_carga,
			iframe: true,
			beforeSubmit: function() {
				jQuery(\'#mensaje\').show();
			},
			complete: function() { // puede ser success si hay algo que hacer cuando termine


			}
		};

		jQuery(\'#form_carga\').submit(function() {
                       $(this).ajaxSubmit(options);
                      return false;
		});


});
</script>

';
           
           $cadena.='<form method="post" id="form_carga">';
           
           $cadena.='<div id="tipos_trabajo" style="display: block;">';
           $cadena.='<input id="checkAll" onclick="checkTodos(this.id,\'tipos_trabajo\');" name="checkAll" type="checkbox" /> Seleccionar todos';
           $cadena.='<table width="100%" border="0" class="display" id="example">';
           $cadena.='<thead>';
           $cadena.='<tr>';
                $cadena.='<th class="header">Nombre Cliente';
                 $cadena.='</th>';
                $cadena.='<th class="header">';
                $cadena.='';
                $cadena.='</th>';
                $cadena.='<th class="header">';
                $cadena.='';
                $cadena.='</th>';
                 $cadena.='</tr>';
           $cadena.='</thead>';
           $cadena.='<tbody>';
            foreach($data as $key =>$value){
                $cadena.='<tr>';
                $cadena.='<td>';
                $cadena.='<input class="check" id="tipotrabajo[]" type="checkbox" value="'.$value['id'].'" name="tipotrabajo[]" />';
                $cadena.='</td>';
                $cadena.='<td>';
                $cadena.=$value['name'];
                $cadena.='</td>';
                $cadena.='<td>';
                //$cadena.=$app_list_strings['sales_stage_dom'][$value['sales_stage']];
                $cadena.='</td>';
                 $cadena.='</tr>';

            }
           $cadena.='</tbody>';
            $cadena.='</table>';


            $cadena.='</div>';
            $cadena.='<input type="hidden" value="Update" name="accion" id="accion">';
           $cadena.='<input type="submit" value="Cargar" name="Cargar" id="Cargar">';
           $cadena.='</form>';
            return $cadena;
            }
       }

}
