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

    }
    p.italica{
        font-style: italic;
        color:black;
        font-family: Helvetica;
        font-size: 12px;
        font-weight: bolder;
   }
.display th {
    background-color:#3E6DB0;
    color: white;

}
</style>
<h1>Escoja el modulo del cual se van a generar listas de publico Objetivo</h1>
<p> Esta funcionalidad permite generar en una sola pantalla la lista de publico objetivos de los diferentes módulos </p>
<hr>



<?php
$path="custom/include/campanas/modules_available.php";
if (file_exists($path)):
$modules=include_once $path;
?>
<?php if (is_array($modules)):?>
<center>
<div id="modules" style="text-align: center;width: 80%">
    <table width="80%" border="1">
        
<?php $cont=0;?>
<?php foreach ($modules as $key => $val):?>
        
        <?php       if($cont==3){
                        $cadena.='</tr>';
                        $cont=0;
                        $cadena.='<tr>';
                    }
                    ?>
        <td>
            <a href="index.php?module=Campaigns&action=busqueda&modulo=<?php echo $val['module'] ?>&bean=<?php echo $val['bean']; ?>&publico=<?php echo $val['publico']?>">
                <img src="<?php echo $val['image']; ?>"><br>
                <?php echo $val['name'];?>

            </a>

        </td>
<?php $cont++; ?>
<?php endforeach;?>
    </table>
</div>
</center>
<?php else:?>
<h1>No se cargo la información para los módulos </h1>
<?php endif ?>
<?php else:?>
<h1>No existe modulos parametrizados para esta funcionalidad </h1>
<?php endif;?>

<!--
<label class="op">Nombre del Módulos</label>

<select id="modulos" class="caja" name="modulos" onchange="javascript:filtros(this.value);">
    <option value=""></option>
    <option value="cuentas">Clientes</option>
    <option value="contacto">Contactos</option>
    <option value="oportunidad">Contactos Oportunidades</option>
    <option value="instructores">Instructores</option>
    <option value="participante">Participantes</option>
</select>
<br>
<label  class="op">Publico Objetivo</label>
<input  class="caja" type="text" name="nombre_lista" id="nombre_lista" value="">
<br>
<div id="busqueda_filtros" style="margin-top:80px;"></div>
<br>

<div id="lista">-->
    <?php
// Creación
////if(isset($_REQUEST['searchFormTab'])){
//   include_once 'custom/include/clases/varios/Datos.php';
//   $datos=new Datos();
//  // if($_REQUEST['modulos']=='instructores'){
//        echo $datos->instructores($_REQUEST);
//   //}else if($_REQUEST['cuentas']){
//
//   //}
//}
?>

<!--</div>-->
<script>
function cargar(){

        var data={
            usuario:$("#usuarioasignado").val(),
            accion:'Search'
 //           module:'Opportunities'



        }

        var urllista = "index.php?&module=Accounts&action=actualizar";
        jQuery("#lista").text("generando...");
        jQuery("#lista").load(urllista,data, function(response, status, xhr){
            $("#lista").html(response);
        });


}
function actualizar(){
        var data={
            usuario:jQuery("#usuarioasignado").val(),
            accion:'Update',
            id:jQuery("#tipotrabajo").val()
       }


        var urllista = "index.php?&module=Accounts&action=actualizar";

        $("#lista").load(urllista,data, function(response, status, xhr){
            $("#lista").html(response);
        });

}

function checkTodos (id,pID) {

    jQuery( "#" + pID + " :checkbox").attr('checked', jQuery('#' + id).is(':checked'));

}

</script>