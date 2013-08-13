/* 
 * 
 * @author josesambrano
 */

jQuery.noConflict();
jQuery(document).ready(function() {
  

jQuery("#filtro_participante").keypress(function(event) {
   if ( event.which == 13) { buscarParticipante(); }

});


    });

abrirParticipante=function(){
             jQuery("#participante_dlg").dialog({
                            closeOnEscape: true,
                            height: 600 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Participantes',
                            width: 600
                });
}

buscarParticipante=function (){
    var data={
            ejecucion:jQuery("#ee_ejecucionprograma_ee_evaluacionsciee_ejecucionprograma_ida").val(),
            nombre:jQuery("#filtro_participante").val()

        }
    var urllista = "index.php?&module=ee_EvaluacionSCI&action=participante";
                jQuery("#participantes_div").text("Buscando participante...");
                jQuery("#participantes_div").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#participantes_div").html(response);
                    }else
                        return false;
                });
}
selectParticipante=function (participante,idparticipante){
    jQuery("#participante").val(participante);
    jQuery("#idparticipante").val(idparticipante);
    jQuery("#name").val("Evaluación -"+participante);
    jQuery("#participante_dlg").dialog("close");
}