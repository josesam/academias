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
    var oTable;
			$(document).ready(function() {
				oTable=$('#example').dataTable( {
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

                                 $("#selectall").click(function(){
                        
    			$('input', oTable.fnGetNodes()).each(function() {
                        $('input', oTable.fnGetNodes()).attr('checked','checked');
                            });
                    return false; // to avoid refreshing the page
                    });
			} );

               
</script>
<script language="javascript">

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
<p>Por favor , escoja de la lista el publico objetivo para la generación de la campaña,
    recuerde que puede escoger todos con tan solo un click</p>
<p class="italica">2 de 3</p>
<?php

$path='custom/include/campanas/GeneradorPublico.php';

if(file_exists($path)){
              include $path;
             $seed=new GeneradorPublico();
             $seed->setModulo($_REQUEST['modulo']);
             $seed->setBeanName($_REQUEST['bean']);
             $seed->setPublico($_REQUEST['publico']);

             $seed->cargaVardefs();
             $seed->generaWhere($_REQUEST);
             $seed->controller();
             $data=$seed->getData();
 ?>
<div id="demo">
<form name="creacion" id="creacion" method="post" action="">
    <input type="hidden" name="module" id="module" value="Campaigns">
    <input type="hidden" name="modulo" id="module" value="<?php echo $seed->getModulo(); ?>">
    <input type="hidden" name="action" id="action" value="crear">
    <input type="hidden" name="bean" id="bean" value="<?php echo $seed->getBeanName(); ?>">
    <input type="hidden" name="publico" id="bean" value="<?php echo $seed->getPublico(); ?>">
    <table class="publico">
        <thead>
            <tr>
                <th><label for="name">Nombre Publico Objetivo</label></th>
                <td><input type="text" name="name" id="name" class="required"> </td>
            </tr>
        </thead>    
    </table>
<table border="1" class="display" id="example">
<thead>
<tr>
    <th><input type="checkbox" id="selectall" name="selectall" class="selectall"/></th>
    <th>Nombre</th>
    <th>Email</th>
</tr>
</thead>
<?php if(is_array($data)):?>
<tbody>
        <?php foreach ($data as $key => $valores):?>
            <tr>
             <td align="center"><?php if (!empty($valores['email'])): ?><input type="checkbox" class="case" name="case[]" value="<?php echo $valores['id'] ?>"/><?php endif;?></td>
             <td><?php echo $valores['nombre']?></td>
             <td><?php echo $valores['email']?></td>
            </tr>

        <?php endforeach;?>
</tbody>
<?php else:?>
            <h1>No se encontraron match para la busqueda aplicada</h1>
<?php endif;?>
</table>
 
                
</div>
<br>
<div class="boton">
<input type="submit" class="submit" name="generar" id="generar" value="Generar">
</div>
</form>
<?php
        }else{
               echo 'Existio un error.. Comuniquese con el Administrador';
        }
?>
