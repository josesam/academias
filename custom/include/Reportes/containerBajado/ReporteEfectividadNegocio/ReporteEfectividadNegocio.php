<?php
if (file_exists('custom/include/Reportes/SP_Reporte.php')){
    include_once('custom/include/Reportes/SP_Reporte.php');
}
if(file_exists('custom/include/Reportes/sp_globals.php')){
    include_once('custom/include/Reportes/sp_globals.php');
}
class ReporteEfectividadNegocio extends SP_Reporte {
    protected $parametros;
    public $fecha_inicio;
    public $fecha_final;
    public $archivo="ReporteEfectividadNegocio";
    
    /*
    *
    */
    function __construct(& $form){
        global $app_list_strings;
         $this->form=$form;
    
         $this->reporte="ReporteEfectividadNegocio";
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
     $query="Select
                    distinct count(pa.id) num_total,
                    sum(round((amountreal*numeroparticipantes),2)) monto,
                    sum(round(((amountreal*numeroparticipantes)*cstm.descuento_c)/100,2))  descuento,
                    o.sales_stage,
                    p.name,p.id
                 from
                 accounts a inner join
                 accounts_opportunities ao on a.id=ao.account_id
                 inner join opportunities o on ao.opportunity_id=o.id
                 inner join opportunities_cstm cstm on o.id=cstm.id_c
                 inner join detalle_cotizacion d on d.oportunidad_id=o.id
                 inner join ee_programas p on p.id=d.idprograma
                 inner join `detalle_participante` pa on o.id=pa.oportunidad_id
                 inner join users u on o.assigned_user_id=u.id
                 where a.deleted=0 and ao.deleted=0
                 and o.deleted=0 and d.deleted=0 and pa.deleted=0 and p.deleted=0 ";
        parent::setSql($query);
    }
   function  groupby() {
        parent::groupby();
        return " group by p.name,o.sales_stage";
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
   function  orderby() {
        parent::orderby();
        return " order by p.id ";
    }
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
      $tot_cliente=0;
      $tot_oportunidad=0;
      $programa="";
      $programa_anterior="";
      if($this->form['categoria'][0]=="Abierto"){
                                $data['programa']="";
                                $data['tot_prospectin']=0;
                                $data['sum_prospectin']=0;
                                $data['tot_seguimiento']=0;
                                $data['sum_seguimiento']=0;
                                $data['tot_inscrito']=0;
                                $data['sum_inscrito']=0;
                                $data['tot_facganado']=0;
                                $data['sum_facganado']=0;
                                $data['tot_ganado']=0;
                                $data['sum_ganado']=0;
                                $data['tot_perdido']=0;
                                $data['sum_perdido']=0;
                                $data['descuento']=0;


                  }else{
                            $data['programa']="";
                            $data['tot_prospectin']=0;
                            $data['sum_prospectin']=0;
                            $data['tot_levainfo']=0;
                            $data['sum_levainfo']=0;
                            $data['tot_presupuesto']=0;
                            $data['sum_presupuesto']=0;
                            $data['tot_presperfil']=0;
                            $data['sum_preperfil']=0;
                            $data['tot_interes']=0;
                            $data['sum_interes']=0;
                            $data['tot_diag']=0;
                            $data['sum_diag']=0;
                            $data['tot_nego']=0;
                            $data['sum_nego']=0;
                            $data['tot_ganado']=0;
                            $data['sum_ganado']=0;
                            $data['tot_perdido']=0;
                            $data['sum_perdido']=0;
                  }


     while($a = $this->db->fetchByAssoc($result)) {
           //$d=self::contar($a['id']);

         $programa=$a['id'];
         if(($programa!=$programa_anterior)&&(!empty($programa_anterior))){
            $data['programa']="";

                if($this->form['categoria'][0]=="Abierto"){
                                $data['tot_prospectin']=0;
                                $data['sum_prospectin']=0;
                                $data['tot_seguimiento']=0;
                                $data['sum_seguimiento']=0;
                                $data['tot_inscrito']=0;
                                $data['sum_inscrito']=0;
                                $data['tot_facganado']=0;
                                $data['sum_facganado']=0;
                                $data['tot_ganado']=0;
                                $data['sum_ganado']=0;
                                $data['tot_perdido']=0;
                                $data['sum_perdido']=0;
                                $data['descuento']=0;
                                
                  }else{

                            $data['tot_prospectin']=0;
                            $data['sum_prospectin']=0;
                            $data['tot_levainfo']=0;
                            $data['sum_levainfo']=0;
                            $data['tot_presupuesto']=0;
                            $data['sum_presupuesto']=0;
                            $data['tot_presperfil']=0;
                            $data['sum_preperfil']=0;
                            $data['tot_interes']=0;
                            $data['sum_interes']=0;
                            $data['tot_diag']=0;
                            $data['sum_diag']=0;
                            $data['tot_nego']=0;
                            $data['sum_nego']=0;
                            $data['tot_ganado']=0;
                            $data['sum_ganado']=0;
                            $data['tot_perdido']=0;
                            $data['sum_perdido']=0;                        
                  }

         }
          if($this->form['categoria'][0]=="Abierto"){
                    $data['programa']=$a['name'];
                    if($a['sales_stage']=='Prospecting'){
                        $data['tot_prospectin']=$a['num_total'];
                        $data['sum_prospectin']=$a['monto'];
                        $data['descuento']+=$a['descuento'];
                    }elseif($a['sales_stage']=='Seguimiento'){
                        $data['tot_seguimiento']=$a['num_total'];
                        $data['sum_seguimiento']=$a['monto'];
                        $data['descuento']+=$a['descuento'];
                    }elseif($a['sales_stage']=='Inscrito'){
                        $data['tot_inscrito']=$a['num_total'];
                        $data['sum_inscrito']=$a['monto'];
                        $data['descuento']+=$a['descuento'];
                    }elseif($a['sales_stage']=='Facturado-No-Cobrado'){
                        $data['tot_facganado']=$a['num_total'];
                        $data['sum_facganado']=$a['monto'];
                        $data['descuento']+=$a['descuento'];
                    }elseif($a['sales_stage']=='Closed Won'){
                        $data['tot_ganado']=$a['num_total'];
                        $data['sum_ganado']=$a['monto'];
                        $data['descuento']+=$a['descuento'];
                    }elseif($a['sales_stage']=='Closed Lost'){
                        $data['tot_perdido']=$a['num_total'];
                        $data['sum_perdido']=$a['monto'];
                        $data['descuento']+=$a['descuento'];
                    }


          }else{
                    $data['programa']=$a['name'];
                    if($a['sales_stage']=='Prospecting'){
                        $data['tot_prospectin']=$a['num_total'];
                        $data['sum_prospectin']=$a['monto'];

                    }elseif($a['sales_stage']=='Leva Info'){
                        $data['tot_levainfo']=$a['num_total'];
                        $data['sum_levainfo']=$a['monto'];
                    }elseif($a['sales_stage']=='Presupuesto'){
                        $data['tot_presupuesto']=$a['num_total'];
                        $data['sum_presupuesto']=$a['monto'];
                    }elseif($a['sales_stage']=='Presupuesto+perfil'){
                        $data['tot_presperfil']=$a['num_total'];
                        $data['sum_preperfil']=$a['monto'];
                    }elseif($a['sales_stage']=='Interes en continuar'){
                        $data['tot_interes']=$a['num_total'];
                        $data['sum_interes']=$a['monto'];
                    }elseif($a['sales_stage']=='Diagnostico'){
                        $data['tot_diag']=$a['num_total'];
                        $data['sum_diag']=$a['monto'];
                    }elseif($a['sales_stage']=='Negociacion'){
                        $data['tot_nego']=$a['num_total'];
                        $data['sum_nego']=$a['monto'];
                    }elseif($a['sales_stage']=='Closed Won'){
                        $data['tot_ganado']=$a['num_total'];
                        $data['sum_ganado']=$a['monto'];
                    }elseif($a['sales_stage']=='Closed Lost'){
                        $data['tot_perdido']=$a['num_total'];
                        $data['sum_perdido']=$a['monto'];
                    }
          }

         
           if(($programa!=$programa_anterior)&&(!empty($programa_anterior))){
              $valor[$cont]=$data;
              $cont++;
           }
           $programa_anterior=$programa;
           

            
           
     }
     $valor[$cont]=$data;
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
      $this->sugar_smarty->assign('descripcion',$this->parametros['descripcion']);
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

      $this->sugar_smarty->assign('descripcion',$this->parametros['descripcion']);
      $this->sugar_smarty->assign('fecha_inicial',$this->form['fecha_inicial']);
      $this->sugar_smarty->assign('fecha_final',$this->form['fecha_final']);
      $this->sugar_smarty->assign("selected_categoria",$this->lista('categoria_list','categoria'));
      $this->sugar_smarty->assign("selected_modalidad",$this->lista('programa_modalidad_dom','modalidad'));
      $this->sugar_smarty->assign("selected_estado_programa",$this->lista('programa_status_dom','estado_programa'));
      $this->sugar_smarty->assign("selected_user",$this->user());
      $this->sugar_smarty->assign("selected_programas",$this->programas());
      $this->sugar_smarty->assign('categoria',$this->form['categoria'][0]);
      $this->sugar_smarty->assign('module',$this->module);
      $this->sugar_smarty->assign('action',$this->action);
      $this->sugar_smarty->assign('reporte',$this->reporte);
      $this->sugar_smarty->assign('chart',$this->excecuteChart());
      $this->sugar_smarty->assign('total_cliente',$this->total_cliente);
      $this->sugar_smarty->assign('total_oportunidad',$this->total_oportunidad);
      
      $this->sugar_smarty->assign("selected_modelos",$this->lista('modelos_dom','modelos'));
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
        global $db;
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
                sum(if(s.odometro>100000,1,0)) '+100000'
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
             $filtros.= " and s.assigned_user_id in ('". implode("','",$this->form['usuarios']) ."')";
     }else{
         if((count($this->form['usuarios'])>0)&&(is_array($this->form['usuarios'])))
             $filtros.= " and s.team_id in ('". implode("','",$this->form['usuarios']) ."')";
     }
//     if(count($this->form['modelos'])>0)
//           $filtros.= " and v.modelo ='".$this->form['modelos']."'";
     if(count($this->form['tiposervicio'])>0)
           $filtros.= " and s.tipomantenimiento ='".$this->form['tiposervicio']."'";
     if((count($this->form['categoria'])>0)&&(is_array($this->form['categoria'])))
           $filtros.= " and cs.categoria_c in ('". implode("','",$this->form['categoria']) ."')";


