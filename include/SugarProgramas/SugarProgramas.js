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

        
        for(ks=0;ks<o.length;ks++){
        
            addMaterial(
            tableId,
            o[ks].id,
            o[ks].modulo,
            o[ks].profesor,
            o[ks].horas,
            o[ks].fechainicio,
            o[ks].fechafin,
            o[ks].lugar,
            o[ks].tipo,
            o[ks].nivel,
            o[ks].instalaciones,
            o[ks].idmodulo,
            o[ks].idprofesor,
            o[ks].paralelo
            
            );
         
        }
            
};


         addMaterial=function(tableId,
                             id,
                             modulo,
                             profesor,
                             horas,
                             fechainicio,
                             fechafin,
                             lugar,
                             tipo,
                             nivel,
                             instalaciones,
                             idmodulo,
                             idprofesor,
                             paralelo

                             ){

             var el = document.getElementById("prod_row_"+fila);
             if(el) return;


              if(typeof(modulo)==='undefined')
                return;
            if(typeof(profesor)==='undefined')
                profesor="Sin Profesor";
            if(typeof(tipo)==='undefined')
                return;

             if (modulo==='')
                    return;
             if (profesor===''){
                 profesor="Sin Profesor";
                 
             }
             if (tipo==='')
                    return;

             if(typeof(idmodulo)==='undefined')
                return;
            if(typeof(idprofesor)==='undefined')
                idprofesor="-99";

              if (idmodulo==='')
                    return;
             if (idprofesor==='')
                    idprofesor="-99";


             if((tipo!=="o")&&(tipo!=="p")&&(tipo!=="s")){
                 alert("El tipo no es un valor permitido. Los valores permitidos son p ,o,s");
                 return;
             }

		id_control = "<input type='hidden' name='prod_"+fila+"' id='prod_"+fila+"' value='"+verifica(fila)+"' />";
                idtxt = "<input type='hidden' name='id_"+fila+"' id='id_"+fila+"' value='"+verifica(id)+"' />";
                modulotxt = "<input type='text' readonly='true' name='modulotxt_"+fila+"' id='modulotxt_"+fila+"' value='"+verifica(modulo)+"' size='25' />";
		
		
                profesortxt = "<input type='text' readonly='true' name='profesortxt_"+fila+"' id='profesortxt_"+fila+"' value='"+verifica(profesor)+"' size='25' />";
		horastxt = "<input type='text' name='horastxt_"+fila+"' id='horastxt_"+fila+"' value='"+verifica(horas)+"' size='3'  />";
                fechainiciotxt = "<input readonly='true'  type='text' name='fechainiciotxt_"+fila+"' id='fechainiciotxt_"+fila+"' value='"+verifica(fechainicio)+"' size='10'/>";
                fechafintxt = "<input readonly='true'  type='text' name='fechafintxt_"+fila+"' id='fechafintxt_"+fila+"' value='"+verifica(fechafin)+"' size='10'/>";
               
                tipotxt = "<input readonly='true'  type='text' name='tipotxt_"+fila+"' id='tipotxt_"+fila+"' value='"+verifica(tipo)+"' size='5'/>";
                niveltxt = "<input readonly='true'  type='text' name='niveltxt_"+fila+"' id='niveltxt_"+fila+"' value='"+verifica(nivel)+"' size='5'/>";
                lugartxt = "<input readonly='true'  type='text' name='lugartxt_"+fila+"' id='lugartxt_"+fila+"' value='"+verifica(lugar)+"' size='15'/>";
                instalacionestxt = "<input readonly='true'  type='text' name='instalacionestxt_"+fila+"' id='instalacionestxt_"+fila+"' value='"+verifica(instalaciones)+"' size='15'/>";
                paralelotxt = "<input readonly='true'  type='text' name='paralelotxt_"+fila+"' id='paralelotxt_"+fila+"' value='"+verifica(paralelo)+"' size='10'/>";

                idmodulotxt = "<input readonly='true'  type='hidden' name='idmodulotxt_"+fila+"' id='idmodulotxt_"+fila+"' value='"+verifica(idmodulo)+"' size='15'/>";
                idprofesortxt = "<input readonly='true'  type='hidden' name='idprofesortxt_"+fila+"' id='idprofesortxt_"+fila+"' value='"+verifica(idprofesor)+"' size='15'/>";
                
           
                remove_control = "<a href=\"javascript:void(0);\" onclick=\"javascript:borrar_fila(\'"+fila+"\');\">X</a>";
                editar_control = "<a href=\"javascript:void(0);\" onclick=\"javascript:editar(\'"+fila+"\');\">E</a>";
//         
             celdas=[
                 modulotxt,profesortxt,tipotxt,horastxt,niveltxt,fechainiciotxt,
                 fechafintxt,lugartxt,instalacionestxt,paralelotxt,
                 remove_control,editar_control,idtxt,idmodulotxt,idprofesortxt,id_control
             ];
            row = this.hacerFila('prod_row_'+fila, celdas);
	    jQuery('#'+tableId).append(row);
            fila++;
            
            sumar();
            copiar_fecha();
   
        };

      editarMaterial=function(
                             modulo,
                             profesor,
                             horas,
                             fechainicio,
                             fechafin,
                             lugar,
                             tipo,
                             nivel,
                             instalaciones,
                             idmodulo,
                             idprofesor,
                             f,
                             paralelo

                             ){

            

              if(typeof(modulo)==='undefined')
                return;
            
            if(typeof(profesor)==='undefined')
                profesor="Sin Profesor";
            
            if(typeof(tipo)==='undefined')
                return;
            
             if (modulo==='')
                    return;
            
            if (profesor===''){
                 profesor="Sin Profesor";

             }
            
             if (tipo==='')
                    return;
            
             if(typeof(idmodulo)==='undefined')
                return;
            
            if(typeof(idprofesor)==='undefined')
                profesor="-99";
            
              if (idmodulo==='')
                    return;
            
             if (idprofesor==='')
                    profesor="-99";
            

             if((tipo!=="o")&&(tipo!=="p")&&(tipo!=="s")){
                 alert("El tipo no es un valor permitido. Los valores permitidos son p ,o,s");
                 return;
             }
            
             jQuery("#modulotxt_"+f).val(modulo);
             jQuery("#profesortxt_"+f).val(profesor);
             jQuery("#horastxt_"+f).val(horas);
             jQuery("#fechainiciotxt_"+f).val(fechainicio);
             jQuery("#fechafintxt_"+f).val(fechafin);
             jQuery("#lugartxt_"+f).val(lugar);
             jQuery("#tipotxt_"+f).val(tipo);
             jQuery("#niveltxt_"+f).val(nivel);
             jQuery("#instalacionestxt_"+f).val(instalaciones);
             jQuery("#idmodulotxt_"+f).val(idmodulo);
             jQuery("#idprofesortxt_"+f).val(idprofesor);
             jQuery("#paralelotxt_"+f).val(paralelo);

                
            

            sumar();
            copiar_fecha();

        };


   
   borrar_fila=function(fila){
       
       jQuery("#prod_row_"+fila).remove();
       
      
   };
   editar=function (fila){
             jQuery("#paralelo_pop1").val(jQuery("#paralelotxt_"+fila).val());
             jQuery("#modulo_pop1").val(jQuery("#modulotxt_"+fila).val());
             jQuery("#profesor_pop1").val(jQuery("#profesortxt_"+fila).val());
             jQuery("#horas_pop1").val(jQuery("#horastxt_"+fila).val());
             jQuery("#fechaincio_pop1").val(jQuery("#fechainiciotxt_"+fila).val());
             jQuery("#fechafinal_pop1").val(jQuery("#fechafintxt_"+fila).val());
             jQuery("#lugar_pop1").val(jQuery("#lugartxt_"+fila).val());
             jQuery("#tipo_pop1").val(jQuery("#tipotxt_"+fila).val());
             jQuery("#nivel_pop1").val(jQuery("#niveltxt_"+fila).val());
             jQuery("#instalaciones_pop1").val(jQuery("#instalacionestxt_"+fila).val());
             jQuery("#idmodulo_pop1").val(jQuery("#idmodulotxt_"+fila).val());
             jQuery("#idprofesor_pop1").val(jQuery("#idprofesortxt_"+fila).val());
             jQuery("#f_pop1").val(fila);
      

       jQuery("#programa1").dialog({
                            closeOnEscape: true,
                            height: 600 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Datos',
                            width: 1000
                });


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
    for (kl=0;kl<fila;kl++){
         if(!isNaN(parseFloat(jQuery("#horastxt_"+kl).val())))
                valor+=parseFloat(jQuery("#horastxt_"+kl).val());
     }
   if(parseFloat(valor)>0)
        jQuery("#nrohoras_c").val(valor.toFixed(2));
   else
        jQuery("#nrohoras_c").val("0.00");
};

