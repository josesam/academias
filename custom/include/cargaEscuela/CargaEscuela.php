<?php

include_once('custom/include/clases/varios/CargadorExcel.php');

class CargaEscuela  extends CargadorExcel{
    public function procesarArchivo($archivo) {
        $reader = new Spreadsheet_Excel_Reader();
        $reader->setOutputEncoding('ISO-8859-1');
        $reader->read($archivo['tmp_name']);
        $lista = $this->procesarHoja($reader);
        return $lista;
    }
    
    public function procesarYGuardar($archivo, $modulo = '') {
        if(($archivo['tmp_name']=='') || ($archivo['type']!='application/vnd.ms-excel')){
            $this->error['fila']=0;
            $this->error['detalle']="Cargar un Archivo Válido (Archivos excel 2003)";
            $this->errores[]=$this->error;
            $lista['error']=$this->errores;
        }else{
            $lista = $this->procesarArchivo($archivo);
            if (count($lista['error'])==0)
                $this->guardarLista($lista,$modulo);
        }
        return $lista;
    }
    
    protected function procesarHoja(Spreadsheet_Excel_Reader $reader){
        $hoja = $reader->sheets[0];
        $cells = $hoja["cells"];
        $rows = $hoja["numRows"];
        $cols = $hoja["numCols"];
        $limite = $this->limite ? $this->limite : $rows;
        $lista = array();
        $j=0;
        for ($i = 2; $i <= $limite; $i++) {
            $row = $this->encodeRow($cells[$i]);
            if ($this->filaVacia($row))
                break;
            for ($columnas=1;$columnas<=$cols;$columnas++){
                    $lista[$j][]=$row[$columnas];
            }
            $j++;
        }
        return $lista;
    }
    
    function guardarLista($lista,$modulo='') {
        try {
            $path='custom/include/cargaEscuela/Cabecera.php';
            if (file_exists($path)){
                include_once $path;  
                $obj=new Cabecera();
                if($modulo!='')
                    $obj->$modulo($lista);
            }   
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}
?>