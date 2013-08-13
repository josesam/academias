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
//                    var iTotalMarket = 0;
//                    var iPageMarket = 0;
//                    var _5000 = 0;
//                    var _10000 = 0;
//                    var _15000 = 0;
//                    var _20000 = 0;
//                    var _25000 = 0;
//                    var _30000 = 0;
//                    var _35000 = 0;
//                    var _40000 = 0;
//                    var _45000 = 0;
//                    var _50000 = 0;
//                    var _55000 = 0;
//                    var _60000 = 0;
//                    var _65000 = 0;
//                    var _70000 = 0;
//                    var _75000 = 0;
//                    var _80000 = 0;
//                    var _85000 = 0;
//                    var _90000 = 0;
//                    var _95000 = 0;
//                    var _100000 = 0;
//                    var _200000 = 0;
//
////                   for ( var i=0 ; i<aaData.length ; i++ ){
////                                                _5000 += aaData[ aiDisplay[i] ][1]*1;
////                        _10000 += aaData[ aiDisplay[i] ][2]*1;
////                        _15000 += aaData[ aiDisplay[i] ][3]*1;
////                        _20000 += aaData[ aiDisplay[i] ][4]*1;
////                        _25000 += aaData[ aiDisplay[i] ][5]*1;
////                        _30000 += aaData[ aiDisplay[i] ][6]*1;
////                        _35000 += aaData[ aiDisplay[i] ][7]*1;
////                        _40000 += aaData[ aiDisplay[i] ][8]*1;
////                        _45000 += aaData[ aiDisplay[i] ][9]*1;
////                        _50000 += aaData[ aiDisplay[i] ][10]*1;
////                        _55000 += aaData[ aiDisplay[i] ][11]*1;
////                        _60000 += aaData[ aiDisplay[i] ][12]*1;
////                        _65000 += aaData[ aiDisplay[i] ][13]*1;
////                        _70000 += aaData[ aiDisplay[i] ][14]*1;
////                        _75000 += aaData[ aiDisplay[i] ][15]*1;
////                        _80000 += aaData[ aiDisplay[i] ][16]*1;
////                        _85000 += aaData[ aiDisplay[i] ][17]*1;
////                        _90000 += aaData[ aiDisplay[i] ][18]*1;
////                        _95000 += aaData[ aiDisplay[i] ][19]*1;
////                        _100000 += aaData[ aiDisplay[i] ][20]*1;
////                        _200000 += aaData[ aiDisplay[i] ][21]*1;
////
////                    }
//
//                    /* Calculate the market share for browsers on this page */
//
//
//                    for ( var i=iStart ; i<iEnd ; i++ ){
//
//                        _5000 += aaData[ aiDisplay[i] ][3]*1;
//                        _10000 += aaData[ aiDisplay[i] ][4]*1;
//                        _15000 += aaData[ aiDisplay[i] ][5]*1;
//                        _20000 += aaData[ aiDisplay[i] ][6]*1;
//                        _25000 += aaData[ aiDisplay[i] ][7]*1;
//                        _30000 += aaData[ aiDisplay[i] ][8]*1;
//                        _35000 += aaData[ aiDisplay[i] ][9]*1;
//                        _40000 += aaData[ aiDisplay[i] ][10]*1;
//                        _45000 += aaData[ aiDisplay[i] ][11]*1;
//                        _50000 += aaData[ aiDisplay[i] ][12]*1;
//                        _55000 += aaData[ aiDisplay[i] ][13]*1;
//                        _60000 += aaData[ aiDisplay[i] ][14]*1;
//                        _65000 += aaData[ aiDisplay[i] ][15]*1;
//                        _70000 += aaData[ aiDisplay[i] ][16]*1;
//                        _75000 += aaData[ aiDisplay[i] ][17]*1;
//                        _80000 += aaData[ aiDisplay[i] ][18]*1;
//                        _85000 += aaData[ aiDisplay[i] ][19]*1;
//                        _90000 += aaData[ aiDisplay[i] ][20]*1;
//                        _95000 += aaData[ aiDisplay[i] ][21]*1;
//                        _100000 += aaData[ aiDisplay[i] ][22]*1;
//                        _200000 += aaData[ aiDisplay[i] ][23]*1;
//
//
//                    }
//                   /* Modify the footer row to match what we want */
//                    var nCells = nRow.getElementsByTagName('th');
//                    nCells[3].innerHTML =parseFloat(_5000) ;
//                    nCells[4].innerHTML =parseFloat(_10000) ;
//                    nCells[5].innerHTML =parseFloat(_15000) ;
//                    nCells[6].innerHTML =parseFloat(_20000) ;
//                    nCells[7].innerHTML =parseFloat(_25000) ;
//                    nCells[8].innerHTML =parseFloat(_30000) ;
//                    nCells[9].innerHTML =parseFloat(_35000) ;
//                    nCells[10].innerHTML =parseFloat(_40000) ;
//                    nCells[11].innerHTML =parseFloat(_45000) ;
//                    nCells[12].innerHTML =parseFloat(_50000) ;
//                    nCells[13].innerHTML =parseFloat(_55000) ;
//                    nCells[14].innerHTML =parseFloat(_60000) ;
//                    nCells[15].innerHTML =parseFloat(_65000) ;
//                    nCells[16].innerHTML =parseFloat(_70000) ;
//                    nCells[17].innerHTML =parseFloat(_75000) ;
//                    nCells[18].innerHTML =parseFloat(_80000) ;
//                    nCells[19].innerHTML =parseFloat(_85000) ;
//                    nCells[20].innerHTML =parseFloat(_90000) ;
//                    nCells[21].innerHTML =parseFloat(_95000) ;
//                    nCells[22].innerHTML =parseFloat(_100000) ;
//                    nCells[23].innerHTML =parseFloat(_200000) ;

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
                            height: 500 ,
                            hide: 'slide',
                            modal: true ,
                            title: 'Reportes',
                            width: 800
                            });

}

generar_reporte=function(){


var filtros={
    reporte:$("#nombre_reporte").val(),
    modelos:$("#modelos_grafico").val(),
    tiposervicio:$("#tiposervicio_grafico").val(),
    usuarios:$("#usuarios_grafico").val(),
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