abrir=function(){
                jQuery("#programa").dialog({
                            closeOnEscape: true,
                            height: 600 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Datos',
                            width: 1000
                });

};
generar_linea=function(){
            addMaterial('ee_ProgramasAmbienteTable','',
             jQuery("#modulo_pop").val(),
             jQuery("#profesor_pop").val(),
             jQuery("#horas_pop").val(),
             jQuery("#fechaincio_pop").val(),
             jQuery("#fechafinal_pop").val(),
             jQuery("#lugar_pop").val(),
             jQuery("#tipo_pop").val(),
             jQuery("#nivel_pop").val(),
             jQuery("#instalaciones_pop").val(),
             jQuery("#idmodulo_pop").val(),
             jQuery("#idprofesor_pop").val(),
             jQuery("#paralelo_pop").val()
            );
    
};

editar_linea=function(){
    
            editarMaterial(
             jQuery("#modulo_pop1").val(),
             jQuery("#profesor_pop1").val(),
             jQuery("#horas_pop1").val(),
             jQuery("#fechaincio_pop1").val(),
             jQuery("#fechafinal_pop1").val(),
             jQuery("#lugar_pop1").val(),
             jQuery("#tipo_pop1").val(),
             jQuery("#nivel_pop1").val(),
             jQuery("#instalaciones_pop1").val(),
             jQuery("#idmodulo_pop1").val(),
             jQuery("#idprofesor_pop1").val(),
             jQuery("#f_pop1").val(),
             jQuery("#paralelo_pop1").val()
            );

};

