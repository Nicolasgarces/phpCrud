<?php
if(!empty($_GET["id"])){
    $id=$_GET["id"];
    $sql=$conexion->query(" delete from producto where id=$id");
    if($sql==1){
        echo '<div class="alert alert-success">Producto Eliminado Correctamente</div>';
    }else{
        echo '<div class="alert alert-success">Error al Eliminar</div>';
    }
}

?>