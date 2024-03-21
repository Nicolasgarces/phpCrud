<?php
include "model/conexion.php";
$id = $_GET["id"];
$id = $conexion->real_escape_string($id);
$sql = $conexion->query("SELECT * FROM producto WHERE id=$id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h5 class="text-center text-secondary">Modificar Productos</h5>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
        <?php
        include "controller/modificar_producto_controller.php";
        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Producto </label>
                <input type="text" class="form-control" id="producto" name="nombre" value="<?= $datos->nombre ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Precio</label>
                <input type="text" class="form-control" id="precio" name="precio" value="<?= $datos->precio ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" value="<?= $datos->stock ?>">
            </div>
        <?php } ?>

        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar Producto</button>
    </form>
</body>

</html>
