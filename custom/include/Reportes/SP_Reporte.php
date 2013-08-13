<?php
/*
 * 
 * @author Jose Sambrano
 * Sugarcrm Plugins
 */
if(file_exists("include/Sugar_Smarty.php"))
    require_once("include/Sugar_Smarty.php");
if(file_exists("include/JSON.php"))
    require_once("include/JSON.php");
if(file_exists("data/SugarBean.php"))
    require_once("data/SugarBean.php");
if(file_exists('include/utils.php'))
    require_once('include/utils.php');

if(file_exists('custom/include/Reportes/sp_globals.php')){
    include_once('custom/include/Reportes/sp_globals.php');
}

class SP_Reporte extends SugarBean{
    protected $action="parametros";
    protected $module="gm_Reportes";
    protected $reporte;
    protected $sql;
    protected $objRichText;
    protected $objPayable;
    protected $objPHPExcel;
    protected $objDrawing;
    protected $showdata=false;
    protected $totalreqistros=10;
    protected $start=0;
    protected $array=array();
    protected $filtros=array();
    protected $form=array();
    protected $title=" Reportes Sugarcrm Plugins ";
    protected $sugar_smarty;
    protected $arrayTabla=array();
    protected $fileName;
    protected $itemsPerPage=10;
    protected $numPagina=1;
    protected $inicio=0;
    protected $fin=0;
    protected $totalpaginas=0;
    protected $pagactual=1;
    protected $params;
    protected $is_excel=false;
    protected $meses=array(
        '1'=>'Enero',
        '2'=>'Febrero',
        '3'=>'Marzo',
        '4'=>'Abril',
        '5'=>'Mayo',
        '6'=>'Junio',
        '7'=>'Julio',
        '8'=>'Agosto',
        '9'=>'Septiembre',
        '10'=>'Octubre',
        '11'=>'Noviembre',
        '12'=>'Diciembre',
    );


    function __construct(& $form=array()){

      parent::SugarBean();
      $this->sugar_smarty = new Sugar_Smarty();
    }
    protected function setParam(){}
    protected function generateFileName(){ }
    protected function setTitle($var=""){
        $this->title=$var;
    }
    protected function getTitle(){
        return $this->title;
    }
    protected function setSql($var=""){
        $this->sql=$var;
    }

    protected function excecutequery(){
       return $this->db->query($this->sql);
    }

    protected function totalQuery(){}

    protected function exportdata(){}

    protected function downloadFile($name){
                include_once 'include/utils.php';
                $local_location=SP_PATHREPORTES.$name.'/'.$name.'.xls';
                $download_location=SP_PATHREPORTES.'/'.$name.'/'.$name.'.xls';
                $tam=filesize($local_location);
                header("Pragma: public");
		header("Cache-Control: maxage=1, post-check=0, pre-check=0");
		header("Content-type: application/force-download");
		header("Content-Length: " . filesize($local_location));
		header("Content-disposition: attachment; filename=\"".$name.".xls\";");
		header("Expires: 0");
		set_time_limit(0);
		@ob_end_clean();
		ob_start();
            	echo file_get_contents($download_location);
		@ob_flush();
    }
    protected function exportexcel(){
        require_once SP_PATHEXCEL.'PHPExcel.php';
        $this->objPHPExcel = new PHPExcel();
    }

