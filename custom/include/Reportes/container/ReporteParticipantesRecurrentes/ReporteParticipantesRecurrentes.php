<?php
if (file_exists('custom/include/Reportes/SP_Reporte.php')){
    include_once('custom/include/Reportes/SP_Reporte.php');
}
if(file_exists('custom/include/Reportes/sp_globals.php')){
    include_once('custom/include/Reportes/sp_globals.php');
}
class ReporteParticipantesRecurrentes extends SP_Reporte {
    protected $parametros;
    public $fecha_inicio;
    public $fecha_final;
    public $archivo="ReporteParticipantesRecurrentes";
    
    
    
    /*
    *
    */
    function __construct(& $form){
        global $app_list_strings;
         $this->form=$form;
         
    
         $this->reporte="ReporteParticipantesRecurrentes";
        if(file_exists(SP_PATHREPORTES.'/'.$this->reporte.'/'.$this->reporte.'Def.php')){
              include_once SP_PATHREPORTES.'/'.$this->reporte.'/'.$this->reporte.'Def.php';
              $this->parametros=$reportedef;
         }
         parent::__construct();
    }
    /*
    *
    */
    function  setTitle() {
        parent::setTitle($this->parametros['title']);
    }
    /*
    *acstm.tipocliente_c AS tipoclientereal
    */
    function  setSql() {
        $query="SELECT COUNT(dp.oportunidad_id) AS contador, a.name AS cliente, CONCAT(c.first_name,' ',c.last_name) AS contacto, dp.idcontacto AS idcontacto,
                       a.calle_principal AS direccion, a.phone_office AS telefono, a.phone_alternate AS celular,lugartrabajo, title AS cargo,acstm.tipocliente_c AS tipoclientereal,
                       a.ciudad_principal AS ciudad, a.provincia_principal AS provincia
                FROM detalle_participante dp, detalle_cotizacion dc, contacts c, accounts a, opportunities o, opportunities_cstm ocstm, accounts_cstm acstm
                WHERE dp.oportunidad_id=dc.oportunidad_id AND c.id=dp.idcontacto AND a.id=dc.cliente_id AND acstm.id_c=a.id
                      AND o.id=dp.oportunidad_id AND o.id=ocstm.id_c 
                      AND dp.deleted=0 AND dc.deleted=0 AND c.deleted=0 AND a.deleted=0 AND o.deleted=0";
        parent::setSql($query);
    }
   function  groupby() {
        parent::groupby();

        return " GROUP BY dp.idcontacto ";
    }
   function  orderby() {
        parent::orderby();
        return "  ";
    }
   /*
    *
    */
   function armarquery(){
        $this->sql.=$this->setSql().$this->armarFiltros().self::orderby() .self::groupby();
//        echo $this->sql;
        $result=$this->excecutequery();
        $this->arrayTabla=$this->armarArray($result);
   }
   /*
    *
    */
   function armarFiltros(){
        $filtros=" and  o.date_closed between '".$this->form['fecha_inicial']."' and '".$this->form['fecha_final']."'";
     
           
     if(count($this->form['programas'])>0)
           $filtros.= " and dc.idprograma in ('". implode("','",$this->form['programas']) ."')";
     
    if(count($this->form['ciudad'])>0)
         $filtros.= " and a.ciudad_principal in ('". implode("','",$this->form['ciudad']) ."')";
    
    if(count($this->form['provincia'])>0)
         $filtros.= " and a.provincia_principal in ('". implode("','",$this->form['provincia']) ."')";
    
    if(count($this->form['clientes'])>0)
         $filtros.= " and a.id in ('". implode("','",$this->form['clientes']) ."')";
     return $filtros;
   }
   /*
    *
    */
   function armarArray($result=array()){
     global $mod_strings,$current_language,$app_list_strings;
     global $db;
      $data=array();
      $valor=array();
      $cont=0;
      while($a = $this->db->fetchByAssoc($result)) {
         if($a['contador']>1){
            $data['tipocliente']=$a['tipoclientereal'];
            $data['cliente']=$a['cliente'];
            $data['contacto']=$a['contacto'];
            $data['empresa']=$a['lugartrabajo'];
            $data['cargo']=$a['cargo'];
            $programa = '';
            $fechaInicio = '';
            $fechaFin = '';
            $descuento = '';
            $precioreal = '';
            $motivo = '';
            $sql11 = 'SELECT p.name AS programa, p.fechainicio_programa AS fechainicio, p.fechafinal_programa AS fechafin, ocstm.descuento_c AS descuento, 
                             motivo_c AS motivodescuento, o.otrodescuento AS otrodescuento, o.amountreal AS precioreal
                      FROM ee_programas p, detalle_participante dp, opportunities o, opportunities_cstm ocstm, detalle_cotizacion dc
                      WHERE dp.oportunidad_id=dc.oportunidad_id AND dc.idprograma=p.id AND o.id=dp.oportunidad_id AND o.id=ocstm.id_c AND dp.idcontacto="'.$a['idcontacto'].'"';
            $result11=$db->query($sql11);
            $correo = '';
            while ($w=$db->fetchByAssoc($result11)){
                $programa.= $w['programa'] ."<br/><br/>";
                $fechaInicio.= $w['fechainicio'] ."<br/><br/>";
                $fechaFin.= $w['fechafin'] ."<br/><br/>";
                $descuento.= number_format($w['descuento'],2) ."%<br/><br/>";
                $precioreal.= number_format($w['precioreal'],2) ."<br/><br/>";               
                
                if($w['motivodescuento'] == '^Otro^')
                    $motivo.= str_replace("^", "", $w['motivodescuento'])." / ".$w['otrodescuento']."<br/><br/>";
                else
                    $motivo.= str_replace("^", "", $w['motivodescuento']) ."<br/><br/>";
                
            }            
            $data['programa']=$programa;
            $data['fechainicio']=$fechaInicio;
            $data['fechafin']=$fechaFin;
            $data['precioreal']=$precioreal;
            $data['descuento']=$descuento;
            $data['motivodescuento']=$motivo;
            $data['direccion']=$a['direccion'];
            $data['provincia']=$a['provincia'];
            $data['ciudad']=$a['ciudad'];
            $sql12 = 'SELECT email_address FROM email_addresses ea, email_addr_bean_rel br WHERE ea.id=br.email_address_id AND br.bean_module= "Contacts" AND br.deleted=0 AND ea.deleted=0 AND br.bean_id="'.$a['idcontacto'].'"';
            $result12=$db->query($sql12);
            $correo = '';
            while ($x=$db->fetchByAssoc($result12)){
                $correo.= $x['email_address'] ."<br/>";
            }
            $data['correo']=$correo;
            $data['telefono']=$a['telefono'];
            $data['celular']=$a['celular'];            
            
            
            $valor[$cont]=$data;
            $cont++;
         }
            
     }
     
     
     $newData=array();
     foreach($valor as $key=>$value){
              array_push($newData,$value);
     }
     return $newData;
  }
  /*
    *
    */
  function exportexcel(){
     parent::exportexcel();
     $this->generateFileName();
     $this->sql.=$this->setSql().$this->armarFiltros();
     $result=$this->excecutequery();
     $this->arrayTabla=$this->armarArray($result);
     if(!empty($this->arrayTabla)){
        $this->downloadFile($this->reporte);
     }else{
            $this->showdata=true;
            $this->display();
     }
}
    /*
    *
    */
    function downloadFile($name){
        parent::downloadFile($name);
    }
   /*
    *
   */
   function displayParametros(){
      global $current_user, $timedate, $app_list_strings, $current_language, $mod_strings;
      include('include/javascript/javascript.php');
      $this->setTitle();
      $javascript = new javascript();
      $javascript->setFormName('SP_Reporte');
      $this->sugar_smarty->assign("reportes",$this->form['reportes']);
      $this->sugar_smarty->assign("TIME_FORMAT", '('. $timedate->get_user_time_format().')');
      $this->sugar_smarty->assign("USER_DATEFORMAT", '('. $timedate->get_user_date_format().')');
      $this->sugar_smarty->assign("CALENDAR_DATEFORMAT", $timedate->get_cal_date_format());
      $this->sugar_smarty->assign('additionalScripts', $javascript->getScript(false));
      $this->sugar_smarty->assign('title',$this->getTitle());
      $this->sugar_smarty->assign('MOD',$mod_strings);
      
      $this->form['fecha_inicial']= '2010-01-01';
      $this->form['fecha_final']= '2016-01-01';
      
      $this->sugar_smarty->assign('fecha_inicial',$this->form['fecha_inicial']);
      $this->sugar_smarty->assign('fecha_final',$this->form['fecha_final']);
      //$this->sugar_smarty->assign("selected_categoria",$this->lista('categoria_list','categoria'));
      $this->sugar_smarty->assign("selected_modalidad",$this->lista('programa_modalidad_dom','modalidad'));

      $this->sugar_smarty->assign("selected_estado_programa",$this->lista('programa_status_dom','estado_programa'));
      $this->sugar_smarty->assign('descripcion',$this->parametros['descripcion']);
      
      $this->sugar_smarty->assign('module',$this->module);
      $this->sugar_smarty->assign('action',$this->action);
      $this->sugar_smarty->assign('reporte',$this->reporte);
      $this->sugar_smarty->assign('total_cliente',$this->total_cliente);
      $this->sugar_smarty->assign('cedula',$this->form['cedula_ruc']);
      $this->sugar_smarty->assign("selected_modelos",$this->lista('segmento_list','modelos'));
      $this->sugar_smarty->assign("selected_programas",$this->programas());
      $this->sugar_smarty->assign("selected_ciudad",$this->ciudad());
      $this->sugar_smarty->assign("selected_provincia",$this->provincia());
      $this->sugar_smarty->assign("selected_cliente",$this->cliente());
      $this->sugar_smarty->assign("selected_user",$this->user());
      $this->sugar_smarty->display('custom/include/Reportes/container/'.$this->reporte.'/tpls/parametros.html');
      parent::displayParametros();
   }
   /*
    *
    */
   function  display() {
      global $current_user, $timedate, $app_list_strings, $current_language, $mod_strings;
      include('include/javascript/javascript.php');
      $this->setTitle();
      $javascript = new javascript();
      $javascript->setFormName('SP_Reporte');
      $this->sugar_smarty->assign("reportes",$this->form['reportes']);
      $this->sugar_smarty->assign("TIME_FORMAT", '('. $timedate->get_user_time_format().')');
      $this->sugar_smarty->assign("USER_DATEFORMAT", '('. $timedate->get_user_date_format().')');
      $this->sugar_smarty->assign("CALENDAR_DATEFORMAT", $timedate->get_cal_date_format());
      $this->sugar_smarty->assign('additionalScripts', $javascript->getScript(false));
      $this->sugar_smarty->assign('show_data',$this->showdata);
      //ejecuta reporte
      $this->armarquery();
      
      $this->sugar_smarty->assign('data',$this->arrayTabla);
      $this->sugar_smarty->assign('title',$this->getTitle());
      $this->sugar_smarty->assign('MOD',$mod_strings);
      $this->sugar_smarty->assign('grafico',self::excecuteChart());
      $this->sugar_smarty->assign('fecha_inicial',$this->form['fecha_inicial']);
      $this->sugar_smarty->assign('fecha_final',$this->form['fecha_final']);
      //$this->sugar_smarty->assign("selected_categoria",$this->lista('categoria_list','categoria'));
      $this->sugar_smarty->assign("selected_estado_programa",$this->lista('programa_status_dom','estado_programa'));
      $this->sugar_smarty->assign("selected_modalidad",$this->lista('programa_modalidad_dom','modalidad'));
      $this->sugar_smarty->assign('descripcion',$this->parametros['descripcion']);
      $this->sugar_smarty->assign('module',$this->module);
      $this->sugar_smarty->assign('action',$this->action);
      $this->sugar_smarty->assign('reporte',$this->reporte);
      $this->sugar_smarty->assign('chart',$this->excecuteChart());
      $this->sugar_smarty->assign("selected_segmento",$this->lista('segmento_list','segmento'));
      $this->sugar_smarty->assign("selected_user",$this->user());
      $this->sugar_smarty->assign("selected_programas",$this->programas());
      $this->sugar_smarty->assign("selected_ciudad",$this->ciudad());
      $this->sugar_smarty->assign("selected_provincia",$this->provincia());
      $this->sugar_smarty->assign("selected_cliente",$this->cliente());
      $this->sugar_smarty->assign('total_cliente',$this->total_cliente);
      $this->sugar_smarty->display('custom/include/Reportes/container/'.$this->reporte.'/tpls/parametros.html');
      parent::display();
    }
   /*
    *
    */
   function  mostrarData() {
       parent::mostrarData();
   }
   function excecuteChart(){

           
              require_once('custom/include/Reportes/openflash/lib/OFC/OFC_Chart.php');

                $data_1 = array();
                $data_2 = array();
                $data_3 = array();

                for( $i=0; $i<6.2; $i+=0.2 )
                {
                  $data_1[] = (sin($i) * 1.9) + 7;
                  $data_2[] = (sin($i) * 1.9) + 10;
                  $data_3[] = (sin($i) * 1.9) + 4;

                }

                $title = new OFC_Elements_Title( date("D M d Y") );

                $line_1 = new OFC_Charts_Line_Dot();
                $line_1->set_values( $data_1 );
                $line_1->set_halo_size( 0 );
                $line_1->set_width( 2 );
                $line_1->set_dot_size( 4 );

                $line_2 = new OFC_Charts_Line_Dot();
                $line_2->set_values( $data_2 );
                $line_2->set_halo_size( 1 );
                $line_2->set_width( 1 );
                $line_2->set_dot_size( 4 );

                $line_3 = new OFC_Charts_Line_Dot();
                $line_3->set_values( $data_3 );
                $line_3->set_halo_size( 1 );
                $line_3->set_width( 6 );
                $line_3->set_dot_size( 4 );

                $y = new OFC_Elements_Axis_Y();
                $y->set_range( 0, 15, 5 );


                $chart = new OFC_Chart();
                $chart->set_title( $title );
                $chart->add_element( $line_1 );
               // $chart->add_element( $line_2 );
               // $chart->add_element( $line_3 );
                $chart->set_y_axis( $y );
            return $chart;

    }
    function generarReporte(){
global $db,$app_list_strings;
        $this->setTitle();
        $query="SELECT
                sum(if(s.odometro >0 && s.odometro<=5000,1,0))  '5000',
                sum(if(s.odometro>5000 && s.odometro<=10000,1,0)) '10000',
                sum(if(s.odometro>10000 && s.odometro<=15000,1,0)) '15000',
                sum(if(s.odometro>15000 && s.odometro<=20000,1,0)) '20000',
                sum(if(s.odometro>20000 && s.odometro<=25000,1,0)) '25000',
                sum(if(s.odometro>25000 && s.odometro<=30000,1,0)) '30000',
                sum(if(s.odometro>30000 && s.odometro<=35000,1,0)) '35000',
                sum(if(s.odometro>35000 && s.odometro<=40000,1,0)) '40000',
                sum(if(s.odometro>40000 && s.odometro<=45000,1,0)) '45000',
                sum(if(s.odometro>45000 && s.odometro<=50000,1,0)) '50000',
                sum(if(s.odometro>50000 && s.odometro<=55000,1,0)) '55000',
                sum(if(s.odometro>55000 && s.odometro<=60000,1,0)) '60000',
                sum(if(s.odometro>60000 && s.odometro<=65000,1,0)) '65000',
                sum(if(s.odometro>65000 && s.odometro<=70000,1,0)) '70000',
                sum(if(s.odometro>70000 && s.odometro<=75000,1,0)) '75000',
                sum(if(s.odometro>75000 && s.odometro<=80000,1,0)) '80000',
                sum(if(s.odometro>80000 && s.odometro<=85000,1,0)) '85000',
                sum(if(s.odometro>85000 && s.odometro<=90000,1,0)) '90000',
                sum(if(s.odometro>90000 && s.odometro<=95000,1,0)) '95000',
                sum(if(s.odometro>95000 && s.odometro<=100000,1,0)) '100000',
                sum(if(s.odometro>100000,1,0)) '+100000', s.tipomantenimiento
                FROM
                accounts a inner join accounts_cstm cs on a.id=cs.id_c and a.deleted=0
                inner join jf_vehiculocliente vc on a.id=vc.cliente_id and vc.deleted=0
                inner join jf_vehiculo v on v.id=vc.vehiculo_id and v.deleted=0
                LEFT JOIN jf_vehiculo_jf_servicio_c r1 ON v.id = r1.jf_vehi4458culo_ida
                AND r1.deleted =0
                INNER JOIN jf_servicio s ON s.id = r1.jf_vehid940icio_idb
                AND s.deleted =0
                inner JOIN teams t on t.id=s.team_id and t.deleted=0
                ";
             $filtros=" and  s.fechaentrada between '".$this->dateFormatDb($this->form['fecha_inicial'])."' and '".$this->dateFormatDb($this->form['fecha_final'])."'";

       if(!parent::concesionario($this->concesionario_name)){
         if((count($this->form['usuarios'])>0)&&(is_array($this->form['usuarios'])))
             $filtros.= " and s.bac in ('". implode("','",$this->form['usuarios']) ."')";
     }else{
         if((count($this->form['usuarios'])>0)&&(is_array($this->form['usuarios'])))
             $filtros.= " and s.team_id in ('". implode("','",$this->form['usuarios']) ."')";
     }
     if((count($this->form['tiposervicio'])>0)&&(is_array($this->form['tiposervicio'])))
           $filtros.= " and s.tipomantenimiento in ('". implode("','",$this->form['tiposervicio']) ."')";
     if((count($this->form['categoria'])>0)&&(is_array($this->form['categoria'])))
           $filtros.= " and cs.categoria_c in ('". implode("','",$this->form['categoria']) ."')";

//      if(!empty($this->form['cedula_ruc']))
             $filtros.= " and (cs.cedularuc_c ='".$this->form['cedula_ruc']."')";

//     if(!parent::concesionario($this->concesionario_name))
//         $filtros.=" and s.team_id='".$this->concesionario_id."'";

     $filtros.=" group by tipomantenimiento";
//
      $query.=$filtros;

      $result=$db->query($query);
      while($a = $db->fetchByAssoc($result)) {

            $data[]=(int)$a['5000'];
            $data[]=(int)$a['10000'];
            $data[]=(int)$a['15000'];
            $data[]=(int)$a['20000'];
            $data[]=(int)$a['25000'];
            $data[]=(int)$a['30000'];
            $data[]=(int)$a['35000'];
            $data[]=(int)$a['40000'];
            $data[]=(int)$a['45000'];
            $data[]=(int)$a['50000'];
            $data[]=(int)$a['55000'];
            $data[]=(int)$a['60000'];
            $data[]=(int)$a['65000'];
            $data[]=(int)$a['70000'];
            $data[]=(int)$a['75000'];
            $data[]=(int)$a['80000'];
            $data[]=(int)$a['85000'];
            $data[]=(int)$a['90000'];
            $data[]=(int)$a['95000'];
            $data[]=(int)$a['100000'];
            $data[]=(int)$a['+100000'];
            $valores[$a['tipomantenimiento']]=$data;
            $data=null;
      }

include_once 'custom/include/Reportes/openflash/ofc-library/open-flash-chart.php';

      $y_segmento=$app_list_strings['tipomantenimiento_list'];
$y_legendas=array();
$cont=0;
$max=0;
if(is_array($valores)){
    $colores=parent::randomColor(count($valores)+10);
    foreach($valores as $key => $datos){
        if(!empty($y_segmento[$key])){
            
            $y_legendas[]=$app_list_strings['tipomantenimiento_list'][$key];
            $line[$cont] = new line();
            $line[$cont]->set_width( 1 );
            $line[$cont]->set_colour($colores[$cont]);
            $line[$cont]->set_values( $datos );
            $line[$cont]->set_key($key, 10);
            $valor_max=max($datos);
            if($valor_max>$max)
                $max=$valor_max;
            $cont++;
        }
    }

}


 $y = new y_axis();
                $y->set_range( 0, $max+5, 5 );

                $y_legend = new y_legend( 'Tipos de Servicios'  );
                $y_legend->set_style( '{font-size: 22px; color: #778877}' );

                $x_legend = new x_legend('Rangos de Kilometrajes' );
                $x_legend->set_style( '{font-size: 20px; color: #778877}' );




                $x = new x_axis();
                $x->set_offset( false );

                $x->set_labels_from_array( array('5000','10000','15000','20000','25000','30000','35000','40000','45000','50000','55000','60000','65000','70000','75000','80000','85000','90000','95000','100000','20000') );



$chart = new open_flash_chart();
$chart->set_title( new title( $this->getTitle() ) );
$chart->set_y_axis( $y );
$chart->set_x_axis( $x );
$chart->set_y_legend( $y_legend );
$chart->set_x_legend( $x_legend );
if(is_array($line)){
    foreach($line as $key =>$lineas){
        $chart->add_element( $lineas );
    }
}
return $chart->toPrettyString();


      
    }

