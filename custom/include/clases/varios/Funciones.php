<?php
/* 
 * Funciones para generar los pagos y guardar el pago si es realizado
 * 
 */
class Funciones{
  
  
  function referidos($ids=array()){

  }

  function usuarios(){
      $sql="Select user_name name , id from users where deleted=0 order by user_name";
      $db = DBManagerFactory::getInstance();


        $result=$db->query($sql);
    $data=array();
    
    while($a = $db->fetchByAssoc($result)) {

        $cadena.="<option value='".$a['id']."'>".$a['name']."</option>";
    }
    
    return $cadena;

  }
  function buscaInmueble($id){
    $sql="SELECT o.id, o.name
            FROM accounts a, opportunities o, accounts_opportunities ao
            WHERE a.id = ao.account_id
            AND o.id = ao.opportunity_id
            AND  ao.deleted=0 and o.deleted=0 and o.sales_stage!='Closed Lost' and a.deleted=0 and a.id='$id'";

      $db = DBManagerFactory::getInstance();
    $result=$db->query($sql);
    $data=array();
    echo '<option value="null">Selecciona un Inmueble</option>';
		 while($a = $db->fetchByAssoc($result)) {
			echo '<option value="'.$a['id'].'">'.$a['name'].'</option>';

		}
  }
  function buscarClientes($form){
       global $timedate;
    //   if(count($form['clientes'])>0)
      // $filtros= " and a.id in ('". implode("','",$form['clientes']) ."')";

       $fechas="  and (p.fechapago between '".  $timedate->to_db($form['fecha_inicial'])."' and '".$timedate->to_db($form['fecha_final'])."')";

      $sql="SELECT distinct a.name cliente, o.name inmueble, p.id, p.name pago, p.valorcuota, p.fechapago
            FROM accounts a, opportunities o, pro_cobranzas p, opportunitiro_cobranzas_c r, accounts_opportunities ao
            WHERE a.id = ao.account_id
            AND o.id = ao.opportunity_id
            AND o.id = r.opportunit0a0aunities_ida
            AND p.id = r.opportunit3f5cbranzas_idb and r.deleted=0 and ao.deleted=0 and o.deleted=0 and p.deleted=0 and p.pago='No'
            and o.id='".$form['idoportunidad']."'
            ".$fechas . $filtros.' order by p.fechapago ';

      $db = DBManagerFactory::getInstance();
    $result=$db->query($sql);
    $data=array();
    while($a = $db->fetchByAssoc($result)) {
        $data[] = $a;
    }
     return $data;
  }
  function generarResumenPagos($data){
      if (is_array($data)){
          $cadena.="<table  width='80%' border='1' class='display' id='example'>";
          $cadena.='<thead>';
           $cadena.="<tr>";
              $cadena.="<th>Cliente ";
              $cadena.="</th>";
              $cadena.="<th>Inmueble de Interes ";
              $cadena.="</th>";
              $cadena.="<th>Concepto Pago ";
              $cadena.="</th>";
              $cadena.="<th>Valor Cuota ";
              $cadena.="</th>";
              $cadena.="<th>Fecha Pago ";
              $cadena.="</th>";
               $cadena.="<th> ";
              $cadena.="</th>";
              $cadena.="</tr>";
           $cadena.='</thead>';
           $cadena.='<tbody>';
          foreach($data as $value){
              $cadena.="<tr>";
              $cadena.="<td>";
              $cadena.=$value['cliente'];
              $cadena.="</td>";
              $cadena.="<td>";
              $cadena.=$value['inmueble'];
              $cadena.="</td>";
              $cadena.="<td>";
              $cadena.=$value['pago'];
              $cadena.="</td>";
              $cadena.="<td>";
              $cadena.=$value['valorcuota'];
              $cadena.="</td>";
              $cadena.="<td>";
              $cadena.=$value['fechapago'];
              $cadena.="</td>";
              $cadena.="<td>";
              $cadena.="<a href=\"javascript:cancela('".$value['id']."','".$value['valorcuota']."')\">Ejecutar Pago</a>";
              $cadena.="</td>";
              $cadena.="</tr>";
          }
          $cadena.='</tbody>';
          $cadena.="</table>";
      }else{

          $cadena="No se encontraron registros";
      }
return $cadena;
  }
  function guardarPago($form){
      //include_once 'modules/pro_Cobranzas/pro_Cobranzas.php';
      include_once('custom/include/proUtils/FormatUtil.php');
      $formato=new FormatUtil();

      $formapago=$form['formapago'];
      $comisiontarjeta=$form['valorcomisiontarjeta'];
      $pago="Si";
      $fecharealpago=$formato->formatDate1($form['fecha_realpago']);
      $tasainteresmora=$form['interesmora'];
      $valormora=$form['valormora'];
      $valorinteresfinanciamiento=$form['valorinteresfinanciamiento'];
      $observaciones=$form['observaciones'];
      $id=$form['id'];

      ///    Update

     $sql =" Update pro_cobranzas
             set formapago='$formapago',
             comisiontarjeta='$comisiontarjeta',
             pago='$pago',
             fecharealpago='$fecharealpago',
             tasainteresmora='$tasainteresmora',
             valormora='$valormora',
             valorinteresfinanciamiento='$valorinteresfinanciamiento',
             observaciones='$observaciones'
             where id='$id'";

      $db = DBManagerFactory::getInstance();
      $result=$db->query($sql);


  }
  function formasPago(){
      global $app_list_strings;
      $cadena="<select id='formapago' name='formapago'>";
      foreach ($app_list_strings['formapago_list'] as $key => $value){
        $cadena.="<option value='$key'>".$value."</option>";
      }
      $cadena.="</select>";
      return $cadena;
  }
}
?>