    protected function setExcel(){
         $this->objPHPExcel->getProperties()->setCreator("Jose Sambrano")
							 ->setLastModifiedBy("Jose Sambrano")
							 ->setTitle("Office 2007 XLSX Test Document")
							 ->setSubject("Office 2007 XLSX Test Document")
							 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
							 ->setKeywords("Office 2007 openxml php")
							 ->setCategory("Test result file");
    }
    protected function setLogo(){
        $this->objDrawing = new PHPExcel_Worksheet_Drawing();
        $this->objDrawing->setName(LOGONAME);
        $this->objDrawing->setDescription(LOGODESCRIPTION);
        $this->objDrawing->setPath(LOGOIMAGE);
        $this->objDrawing->setHeight(LOGOHEIGHT);
        $this->objDrawing->setHeight(LOGOWIDTH);
        $this->objDrawing->setWorksheet($this->objPHPExcel->getActiveSheet());
    }
    protected function setPrintMargin(){
        $this->objPHPExcel->getActiveSheet()->getPageMargins()->setTop(1);
        $this->objPHPExcel->getActiveSheet()->getPageMargins()->setRight(0.75);
        $this->objPHPExcel->getActiveSheet()->getPageMargins()->setLeft(0.75);
        $this->objPHPExcel->getActiveSheet()->getPageMargins()->setBottom(1);
    }
    protected function setHeader($reportName,$columna='A3',$numRow=3){


        $param_columns=array(
			'font'    => array(
				'bold'      => true
			),
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			),
			'fill' => array(
	 			'type'       => PHPExcel_Style_Fill::FILL_PATTERN_LIGHTDOWN  ,
	  			'rotation'   => 90,
	 			'startcolor' => array(
	 				'argb' => 'FFA0A0A0'
	 			),
	 			'endcolor'   => array(
	 				'argb' => 'FFFFFFFF'
	 			)
	 		)
		);

        $this->objRichText = new PHPExcel_RichText();
        $this->objRichText->createText();
        $this->objPayable = $this->objRichText->createTextRun($reportName);
        $this->objPayable->getFont()->setBold(true);
        $this->objPayable->getFont()->setItalic(true);
        $this->objPayable->getFont()->setColor( new PHPExcel_Style_Color( PHPExcel_Style_Color::COLOR_DARKGREEN ) );
        $this->objPHPExcel->getActiveSheet()->getCell($columna)->setValue($this->objRichText);
        $this->objPHPExcel->getActiveSheet()->getStyle($columna)->applyFromArray($param_columns);
        $this->objPHPExcel->getActiveSheet()->getStyle($columna)->getFont()->setName('Candara');
        $this->objPHPExcel->getActiveSheet()->getStyle($columna)->getFont()->setSize(20);
        $this->objPHPExcel->getActiveSheet()->getStyle($columna)->getFont()->setBold(true);
        
