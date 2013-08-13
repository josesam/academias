<?php
/* 
 * 
 * @author Jose Sambrano
 */
class GeneradorForm{

    public function  __construct() {
        ;
    }
    public function listarArchivos($path='.'){
      $data=array();
      if ($handle = opendir($path)) {
           while (false !== ($file = readdir($handle))) {
            if ($file != "." && $file != "..") {
             $data[]=$file;
            }
        }
        closedir($handle);
      }else{
          return $data;
      }
      return $data;
    }
}
?>
