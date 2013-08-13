<?php
$path_catalogo='custom/include/clases/varios/Catalogo.php';
            if(file_exists ($path_catalogo)){
                include_once $path_catalogo;
                $catalogo=new Catalogo();
                $data=$catalogo->buscaFamila();


            }
?>

<div id="catalogo_dlg" style="display:none;">

        <label>Ingrese la familia</label>
    <select id="padre_id" name="padre_id">
        <option>Seleccione la Familia</option>
        <?php if(is_array($data)):?>
        <?php foreach ($data as $row):?>
              <option value="<?php echo $row['codigo']?>"><?php echo $row['tecnico'].'-'.$row['descripcion']?> </option>
        <?php endforeach;?>

        <?php endif;?>
    </select>
    <br>
    <label>Ingrese la producto</label>
    <input type="text" name="filtro_catalogo" id="filtro_catalogo" value="">
    
    <button onclick="javascript:buscarCatalogo('Detalle');">Buscar</button>
    <h3>Listado de Productos</h3>
    <hr>

    <div id="catologo_div"></div>
</div>