<?php
if(!empty($_POST["btnregistrar"])) {
    if(!empty($_POST["nombre"] and !empty($_POST["precio"]) and !empty($_POST["stock"]))) {
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $precio=$_POST["precio"];
        $stock=$_POST["stock"];
        $sql=$conexion->query(" update producto set nombre='$nombre', precio=$precio, stock=$stock where id=$id");
        if($sql==1){
            header("location:index.php");
        }else{
            echo '<div class="alert alert-danger">Error al Modificar Producto</div>';
        }
    }else{
        echo '<div class="alert alert-success">Hay campos Vacíos</div>';
    }
}


?>