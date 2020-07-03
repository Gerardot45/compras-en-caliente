<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <?php require_once './auxiliares/encabezado.php'; ?>
</head>

<body>
    <?php require_once 'auxiliares/navbar.php'; ?>
    <br><br>
    <div class="container">    
    <div class="card-deck">
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
    </div>
    </div>
    <?php include_once 'auxiliares/footer.php' ?>
</body>

</html>