<?php



/**
 * Se encarga de la generación de documentos imprimibles en el sistema
 * Contiene una configuración de cada tipo de documento siguiendo la convención
 * de que la plantilla html corresponde al codigo del documento.
 * Genera Html basado en plantilla y se puede genear pdfs.
 * Utiliza una modificación de la maquinaria de plantillas Razor para el Yii y
 * una clase de plantillas en php mismo que evalua las variables y devuelve el html
 * @author vsayajin
 * @package components.documentos
 */
class GeneradorDocumentos {

	/**
	 * Ruta a la bilbioteca TCPDF
	 * @var strin
	 */
	public $pathTcpdf = 'custom/include/clases/documentos/tcpdf';
	protected $lista = array();
	protected $repository;

	public function __construct() {
              include_once('custom/include/clases/documentos/RepositorioPlantillas.php');
		$this->repository = new RepositorioPlantillas();
	}

	/**
	 * Devuelve un array onde las claves son los codigos de plantillas disponibles y los
	 * valores sus nombres
	 * @return array
	 */
	public function tiposDocumento($nombre="") {
		if (!$this->lista) {
			//$campos = array('vista' => true);
			$lista = $this->findAllByAttributes($nombre);
			foreach ($lista as $item) {
				$this->lista[$item['id']] = $item;
			}
		}
		$tipos = array();
                $cont=0;
		foreach ($this->lista as $cod => $item) {
			$tipos[trim($item['name'])] = trim($item['name']);
                        $cont++;
		}
		return $tipos;
	}
        public function findAllByAttributes($codigo=""){
            if(!empty($codigo))
                $filtro=" and  id='".$codigo."' ";
               $sql="Select * from pro_plantillas where deleted=0".$filtro;
             //  var_dump($sql);
               $db = DBManagerFactory::getInstance();
               $result=$db->query($sql);
                while($a = $db->fetchByAssoc($result)) {
                    $data[]=$a;

                }
              //  var_dump($data);
               return $data;

        }
	public function porCodigo($codigo) {
		return $this->findAllByAttributes($codigo);
	}

	/**
	 * Crea el contexto de variables que se pasaran a la plantilla para evaluar.
	 * TODO: se deberia hacer que de acuerdo a la plantila, se extraigan las variables y de ahi
	 * solo se pongan las que sean necesarias.
	 * @param <type> $sol
	 * @return <type>
	 */
	public function crearContexto($main_module="",$id='',$related_module='') {
                global $current_user;
                
                include_once("custom/include/clases/documentos/TemplateUtils.php");
                include_once 'custom/include/clases/documentos/data/Data.php';
                $data=new Data();
                $res=$data->get_relationships($main_module, $id, $related_module, "", "0");
		$ctx = array();
                
                switch ($res['ids'][0]['related_module']){
                    case 'Accounts':
                        include_once 'custom/include/clases/documentos/data/Cliente.php';
                        $cliente=new Cliente();                    
                        $ctx['clientes']=$cliente->clienteContexto(& $res['ids'][0]['data']);;
                        break;
                    case 'Opportunities':
                        include_once 'custom/include/clases/documentos/data/Oportunidad.php';
                        $cliente=new Oportunidad();
                        $ctx['oportunidad']=$cliente->oportunidadContexto(& $res['ids'][0]['data']);


                        break;
                      
                  
               
                }

             switch ($res['ids'][0]['main_module']){
                    case 'Accounts':
                        include_once 'custom/include/clases/documentos/data/Cliente.php';
                        $cliente=new Cliente();
                        $ctx['clientes']=$cliente->clienteContexto(& $res['ids'][0]['data']);;
                        break;
                    case 'Opportunities':
                        include_once 'custom/include/clases/documentos/data/Oportunidad.php';
                        $cliente=new Oportunidad();
                        $ctx['oportunidad']=$cliente->oportunidadContexto(& $res['ids'][0]['data_main_module']);
                       
                        break;
                    case 'pro_ProyectosProInmobiliara':
                    
                        break;
                    case 'bos_OrdenCompraDomestica':
                        include_once 'custom/include/clases/documentos/data/OrdenCompraDomestico.php';
                         $orden=new OrdenCompraDomestico();
                        $ctx['orden']=$orden->ordenContexto(& $res['ids'][0]['data_main_module']);
                        break;
                    case 'pro_ResciliacionDesistemiento':
                        break;
                    
                }
             
               $ctx['util'] = new TemplateUtil();
               

               
		return $ctx;
	}

	/**
	 * Procesa una plantilla de documentos y devuelve el html generado.
	 * TODO: mejorar el reemplazo de variables al estilo pull
	 * @param string $tipo
	 * @param Solicitud $sol
	 * @param array $datos datos adicionales
	 * @return string Html generado
	 */
	public function generar($tipo,$main_module,$id,$related_module) {
		  
                include_once('custom/include/clases/documentos/extensions/RazorViewRenderer.php');
                include_once('custom/include/clases/documentos/PHPTemplate.php');
		setlocale(LC_TIME, "es_ES");
		$tipos = $this->tiposDocumento();
                $content = $this->repository->contenidoPlantilla($tipos[$tipo]);
               
		$source = str_replace('-&gt;', '->', $content); // corregir ->
		$engine = new RazorViewRenderer();
		$text = $engine->generateContent($source);
               
		$ctx = $this->crearContexto($main_module,$id,$related_module);

		$tpl = new PHPTemplate();
		$tpl->vars = $ctx;
		$res = $tpl->evalCode($text);
		return $res;
	}

	/**
	 * Toma una cadena en html y genera un pdf, luego devuelve el contenido al navegador
	 * @param string $html Contenido Html para convertir a pdf
	 * @param string $nombre Nombre del archivo
	 */
	public function generarPdf($html, $nombre, $download = false) {

		require $this->pathTcpdf . '/tcpdf.php';
		//Yii::import('tcpdf.tcpdf', true);
		// esto tomado del archivo config/lang/eng.php en tcpdf
		$l = array();
		$l['a_meta_charset'] = 'UTF-8';
		$l['a_meta_dir'] = 'ltr';
		$l['a_meta_language'] = 'en';

		// TRANSLATIONS --------------------------------------
		$l['w_page'] = 'page';

		// create new PDF document
		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		// set document information
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Freerisk');
		$pdf->SetTitle('Plantilla');
		$pdf->SetSubject('Freerisk');
		$pdf->SetKeywords('Freerisk, credito, solicitud');

		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);

		//set image scale factor
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
		//set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
		//set some language-dependent strings
		$pdf->setLanguageArray($l);
		// CONTENIDO
		//
		// add a page
		$pdf->AddPage();
		// set core font
		$pdf->SetFont('helvetica', '', 9);

		// output the HTML content
		$pdf->writeHTML($html, true, 0, true, true); // ultimo en true
		// reset pointer to the last page
             //   var_dump($html);
		$pdf->lastPage();
		// ---------------------------------------------------------
		//Close and output PDF document
                
		$estilo = $download ? 'D' : 'I';  // 'I' le manda para que le coja el plugin, 'D' forza el download
		$estilo='D';
                $pdf->Output($nombre . '.pdf', $estilo);
	}

}

?>
