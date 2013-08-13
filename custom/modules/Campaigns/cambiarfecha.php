<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
global $db;
$sql="select id, fechainicio, fechafin from detalle_programa ";

$result=$db->query($sql);
$cont=0;
while($a=$db->fetchByAssoc($result)){

    $f_i=explode("/",$a['fechainicio']);
    $fecha_inicio=$f_i[2]."-".$f_i[0]."-".$f_i[1];

    $f_f=explode("/",$a['fechafin']);
    $fecha_fin=$f_f[2]."-".$f_f[0]."-".$f_f[1];
    $data[$cont]['id']=$a['id'];
    $data[$cont]['f1']=$fecha_inicio;
    $data[$cont]['f2']=$fecha_fin;
    $cont++;
}
//
foreach($data as $key =>$v){
    $sql="update detalle_programa set fecha_inicio='".$v['f1']."', fecha_fin='".$v['f2']."' where id='".$v['id']."'";
    
    $db->query($sql);
}

?>
