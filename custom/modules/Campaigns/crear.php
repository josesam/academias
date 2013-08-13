<link rel='stylesheet' href='custom/include/scripts/genericas/datatables19/media/css/demo_page.css' type='text/css' />
<link rel='stylesheet' href='custom/include/scripts/genericas/datatables19/media/css/demo_table.css' type='text/css' />
<script type="text/javascript" language="javascript" src="custom/include/scripts/genericas/datatables19/media/js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="custom/include/scripts/genericas/datatables19/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" src="custom/include/scripts/genericas/datatables19/scroller/media/js/dataTables.scroller.js"></script>
<script type="text/javascript" src="custom/include/scripts/genericas/varios/jquery.validate.js"></script>

<style type="text/css">

label { width: 10em; float: left; }
label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
p { clear: both; }
.submit { margin-left: 12em; }
em { font-weight: bold; padding-right: 1em; vertical-align: top; }
</style>
  <script>
  $(document).ready(function(){
    $("#creacion").validate();
  });
  </script>

<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').dataTable( {
                                     "bFilter": false,
                                       "iDisplayLength": 25,
					"sPaginationType": "full_numbers",
                                         "oLanguage": {
                                            "sSearch": "Buscar:"
                                          },
                                        "sPaginationType": "full_numbers",
                                        "sDom": 'frtiS',
                                        "sScrollY": "600px",
                                        "bDeferRender": true
				} );
			} );
</script>
<script language="javascript">
$(function(){
    // add multiple select / deselect functionality
    $("#selectall").click(function () {
          $('.case').attr('checked', this.checked);
    });

    // if all checkbox are selected, check the selectall checkbox
    // and viceversa
    $(".case").click(function(){

        if($(".case").length == $(".case:checked").length) {
            $("#selectall").attr("checked", "checked");
        } else {
            $("#selectall").removeAttr("checked");
        }

    });
});
</script>
<style>
    .required{
        color:black;
    }
    .boton{
      margin: 0 0;
    }
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
        padding: 10px 0px;

    }
    p.italica{
        font-style: italic;
        color:black;
        font-family: Helvetica;
        font-size: 12px;
        font-weight: bolder;
        padding:  15px 0px;
   }
.display th {
    background-color:#3E6DB0;
    color: white;

}
table.publico{
    border: 1px #000 solid;
}
table.publico th{
    background-color:#3E6DB0;
    color: white;
}
</style>

<!-- validacion form -->

<h1>Proceso de creación de público objetivo</h1>
<p>Lea los mensajes de alertas</p>
<p class="italica">3 de 3</p>
<?php
if(count($_REQUEST['case'])>0){
$path='custom/include/campanas/GeneradorPublico.php';

if(file_exists($path)){
              include $path;
             $seed=new GeneradorPublico();
             $seed->setModulo($_REQUEST['modulo']);
             $seed->setBeanName($_REQUEST['bean']);
             $seed->setPublico($_REQUEST['publico']);
             $resultado=$seed->crear($_REQUEST['name'],$_REQUEST['case']);
             if($resultado['error']==false)
                echo 'El proceso termino correctamente';
             else{
                 echo 'Ocurrieron errores en el proceso<br>';
                 if(is_array($resultado['errores'])){
                     foreach($resultado['errores'] as $key =>$value){
                         echo $value.'<br>';
                     }
                 }
             }

             
}
}else{
    echo 'No selecciono ningun registro, Regrese al paso 1.';
}
 ?>
