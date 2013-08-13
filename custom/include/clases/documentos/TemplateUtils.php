<?php


/**
 * Utilitario para los templates
 *
 * @author vsayajin
 * @package components.documentos
 */

class TemplateUtil {
        var $path_1='custom/include/clases/varios/FormatUtil.php';
        var $path_2='custom/include/clases/varios/NumerosTexto.php';
        var $path_3='custom/include/clases/varios/DateUtils.php';
	var $convertidor;

	function __construct() {
              if(file_exists($this->path_2)){
                  include_once $this->path_2;
              }
               if(file_exists($this->path_1)){
                  include_once $this->path_1;
              }
              if(file_exists($this->path_3)){
                  include_once $this->path_3;
              }
	$this->convertidor = new NumerosTexto();
	}

	function numero($val) {
                
		return FormatUtil::number($val);
	}

	function tasa($val) {
		FormatUtil::number($val * 100);
	}

	function fecha_formal($val = '') {
		$format = "%A de %d de %B de %Y";
                
		if (!$val){
			return strftime($format);
                }
                
		return utf8_encode(FormatUtil::formatDateLocale($val, $format));
	}
        
        
	function fecha_estandar($val = '') {
		if(!$val)
			return DateUtils::now ('d/m/Y');
		return FormatUtil::formatDate($val, 'd/m/Y');
	}
        function fecha_mes($val = '') {
		if (!$val)
			return '';
		/*if ($value instanceof DateTime)
			return $value->format($format);*/
		$d = new DateTime($this->fecha_estandar($val));
                return $d->format('m');
	}
        function fecha_mesletras($val){
            $meses=array(
                '01'=>'Enero',
                '02'=>'Febrero',
                '03'=>'Marzo',
                '04'=>'Abril',
                '05'=>'Mayo',
                '06'=>'Junio',
                '07'=>'Julio',
                '08'=>'Agosto',
                '09'=>'Septiembre',
                '10'=>'Octubre',
                '11'=>'Noviembre',
                '12'=>'Diciembre',

            );
            	if (!$val)
			return '';
		/*if ($value instanceof DateTime)
			return $value->format($format);*/
                $array=explode("/", $val);
                $value=$array[1]."/".$array[0]."/".$array[2];

		//$d = new DateTime($this->fecha_estandar1($val));
                //$val=$d->format('m');
                return $meses[$array[1]];

        }



        function fecha_dia($val = '') {
		if (!$val)
			return '';
		/*if ($value instanceof DateTime)
			return $value->format($format);*/
		//$d = new DateTime($this->fecha_estandar($val));
                $array=explode("/", $val);
                $value=$array[1]."/".$array[0]."/".$array[2];

		//$d = new DateTime($this->fecha_estandar1($val));
                //$val=$d->format('m');
                return $array[0];
	}
        function fecha_anio($val = '') {
		if (!$val)
			return '';
		/*if ($value instanceof DateTime)
			return $value->format($format);*/
		//$d = new DateTime($this->fecha_estandar($val));
                $array=explode("/", $val);
                $value=$array[1]."/".$array[0]."/".$array[2];

		//$d = new DateTime($this->fecha_estandar1($val));
                //$val=$d->format('m');
                return substr($array[2], 0, 4);

	}
	function letras($numero) {
		return strtoupper($this->convertidor->convertir(round($numero,2)));
	}

	function external($tpl, $vars) {
		return 'TODO';
	}
        function calcula_descuento($valor=0, $porcentaje=0){
            return $valor*($porcentaje/100);
        }

}

?>
