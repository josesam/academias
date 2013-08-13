/* 
 @author Jose Sambrano
 */
jQuery.noConflict();
jQuery(document).ready(function() {
 
      jQuery("#prospect_list").dataTable( {
                "oLanguage": {
			"sSearch": "Search all columns:"
		},
                "sPaginationType": "full_numbers",
                "sDom": 'T<"clear">lfrtip'

	} );


        var url_carga = "index.php?&module=Campaigns&action=crear";
            var options = {
			target: '#lista',
			url: url_carga,
			iframe: true,
			beforeSubmit: function() {
				jQuery('#mensaje').show();
			},
			complete: function() { // puede ser success si hay algo que hacer cuando termine


			}
		};

		jQuery('#form_carga').submit(function() {
                       $(this).ajaxSubmit(options);
                      return false;
		});



    });

filtros=function (vista){
    var data={
        parametro:1
    }
    
                var urllista = "index.php?&module=Campaigns&action="+vista;
                jQuery("#busqueda_filtros").text("Buscando filtros...");
                jQuery("#busqueda_filtros").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#busqueda_filtros").html(response);
                    }else
                        return false;
                });
}
buscar=function (event){
    event.preventDefault();
    alert("ingresa");
    var vista=jQuery("#vista_busqueda").val();
    var data=formato(jQuery("#busqueda_pop").serializeArray());
    
    var urllista = "index.php?&module=Campaigns&action="+vista;
    
                jQuery("#lista").text("Buscando posible lista...");
                jQuery("#lista").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#lista").html(response);
                    }else
                        return false;
                });
 }


function formato(data)
{
    var string='{';
    jQuery.each(data, function(i, field){
        if((field.name!='action')&&(field.name!='return_module') && (field.name!='return_action') && (field.value!='return_id')){
            if(field.value!='')
               string+='"'+field.name+'":"'+field.value+'",';
            else
               string+='"'+field.name+'":"",';
        }
      });
      string=string.substring(0,string.length-1);
      string+='}';

    return jQuery.parseJSON(string);
}

openDetalle=function(){
      var data={
            nombre:jQuery("#mediocontacto").val()
        }

             jQuery("#detalle_dlg").dialog({
                            closeOnEscape: true,
                            height: 600 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Detalles',
                            width: 600
                });


if(jQuery("#mediocontacto").val()!=''){
 var urllista = "index.php?&module=Opportunities&action=detalles";
                jQuery("#detalle_div").text("Buscando etapas de ventas...");
                jQuery("#detalle_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#detalle_div").html(response);
                    }else
                        return false;
                });
}else{
    jQuery("#detalle_div").html("Escoja el medio de contacto");
}

}


openEtapas=function(etapa){
      var data={
            clase:jQuery("#categoria_c").val(),
            etapa:etapa
        }

             jQuery("#etapas_dlg").dialog({
                            closeOnEscape: true,
                            height: 600 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Etapas',
                            width: 600
                });



 var urllista = "index.php?&module=Opportunities&action=controletapas";
                jQuery("#etapas_div").text("Buscando etapas de ventas...");
                jQuery("#etapas_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#etapas_div").html(response);
                    }else
                        return false;
                });
}


openMedios=function(){
     
                jQuery("#medios_dlg").dialog({
                            closeOnEscape: true,
                            height: 500 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Medios',
                            width: 600
                  });


buscarMedios();
 
}

buscarMedios=function (){
  var data={


            medio:jQuery("#filtro_medios").val()

        }

 var urllista = "index.php?&module=Opportunities&action=medios";
                jQuery("#medios_div").text("verificando informacion...");
                jQuery("#medios_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#medios_div").html(response);
                    }else
                        return false;
                });
}

copiarMedio=function(valor){
    jQuery("#mediocontacto").val(valor);
       jQuery("#etapas_dlg").dialog("close");
}

copiarEtapa=function(valor,probabilidad){
    jQuery("#probability").val(probabilidad);
    jQuery("#sales_stage").val(valor);


   if(valor=='Perdido'){

        jQuery("#l_motivoperdida_c").show();
        jQuery("#l_adicional_c").show();
        jQuery("#motivoperdida_c").show();
        jQuery("#adicional_c").show();

    }else{
        jQuery("#l_motivoperdida_c").hide();
        jQuery("#l_adicional_c").hide();
        jQuery("#motivoperdida_c").hide();
        jQuery("#adicional_c").hide();
        jQuery("#motivoperdida_c").val('');
    }

  if((valor=='Ganado')&& (jQuery("#categoria_c").val()=='Incompany')){

        jQuery("#l_amountreal").show();
        jQuery("#amountreal").show();
        jQuery("#amountreal").val("0.00");

    }else{
        jQuery("#l_amountreal").hide();
        jQuery("#amountreal").hide();
        jQuery("#amountreal").val();

    }

  


    

    jQuery("#etapas_dlg").dialog("close");
}

selectMedio=function(valor){
    
        jQuery("#mediocontacto").val(valor);
        jQuery("#detallemedio").val('');
       jQuery("#medios_dlg").dialog("close");

   
}

selectDetalle=function(valor){
    
        jQuery("#detallemedio").val(valor);
       jQuery("#detalle_dlg").dialog("close");


}






/// Validacion en servidor


openVerificacion=function(){

var data=formato(jQuery("#EditView").serializeArray());


var flag=true;
           
flag=check_form('EditView');

if(flag==false){
 jQuery("#detalle_dlg").dialog("close");
 return false;
}else{

    jQuery("#verifica_dlg").dialog({
                            closeOnEscape: true,
                            height: 500 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Verificador de Informacion',
                            width: 600
                            });
    
     var urllista = "index.php?module=Opportunities&action=verificainfo";

                jQuery("#verficainfo").text("verificando informacion...");
                jQuery("#verficainfo").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#verficainfo").html(response);
                    }else
                        return false;
                });

    return false;
 }
 return false;

}
guardar=function(){
    jQuery("#save_personalizado").attr("disabled",true);
//if(check_form('EditView')){
  SUGAR.ajaxUI.submitForm(document.forms['EditView']);return false;
 //}else
   //alert('Existio un problema ... Comuniquese con el administrador');
return false;

}

success=function (){
    
    return false;
}

function formato(data)
{
    var string='{';
    jQuery.each(data, function(i, field){
        if((field.name!='action')&&(field.name!='return_module') && (field.name!='return_action') && (field.value!='return_id')){
            if(field.value!='')
               string+='"'+field.name+'":"'+field.value+'",';
            else
               string+='"'+field.name+'":"",';
        }   
      });
      string=string.substring(0,string.length-1);
      string+='}';
    
    return jQuery.parseJSON(string);
}


check_custom_data=function(){
    openVerificacion();
    return false;
}