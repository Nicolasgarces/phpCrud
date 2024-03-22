<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Php MySql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3ea353913d.js" crossorigin="anonymous"></script>
</head>

<body>
    <script>
        function eliminar(){
            var respuesta=confirm("Estás seguro que deseas Eliminar un Registro?")
        }
    </script>
    <h1 class="text-center p-3">Tu Tienda</h1>
    <?php
     include "model/conexion.php";
    include "controller/eliminar_producto.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro de Productos</h3>
            <?php
           
            include "controller/registro_personas.php"
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Producto </label>
                <input type="text" class="form-control" id="producto" name="nombre" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Precio</label>
                <input type="text" class="form-control" id="precio" name="precio" aria-describedby="precio">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" aria-describedby="stock">
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistar" value="ok">Registrar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Opciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "model/conexion.php";
                    $sql=$conexion->query("select * from producto");
                    while($datos=$sql->fetch_object()){ ?>
                        <tr>
                        <th scope="row"><?= $datos->id ?></th>
                        <td><?= $datos->nombre ?></td>
                        <td><?= $datos->precio ?></td>
                        <td><?= $datos->stock ?></td>
                        <td>
                            <a href="modificar_producto.php?id=<?= $datos->id?>" class="btn btn-small btn-ligth" style="border: 4px solid rgb(255, 195, 0)">&#9999;</a>
                            <a onclick="return eliminar()" href="index.php?id=<?= $datos->id ?>" class="btn btn-small btn-ligth" style="border: 4px solid rgb(255, 87, 51)">🗑️</a>
                        </td>
                    </tr>
                    <?php }
                    ?>
                    

                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>