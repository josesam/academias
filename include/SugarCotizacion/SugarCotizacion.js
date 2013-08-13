/*
 *
 * @author Jose Sambrano
 */

        
        
        var fila=0;
        var retrieve=true;
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
            o[i].total,
            o[i].fecha_programa,
            o[i].fecha_validez,
            o[i].fuente,
            o[i].tipoprograma
             );
         
        }
            retrieve=false;
};


         addMaterial=function(tableId,
                             id,
                             idprograma,
                             programa,
                             horas,
                             coordinador,
                             valor,
                             fecha_programa,
                             fecha_validez,
                             tipo_programa,
                             presencial

                             ){

             jQuery("#detalle_programa").text('');
             var el = document.getElementById("prod_row_"+fila);
             if(el) return;

             
             if (idprograma==='')
                    return;
             if (programa==='')
                    return;
             if (horas==='')
                    return;
             if(typeof(idprograma)==='undefined')
                return;
            if(typeof(programa)==='undefined')
                return;
            if(typeof(horas)==='undefined')
                return;


             if(jQuery("input[name=account_name]").val()===""){
                 check_form('EditView');
                 return ;
             }
             
             if(typeof(jQuery("input[name=account_name]").val())==="undefined"){
                 check_form('EditView');
                 return ;
             }
              
             if(jQuery("#categoria_c").val()==='Abierto'){
                 if(tipo_programa==='manual'){
                     alert("No puede ingresar un curso manual para una categoria abierta");
                  return;
                 }
             }

              if(verificar_existencia()){
                  alert("Solo se puede atar un programa a la oportunidad");
                  return;
              }
              jQuery("#name").val(jQuery("input[name=account_name]").val()+"-"+programa);
              jQuery("#date_closed").val(fecha_programa);
              
              jQuery('#tiponegocio_c').val(presencial);
             // jQuery("#fechavalidez_c").val(fecha_validez);
               jQuery("#amountreal").val(valor);


               
               if(jQuery("#categoria_c").val()!=='Incompany'){
                jQuery("#amount").val(multiplicar(jQuery("#numeroparticipantes").val(),valor));
               }else{
                
                jQuery("#amount").val(multiplicar("1",valor));
               }

		id_control = "<input type='hidden' name='prod_"+fila+"' id='prod_"+fila+"' value='"+verifica(fila)+"' />";
                idtxt = "<input type='hidden' name='id_"+fila+"' id='id_"+fila+"' value='"+verifica(id)+"' />";
                idprogramatxt = "<input type='hidden' readonly='true' name='idprogramatxt_"+fila+"' id='idprogramatxt_"+fila+"' value='"+verifica(idprograma)+"' />";
                programatxt = "<input type='text' readonly='true' name='programatxt_"+fila+"' id='programatxt_"+fila+"' value='"+verifica(programa)+"' size='40' />";
		coordinadortxt = "<input type='text' readonly='true' name='coordinadortxt_"+fila+"' id='coordinadortxt_"+fila+"' value='"+verifica(coordinador)+"' size='20'  />";
                valortxt = "<input readonly='true'  type='text' name='valortxt_"+fila+"' id='valortxt_"+fila+"' value='"+verifica(valor)+"' size='15'/>";
                horastxt = "<input readonly='true'  type='text' name='horastxt_"+fila+"' id='horas_"+fila+"' value='"+verifica(horas)+"' size='5'/>";
                fechaprogramatxt = "<input readonly='true'  type='hidden' name='fechaprogramatxt_"+fila+"' id='fechaprogramatxt_"+fila+"' value='"+verifica(fecha_programa)+"' size='10'/>";
                fechavalideztxt = "<input readonly='true'  type='hidden' name='fechavalideztxt_"+fila+"' id='fechavalideztxt_"+fila+"' value='"+verifica(fecha_validez)+"' size='10'/>";
                tipoprogramatxt= "<input readonly='true'  type='hidden' name='tipoprogramatxt_"+fila+"' id='tipoprogramatxt_"+fila+"' value='"+verifica(tipo_programa)+"' size='10'/>";
                presencialtxt= "<input readonly='true'  type='hidden' name='presencialtxt_"+fila+"' id='presencialtxt_"+fila+"' value='"+verifica(presencial)+"' size='10'/>";


               if(jQuery("#convertida_interface").val()===0)
                remove_control = "<a href='javascript:void(0);' onclick='borrar(\""+fila+"\");'>X</a>";
                else
                    remove_control = "X";
                ver = "<a href='javascript:void(0);' onclick='buscar_detalle(\""+idprograma+"\");'>Ver Contenido</a>";
                borrar_detalle = "<a href='javascript:void(0);' onclick='borrar_contenido();'>Limpiar</a>";
                

             celdas=[
                 programatxt,horastxt,coordinadortxt,valortxt,
                 remove_control,ver,borrar_detalle,idtxt,id_control,idprogramatxt,fechaprogramatxt,fechavalideztxt,tipoprogramatxt,presencialtxt
             ];
            row = this.hacerFila('prod_row_'+fila, celdas);
	    jQuery('#'+tableId).append(row);
            fila++;
            if(!retrieve)
                jQuery("#programa").dialog("close");

           // sumar();
   
        };

   
   borrar=function (fila){
       jQuery("#name").val('');
       jQuery("#amount").val('');
       jQuery("#amountreal").val('');
       jQuery("#date_closed").val('');
       jQuery("#detalle_programa").text('');
       jQuery("#prod_row_"+fila).remove();             
   };
   verifica=function (val){
        if(typeof(val)==='undefined')
            return '';
        if(val===null)
            return '';

        return val;
    };

