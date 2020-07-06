<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de compras</title>
    <?php require_once './auxiliares/encabezado.php'; ?>
</head>

<body>
    <?php require_once 'auxiliares/navbar.php'; ?>
    <br><br>
    <div class="container">
        <h1 class="text-center">Historial de compras de <?php echo $_SESSION['nombre_usuario'].' '.$_SESSION['primer_apellido'];?></h1>
        <?php
        require_once '../clases/config.class.php';
        $con = new Conectar();
        $conexion = $con->conexion();
        $correo = $_SESSION['email'];
        $sql = "SELECT nombre_producto, descripcion_producto, precio, fecha_del_pedido, fecha_de_entrega FROM compras_hechas WHERE fk_email_usuario = '$correo'";
        $result = mysqli_query($conexion, $sql);
        ?>

        <?php if (mysqli_num_rows($result) > 0) {
        ?>

            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Fecha del pedido</th>
                        <th>fecha de entrega</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($ver = mysqli_fetch_row($result)) : ?>
                        <tr>
                            <td><?php echo $ver[0]; ?></td>
                            <td><?php echo $ver[1]; ?></td>
                            <td><?php echo $ver[2]; ?></td>
                            <td><?php echo $ver[3]; ?></td>
                            <td><?php echo $ver[4]; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php } else { ?>
            <ul class="list-group mt-4">                
                <li class="list-group-item list-group-item-info text-center">Nada que mostrar. Vea nuestros <a href="productos.php">productos en venta</a></li>                
            </ul>
        <?php } ?>
        <?php include_once 'auxiliares/footer.php' ?>
    </div>
</body>

</html>