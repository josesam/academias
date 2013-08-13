<style>
    .footer{
       display: block;
       text-align: center;
       margin: 10px 0;
    }
    h1.sp_h1{
        text-align: center;
        margin: 10px;
    }
    td.head{
        background-color: #009CFF;
        border:1px solid #000;
        font-family: sans-serif;
        font-size: 14px;
        color: #fff;


}
table.reportes{

    border:1px solid #000;
}

</style>
<link rel="stylesheet" type="text/css" href="custom/include/css/tablas/style.css" />
<h1 class="sp_h1">Gestión de Reportes</h1>
<form name="reportes" action="index.php?module=gm_Reportes&action=parametros" method="POST">

<input type="submit" name="ejecutar" value="Ver Reportes">
<table width="100%"  id="rounded-corner">
    <thead>
    <tr>
        <th scope="col" class="rounded-company">

        </th>
        <th scope="col" class="rounded-q1">
            Reporte
        </th>
        <th scope="col" class="rounded-q4">
            Descripcion
        </th>
    </tr>
    </thead>
    <tfoot>
        <tr>
        	<td colspan="3" class="rounded-foot-left"><em>© 2010 <a href="http://www.sugarcrmplugins.com" targer="_blank">Sugarcrm Plugins</a>. Todos los derechos Reservados </em></td>        	
        </tr>
    
    </tfoot>
    <tbody>
        
   <tr>
        <td>
            <input type="radio" name="reportes" value="1">
        </td>
            <td><a href="index.php?module=gm_Reportes&action=parametros&reportes=1">Seguimiento Programas Abiertos</a></td>
            <td>

                <ul>
                    <li><strong>a. Objetivo:</strong>Ejemplo.</li>
                    <li><strong>b. Filtros:</strong>Ejemplo.</li>
                    <li><strong>c. Detalle de información:</strong>Ejemplo.</li>
                </ul>

            </td>
    </tr>
    
    <tr>
        <td>
            <input type="radio" name="reportes" value="6">
        </td>
            <td><a href="index.php?module=gm_Reportes&action=parametros&reportes=6">Seguimiento Programas In Company</a></td>
            <td>

                <ul>
                    <li><strong>a. Objetivo:</strong>Ejemplo.</li>
                    <li><strong>b. Filtros:</strong>Ejemplo.</li>
                    <li><strong>c. Detalle de información:</strong>Ejemplo.</li>
                </ul>

            </td>
    </tr>


    <tr>
        <td>
            <input type="radio" name="reportes" value="2">
        </td>
            <td><a href="index.php?module=gm_Reportes&action=parametros&reportes=2">Etapas y Participantes Programas Abiertos</a></td>
            <td>

                <ul>
                    <li><strong>a. Objetivo:</strong>Ejemplo.</li>
                    <li><strong>b. Filtros:</strong>Ejemplo.</li>
                    <li><strong>c. Detalle de información:</strong>Ejemplo.</li>
                </ul>
            </td>
    </tr>
    
    <tr>
        <td>
            <input type="radio" name="reportes" value="7">
        </td>
            <td><a href="index.php?module=gm_Reportes&action=parametros&reportes=7">Etapas y Participantes Programas In Company</a></td>
            <td>

                <ul>
                    <li><strong>a. Objetivo:</strong>Ejemplo.</li>
                    <li><strong>b. Filtros:</strong>Ejemplo.</li>
                    <li><strong>c. Detalle de información:</strong>Ejemplo.</li>
                </ul>
            </td>
    </tr>