sumar=function (){

    var valor=new Number(0.00);
    for (i=0;i<fila;i++){
     if(!isNaN(parseFloat(jQuery("#valortxt_"+i).val())))
     valor+=parseFloat(jQuery("#valortxt_"+i).val());
     }
   if(parseFloat(valor)>0)
        jQuery("#amount").val(valor.toFixed(2));
   else
     jQuery("#amount").val("0.00");
};

abrir=function(){
                jQuery("#programa").dialog({
                            closeOnEscape: true,
                            height: 600 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Datos',
                            width: 800
                });

};
buscar_programas=function(){
 if(jQuery("#fuente_programa").val()==="database"){
 var data={
            medio:jQuery("#programa_pop").val(),
            categoria:jQuery("#categoria_c").val()

        };

                var urllista = "index.php?&module=Opportunities&action=programas";
                jQuery("#busqueda_programas").text("verificando informacion...");
                jQuery("#busqueda_programas").load(urllista,data, function(response, status, xhr){
                    if(status==="success"){
                        jQuery("#busqueda_programas").html(response);
                    }else
                        return false;
                });

 }else{
      addMaterial('OpportunitiesAmbienteTable',
                  '',
                  '-99',
                  jQuery("#programamanual_pop").val(),
                  jQuery("#horasmanual_pop").val(),
                  '',
                  jQuery("#monto_pop").val(),
                  '',
                  '',
                  'manual',
                  jQuery("#tipoprograma_pop").val()
                 );

 }
};

buscar_detalle=function(id){
 var data={


            medio:id

        };

                var urllista = "index.php?&module=Opportunities&action=contenido";
                jQuery("#detalle_programa").text("verificando informacion...");
                jQuery("#detalle_programa").load(urllista,data, function(response, status, xhr){
                    if(status==="success"){
                        jQuery("#detalle_programa").html(response);
                    }else
                        return false;
                });


};

borrar_contenido=function(){
    
    jQuery("#detalle_programa").text('');
};


verificar_existencia=function(){
    valor=false;
    for (i=0;i<fila;i++){
         if(!isNaN(parseFloat(jQuery("#valortxt_"+i).val())))
         valor=true;
    }
   return valor;
};

borrar_existencia=function(){
    
    for (i=0;i<fila;i++){
         if(!isNaN(parseFloat(jQuery("#valortxt_"+i).val())))
         borrar(i);
    }
   return ;
};



multiplicar=function (cantidad,valor){
    
if(typeof(cantidad)==='undefined')
  return 0;
if(typeof(valor)==='undefined')
  return 0;

return parseFloat(valor.replace(/\,/g,"")) * parseFloat(cantidad.replace(/\,/g,""));
};