    /*
     * Subquery total presupuesto
     * @var <string> programas
     */

    function totalPresupuesto($id){
        global $db;
        $sql="SELECT round(sum(precio),2) presupuesto
              FROM detalle_logistico where programa_id='$id' and deleted=0";
        
        $result=$db->query($sql);
        $a=$db->fetchByAssoc($result);
        $total=$a['presupuesto'];
        return (empty($total))? 0 : $total ;
    }

    /*
     * Subquery total ingresos, se verifica
     * @var <string> programas
     */

    function totalIngresos($id){
        global $db;
        $res=array(
          'monto'=>0,
          'descuento'=>0
        );
        $sql="SELECT sum(round((amountreal*numeroparticipantes),2)) monto,
              sum(round(((amountreal*numeroparticipantes)*oc.descuento_c)/100,2))  descuento
              FROM accounts a
              INNER JOIN accounts_opportunities ao ON a.id = ao.account_id
              INNER join opportunities o on o.id=ao.opportunity_id
              inner join detalle_cotizacion d on o.id=d.oportunidad_id
              inner join opportunities_cstm oc on o.id=oc.id_c
              where d.idprograma='$id' and a.deleted=0 and
              o.deleted=0 and ao.deleted=0 and d.deleted=0 and o.sales_stage='Closed Won'";
       // echo $sql;
        $result=$db->query($sql);
        $a=$db->fetchByAssoc($result);
        $total=$a['monto'];
        $descuento=$a['descuento'];
        $res['monto']=(empty($total))? 0 : $total ;
        $res['descuento']=(empty($descuento))? 0 : $descuento ;
        return $res;
    }

