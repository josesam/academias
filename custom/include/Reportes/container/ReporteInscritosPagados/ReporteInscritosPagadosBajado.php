<?php
if (file_exists('custom/include/Reportes/SP_Reporte.php')){
    include_once('custom/include/Reportes/SP_Reporte.php');
}
if(file_exists('custom/include/Reportes/sp_globals.php')){
    include_once('custom/include/Reportes/sp_globals.php');
}
class ReporteInscritosPagados extends SP_Reporte {
    protected $parametros;
    public $fecha_inicio;
    public $fecha_final;
    public $archivo="ReporteInscritosPagados";
    public $concesionario_name;
    public $concesionario_id;
    
    /*
    *
    */
    function __construct(& $form){
        global $app_list_strings;
        $this->form=$form;
         
        $this->reporte="ReporteInscritosPagados";
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
    *
    */
    function  setSql() {
         $query=" Select
                    distinct o.id,
                    o.name oportunidad,
                    a.name cliente,
                    p.name programa,                    
                    p.estado estado_programa,
                    p.tipoprograma categoria,
                    o.idcobranza idpago,o.sales_stage,
                    concat(u.first_name,' ',u.last_name) usuario,
                    concat(u1.first_name,' ',u1.last_name) usuario_creado,
                    p.fechainicio_programa fechainicio,
                    p.fechafinal_programa fechafin
                 from
                 accounts a inner join
                 accounts_opportunities ao on a.id=ao.account_id
                 inner join opportunities o on ao.opportunity_id=o.id
                 inner join detalle_cotizacion d on d.oportunidad_id=o.id                 
                 inner join ee_programas p on p.id=d.idprograma                 
                 inner join users u on o.assigned_user_id=u.id
                 inner join users u1 on o.created_by=u1.id
                 where a.deleted=0 and ao.deleted=0
                 and o.deleted=0 and d.deleted=0 and  
                 (o.sales_stage like '%Closed Won%' or o.sales_stage like '%Inscrito%')";

        parent::setSql($query);
    }
   function  groupby() {
        parent::groupby();
        return "";
    }
   /*
    *
    */
   function armarquery(){
        $this->sql.=$this->setSql().$this->armarFiltros().self::groupby();
        //echo $this->sql;
        $result=$this->excecutequery();
        $this->arrayTabla=$this->armarArray($result);
   }
   /*
    *
    */
   /*
    *
    */
   function armarFiltros(){
        $filtros=" and  p.fechainicio_programa between '".$this->form['fecha_inicial']."' and '".$this->form['fecha_final']."'";
     if(count($this->form['categoria'])>0)
           $filtros.= " and p.tipoprograma in ('". implode("','",$this->form['categoria']) ."')";
     if(count($this->form['estado_programa'])>0)
           $filtros.= " and p.estado in ('". implode("','",$this->form['estado_programa']) ."')";
    if(count($this->form['modalidad'])>0)
         $filtros.= " and p.modalidad in ('". implode("','",$this->form['modalidad']) ."')";
    if(count($this->form['usuarios'])>0)
         $filtros.= " and o.assigned_user_id in ('". implode("','",$this->form['usuarios']) ."')";
     if(count($this->form['programas'])>0)
         $filtros.= " and p.id in ('". implode("','",$this->form['programas']) ."')";
     return $filtros;
   }
   /*
    *
    */
   function armarArray($result=array()){
     global $mod_strings,$current_language,$app_list_strings;
      $data=array();
      $valor=array();
      $cont=0;
      $abonos=array();
     while($a = $this->db->fetchByAssoc($result)) {
           $abonos=self::getAbonos($a['idpago']);
           $data['programa']=$a['programa'];
           $data['cliente']=$a['cliente'];
           $data['oportunidad']=$a['oportunidad'];
           $data['fecha_inicio']=$a['fechainicio'];
           $data['fecha_fin']=$a['fechafin'];
           $data['categoria']=$app_list_strings['sales_stagemixto_dom'][$a['sales_stage']];
           $data['estado_programa']=$app_list_strings['programa_status_dom'][$a['estado_programa']];
           $data['monto']=number_format($abonos['montopago'],2);
           $data['fechaprevista']=$abonos['fechaprevistapago'];
           $data['estado_pago']=$app_list_strings['estadopago_dom'][$abonos['estado_pago']];
           $data['abonado']=number_format($abonos['abonos'],2);
           $data['diferencia']=number_format((float)$abonos['montopago']-(float)$abonos['abonos'],2);
           $data['usuario']=$a['usuario'];
           $data['usuario_creado']=$a['usuario_creado'];
           //$data['fecha_ultimopago']=$abonos['fecha_pago'];

           $valor[$cont]=$data;
           $cont++;
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
      $this->form['fecha_inicial']= '2012-06-01';
      $this->form['fecha_final']= $timedate->nowDbDate();
      $this->sugar_smarty->assign('fecha_inicial',$this->form['fecha_inicial']);
      $this->sugar_smarty->assign('fecha_final',$this->form['fecha_final']);
      $this->sugar_smarty->assign("selected_categoria",$this->lista('categoria_list','categoria'));
      $this->sugar_smarty->assign("selected_modalidad",$this->lista('programa_modalidad_dom','modalidad'));
      $this->sugar_smarty->assign("selected_estado_programa",$this->lista('programa_status_dom','estado_programa'));
      $this->sugar_smarty->assign("selected_user",$this->user());
      $this->sugar_smarty->assign("selected_programas",$this->programas());

      $this->sugar_smarty->assign('module',$this->module);
      $this->sugar_smarty->assign('action',$this->action);
      $this->sugar_smarty->assign('reporte',$this->reporte);
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
      $this->sugar_smarty->assign("selected_categoria",$this->lista('categoria_list','categoria'));
      $this->sugar_smarty->assign("selected_modalidad",$this->lista('programa_modalidad_dom','modalidad'));

      $this->sugar_smarty->assign("selected_estado_programa",$this->lista('programa_status_dom','estado_programa'));

      $this->sugar_smarty->assign("selected_user",$this->user());
      $this->sugar_smarty->assign("selected_programas",$this->programas());

      $this->sugar_smarty->assign('module',$this->module);
      $this->sugar_smarty->assign('action',$this->action);
      $this->sugar_smarty->assign('reporte',$this->reporte);
      $this->sugar_smarty->assign('chart',$this->excecuteChart());



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

                  // just show to two decimal places
                  // in our labels:
                  //$labels[] = number_format($tmp,2);
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
                sum(if(s.odometro >0 && s.odometro<=9500,1,0))  '5000',
                sum(if(s.odometro>9500 && s.odometro<=14500,1,0)) '10000',
                sum(if(s.odometro>14500 && s.odometro<=19500,1,0)) '15000',
                sum(if(s.odometro>19500 && s.odometro<=24500,1,0)) '20000',
                sum(if(s.odometro>24500 && s.odometro<=29500,1,0)) '25000',
                sum(if(s.odometro>29500 && s.odometro<=34500,1,0)) '30000',
                sum(if(s.odometro>34500 && s.odometro<=39500,1,0)) '35000',
                sum(if(s.odometro>39500 && s.odometro<=44500,1,0)) '40000',
                sum(if(s.odometro>44500 && s.odometro<=49500,1,0)) '45000',
                sum(if(s.odometro>49500 && s.odometro<=55500,1,0)) '50000',
                sum(if(s.odometro>55500 && s.odometro<=59500,1,0)) '55000',
                sum(if(s.odometro>59500 && s.odometro<=64500,1,0)) '60000',
                sum(if(s.odometro>64500 && s.odometro<=69500,1,0)) '65000',
                sum(if(s.odometro>69500 && s.odometro<=74500,1,0)) '70000',
                sum(if(s.odometro>74500 && s.odometro<=79500,1,0)) '75000',
                sum(if(s.odometro>79500 && s.odometro<=84500,1,0)) '80000',
                sum(if(s.odometro>84500 && s.odometro<=89500,1,0)) '85000',
                sum(if(s.odometro>89500 && s.odometro<=94500,1,0)) '90000',
                sum(if(s.odometro>94500 && s.odometro<=99500,1,0)) '95000',
                sum(if(s.odometro>99500 && s.odometro<=104500,1,0)) '100000',
                sum(if(s.odometro>104500,1,0)) '+100000', v.segmento,s.tipomantenimiento
                FROM
                accounts a inner join accounts_cstm cs on a.id=cs.id_c and a.deleted=0
                inner join jf_vehiculocliente vc on a.id=vc.cliente_id and vc.deleted=0
                inner join jf_vehiculo v on v.id=vc.vehiculo_id and v.deleted=0
                LEFT JOIN jf_vehiculo_jf_servicio_c r1 ON v.id = r1.jf_vehi4458culo_ida
                AND r1.deleted =0
                INNER JOIN jf_servicio s ON s.id = r1.jf_vehid940icio_idb
                AND s.deleted =0
                inner JOIN teams t on t.id=s.team_id and t.deleted=0
                where vc.activo='Si' 
                ";
             $filtros=" and  s.fechaentrada between '".$this->dateFormatDb($this->form['fecha_inicial'])."' and '".$this->dateFormatDb($this->form['fecha_final'])."'";

       if(!parent::concesionario($this->concesionario_name)){
         if((count($this->form['usuarios'])>0)&&(is_array($this->form['usuarios'])))
             $filtros.= " and s.bac in ('". implode("','",$this->form['usuarios']) ."')";
     }else{
         if((count($this->form['usuarios'])>0)&&(is_array($this->form['usuarios'])))
             $filtros.= " and s.team_id in ('". implode("','",$this->form['usuarios']) ."')";
     }
     if((count($this->form['modelos'])>0)&&(is_array($this->form['modelos'])))
           $filtros.= " and v.segmento in ('". implode("','",$this->form['modelos']) ."')";
     if((count($this->form['tiposervicio'])>0)&&(is_array($this->form['tiposervicio'])))
           $filtros.= " and s.tipomantenimiento in ('". implode("','",$this->form['tiposervicio']) ."')";
     if((count($this->form['categoria'])>0)&&(is_array($this->form['categoria'])))
           $filtros.= " and cs.categoria_c in ('". implode("','",$this->form['categoria']) ."')";


//     if(!parent::concesionario($this->concesionario_name))
//         $filtros.=" and s.team_id='".$this->concesionario_id."'";

     $filtros.=" group by segmento,tipomantenimiento";
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
            
            $valores[$a['segmento'].'-'.$a['tipomantenimiento']]=$data;
            $data=null;
      }
//require_once('custom/include/Reportes/openflash/lib/OFC/OFC_Chart.php');
include_once 'custom/include/Reportes/openflash/ofc-library/open-flash-chart.php';

$y_segmento=$app_list_strings['segmento_list'];
$y_legendas=array();
$cont=0;
$max=0;
if(is_array($valores)){
    $colores=parent::randomColor(count($valores)+10);
    foreach($valores as $key => $datos){
            $y_legendas[]=(!is_null($app_list_strings['segmento_list'][$key])) ? $app_list_strings['segmento_list'][$key]: $key ;
            $line[$cont] = new line();
            $line[$cont]->set_width( 1 );
            $line[$cont]->set_colour($colores[$cont]);
            $line[$cont]->set_values( $datos );
            $line[$cont]->set_key($key, 10);
            $valor_max=max($datos);
            if($valor_max>$max)
                $max=$valor_max;
            $cont++;
       // }
    }

}


//srand((double)microtime()*1000000);
//
//
//$y = new OFC_Elements_Axis_Y();
//$y->set_range( 0, 50, 5 );
////$y->set_labels("Segmento");
//
//$chart = new OFC_Chart();
//$chart->set_title( new OFC_Elements_Title( $this->getTitle() ) );
//$chart->set_y_axis( $y );
//
//
//                $x = new OFC_Elements_Axis_X();
//                $x->set_offset( false );
//
//                $x->set_labels_from_array( array('5000','10000','15000','20000','25000','30000','35000','40000','45000','50000','55000','60000','65000','70000','75000','80000','85000','90000','95000','100000','20000') );
//                $chart->set_x_axis( $x );
//
//// here we add our data sets to the chart:
////
//
//$x_legend = new OFC_Elements_Legend_X('Rangos de Kilometrajes' );
//$x_legend->set_style( '{font-size: 20px; color: #778877}' );
//$chart->set_x_legend( $x_legend );
//
//
//$y_legend = new OFC_Elements_Legend_Y('Segmentos' );
//$y_legend->set_style( '{font-size: 20px; color: #00FF00}' );
//$chart->set_y_legend( $y_legend );
//

                $y = new y_axis();
                $y->set_range( 0, $max+5, 5 );
                
                $y_legend = new y_legend( 'Segmento' );
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
     * @var <string> Id de la cobranza
     * @return <array> Array 'abonos', 'fecha_ultimo_pago' (Falta cambiar el tipo de dato en
     *                                  la base para sacar el dato y aplicar max, en ingreso del dato )
     */

    public function getAbonos($idcobranza){
        global $db,$app_list_strings;
        $ret=array(
            'abonos'=>0,
            'fechaprevistapago'=>'',
            'montopago'=>0,
            'estado_pago'=>'',
        );
        $sql_cobranza="Select montopago, fechaprevistapago, estado from ee_cobranzas 
                        where deleted=0 and id='$idcobranza'";
        $result_cobranza=$db->query($sql_cobranza);
        $a_cob=$db->fetchByAssoc($result_cobranza);
        $ret['fechaprevistapago']=$a_cob['fechaprevistapago'];
        $ret['montopago']=$a_cob['montopago'];
        $ret['estado_pago']=$app_list_strings['estadopago_dom'][$a_cob['estado']];

        $sql=" select sum(valor) valor from detalle_pagos where cobranza_Id='$idcobranza' and deleted=0 ";
        $result=$db->query($sql);
        $a=$db->fetchByAssoc($result);
        $ret['abonos']=(is_null($a['valor']))? '0': $a['valor'];
        return $ret;
    }
}
?>
