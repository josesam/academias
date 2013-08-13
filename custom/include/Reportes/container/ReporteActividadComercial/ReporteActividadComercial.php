<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once('custom/include/Reportes/SP_Reporte.php');
if(file_exists('custom/include/Reportes/sp_globals.php')){
    include('custom/include/Reportes/sp_globals.php');
}
class ReporteActividadComercial extends SP_Reporte {
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

         $this->reporte="ReporteActividadComercial";
        if(file_exists(SP_PATHREPORTES.'/'.$this->reporte.'/'.$this->reporte.'Def.php')){
              include_once SP_PATHREPORTES.'/'.$this->reporte.'/'.$this->reporte.'Def.php';
              $this->parametros=$reportedef;
         }
         parent::__construct();
    }
    
    // function
    function  setTitle() {
        parent::setTitle($this->parametros['title']);
    }
    function  setSql() {
        $query=" Select 
                    distinct o.id,
                    o.name oportunidad,
                    o.sales_stage,
                    a.name cliente,
                    d.programa,
                    concat(u.first_name,' ',u.last_name) usuario,
                    concat(u1.first_name,' ',u1.last_name) usuario_creado
                 from
                 accounts a inner join  
                 accounts_opportunities ao on a.id=ao.account_id
                 inner join opportunities o on ao.opportunity_id=o.id
                 inner join detalle_cotizacion d on d.oportunidad_id=o.id
                 inner join  ee_programas pr on pr.id=d.idprograma
                 inner join users u on u.id=o.assigned_user_id
                 inner join users u1 on u1.id=o.created_by
                 where a.deleted=0 and ao.deleted=0 and o.deleted=0
                 and d.deleted=0 and pr.deleted=0
                ";

        parent::setSql($query);
    }
    
   function armarquery(){
        $this->sql.=$this->setSql().$this->armarFiltros();
        
        $result=$this->excecutequery();
        $this->arrayTabla=$this->armarArray($result);
   }
   function armarFiltros(){
//       $filtros=" and  pr.fechainicio_programa between '".$this->form['fecha_inicial']."' and '".$this->form['fecha_final']."'";
          
       if(count($this->form['programas'])>0)
            $filtros.= " and d.idprograma in ('". implode("','",$this->form['programas']) ."')";
       if(count($this->form['categoria'])>0)
           $filtros.= " and pr.tipoprograma in ('". implode("','",$this->form['categoria']) ."')";

//       $val=0;

       return $filtros;
   }
   function armarArray($result=array()){
       global $mod_strings,$current_language,$app_list_strings;
        $ret=array(
            'Planned' => 0,
            'Held' => 0,
            'Not Held' => 0,
        );
          $data=array();
          $valor=array();
          $cont=0;
          $fecha_inicial=$this->form['fecha_inicial'];
          $fecha_final=$this->form['fecha_final'];
          $llamadas=array();
          $reuniones=array();
       while($a = $this->db->fetchByAssoc($result)) {
        $llamadas=self::getTotalLlamadas($a['id'],$fecha_inicial,$fecha_final);
        $reuniones=self::getTotalReuniones($a['id'],$fecha_inicial,$fecha_final);
        $data['programa']=$a['programa'];
        $data['cliente']=$a['cliente'];
        $data['oportunidad']=$a['oportunidad'];
        $data['etapa']=$app_list_strings['sales_stagemixto_dom'][$a['sales_stage']];

        $data['usuario']=$a['usuario'];
        $data['usuario_creado']=$a['usuario_creado'];
        
        // Llamadas
        $data['Planned']=$llamadas['Planned'];
        $data['Held']=$llamadas['Held'];
        $data['Not Held']=$llamadas['Not Held'];

        // reuniones
        $data['R_Planned']=$reuniones['Planned'];
        $data['R_Held']=$reuniones['Held'];
        $data['R_Not Held']=$reuniones['Not Held'];

        $valor[$cont]=$data;
        $cont++;
     }
      $newData=array();
     foreach($valor as $key=>$value){

                array_push($newData,$value);
     }
     return $newData;

   }

  function exportexcel(){
       parent::exportexcel();
       
   }
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
      $this->sugar_smarty->assign('descripcion',$this->parametros['descripcion']);
      $this->sugar_smarty->assign("selected_user",$this->user());
      $this->sugar_smarty->assign('module',$this->module);
      $this->sugar_smarty->assign('action',$this->action);
      $this->sugar_smarty->assign('reporte',$this->reporte);
      $this->sugar_smarty->assign("selected_categoria",$this->lista('categoria_list','categoria'));      
      $this->sugar_smarty->assign("selected_programas",$this->programas());

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
      
      $this->sugar_smarty->assign('fecha_inicial',$this->form['fecha_inicial']);
      $this->sugar_smarty->assign('fecha_final',$this->form['fecha_final']);
      $this->sugar_smarty->assign("selected_user",$this->user());

      $this->sugar_smarty->assign('descripcion',$this->parametros['descripcion']);
      $this->sugar_smarty->assign('module',$this->module);
      $this->sugar_smarty->assign('action',$this->action);
      $this->sugar_smarty->assign('reporte',$this->reporte);
      
      $this->sugar_smarty->assign("selected_categoria",$this->lista('categoria_list','categoria'));
      
      $this->sugar_smarty->assign("selected_programas",$this->programas());
      
      $this->sugar_smarty->display('custom/include/Reportes/container/'.$this->reporte.'/tpls/parametros.html');
      parent::display();
    }
  

   function  mostrarData() {

       parent::mostrarData();
   }  
   /*
    * Trae el total de  llamadas
    * @var <string> Id de la oportunidad
    * @var <date> Fecha incial del filtro
    * @var <date> Fecha final del filtro
    * @var <array> Array de valores del total llamadas realizadas para dicha oportunidad
    */
   function getTotalLlamadas($id_oportunidad,$fecha_inicio="",$fecha_fin=""){
        global $db;
        $ret=array(
            'Planned' => 0,
            'Held' => 0,
            'Not Held' => 0,
        );
        if(count($this->form['usuarios'])>0)
           $filtros.= " and assigned_user_id in ('". implode("','",$this->form['usuarios']) ."')";
        $sql=" Select count(*) total,status from calls
               where parent_type='Opportunities' 
               and parent_id='$id_oportunidad'
               and DATE(date_start) between '$fecha_inicio' and '$fecha_fin' $filtros
               group by status
                ";

         
        $result=$db->query($sql);
        while($a=$db->fetchByAssoc($result)){
            if($a['status']=='Planned')
                $ret['Planned']=$a['total'];
            elseif ($a['status']=='Held')
                $ret['Held']=$a['total'];
            elseif ($a['status']=='Not Held')
                $ret['Not Held']=$a['total'];
        }
        return $ret;
   }
    /*
    * Trae el total de  reuniones
    * @var <string> Id de la oportunidad
    * @var <date> Fecha incial del filtro
    * @var <date> Fecha final del filtro
    * @var <array> Array de valores del total llamadas realizadas para dicha oportunidad
    */
   function getTotalReuniones($id_oportunidad,$fecha_inicio="",$fecha_fin=""){
        global $db;
          $ret=array(
            'Planned' => 0,
            'Held' => 0,
            'Not Held' => 0,
        );
          if(count($this->form['usuarios'])>0)
           $filtros.= " and assigned_user_id in ('". implode("','",$this->form['usuarios']) ."')";
        $sql=" Select count(*) total,status from meetings
               where parent_type='Opportunities'
               and parent_id='$id_oportunidad'
               and date_start between '$fecha_inicio' and '$fecha_fin' $filtros
               group by status
                ";

        
        $result=$db->query($sql);
        while($a=$db->fetchByAssoc($result)){
            if($a['status']=='Planned')
                $ret['Planned']=$a['total'];
            elseif ($a['status']=='Held')
                $ret['Held']=$a['total'];
            elseif ($a['status']=='Not Held')
                $ret['Not Held']=$a['total'];


           //     echo $sql.";<br>";
            
        }
        return $ret;
   }
}
?>
