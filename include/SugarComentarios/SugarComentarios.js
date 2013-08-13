/*
 *
 * @author Jose Sambrano
 */


        
        var fila=0;

        this.hacerFila = function(id, celdas){
		html = "<tr id="+id+">";
		for(var i=0;i<celdas.length;i++)
			html += "<td>"+celdas[i]+"</td>";
		html += "</tr>";
		return html;
	};
        this.limpiarProductos = function(){
		jQuery('tr[id^=prod_row_]').remove();
	};

        cargarMaterial=function(tableId,o){

        
        for(i=0;i<o.length;i++){
           
            addMaterial(
            tableId,
            o[i].id,
            o[i].idprograma,
            o[i].programa,
            o[i].horas,
            o[i].coordinador,
            o[i].total
            
            );
         
        }
            
}


         addMaterial=function(tableId,
                             id,
                             idprograma,
                             programa,
                             horas,
                             coordinador,
                             valor
                             

                             ){

             var el = document.getElementById("prod_row_"+fila);
             if(el) return
             
             if (idprograma=='')
                    return;
             if (programa=='')
                    return;
             if (horas=='')
                    return;
            
              if(verificar_existencia()){

                  alert("Solo se puede atar un programa a la oportunidad");
                  return;
              }

		id_control = "<input type='hidden' name='prod_"+fila+"' id='prod_"+fila+"' value='"+verifica(fila)+"' />";
                idtxt = "<input type='hidden' name='id_"+fila+"' id='id_"+fila+"' value='"+verifica(id)+"' />";
                idprogramatxt = "<input type='hidden' readonly='true' name='idprogramatxt_"+fila+"' id='idprogramatxt_"+fila+"' value='"+verifica(idprograma)+"' />";
                programatxt = "<input type='text' readonly='true' name='programatxt_"+fila+"' id='programatxt_"+fila+"' value='"+verifica(programa)+"' size='25' />";
		coordinadortxt = "<input type='text' name='coordinadortxt_"+fila+"' id='coordinadortxt_"+fila+"' value='"+verifica(coordinador)+"' size='20'  />";
                valortxt = "<input readonly='true'  type='text' name='valortxt_"+fila+"' id='valortxt_"+fila+"' value='"+verifica(valor)+"' size='15'/>";
                horastxt = "<input readonly='true'  type='text' name='horastxt_"+fila+"' id='horas_"+fila+"' value='"+verifica(horas)+"' size='5'/>";
                
           
                remove_control = "<a href='javascript:void(0);' onclick='borrar(\""+fila+"\");'>X</a>";
                
                ver = "<a href='javascript:void(0);' onclick='buscar_detalle(\""+idprograma+"\");'>Ver Contenido</a>";
                

             celdas=[
                 programatxt,horastxt,coordinadortxt,valortxt,
                 remove_control,ver,idtxt,id_control,idprogramatxt
             ];
            row = this.hacerFila('prod_row_'+fila, celdas);
	    jQuery('#'+tableId).append(row);
            fila++;
            sumar();
   
        }

   
   borrar=function (fila){
       jQuery("#prod_row_"+fila).remove();
       
      
   }
   verifica=function (val){
        if(typeof(val)=='undefined')
        return ''
         if(val==null)
        return ''

        return val;
    }

sumar=function (){

    var valor=new Number(0.00);
    for (i=0;i<fila;i++){
     if(!isNaN(parseFloat(jQuery("#valortxt_"+i).val())))
     valor+=parseFloat(jQuery("#valortxt_"+i).val())
     }
   if(parseFloat(valor)>0)
        jQuery("#amount").val(valor.toFixed(2));
   else
     jQuery("#amount").val("");
}

abrir=function(){
                jQuery("#programa").dialog({
                            closeOnEscape: true,
                            height: 300 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Datos',
                            width: 500
                });

}
buscar_programas=function(){
 var data={


            medio:jQuery("#programa_pop").val(),
            categoria:jQuery("#categoria_c").val()

        }

                var urllista = "index.php?&module=Opportunities&action=programas";
                jQuery("#busqueda_programas").text("verificando informacion...");
                jQuery("#busqueda_programas").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#busqueda_programas").html(response);
                    }else
                        return false;
                });

    
}

buscar_detalle=function(id){
 var data={


            medio:id

        }

                var urllista = "index.php?&module=Opportunities&action=contenido";
                jQuery("#detalle_programa").text("verificando informacion...");
                jQuery("#detalle_programa").load(urllista,data, function(response, status, xhr){
                    if(status=="success"){
                        jQuery("#detalle_programa").html(response);
                    }else
                        return false;
                });


}


verificar_existencia=function(){
    valor=false;
    for (i=0;i<fila;i++){
         if(!isNaN(parseFloat(jQuery("#valortxt_"+i).val())))
         valor=true
    }
   return valor;
}



