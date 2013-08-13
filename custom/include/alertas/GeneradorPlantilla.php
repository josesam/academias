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
class GeneradorPlantilla {

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
	 * Procesa una plantilla de documentos y devuelve el html generado.
	 * TODO: mejorar el reemplazo de variables al estilo pull
	 * @param string $tipo
	 * @param Solicitud $sol
	 * @param array $datos datos adicionales
	 * @return string Html generado
	 */
	public function generar($path,$variables) {
		  
                include_once('custom/include/clases/documentos/extensions/RazorViewRenderer.php');
                include_once("custom/include/clases/documentos/TemplateUtils.php");
                include_once('custom/include/clases/documentos/PHPTemplate.php');
                $ctx=$variables;
		setlocale(LC_TIME, "es_ES");
		
                $content = $this->repository->contenidoPlantilla($path);
               
		$source = str_replace('-&gt;', '->', $content); // corregir ->
		$engine = new RazorViewRenderer();
		$text = $engine->generateContent($source);
                $ctx['util'] = new TemplateUtil();
		$tpl = new PHPTemplate();
		$tpl->vars = $ctx;
		$res = $tpl->evalCode($text);
		return $res;
	}

	

}

?>
