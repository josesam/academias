<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$reportedef=array(
        'title'=>"Reporte Estado de Pagos",
        'params'=>array(
           
        ),
        'exceltitles'=>array(
            'cliente','oportunidad','Etapa de Venta','Total oportunidad','Fecha Cierre',
            'Usuario'

        ),
        'descripcion'=>'
             <ul>
                    <li><strong>a. Objetivo:</strong> Entender por modelo los rangos de kilometraje en los que los clientes empiezan a ir en menor frecuencia al servicio de los concesionarios.</li>
                    <li><strong>b. Filtros:</strong> por concesionario, por modelo, por tipo de servicio, por rango de kilometraje y entre fechas.</li>
                    <li>c. Detalle de información: número de entradas de tipo de servicio que han sido registrados para un rango de kilometraje dado.</li>
                </ul>
          ',

    );
?>
