<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
global $app_list_strings;
?>
<script type="text/javascript"  src="custom/include/scripts/jquery.js"></script>
<script type="text/javascript"  src="custom/include/jquery/js/jquery-ui.min.js"></script>
<script type="text/javascript"  src="custom/include/scripts/jquery.alphanumeric.pack.js"></script>


<link rel="stylesheet" type="text/css" href="custom/include/jquery/css/jquery-ui.css" />


<script type="text/javascript" src="custom/include/scripts/jquery.dataTables.js"></script>

<link rel="stylesheet" type="text/css" href="custom/include/scripts/demo_page.css" />
<link rel="stylesheet" type="text/css" href="custom/include/scripts/demo_table.css" />
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
	width:43%;
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
<h1 class="tituloBusqueda">Muestra todas las variables que se pueden usar en las plantilllas </h1>
    <p class="busqueda">Esta funcionalidad es una guia basica para incluir mas datos en las plantillas</p>
    


 <hr>
    <div class="seccion">
        <div class="seccion_head">Variables de imagenes:</div>
        <label>Para incluir una imagen poner</label>
       galeria/plantillas/[nombredeimagen[.extension]];


    </div>
   <div class="seccion">
        <div class="seccion_head">Variables de Oportunidades:</div>
         <label>Nombre Oportunidad</label>
        @$oportunidad['name'];
        <br>
         <label>Valor:</label>
        @$oportunidad['amount'];
        <br>
         <label>Tipo</label>
        @$oportunidad['opportunity_type'];
        <br>
         <label>Fecha Validez Oferta: </label>
        @$oportunidad['fechavalidez_c'];
        <br>
         <label>Fecha Validez Oferta: </label>
        @$oportunidad['date_closed'];
        <br>
         <label>Toma de contacto: </label>
        @$oportunidad['lead_source'];
        <br>
         <label>Etapa de ventas</label>
        @$oportunidad['sales_stage'];
        <br>
         <label>Probabilidad (%): </label>
        @$oportunidad['probability'];
        <br>
         <label>Motivos Perdida: </label>
        @$oportunidad['motivosperdida_c'];
        <br>
         <label>Observaciones: </label>
        @$oportunidad['observaciones_c'];
        <br>

         <label>Cotizacion a nombre de</label>
        @$oportunidad['nombrede_c'];
        <br>
         <label>Ref. Group Name: </label>
        @$oportunidad['refgroupname_c'];
        <br>
         <label># File:</label>
        @$oportunidad['campofile_c'];
        <br>
         <label>Numero Pax: </label>
        @$oportunidad['numpasajeros_c'];
        <br>
         <label>Fecha Pago: </label>
        @$oportunidad['fechapago_c'];
        <br>
         <label>Date in: </label>
        @$oportunidad['datein_c'];
        <br>
         <label>	Date out:</label>
        @$oportunidad['dateout_c'];
        <br>
       

    </div>
 <br>

  <div class="seccion">
        <div class="seccion_head">Variables de Clientes</div>
        <label>Nombre Cliente</label>
        @$clientes['name'];
        <br>
        <label>Codigo: </label>
        @$clientes['codigo_c'];
        <br>
        <label>Estado:</label>
        @$clientes['estado_c'];
        <br>
        <label>RUC / Cedula:</label>
        @$clientes['ruc_c'];
        <br>
        <label>Categoria principal: </label>
        @$clientes['catprincipal_c'];
        <br>
        <label>Subcategoria:</label>
        @$clientes['subcategoria_c'];
        <br>
        <label>Tarifa Especial: </label>
        @$clientes['tarifaespecial_c'];
        <br>
        <label>Calificacion: </label>
        @$clientes['calificacion_c'];
        <br>
        <label>Idioma: </label>
        @$clientes['extension_c_'];
        <br>

         <label>Telefono 1:  </label>
        @$clientes['phone_office'];
        <br>
         <label>Extension 1:  </label>
        @$clientes['extension_c'];
        <br>
         <label>Telefono 2:  </label>
        @$clientes['phone_alternate'];
        <br>
         <label>	Extension 2: </label>
        @$clientes['extension2_c'];
        <br>
         <label>Web:  </label>
        @$clientes['website'];
        <br>
         <label>Fax oficina:  </label>
        @$clientes['phone_fax'];
        <br>
         <label>Toma contacto: </label>
        @$clientes['lead_source'];
        <br>

         <label>Detalle contacto:  </label>
        @$clientes['detallecontacto_c'];
        <br>
         <label>Origen Dinero: </label>
        @$clientes['origendinero_c'];
        <br>
         <label>Forma Pago:  </label>
        @$clientes['formapago_c'];
        <br>
         <label>Dirección principal:  </label>
        @$clientes['billing_address_street'];
        <br>
         <label>Ciudad  </label>
        @$clientes['billing_address_city'];
        <br>
         <label>Estado/Provincia: </label>
        @$clientes['billing_address_state'];
        <br>
         <label>Código postal:  </label>
        @$clientes['billing_address_postalcode'];
        <br>
         <label>País:  </label>
        @$clientes['billing_address_country'];
        <br>
         <label>Dirección de envío:  </label>
        @$clientes['shipping_address_street'];
        <br>
         <label>Ciudad:   </label>
        @$clientes['shipping_address_city'];
        <br>
         <label>Estado/Provincia:   </label>
        @$clientes['shipping_address_state'];
        <br>
         <label>Código postal  </label>
        @$clientes['shipping_address_postalcode'];
        <br>
         <label>País:  </label>
        @$clientes['shipping_address_country'];
        <br>

    </div>