     if(!parent::concesionario($this->concesionario_name))
         $filtros.=" and s.team_id='".$this->concesionario_id."'";

     $filtros.=" group by modelo,  tipomantenimiento";

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
         
      }
     require_once('custom/include/Reportes/openflash/lib/OFC/OFC_Chart.php');
              

//                for( $i=0; $i<10; $i++ )
//                  $data[] = rand(2,9);



                $title = new OFC_Elements_Title( $this->getTitle() );

                $bar = new OFC_Charts_Bar_3d();
                $bar->set_values( $data );
                $bar->colour = '#D54C78';

                $x_axis = new OFC_Elements_Axis_X();
                $x_axis->set_3d( 5 );
                $x_axis->colour = '#909090';
                $x_axis->set_labels(
                            array(
                                5000,
                                10000,
                                15000,
                                20000,
                                25000,
                                30000,
                                35000,
                                40000,
                                45000,
                                50000,
                                55000,
                                60000,
                                65000,
                                70000,
                                75000,
                                80000,
                                85000,
                                90000,
                                95000,
                                100000,
                                200000) );

                $chart = new OFC_Chart();
                $chart->set_title( $title );
                $chart->add_element( $bar );
                $chart->set_x_axis( $x_axis );
                return $chart->toPrettyString();

      
    }

    public function contar($id){
        global $db;
        // se va a sumar las ganadas  y las restantes las perdidas no se genera suma
        $sql=" select count(*) sales_stage_total,sales_stage,
            sum(round(((amountreal*numeroparticipantes)-((amountreal*numeroparticipantes)*oc.descuento_c)/100),2)) monto
              from opportunities o inner join detalle_cotizacion d on o.id=d.oportunidad_id
              inner join opportunities_cstm oc on o.id=oc.id_c
              where d.idprograma='$id' and o.deleted=0 and d.deleted=0 group by sales_stage ";
        
        $result=$db->query($sql);
        $res=array(
            'won'=>0,
            'lost'=>0,
            'restante'=>0,
            'ingreso'=>0,
        );
        $won=0;
        $lost=0;
        $restante=0;
        $ingreso=0;

        while ($a=$db->fetchByAssoc($result)){
            if($a['sales_stage']=='Closed Won'){
                $won=$a['sales_stage_total'];
                $ingreso+=$a['monto'];
            }elseif ($a['sales_stage']=='Closed Lost')
                $lost=$a['sales_stage_total'];
            else{
                $restante+=$a['sales_stage_total'];
                $ingreso+=$a['monto'];
            }


        }
        $res['won']=$won;
        $res['lost']=$lost;
        $res['restante']=$restante;
        $res['ingreso']=$ingreso;
        return $res;


    }
}
?>