        $this->objPHPExcel->getActiveSheet()->getStyle($columna)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
        $this->objPHPExcel->getActiveSheet()->getStyle($columna)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_JUSTIFY);
        $this->objPHPExcel->getActiveSheet()->getStyle($columna)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
        $this->objPHPExcel->getActiveSheet()->getStyle($columna)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        $this->objPHPExcel->getActiveSheet()->getRowDimension($numRow)->setRowHeight(ROWHEIGHT);



    }
    protected function setAllBorder($col_start,$col_end){
        $styleThinBlackBorderOutline = array(
	'borders' => array(
		'allborders' => array(
			'style' => PHPExcel_Style_Border::BORDER_THIN,
			'color' => array('argb' => COLORALLBORDERS),
		),
	),
        );
       $this->objPHPExcel->getActiveSheet()->getStyle($col_start.':'.$col_end)->applyFromArray($styleThinBlackBorderOutline);
    }

    protected function setColumnHeader($columnaInicial,$columnaFinal,$numRow=5){
        $param_columns=array(
			'font'    => array(
				'bold'      => true
			),
			'alignment' => array(
				'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
			),
			'borders' => array(
				'top'     => array(
 					'style' => PHPExcel_Style_Border::BORDER_THIN,
                                        

 				)
			),
			'fill' => array(
	 			'type'       => PHPExcel_Style_Fill::FILL_PATTERN_LIGHTDOWN  ,
	  			'rotation'   => 90,
	 			'startcolor' => array(
	 				'argb' => 'FFA0A0A0'
	 			),
	 			'endcolor'   => array(
	 				'argb' => 'FFFFFFFF'
	 			)
	 		)
		);
    $this->objPHPExcel->getActiveSheet()->getStyle($columnaInicial.':'.$columnaFinal)->applyFromArray($param_columns);
    $this->objPHPExcel->getActiveSheet()->getStyle($columnaInicial.':'.$columnaFinal)->getFont()->setName('Arial');
    $this->objPHPExcel->getActiveSheet()->getStyle($columnaInicial.':'.$columnaFinal)->getFont()->setSize(FONTHEIGHT);
    $this->objPHPExcel->getActiveSheet()->getStyle($columnaInicial.':'.$columnaFinal)->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
        

    }
    
    protected function setAutoSize($column){
        $this->objPHPExcel->getActiveSheet()->getColumnDimension($column)->setAutoSize(true);
}
    protected function setHeightRow($numRow=5,$heigth=null){
        $height=(!is_null($heigth))?$heigth: ROWHEIGHT;
        $this->objPHPExcel->getActiveSheet()->getRowDimension($numRow)->setRowHeight($height);
    }

    protected function armarquery(){}
    protected function groupby(){}
    protected function orderby(){}

    protected function armarTabla(){}
    protected function armarFiltros(){}
    protected function armarArray(){ }
    protected function displayParametros(){}
    protected function mostrarData(){
        $this->showdata=true;
    }

    protected function concesionario($name){
        if($name!='GM'&& $name!="GLOBAL"){

            return false;
        }else
            return true;

    }

    protected function dateFormatDb($fecha){
         global $timedate;
         return $timedate->to_db($fecha);
    }
    protected function display(){}
    function getStyle(){

       return SP_STYLE;
   }


   /**Filtros */
   protected function user(){
         $this->sql="Select id, user_name user  from users where deleted=0 and status!='reserved' ";
         $result=$this->excecutequery();
                 while($a = $this->db->fetchByAssoc($result)) {
                        $cadena.="<option value=\"".$a['id']."\" ".$this->selected_users($a['id']).">".$a['user'].'</option>';
                 }
         return $cadena;
   }
  
  protected function selected_users($id){
    $retorno="";
    if(is_array($this->form['usuarios'])){
            foreach ($this->form['usuarios'] as $user){
                if(trim($id)==$user){
                     $retorno=" selected=\"selected\"";
                     break;
                }
            }
    }
    return $retorno;
 }
 protected function cliente(){
         $this->sql="Select id, name  from accounts where deleted=0 order by name  ";
         $result=$this->excecutequery();
                 while($a = $this->db->fetchByAssoc($result)) {
                        $cadena.="<option value=\"".$a['id']."\" ".$this->selected_cliente($a['id']).">".$a['name'].'</option>';
                 }
         return $cadena;
   }
  
  protected function selected_cliente($id){
    $retorno="";
    if(is_array($this->form['clientes'])){
            foreach ($this->form['clientes'] as $user){
                if(trim($id)==$user){
                     $retorno=" selected=\"selected\"";
                     break;
                }
            }
    }
    return $retorno;
 }
 
 protected function profesor(){
         $this->sql="Select id, CONCAT(last_name,' ',first_name) AS name  from ee_profesores where deleted=0 order by last_name  ";
         $result=$this->excecutequery();
                 while($a = $this->db->fetchByAssoc($result)) {
                        $cadena.="<option value=\"".$a['id']."\" ".$this->selected_profesor($a['id']).">".$a['name'].'</option>';
                 }
         return $cadena;
   }
  
  protected function selected_profesor($id){
    $retorno="";
    if(is_array($this->form['profesor'])){
            foreach ($this->form['profesor'] as $user){
                if(trim($id)==$user){
                     $retorno=" selected=\"selected\"";
                     break;
                }
            }
    }
    return $retorno;
 }
 
 protected function programastodos(){

             $this->sql="Select id, name name  from ee_programas where deleted=0 ";
         $result=$this->excecutequery();
                 while($a = $this->db->fetchByAssoc($result)) {
                        $cadena.="<option value=\"".$a['name']."\" ".$this->selected_programastodos($a['name']).">".$a['name'].'</option>';
                 }
         return $cadena;
   }

  protected function selected_programastodos($id){
    $retorno="";
    if(is_array($this->form['programastodos'])){
            foreach ($this->form['programastodos'] as $user){
                if(trim($id)==$user){
                     $retorno=" selected=\"selected\"";
                     break;
                }
            }
    }
    return $retorno;
 }


 protected function programas(){

             $this->sql="Select id, name name  from ee_programas where deleted=0 and tipoprograma='Abierto'";
         $result=$this->excecutequery();
                 while($a = $this->db->fetchByAssoc($result)) {
                        $cadena.="<option value=\"".$a['id']."\" ".$this->selected_programas($a['id']).">".$a['name'].'</option>';
                 }
         return $cadena;
   }

  protected function selected_programas($id){
    $retorno="";
    if(is_array($this->form['programas'])){
            foreach ($this->form['programas'] as $user){
                if(trim($id)==$user){
                     $retorno=" selected=\"selected\"";
                     break;
                }
            }
    }
    return $retorno;
 }
 
 protected function programasincompany(){
         $clientes=array();

             $this->sql="Select id, name name  from ee_programas where deleted=0 and tipoprograma='Incompany'";
         $result=$this->excecutequery();
                 while($a = $this->db->fetchByAssoc($result)) {
                        $cadena.="<option value=\"".$a['id']."\" ".$this->selected_programasincompany($a['id']).">".$a['name'].'</option>';
                 }
         return $cadena;
   }
   
   protected function selected_programasincompany($id){
    $retorno="";
    if(is_array($this->form['programas'])){
            foreach ($this->form['programas'] as $user){
                if(trim($id)==$user){
                     $retorno=" selected=\"selected\"";
                     break;
                }
            }
    }
    return $retorno;
 }
 
 protected function ciudad(){

             $this->sql="SELECT DISTINCT(c.name) AS nombre  
                         FROM ee_ciudad c, ee_provincia_ee_ciudad_c cp, ee_provincia p, ee_pais_ee_provincia_c pp 
                         WHERE pp.ee_pais_ee_provinciaee_pais_ida = '897ae8d1-c57c-a700-e792-4f6afc90028b' AND pp.ee_pais_ee_provinciaee_provincia_idb=p.id
                               AND cp.ee_provincia_ee_ciudadee_provincia_ida = p.id AND cp.ee_provincia_ee_ciudadee_ciudad_idb=c.id AND c.deleted=0
                         ORDER BY nombre";
         $result=$this->excecutequery();
                 while($a = $this->db->fetchByAssoc($result)) {
                        $cadena.="<option value=\"".$a['nombre']."\" ".$this->selected_ciudad($a['nombre']).">".$a['nombre'].'</option>';
                 }
         return $cadena;
   }
   
   protected function selected_ciudad($id){
    $retorno="";
    if(is_array($this->form['ciudad'])){
            foreach ($this->form['ciudad'] as $user){
                if(trim($id)==$user){
                     $retorno=" selected=\"selected\"";
                     break;
                }
            }
    }
    return $retorno;
 }
 
 protected function provincia(){

             $this->sql="SELECT DISTINCT(p.name) AS nombre  
                         FROM ee_ciudad c, ee_provincia_ee_ciudad_c cp, ee_provincia p, ee_pais_ee_provincia_c pp 
                         WHERE pp.ee_pais_ee_provinciaee_pais_ida = '897ae8d1-c57c-a700-e792-4f6afc90028b' AND pp.ee_pais_ee_provinciaee_provincia_idb=p.id
                               AND cp.ee_provincia_ee_ciudadee_provincia_ida = p.id AND cp.ee_provincia_ee_ciudadee_ciudad_idb=c.id AND c.deleted=0
                         ORDER BY nombre";
         $result=$this->excecutequery();
                 while($a = $this->db->fetchByAssoc($result)) {
                        $cadena.="<option value=\"".$a['nombre']."\" ".$this->selected_provincia($a['nombre']).">".$a['nombre'].'</option>';
                 }
         return $cadena;
   }
   
   protected function selected_provincia($id){
    $retorno="";
    if(is_array($this->form['provincia'])){
            foreach ($this->form['provincia'] as $user){
                if(trim($id)==$user){
                     $retorno=" selected=\"selected\"";
                     break;
                }
            }
    }
    return $retorno;
 }
 
 
 
 protected function medio(){

             $this->sql="SELECT name
                         FROM ee_mediocontacto
                         WHERE deleted = 0
                         ORDER BY name";
         $result=$this->excecutequery();
                 while($a = $this->db->fetchByAssoc($result)) {
                        $cadena.="<option value=\"".$a['name']."\" ".$this->selected_provincia($a['name']).">".$a['name'].'</option>';
                 }
         return $cadena;
   }
   
   protected function selected_medio($id){
    $retorno="";
    if(is_array($this->form['medio'])){
            foreach ($this->form['medio'] as $user){
                if(trim($id)==$user){
                     $retorno=" selected=\"selected\"";
                     break;
                }
            }
    }
    return $retorno;
 }
 
 protected function detallemedio(){

             $this->sql="SELECT name
                         FROM ee_detallemedio
                         WHERE deleted = 0
                         ORDER BY name";
         $result=$this->excecutequery();
                 while($a = $this->db->fetchByAssoc($result)) {
                        $cadena.="<option value=\"".$a['name']."\" ".$this->selected_provincia($a['name']).">".$a['name'].'</option>';
                 }
         return $cadena;
   }
   
   protected function selected_detallemedio($id){
    $retorno="";
    if(is_array($this->form['detallemedio'])){
            foreach ($this->form['detallemedio'] as $user){
                if(trim($id)==$user){
                     $retorno=" selected=\"selected\"";
                     break;
                }
            }
    }
    return $retorno;
 }


