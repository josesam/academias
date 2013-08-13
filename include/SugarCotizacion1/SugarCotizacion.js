/*
 *
 * @author Jose Sambrano
 */


        var fila=0;
        var items=1;
        var from_base=false
        this.hacerFila = function(id, celdas){
		html = "<tr id="+id+">";
		for(var i=0;i<celdas.length;i++)
			html += "<td>"+celdas[i]+"</td>";
		html += "</tr>";
		return html;
	};
        this.limpiarProductos = function(){
		$('tr[id^=prod_row_]').remove();
	};

        cargarMaterial=function(tableId,o){

        from_base=true;
        for(i=0;i<=o.length;i++){
           
            addMaterial(
            tableId,
            o[i].id,
            o[i].item_id,
            o[i].item,
            o[i].cantidad,
            o[i].codigo,
            o[i].descripcion,
            o[i].valorUnitario,
            o[i].texto,
            o[i].valorTotal,
            o[i].caudalDisenio,
            o[i].presionDisenio,
            o[i].diametroConexion,
            o[i].potencia,
            o[i].dimensiones,
                             o[i].capacidadRata,
                             o[i].instalacionTipo,
                             o[i].frecuenciaRegeneracion,
                             o[i].membranTipo,
                             o[i].inyeccionQuimica,
                             o[i].procesoTipo,
                             o[i].proveedor,
                             o[i].tipoProveedor,
                             o[i].comisionAreaTecnica,
                             o[i].comisionVentas,
                             o[i].utilidad,
                             o[i].comisionTarjeta,
                             o[i].retrolavado,
                             o[i].rinse,
                             o[i].brine,
                             o[i].tds
            );
         
        }
            from_base=false;
}


         addMaterial=function(tableId,
                             id,
                             item_id,
                             item,
                             cantidad,
                             codigo,
                             descripcion,
                             valorUnitario,
                             texto_val,
                             valorTotal,
                             caudalDisenio,
                             presionDisenio,
                             diametroConexion,
                             potencia_val,
                             dimensiones_val,
                             capacidadRata_val,
                             instalacionTipo_val,
                             frecuenciaRegeneracion_val,
                             membranTipo_val,
                             inyeccionQuimica_val,
                             procesoTipo_val,
                             proveedor_val,
                             tipoProveedor_val,
                             comisionAreaTecnica_val,
                             comisionVentas_val,
                             utilidad_val,
                             comisionTarjeta_val,
                             retrolavado_val,
                             rinse_val,
                             brine_val,
                             tds_val
                             
                             ){
           
             var el = document.getElementById("prod_row_"+fila);
             if(el) return
             if (typeof(item_id)=='undefined')
                    return;
             if (item_id=='')
                    return;
                
		id_control = "<input type='hidden' name='prod_"+fila+"' id='prod_"+fila+"' value='"+verifica(item_id)+"' />";
                id = "<input type='hidden' name='id_"+fila+"' id='id_"+fila+"' value='"+verifica(id)+"' />";
                texto = "<input type='hidden' name='texto_"+fila+"' id='texto_"+fila+"' value='"+verifica(texto_val)+"' />";
		cant_control = "<input type='text' name='cant_"+fila+"' id='cant_"+fila+"' value='"+verifica(cantidad)+"' size='2' class='datos'/>";
		precio_control = "<input type='text' name='precio_"+fila+"' id='precio_"+fila+"' value='"+verifica(valorUnitario)+"' size='10' class='numeric' />";
                clase_codigo = "<input type='text' name='clase_codigo_"+fila+"' id='clase_id_"+fila+"' value='"+verifica(codigo)+"' size='20' class='decimal' />";

		catalogo_valor = "<input readonly='true' type='text' name='valor_catalogo_"+fila+"' id='valor_catalogo_"+fila+"' value='"+items+"' size='3'  />";
                descripcion_control = "<input readonly='true'  type='text' name='descripcion_control_"+fila+"' id='descripcion_control_"+fila+"' value='"+verifica(descripcion)+"' size='90'/>";
                valor_total = "<input type='text' readonly='true' name='valor_total_"+fila+"' id='valor_total_"+fila+"' value='"+verifica(valorTotal)+"' size='10' class='numeric' />";
                caudal_disenio = "<input type='hidden' name='caudal_disenio_"+fila+"' id='caudal_disenio_"+fila+"' value='"+verifica(caudalDisenio)+"' size='5' class='numeric' />";
                presion_disenio = "<input type='hidden' name='presion_disenio_"+fila+"' id='presion_disenio_"+fila+"' value='"+verifica(presionDisenio)+"' size='5' class='numeric' />";
                diametro_conexion = "<input type='hidden' name='diametro_conexion_"+fila+"' id='diametro_conexion_"+fila+"' value='"+verifica(diametroConexion)+"' size='5' class='numeric' />";
                potencia = "<input type='hidden' name='potencia_"+fila+"' id='potencia_"+fila+"' value='"+verifica(potencia_val)+"' size='5' class='numeric' />";
                dimensiones = "<input type='hidden' name='dimensiones_"+fila+"' id='dimensiones_"+fila+"' value='"+verifica(dimensiones_val)+"' size='5' class='numeric' />";
                capacidad_rata = "<input type='hidden' name='capacidad_rata_"+fila+"' id='capacidad_rata_"+fila+"' value='"+verifica(capacidadRata_val)+"' size='5' class='numeric' />";
                instalacion_tipo = "<input type='hidden' name='instalacion_tipo_"+fila+"' id='instalacion_tipo_"+fila+"' value='"+verifica(instalacionTipo_val)+"' size='5' class='numeric' />";
                frecuencia = "<input type='hidden' name='frecuencia_"+fila+"' id='frecuencia_"+fila+"' value='"+verifica(frecuenciaRegeneracion_val)+"' size='5' class='numeric' />";
                membran_tipo = "<input type='hidden' name='membran_tipo_"+fila+"' id='membran_tipo_"+fila+"' value='"+verifica(membranTipo_val)+"' size='5' class='numeric' />";
                inyeccion_quimica = "<input type='hidden' name='inyeccion_quimica_"+fila+"' id='inyeccion_quimica_"+fila+"' value='"+verifica(inyeccionQuimica_val)+"' size='5' class='numeric' />";
                procesoTipo = "<input type='hidden' name='procesoTipo_"+fila+"' id='procesoTipo_"+fila+"' value='"+verifica(procesoTipo_val)+"' size='5'  />";
                proveedor = "<input type='hidden' name='proveedor_"+fila+"' id='proveedor_"+fila+"' value='"+verifica(proveedor_val)+"' size='5'  />";
                tipoProveedor = "<input type='hidden' name='tipoProveedor_"+fila+"' id='tipoProveedor_"+fila+"' value='"+verifica(tipoProveedor_val)+"' size='5'  />";
                comisionAreaTecnica = "<input type='hidden' name='comisionAreaTecnica_"+fila+"' id='comisionAreaTecnica_"+fila+"' value='"+verifica(comisionAreaTecnica_val)+"' size='5' class='numeric' />";
                comisionVentas = "<input type='hidden' name='comisionVentas_"+fila+"' id='comisionVentas_"+fila+"' value='"+verifica(comisionVentas_val)+"' size='5' class='numeric' />";
                utilidad = "<input type='hidden' name='utilidad_"+fila+"' id='utilidad_"+fila+"' value='"+verifica(utilidad_val)+"' size='5' class='numeric' />";
                comisionTarjetas = "<input type='hidden' name='comisionTarjetas_"+fila+"' id='comisionTarjetas_"+fila+"' value='"+verifica(comisionTarjeta_val)+"' size='5' class='numeric' />";
                retrolavado = "<input type='hidden' name='retrolavado_"+fila+"' id='retrolavado_"+fila+"' value='"+verifica(retrolavado_val)+"' size='5' class='numeric' />";
                brine = "<input type='hidden' name='brine_"+fila+"' id='brine_"+fila+"' value='"+verifica(brine_val)+"' size='5' class='numeric' />";
                rinse = "<input type='hidden' name='rinse_"+fila+"' id='rinse_"+fila+"' value='"+verifica(rinse_val)+"' size='5' class='numeric' />";
                tds = "<input type='hidden' name='tds_"+fila+"' id='tds_"+fila+"' value='"+verifica(tds_val)+"' size='5' class='numeric' />";
                if($("#convertida").val()==0){
                remove_control = "<a href='javascript:void(0);' onclick='borrar(\""+fila+"\");'>X</a>";
                }else{
                  $("#anadir").attr("disabled",true);
                  remove_control = "<span>X</span>";
                }
                abrir = "<img alt='Datos Tecnicos' src='custom/include/images/lineas.gif'  onclick=\"javascript:abrirDetalles("+fila+");\"></img>";
             celdas=[
                 catalogo_valor,cant_control,clase_codigo,descripcion_control,
                 precio_control,valor_total,
                 remove_control,abrir,id_control,id,texto,caudal_disenio,presion_disenio,
                 diametro_conexion,potencia,dimensiones,capacidad_rata,instalacion_tipo,
                 frecuencia,membran_tipo,inyeccion_quimica,procesoTipo,proveedor,tipoProveedor,
                 comisionAreaTecnica,comisionVentas,utilidad,comisionTarjetas,retrolavado,brine,rinse,tds
             ];
            row = this.hacerFila('prod_row_'+fila, celdas);
	    $('#'+tableId).append(row);
            fila++;
            items++;
            if(from_base==false)
            reordenar();
        }

   function reordenar(){
       var cont=1;
       for (i=0;i<=fila;i++){
          
           if(typeof($("#valor_catalogo_"+i).val())!='undefined'){
               $("#valor_catalogo_"+i).val(cont);
               cont++;
           }
       }
       items=cont;
   }
   function borrar(fila){
       $("#prod_row_"+fila).remove();
       sumar();
       reordenar();
   }
   function verifica(val){
        if(typeof(val)=='undefined')
        return ''
         if(val==null)
        return ''

        return val;
    }
 function maneja_tiponegocio(){
 
     for(i=0;i<fila;i=i+1 ){
         if(($("#tiponegocio").val()=="Domestico")||($("#tiponegocio").val()=="Corporativo")){
            //alert($("#presion_disenio_"+i).val())
            $("#caudal_disenio_"+i).attr("readonly",true);
            $("#presion_disenio_"+i).attr("readonly",true);
            $("#diametro_conexion_"+i).attr("readonly",true);
            $("#potencia_"+i).attr("readonly",true);
            $("#dimensiones_"+i).attr("readonly",true);
            $("#capacidad_rata_"+i).attr("readonly",true);
            $("#instalacion_tipo_"+i).attr("readonly",true);
            //$("#frecuencia_"+i).hide();
            $("#membran_tipo_"+i).attr("readonly",true);
            $("#inyeccion_quimica_"+i).attr("readonly",true);       
         }else{
            $("#caudal_disenio_"+i).attr("readonly",false);
            $("#presion_disenio_"+i).attr("readonly",false);
            $("#diametro_conexion_"+i).attr("readonly",false);
            $("#potencia_"+i).attr("readonly",false);
            $("#dimensiones_"+i).attr("readonly",false);
            $("#capacidad_rata_"+i).attr("readonly",false);
            $("#instalacion_tipo_"+i).attr("readonly",false);
            //$("#frecuencia_"+i).show();
            $("#membran_tipo_"+i).attr("readonly",false);
            $("#inyeccion_quimica_"+i).attr("readonly",false);
         }

     }

        
 }
 function abrirDetalles(valor){
          $("#pfila_actual").val(valor)
          cargaPopup(valor)
                   $("#domestico").dialog({
                            closeOnEscape: true,
                            height: 300 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Datos Tecnicos',
                            width: 800
                            });

 }
 function cargaPopup(valor){

               $("#pcaudal_disenio").val($("#caudal_disenio_"+valor).val());
               $("#ppresion_disenio").val($("#presion_disenio_"+valor).val());
               $("#pdiametro_conexion").val($("#diametro_conexion_"+valor).val());
               $("#ppotencia").val($("#potencia_"+valor).val());
               $("#pdimensiones").val($("#dimensiones_"+valor).val());
               $("#pcapacidad_rata").val($("#capacidad_rata_"+valor).val());
               $("#pinstalacion_tipo").val($("#instalacion_tipo_"+valor).val());
               $("#pfrecuencia").val($("#frecuencia_"+valor).val());
               $("#pmem_tipo").val($("#membran_tipo_"+valor).val());
               $("#pinyeccion_quimica").val($("#inyeccion_quimica_"+valor).val());


               $("#pprocesoTipo").val($("#procesoTipo_"+valor).val());
               $("#pproveedor").val($("#proveedor_"+valor).val());
               $("#ptipoProveedor").val($("#tipoProveedor_"+valor).val());
               $("#pcomisionAreaTecnica").val($("#comisionAreaTecnica_"+valor).val());
               $("#putilidad").val($("#utilidad_"+valor).val());
               $("#pcomisionTarjetas").val($("#comisionTarjetas_"+valor).val());


               $("#pcomisionVentas").val($("#comisionVentas_"+valor).val());

               $("#pretrolavado").val($("#retrolavado_"+valor).val());
               $("#prinse").val($("#rinse_"+valor).val());
               $("#pbrine").val($("#brine_"+valor).val());
               $("#ptds").val($("#tds_"+valor).val());
              



 }

 function copiar(){
               id=$("#pfila_actual").val();
               $("#caudal_disenio_"+id).val($("#pcaudal_disenio").val());
               $("#presion_disenio_"+id).val($("#ppresion_disenio").val());
               $("#diametro_conexion_"+id).val($("#pdiametro_conexion").val());
               $("#potencia_"+id).val($("#ppotencia").val());
               $("#dimensiones_"+id).val($("#pdimensiones").val());
               $("#capacidad_rata_"+id).val($("#pcapacidad_rata").val());
               $("#instalacion_tipo_"+id).val($("#pinstalacion_tipo").val());
               $("#frecuencia_"+id).val($("#pfrecuencia").val());
               $("#membran_tipo_"+id).val($("#pmem_tipo").val());
               $("#inyeccion_quimica_"+id).val($("#pinyeccion_quimica").val());

               $("#procesoTipo_"+id).val($("#pprocesoTipo").val());
               $("#proveedor_"+id).val($("#pproveedor").val());
               $("#tipoProveedor_"+id).val($("#ptipoProveedor").val());
               $("#comisionAreaTecnica_"+id).val($("#pcomisionAreaTecnica").val());
               $("#utilidad_"+id).val($("#putilidad").val());
               $("#comisionTarjetas_"+id).val($("#pcomisionTarjetas").val());
               $("#comisionVentas_"+id).val($("#pcomisionVentas").val());

               $("#retrolavado_"+id).val($("#pretrolavado").val());
               $("#rinse_"+id).val($("#prinse").val());
               $("#brine_"+id).val($("#pbrine").val());
               $("#tds_"+id).val($("#ptds").val());


               data={
                  cantidad:$("#cant_"+id).val(),
                  utilidad:$("#utilidad_"+id).val(),
                  tipoproveedor:$("#tipoProveedor_"+id).val(),
                  costo:$("#precio_"+id).val(),
                  comisionVenta:$("#comisionVentas_"+id).val(),
                  comisionareatecnica:$("#comisionAreaTecnica_"+id).val(),
                  comisiontarjeta:$("#comisionTarjetas_"+id).val()
               }



               var datos;
               var url = "index.php?&module=Accounts&action=calculo";
               $.post(url,data,function(responses){
                 datos=eval(responses);
                  for(key in datos){
                    $('#valor_total_'+id).val(datos[key].valor);
                   }
                   $('#domestico').dialog("close");
                   sumar();
               })
               



 }

function sumar(){

    var valor=new Number(0.00);
    for (i=0;i<fila;i++){
     if(!isNaN(parseFloat($("#valor_total_"+i).val())))
     valor+=parseFloat($("#valor_total_"+i).val())
     }
   if(parseFloat(valor)>0)
    $("#amount").val(valor.toFixed(2));
   else
        $("#amount").val("");
}