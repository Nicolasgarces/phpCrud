<?php
if (!empty($_POST["btnregistar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["precio"]) and !empty($_POST["stock"])){
        
        $nombre=$_POST["nombre"];
        $precio=$_POST["precio"];
        $stock=$_POST["stock"];

        $sql=$conexion->query("insert into producto(nombre, precio, stock) values('$nombre', $precio, $stock)");
        if ($sql==1) {
            echo '<div class="alert alert-success">Producto Registrado</div>';
        }else{
            echo '<div class="alert alert-success">Error al Registrar Persona</div>'; 
        }
    }else{
        echo '<div class="alert alert-success">Algúno de los campos está vacío</div>'; 
       
    }
}

?>