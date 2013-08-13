<style>
    h1{
        color:#860A0C;
        font-family: Helvetica;
        font-size: 25px;
        font-weight: bolder;
}
    p {
        color:black;
        font-family: Helvetica;
        font-size: 14px;
        font-weight: bolder;
        padding:  10px 0px

    }
    p.italica{
        font-style: italic;
        color:black;
        font-family: Helvetica;
        font-size: 12px;
        font-weight: bolder;
        padding:  15px 0px
   }
   .display th {
    background-color:#3E6DB0;
    color: white;
    }
</style>
<h1>Proceso de Creación de público objetivo</h1>
<p>Por favor , aplique los filtros necesarios para segmentar el público objetivo</p>
<p class="italica">1 de 3</p>
<?php

$path='custom/include/campanas/GeneradorBusqueda.php';

if(file_exists($path)){
               include $path;
             $seed=new GeneradorBusqueda();
             $seed->setModulo($_REQUEST['modulo']);
             $seed->setBeanName($_REQUEST['bean']);
             $seed->setPublico($_REQUEST['publico']);
             $seed->generarArray();
             echo $seed->generarPlantilla();




           }else{
               echo 'Existio un error.. Comuniquese con el Administrador';
           }
?>