    /*
     * Subquery total participantes inscritos (etapa "inscrito")
     * @var <string> programas
     */

    function totalParticipantesInscritos($id,$etapa="Inscrito"){
        global $db;
         if(count($this->form['usuarios'])>0)
           $filtros.= " and o.assigned_user_id in ('". implode("','",$this->form['usuarios']) ."')";
        $sql="SELECT count(p.id) numero
              FROM accounts a INNER JOIN accounts_opportunities ao ON a.id = ao.account_id 
              INNER JOIN opportunities o ON o.id = ao.opportunity_id
              inner join detalle_cotizacion d on o.id=d.oportunidad_id
              inner join `detalle_participante` p on o.id=p.oportunidad_id
              WHERE o.deleted=0 and p.deleted=0 and d.deleted=0 and a.deleted=0 and ao.deleted=0 and
                    d.idprograma='$id' and o.sales_stage ='$etapa' $filtros";
       // echo $sql;
        $result=$db->query($sql);
        $a=$db->fetchByAssoc($result);
        $total=$a['numero'];
      //  echo $sql;
        return (empty($total))? 0 : $total ;
    }

    /*
     * Subquery total participantes ganados (etapa "ganados") y que hayan realizado un pago,
     * @var <string> programas
     */

    function totalParticipante($id){
        global $db;
        $contador=0;
        $por_pagar=0;
        $valor=0;
        $res=array('pagados'=>0,'totales'=>0,'valor'=>0);
         if(count($this->form['usuarios'])>0)
           $filtros.= " and o.assigned_user_id in ('". implode("','",$this->form['usuarios']) ."')";
        $sql="SELECT count(p.id) numero,o.idcobranza
              FROM accounts a INNER JOIN accounts_opportunities ao ON a.id = ao.account_id
              INNER JOIN opportunities o ON o.id = ao.opportunity_id
              inner join detalle_cotizacion d on o.id=d.oportunidad_id
              inner join `detalle_participante` p on o.id=p.oportunidad_id
              WHERE o.deleted=0 and p.deleted=0 and d.deleted=0 and a.deleted=0 and ao.deleted=0 and
                    d.idprograma='$id' and (sales_stage ='Closed Won')
              $filtros and o.idcobranza is not null
             group by o.idcobranza
             ";
      //  echo $sql."<br>";
        $result=$db->query($sql);
        $flag=false;
        while ($a=$db->fetchByAssoc($result)){

            $total_registrado+=$a['numero'];
            $sql_detalle="Select id,valor from detalle_pagos
                          where deleted=0 and valor>0 and cobranza_id='".$a['idcobranza']."'";
         //  echo $sql_detalle.";<br>";
            $result_detalle=$db->query($sql_detalle);
            $flag=false;
            while ($a1=$db->fetchByAssoc($result_detalle)){
                if(!empty($a1['id'])){

                    $total=(empty($a['numero']))? 0 : $a['numero'] ;
                    $valor+=(empty($a1['valor']))? 0 : $a1['valor'] ;
                    $total=(empty($total))? 0 : $total ;
                    if(!$flag){
                        $contador+=$total;
                        $flag=true;
                    }
                }
            }
        }
        //$a=$db->fetchByAssoc($result);
        //$total=$a['numero'];
        //return (empty($contador))? 0 : $contador ;
        $res['pagados']=$contador;
        $res['totales']=$total_registrado;
        $res['valor']=$valor;
        return $res;
    }

