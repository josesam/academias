/* 
 @author Jose Sambrano
 */
jQuery.noConflict();
jQuery(document).ready(function() {


    });




openMedios=function(){  
                jQuery("#medios_dlg").dialog({
                            closeOnEscape: true,
                            height: 300 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Categorías',
                            width: 500
                            }); 
}

buscarMedios=function (){
  var data={
            medio:jQuery("#filtro_medios").val()
        }

 var urllista = "index.php?&module=ee_Items&action=medios";
                jQuery("#medios_div").text("buscando ...");
                jQuery("#medios_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#medios_div").html(response);
                    }else
                        return false;
                });
}




selectMedio=function(valor){
      jQuery("#categoria").val(valor);
      jQuery("#medios_dlg").dialog("close");
}