borrar_linea=function(){

             jQuery("#modulo_pop").val("");
             jQuery("#profesor_pop").val("");
             jQuery("#horas_pop").val("");
             jQuery("#fechaincio_pop").val("");
             jQuery("#fechafinal_pop").val("");
             jQuery("#lugar_pop").val("");
             jQuery("#tipo_pop").val("");
             jQuery("#nivel_pop").val("");
             jQuery("#instalaciones_pop").val("");
             jQuery("#paralelo_pop").val("");
             jQuery("#idmodulo_pop").val("");
             jQuery("#idprofesor_pop").val("");

            

};


borrar_editlinea=function(){

             jQuery("#modulo_pop1").val("");
             jQuery("#profesor_pop1").val("");
             jQuery("#horas_pop1").val("");
             jQuery("#fechaincio_pop1").val("");
             jQuery("#fechafinal_pop1").val("");
             jQuery("#lugar_pop1").val("");
             jQuery("#tipo_pop1").val("");
             jQuery("#nivel_pop1").val("");
             jQuery("#instalaciones_pop1").val("");
             jQuery("#paralelo_pop1").val("");
             jQuery("#idmodulo_pop1").val("");
             jQuery("#idprofesor_pop1").val("");



};

copiar_fecha=function(){
    var fechainicial;
    var fechafinal;
    for (t=0;t<fila;t++){
         if(!isNaN(parseFloat(jQuery("#fechainiciotxt_"+t).val()))){
                fechainicial=jQuery("#fechainiciotxt_"+t).val();
                break;
         }
     }
    for (j=fila;j>=0;j--){
         if(!isNaN(parseFloat(jQuery("#fechafintxt_"+j).val()))){
                fechafinal=jQuery("#fechafintxt_"+j).val();
                break;
         }
    }

   
     jQuery("#fechainicio_programa").val(fechainicial);
     jQuery("#fechafinal_programa").val(fechafinal);
   

};