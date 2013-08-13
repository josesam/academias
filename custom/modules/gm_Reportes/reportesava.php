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
<form name="reportes" action="index.php?module=tr_Reportes&action=parametros" method="POST">

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
        <td>Reporte estadístico de fidelidad de clientes en el tiempo</td>
        <td>
            <ul>

                <li>a.	Objetivo: Entender por modelo los rangos de kilometraje en los que los clientes empiezan a ir en menor frecuencia al servicio de los concesionarios.</li>
                <li>b.	Filtros: por concesionario, por modelo, por tipo de servicio, por rango de kilometraje y entre fechas.</li>
                <li>c.	Detalle de información: número de entradas de tipo de servicio que han sido registrados para un rango de kilometraje dado.</li>
            </ul>
        </td>
    </tr>
    <tr>
        <td>
            <input type="radio" name="reportes" value="2">
        </td>
            <td>Reporte estadístico de perfil de clientes</td>
        <td>
            <ul>
                <li>a.	Objetivo: Entender qué genero, qué edad y de qué ciudad llegan los clientes a realizar servicio de mantenimiento.</li>
<li>b.	Filtros: por concesionario, por modelo, por ciudad, por género, rango de edad y entre fechas.</li>
<li>c.	Detalle de información: número de clientes que llegan al concesionario desglosado por edad, género, por ciudad y entre fechas. Además es necesario saber el porcentaje en función del total.</li>
</ul>
        </td>
    </tr>



     <tr>
        <td>
            <input type="radio" name="reportes" value="3">
        </td>
        <td>Reporte estadístico de fidelidad del cliente por concesionario</td>
        <td>
            <ul>
                <li>a.	Objetivo: Conocer cuántos clientes llegan al concesionario en un período de tiempo y por tipo de servicio.</li>
                <li>b.	Filtros: por concesionario y entre fechas.</li>
                <li>c.	Detalle de información: son dos reportes, el uno muestra el total de clientes que llegan al concesionario, y otro reporte muestra quiénes son esos clientes (Tipo cliente, RUC, Nombre, Vehículo, fechas de uso del servicio)</li>
            </ul>
 </td>
    </tr>

<tr>
        <td>
            <input type="radio" name="reportes" value="4">
        </td>
        <td>Reporte estadístico de gasto del cliente por concesionario y tipo de gasto</td>
        <td>
            <ul>
                <li>a.	Objetivo: Conocer los valores promedio que el cliente gasta al llevar al vehículo por tipo de gasto (servicio, repuestos, terceros) por concesionario, por modelo y entre fechas.</li>
                <li>b.	Filtros: por concesionario, por tipo de servicio y entre fechas.</li>
                <li>c.	Detalle de información: reporte estadístico que muestra por concesionario el promedio y los totales de gasto.</li>
            </ul>
	  </td>
    </tr>

   <tr>
        <td>
            <input type="radio" name="reportes" value="5">
        </td>
            <td>Reporte estadístico de gasto del cliente específico por concesionario y tipo de gasto para Flotas.</td>
        <td>
            <ul>
                <li>a.	Objetivo: Conocer los valores promedio que el cliente gasta al llevar al vehículo por tipo de gasto (servicio, repuestos, terceros) por concesionario, por modelo y entre fechas.</li>
                <li>b.	Filtros: por concesionario, por tipo de servicio, por cliente y entre fechas.</li>
                <li>c.	Detalle de información: reporte estadístico que muestra por concesionario el promedio y los totales de gasto.</li>
            </ul>
        </td>
    </tr>


    <tr>
        <td>
            <input type="radio" name="reportes" value="6">
        </td>
        <td>Reporte estadístico de ingresos al taller entre fechas</td>
        <td>
            <ul>
                <li>a.	Objetivo: Conocer el total de número de ingresos al taller que realizan los clientes.</li>
                <li>b.	Filtros: Por concesionario, por cliente, por tipo de servicio y entre fechas.</li>
                <li>c.	Detalle de información: reporte que muestra el promedio de ingresos al taller. En este caso no puede ser por concesionario porque el cliente puede asistir a más de uno.</li>
            </ul>
   </td>
    </tr>

   <tr>
        <td>
            <input type="radio" name="reportes" value="7">
        </td>
        <td>Reporte estadístico de kilometraje por piezas clave</td>
        <td>
            <ul>
                <li>a.	Objetivo: Conocer el kilometraje en los que se presenta el campo de piezas clave por tipo de modelo.</li>
                <li>b.	Filtros: Concesionario, por cliente, vehículo y por tipo de modelo</li>
                <li>c.	Detalle de información: el reporte muestra el detalle de los valores del odómetro por tipo de pieza clave cuando esta es cambiada.</li>
            </ul>
 </td>
    </tr>
    <tr>
        <td>
            <input type="radio" name="reportes" value="8">
        </td>
            <td>Reporte estadístico por tipo de servicio y por modelo</td>
            <td>
                <ul>
                    <li>a.	Objetivo: conocer el tipo de servicio (accesorios, colisión, express, garantías, y otros) al que acuden los clientes por tipo de vehículo.</li>
                    <li>b.	Filtros: Concesionario, por tipo de servicio, por modelo, por cliente y entre fechas</li>
                    <li>c.	Detalle de información: en este reporte podrán visualizarse totales de ingreso a taller por tipo de servicio y por modelo de vehículo. El reporte deberá tener el detalle del cliente específico.</li>
                </ul>
            </td>
    </tr>

<tr>
        <td>
            <input type="radio" name="reportes" value="9">
        </td>
            <td>Reporte de gestión del concesionario</td>
            <td>
                <ul>
                <li>a.	Objetivo: conocer la gestión que está realizando el concesionario en función de la venta de servicios.</li>
                <li>b.	Filtros: Concesionario y entre fechas</li>
                <li>c.	Detalle de información: en este reporte se detallará el número de leads generados, de estos cuantos se convirtieron en oportunidades ganadas y como se realizó el seguimiento de las citas creadas por el sistema.</li>
                </ul>

            </td>
    </tr>

    <tr>
        <td>
            <input type="radio" name="reportes" value="10">
        </td>
            <td>Reporte de no contactados</td>
            <td>
                <ul>
               <li>a.	Objetivo: conocer la gestión del call center de cada concesionario evaluando si se contactaron a los clientes usando la herramienta de registro de SugarCRM.</li>
               <li>b.	Filtros: Concesionario y entre fechas</li>
                <li>c.	Detalle de información: en este reporte se detallará los clientes a quienes no se contactó en la parte de manejo de citas del CRM.</li>
                </ul>
            </td>
    </tr>


    </tbody>

</table>
</form>








