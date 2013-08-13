<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$sql="Select id , name from sp_lineas where deleted=0";
            $db = DBManagerFactory::getInstance();

	   $result = $db->query($sql);


		while($a = $db->fetchByAssoc($result)) {
			$data[] = $a;
		}

?>
<style>
      #fruit { margin-left: .5em; float: left; }
       label { float: left; font-family: Arial, Helvetica, sans-serif; font-size: small; }
	br { clear: both; }
	input, select { margin-bottom: .5em;  }
	select.error { border: 1px solid red; }
	label.error {

		padding-left: 16px;
		margin-left: .3em;
	}
	label.valid {

		display: block;
		width: 16px;
		height: 16px;
	}

        p.busqueda{
            font-family: Arial,Helvetica;
            font-size: 12px;
            text-align: justify;


}
.seccion{
	border: 1px solid black;
	padding: 5px;
	margin:5px;
	width:80%;
	float:left;
}
.seccion_head{
	font-weight: bold;
	padding:2px;
	text-align: center;
	background-image: url("./custom/include/images/bg_top.jpg");
	color:#CCC;
}
.seccion label{
	text-align: left;
	width:120px;
}
.seccion input{

    width: 150px;
}
</style>
<div id="lineas_dlg" style="display:none;">
    <h1>Busqueda de productos </h1>

    <hr>
    <form id="form" action="" method="post" class="niceform">
    <div class="seccion">
        <div class="seccion_head">Parametros de Busqueda</div>


        <label>Linea</label>
          <select name="linea" id="linea"  >
               <option value="null">Selecciona una Linea</option>

            <?php
                if(is_array($data)){
                    foreach($data as $key =>$values):
            ?>
            <option value="<?php echo $values['id']; ?>"><?php echo $values['name'];?></option>
            <?php
                    endforeach;
                }
            ?>

        </select>
    </div>


    <br>

</form>
<a href="javascript:buscar();" >Buscar Productos</a>
<hr>

<div id="lineas_div"></div>
</div>

<script>

    function buscar(){
       

                var clase = $("#linea").val();
                data={
                  linea:clase
                }
               // alert(idoportunidad)
                var urllista = "index.php?&module=Accounts&action=tarifas";
               // alert(urllista)
              $("#lineas_div").text("buscando...");
              $("#lineas_div").load(urllista,  data ,  function(response, status, xhr){

			$("#lineas_div").html(response);

	});



    }


</script>
