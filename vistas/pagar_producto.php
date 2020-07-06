<?php
session_start();
if (!isset($_SESSION['nombre_usuario']) || !isset($_GET['id_producto'])) {
    header("Location:" . $_SERVER['HTTP_REFERER']);
} else {
    session_abort();
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <title>Comprando producto</title>
        <?php require_once './auxiliares/encabezado.php'; ?>
    </head>

    <body>
        <?php
        require_once './auxiliares/navbar.php';

        require_once '../clases/config.class.php';

        $id_producto = intval($_GET['id_producto']);
        $c = new Conectar();
        $conexion = $c->conexion();
        $sql = "SELECT * FROM productos WHERE id_producto = $id_producto";
        $resultado = mysqli_query($conexion, $sql);
        if (mysqli_num_rows($resultado) > 0) {
            $columna = mysqli_fetch_row($resultado);
        }
        ?>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <img class="card-img-top" src="../img/<?php echo $columna[3]; ?>" style="width:100%; height: 100%;" alt="<?php echo $columna[3]; ?>">
                </div>
                <div class="col-md-8">
                    <div class="card mb-5">
                        <div class="card-body">
                            <h1 class="card-title text-center"><?php echo $columna[1]; ?></h1><br>
                            <h3 class="card-text"><?php echo $columna[2]; ?></h3><br>        
                            <h5 class="card-text text-center">Precio : $<?php echo $columna[4];?></h5><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <form method="POST" action="../procesos/transaccion/pago_confirmado.php">
                                <input type="hidden" name="id" value="<?php echo $columna[0]?>"/>                                
                                <input type="hidden" name="nombre" value="<?php echo $columna[1]?>"/>
                                <input type="hidden" name="descripcion" value="<?php echo $columna[2]?>"/>
                                <input type="hidden" name="precio" value="<?php echo $columna[4]?>"/>
                                <input type="submit" onclick="eliminarProductoLocalStorage(<?php echo $columna[0]?>)" value="Confirmar compra" class="btn btn-success eliminar-producto">
                                <!-- <button type="submit" onclick="eliminarProductoLocalStorage(<?php echo $columna[0]?>)" class="btn btn-success eliminar-producto">Confirmar compra</button>                                 -->
                            </form>
                            <br>
                            <button onclick="history.back(1);" class="btn btn-danger text-white">Regresar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script src="../js/app3.js">
        </script>
        <?php include_once './auxiliares/footer.php' ?>
    </body>
    </html>
<?php } ?>