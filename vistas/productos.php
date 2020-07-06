<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <?php require_once './auxiliares/encabezado.php'; ?>
</head>

<body>
    <?php require_once 'auxiliares/navbar.php'; ?>
    <br><br>
    <div class="container" id="lista-productos">
        <?php
        include_once '../clases/config.class.php';
        $c = new Conectar();
        $conexion = $c->conexion();
        $sql = "SELECT * FROM productos";
        $result = mysqli_query($conexion, $sql);
        for ($i = 1; $i <= 3; $i++) : ?>
            <div class="card-deck">
                <?php
                while ($ver = mysqli_fetch_row($result)) : ?>
                    <div class="card">
                        <img src="../img/<?php echo $ver[3]; ?>" class="card-img-top" alt="<?php echo $ver[3]; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $ver[1]; ?></h5>
                            <p class="card-text descripcion">Descripción : <span><?php echo $ver[2]; ?></span></p>
                            <p class="card-text precio">Precio : $<span><?php echo $ver[4]; ?></span></p>
                        </div>
                        <div class="card-footer">
                            <p class="card-text"><small class="text-muted">Cantidad : <b><?php echo $ver[5]; ?></b></small></p>
                            <center><button class="btn btn-primary agregar-carrito" <?php if($ver[5] == 0){echo 'disabled';}else{echo '';} ?> data-id="<?php echo $ver[0];?>">Agregar al carrito</button></center>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endfor; ?>
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
    <?php include_once 'auxiliares/footer.php' ?>
</body>
</html>