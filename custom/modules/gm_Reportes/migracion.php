<?php
$path="custom/include/clases/varios/Migracion.php";
if(file_exists($path)){
    include_once $path;
    $migracion=new Migracion();
   //$migracion->cuentas();
   // $migracion->contactos();
   // $migracion->instructores();
     $migracion->asignarNumeros();

}

?>