<!--
   <tr>
        <td>
            <input type="radio" name="reportes" value="3">
        </td>
            <td><a href="index.php?module=gm_Reportes&action=parametros&reportes=3">Reporte Totalizado de Etapas por Programas</a></td>
            <td>

                <ul>
                    <li><strong>a. Objetivo:</strong>Ejemplo.</li>
                    <li><strong>b. Filtros:</strong>Ejemplo.</li>
                    <li><strong>c. Detalle de información:</strong>Ejemplo.</li>
                </ul>
            </td>
    </tr>
    -->
    <tr>
        <td>
            <input type="radio" name="reportes" value="4">
        </td>
            <td><a href="index.php?module=gm_Reportes&action=parametros&reportes=4">Reporte Actividad comercial por usuario</a></td>
            <td>
                <ul>
                    <li><strong>a. Objetivo:</strong>Ejemplo.</li>
                    <li><strong>b. Filtros:</strong>Ejemplo.</li>
                    <li><strong>c. Detalle de información:</strong>Ejemplo.</li>
                </ul>
            </td>
    </tr>

    <tr>
        <td>
            <input type="radio" name="reportes" value="5">
        </td>
            <td><a href="index.php?module=gm_Reportes&action=parametros&reportes=5">Reporte Estado de Pagos.</a></td>
            <td>
                <ul>
                    <li><strong>a. Objetivo:</strong>Ejemplo.</li>
                    <li><strong>b. Filtros:</strong>Ejemplo.</li>
                    <li><strong>c. Detalle de información:</strong>Ejemplo.</li>
                </ul>
            </td>
    </tr>
    
    <tr>
        <td>
            <input type="radio" name="reportes" value="8">
        </td>
            <td><a href="index.php?module=gm_Reportes&action=parametros&reportes=8">Clientes Recurrentes</a></td>
            <td>

                <ul>
                    <li><strong>a. Objetivo:</strong>Ejemplo.</li>
                    <li><strong>b. Filtros:</strong>Ejemplo.</li>
                    <li><strong>c. Detalle de información:</strong>Ejemplo.</li>
                </ul>
            </td>
    </tr>
    <tr>
        <td>
            <input type="radio" name="reportes" value="9">
        </td>
            <td><a href="index.php?module=gm_Reportes&action=parametros&reportes=9">Participantes Recurrentes</a></td>
            <td>

                <ul>
                    <li><strong>a. Objetivo:</strong>Ejemplo.</li>
                    <li><strong>b. Filtros:</strong>Ejemplo.</li>
                    <li><strong>c. Detalle de información:</strong>Ejemplo.</li>
                </ul>
            </td>
    </tr>
    <tr>
        <td>
            <input type="radio" name="reportes" value="10">
        </td>
            <td><a href="index.php?module=gm_Reportes&action=parametros&reportes=10">Programas de Interés</a></td>
            <td>

                <ul>
                    <li><strong>a. Objetivo:</strong>Ejemplo.</li>
                    <li><strong>b. Filtros:</strong>Ejemplo.</li>
                    <li><strong>c. Detalle de información:</strong>Ejemplo.</li>
                </ul>
            </td>
    </tr>
    <tr>
        <td>
            <input type="radio" name="reportes" value="11">
        </td>
            <td><a href="index.php?module=gm_Reportes&action=parametros&reportes=11">Recurrencia Profesores</a></td>
            <td>

                <ul>
                    <li><strong>a. Objetivo:</strong>Ejemplo.</li>
                    <li><strong>b. Filtros:</strong>Ejemplo.</li>
                    <li><strong>c. Detalle de información:</strong>Ejemplo.</li>
                </ul>
            </td>
    </tr>


    <!--<tr>
        <td>
            <input type="radio" name="reportes" value="6">
        </td>
            <td>Reporte Ejemplo</td>
            <td>

                <ul>
                    <li><strong>a. Objetivo:</strong>Ejemplo.</li>
                    <li><strong>b. Filtros:</strong>Ejemplo.</li>
                    <li><strong>c. Detalle de información:</strong>Ejemplo.</li>
                </ul>

            </td>
    </tr>
-->
<!--

    <tr>
        <td>
            <input type="radio" name="reportes" value="8">
        </td>
            <td>Reporte estadístico de kilometraje por piezas clave</td>
            <td>

                <ul>
                    <li><strong>a. Objetivo:</strong>Conocer el kilometraje en los que se presenta el campo de piezas clave por tipo de modelo.</li>
                    <li><strong>b. Filtros:</strong>Concesionario, por cliente, vehículo y por tipo de modelo</li>
                    <li><strong>c. Detalle de información:</strong>el reporte muestra el detalle de los valores del odómetro por tipo de pieza clave cuando esta es cambiada.</li>
                </ul>

            </td>
    </tr>


    <tr>
        <td>
            <input type="radio" name="reportes" value="10">
        </td>
            <td>Reporte estadístico por tipo de servicio y por modelo</td>
            <td>

                <ul>
                    <li><strong>a. Objetivo:</strong>conocer el tipo de servicio (accesorios, colisión, express, garantías, y otros) al que acuden los clientes por tipo de vehículo.</li>
                    <li><strong>b. Filtros:</strong>Concesionario, por tipo de servicio, por modelo, por cliente y entre fechas</li>
                    <li><strong>c. Detalle de información:</strong>en este reporte podrán visualizarse totales de ingreso a taller por tipo de servicio y por modelo de vehículo. El reporte deberá tener el detalle del cliente específico.</li>
                </ul>

            </td>
    </tr>

    <tr>
        <td>
            <input type="radio" name="reportes" value="11">
        </td>
            <td>Reporte de gestión del concesionario</td>
            <td>

                <ul>
                    <li><strong>a. Objetivo:</strong>conocer la gestión que está realizando el concesionario en función de la venta de servicios.</li>
                    <li><strong>b. Filtros:</strong>Concesionario y entre fechas</li>
                    <li>
                        <strong>c. Detalle de información:</strong>en este reporte se detallará el número de leads generados, de estos cuantos se convirtieron en oportunidades ganadas
                        y como se realizó el seguimiento de las citas creadas por el sistema.
                    </li>
                </ul>

            </td>
    </tr>


        <tr>
        <td>
            <input type="radio" name="reportes" value="12">
        </td>
            <td>Reporte de Clientes no contactados</td>
            <td>

                <ul>
                    <li><strong>a. Objetivo:</strong>conocer la gestión del call center de cada concesionario evaluando si se contactaron a los clientes usando la herramienta de registro de SugarCRM.</li>
                    <li><strong>b. Filtros:</strong>Concesionario y entre fechas</li>
                    <li>
                        <strong>c. Detalle de información:</strong>en este reporte se detallará los clientes a quienes no se contactó en la parte de manejo de citas del CRM.
                    </li>
                </ul>

            </td>
    </tr>

<tr>
        <td>
            <input type="radio" name="reportes" value="13">
        </td>
            <td>Reporte de cruze de leads</td>
            <td>

                <ul>
                    <li><strong>a. Objetivo:</strong>conocer cuantos clientes agendados via telefonica ingresaron al taller .</li>
                    <li><strong>b. Filtros:</strong>Concesionario y entre fechas</li>
                    <li>
                        <strong>c. Detalle de información:</strong>en este reporte se detallará los clientes a quienes no se contactó en la parte de manejo de citas del CRM.
                    </li>
                </ul>

            </td>
    </tr>
-->
    </tbody>

</table>
</form>



