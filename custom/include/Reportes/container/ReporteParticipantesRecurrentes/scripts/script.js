$(document).ready(function() {
  $("#example").dataTable( {
                "oLanguage": {
			"sSearch": "Buscar:"
		},
                "sPaginationType": "full_numbers",
                "sDom": 'T<"clear">lfrtip',
		"fnFooterCallback": function ( nRow, aaData, iStart, iEnd, aiDisplay ) {
                    /*
                     * Calculate the total market share for all browsers in this table (ie inc. outside
                     * the pagination)
                     */
                    
                    var _total = 0;
                    
                    

                    /* Calculate the market share for browsers on this page */
                   

                    for ( var i=iStart ; i<iEnd ; i++ ){
                        _total+=1;
    
                        

                    }
                   /* Modify the footer row to match what we want */
                    var nCells = nRow.getElementsByTagName('th');
//                    nCells[2].innerHTML =parseInt(total_clientes) ;
//                    nCells[6].innerHTML =parseFloat(_total) ;
//
                    
                },
                "oTableTools": {
                        "sSwfPath": "custom/include/Reportes/scripts/tabletools/media/swf/copy_cvs_xls_pdf.swf",
			"aButtons": [
				"copy",
				"csv",
				"xls",
				{
					"sExtends": "pdf",
					"sPdfOrientation": "landscape",
					"sPdfMessage": ""
				},
				"print"
			]
		}

              
	} );
} );

reporte=function(){
            $("#reporte_div").dialog({
                            closeOnEscape: true,
                            width: $(window).width()-10,
                            height: $(window).height()-10,
                            hide: 'slide',
                            modal: true ,
                            title: 'Reportes'
                            
                            });

}

generar_reporte=function(){


var filtros={
    reporte:$("#nombre_reporte").val(),
    tiposervicio:$("#tiposervicio_grafico").val(),
    cedula_ruc:$("#cedula_ruc_grafico").val(),
    categoria:$("#categoria_grafico").val(),
    fecha_inicial:$("#jscal_field").val(),
    fecha_final:$("#jscal1_field").val()
}
     var urllista = "index.php?module=gm_Reportes&action=grafico";

                $("#mi_grafico").text("generando grafico...");
//                $("#mi_grafico").load(urllista,filtros, function(response, status, xhr){
//                        alert(response);
//                        data=response;
//                        ofc_ready();
//                        open_flash_chart_data();
//                    
//                });

//                data=$.post(urllista, filtros,function(){
//                    ofc_ready();
//                    open_flash_chart_data();
//                });
                $.ajax({
                        type: 'POST',
                          url: urllista,
                          data: filtros,
                          success: success,
                          dataType:'text'
                });
//                ofc_ready();
//                        open_flash_chart_data();




}

function success(datos){



data=datos;
open_flash_chart_data();
$("#mi_grafico").text("");
$("#reporte_div").dialog("close");
}




//                "fnFooterCallback": function ( nRow, aaData, iStart, iEnd, aiDisplay ) {
//                    /*
//                     * Calculate the total market share for all browsers in this table (ie inc. outside
//                     * the pagination)
//                     */
//                    var iTotalMarket = 0;
//                    for ( var i=0 ; i<aaData.length ; i++ ){
//                        iTotalMarket += aaData[i][4]*1;
//                    }
//
//                    /* Calculate the market share for browsers on this page */
//                    var iPageMarket = 0;
//                    for ( var i=iStart ; i<iEnd ; i++ ){
//                        iPageMarket += aaData[ aiDisplay[i] ][4]*1;
//                    }
//                   /* Modify the footer row to match what we want */
//                    var nCells = nRow.getElementsByTagName('th');
//                    nCells[3].innerHTML = parseInt(iPageMarket * 100)/100 +
//                        '% ('+ parseInt(iTotalMarket * 100)/100 +'% total)';
//                },

mostrar_descripcion=function (){
    if ($('#descripcion_reportes').is(':hidden'))
        $("#descripcion_reportes").show();
    else if ($('#descripcion_reportes').is(':visible'))
        $("#descripcion_reportes").hide();
}
