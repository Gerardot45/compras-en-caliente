<!DOCTYPE html>
<html lang="es">
<head>
    <title>Productos</title>
    <?php require_once './auxiliares/encabezado.php';?>
</head>

<body>
    <?php require_once 'auxiliares/navbar.php'; ?>
    
    <div class="container mb-3" id="lista-productos">
        <center><h1>Nuestros Productos para usted</h1></center>
        <?php
        include_once '../clases/config.class.php';
        $c = new Conectar();
        $conexion = $c->conexion();
        $sql = "SELECT * FROM productos";
        $result = mysqli_query($conexion, $sql);
        $contador = 0;
        while ($ver = mysqli_fetch_row($result)) : ?>
            <?php if ($contador == 0) {
                echo "<div class=\"card-deck mb-5 mt-5\">";
            }
            $contador++; ?>
            <div class="card">
                <img src="../img/<?php echo $ver[3]; ?>" class="card-img-top" alt="<?php echo $ver[3]; ?>">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $ver[1]; ?></h5>
                    <p class="card-text descripcion">Descripción : <span><?php echo $ver[2]; ?></span></p>
                    <p class="card-text precio">Precio : $<span><?php echo $ver[4]; ?></span></p>
                </div>
                <div class="card-footer">
                    <p class="card-text"><small class="text-muted">Cantidad : <b><?php echo $ver[5]; ?></b></small></p>
                    <center><button data-toggle="popover" title="Agregado al carrito" class="btn btn-primary agregar-carrito" <?php if ($ver[5] == 0) {
                                                                                                                                    echo 'disabled';
                                                                                                                                } else {
                                                                                                                                    echo '';
                                                                                                                                } ?> data-id="<?php echo $ver[0]; ?>">Agregar al carrito</button></center>
                </div>
            </div>
            <?php if ($contador == 3) {
                echo "</div>";
                $contador = 0;
            } ?>
        <?php endwhile; ?>
    </div>

    <!-- <div class="card-deck">
        <div class="card">
            <img src="../img/pc_gamer.jpg" class="card-img-top" alt="P">
            <div class="card-body">
                <h5 class="card-title">Computadora gamer</h5>
                <p class="card-text">Descripción de la pc gamer</p>
                <p class="card-text">Precio : $10,500</p>
            </div>
            <div class="card-footer">
                <p class="card-text"><small class="text-muted">Cantidad : 30</small></p>
                <center><button class="btn btn-primary">Agregar al carrito</button></center>
            </div>
        </div>
        <div class="card">
            <img src="../img/samsung_A50.jpg" class="card-img-top" alt="Samsung">
            <div class="card-body">
                <h5 class="card-title">Samsumg Galaxy A50</h5>
                <p class="card-text">Descripción del Samsumg Galaxy A50</p>
                <p class="card-text">Precio : $6,000</p>
            </div>
            <div class="card-footer">
            <p class="card-text"><small class="text-muted">Cantidad : 10</small></p>
            <center><button class="btn btn-primary">Agregar al carrito</button></center>
            </div>
        </div>
        <div class="card">
            <img src="../img/iphone11.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Iphone 11</h5>
                <p class="card-text">Descripción del Iphone 11</p>                
                <p class="card-text">Precio : $17,499</p>
            </div>
            <div class="card-footer">
            <p class="card-text"><small class="text-muted">Cantidad : 30</small></p>
            <center><button class="btn btn-primary">Agregar al carrito</button></center>
            </div>
        </div>
    </div> -->

    <script src="../js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        // $(document).ready(function() {
        //     $('[data-toggle="popover"]').popover();
        //     setTimeout(function() {
        //         $('[data-toggle="popover"]').popover();
        //     }, 1000);
        // });
    </script>

    <?php include_once 'auxiliares/footer.php' ?>
</body>

</html>