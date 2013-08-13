
<style>
#menuv {
        border: 1px solid #ACCFE8;
        border-width: 1px 1px 0 1px;
        width: 100%;
        font: 100% "Trebuchet MS", Arial, Helvetica, sans-serif;
}
#menuv ul, li {
        list-style-type: none;
}

#menuv ul {
        margin: 0;
        padding: 0;
}

#menuv li {
        border-bottom: 1px solid #ACCFE8;
}

#menuv a {
        text-decoration: none;
        color: #3366CC;
        background: #F0F7FC;
        display: block;
        padding: 3px 6px;
        width: 100%;
}

#menuv a:hover {
        background: #DBEBF6;
}
#respuesta{

    text-align: left;
    color: #CC0000;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    font-size:20px;

}
</style>

<?php
include_once 'Conversion.php';

?>


<h1>Proceso de creacion de  un cliente a contacto</h1>
<br>
<?php

        
        
        
            $conversion=new Conversion();
            $conversion->setClienteId($_REQUEST['record']);
            $respuesta=$conversion->convertirCliente($_REQUEST['record']);
            
        


?>
<?php if ($respuesta instanceOf RespuestaConversion) : ?>
<?php if ($respuesta->estado==true):?>
<h3>Existe errores</h3>
<ul>
<?php foreach ($respuesta->error  as $key =>$value): ?>
    <li><?php echo $value;?></li>

<?php endforeach;?>
</ul>
<a href="index.php?module=Accounts&action=DetailView&record=<?php echo $_REQUEST['record']?>">Regresar</a>
<?php else : ?>
<h1> Se creo un nuevo contacto</h1>

<a href="index.php?module=Contacts&action=DetailView&record=<?php echo $respuesta->contacto; ?>">Ir al registro creado</a>
<?php endif?>

<?php endif; ?>