/*
 *
 * 
 */

   protected function lista($lista='',$formulario=''){
        global $app_list_strings;
        if(is_array($app_list_strings[$lista])){
            foreach($app_list_strings[$lista] as $key=> $opcion){
                $cadena.="<OPTION VALUE=\"".$key."\" ".$this->selected_lista($key,$formulario).">".$opcion.'</option>';

            }

        }

    return $cadena;
  }

  protected function lista_simple($lista='',$formulario=''){
        global $app_list_strings;
        $valor_seleccionado=$_REQUEST[$formulario];
        if(is_array($app_list_strings[$lista])){
            foreach($app_list_strings[$lista] as $key=> $opcion){
                if($valor_seleccionado==$key)
                    $selected="selected";
                $cadena.="<option VALUE=\"".$key."\" ".$selected.">".$opcion.'</option>';

                $selected="";
            }

        }

    return $cadena;
  }
  /*
   * @var <string>
   */
  protected function selected_lista($opcion='',$formulario=''){
    $retorno="";
        if(is_array($this->form[$formulario])){
                foreach ($this->form[$formulario] as $key=> $dato){
                        if(trim($opcion)==$dato){
                             $retorno=" selected=\"selected\"";
                             break;
                        }
                }
        }
        return $retorno;
   }

   protected function getConcesioanrio(){
       global $current_user;
       require_once('modules/Teams/Team.php');

            $objTeams = new Team();
            $teams = $objTeams->get_teams_for_user($current_user->id);
            $team_arr;
            foreach($teams as $team){
                    if($team->private==0){
                        $team_arr = strtoupper($team->name);
                        $id=$team->id;
                        break;
                    }
                    
            }
         return array('id'=>$id,'name'=>$team_arr);

   }

/*
 * Funcion que genera colores hexadecimales, se usa para los graficos
 * var $total int total de colores
 * 
 */
    function randomColor($total) {
        srand(time());
        $color = "";
      for ($j=0 ;$j<$total ; $j++){
          $color="";
        for ($i=0; $i<6; $i++){
            $color .=  dechex(rand(0,15));
        }
        $colores[]="#".$color;
      }
        return $colores;
    }
}