    /*
     * Subquery total participantes generados facturas pero sin pago
     * @var <string> programas
     */

    function totalParticipanteFacturados($id){
        global $db;
        $contador=0;
        $por_pagar=0;
        $valor=0;
        $res=array('pagados'=>0,'totales'=>0,'valor'=>0);
         if(count($this->form['usuarios'])>0)
           $filtros.= " and o.assigned_user_id in ('". implode("','",$this->form['usuarios']) ."')";
        $sql="SELECT count(p.id) numero,o.idcobranza
              FROM accounts a INNER JOIN accounts_opportunities ao ON a.id = ao.account_id
              INNER JOIN opportunities o ON o.id = ao.opportunity_id
              inner join detalle_cotizacion d on o.id=d.oportunidad_id
              inner join `detalle_participante` p on o.id=p.oportunidad_id
              WHERE o.deleted=0 and p.deleted=0 and d.deleted=0 and
                    d.idprograma='$id' and (sales_stage ='Facturado-No-Cobrado') $filtros
             group by o.idcobranza
             ";
       // echo $sql."<br>";
        $result=$db->query($sql);
        $flag=false;
        $total_registrado=0;
        while ($a=$db->fetchByAssoc($result)){

            $total_registrado+=$a['numero'];
            
        }
        //$a=$db->fetchByAssoc($result);
        //$total=$a['numero'];
        //return (empty($contador))? 0 : $contador ;
        
        $res['totales']=$total_registrado;
        
        return $res;
    }


    /*
     * @var <float> $ingresos --Ingresos  obtenidos
     * @var <float> $presupuesto --Presupuesto
     * @return <float> -- Calculo del Roi
     */
    function calculoRoi($ingresos,$presupuesto){
        $val=$ingresos-$presupuesto;
        if(is_null($presupuesto) || $presupuesto==0)
            $presupuesto=1;
        $roi=$val/$presupuesto;
        return round($roi,2)*100;
    }
    
}
?>
