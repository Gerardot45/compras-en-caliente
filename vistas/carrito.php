<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>
    <?php require_once './auxiliares/encabezado.php'; ?>
</head>

<body>
    <?php require_once 'auxiliares/navbar.php'; ?>
    <br><br>
    <div class="container">
    <div class="container">
            <center>
                <button class="btn btn-primary">Comprar todo el carrito</button>
                <button class="btn btn-danger">Quitar todo de la lista</button>
            </center>
            <br>
            <hr>
        </div>
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col mb-4">
                <div class="card">
                    <img src="../img/iphone11.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Iphone 11</h5>
                        <p class="card-text">Descripción del Iphone 11</p>                    
                        <hr>
                        <button class="btn btn-primary btn-sm">Comprar Artículo</button>
                         
                        <button class="btn btn-danger btn-sm">Quitar del carrito</button>
                    </div>
                </div>
            </div>
            <!-- <div class="col mb-4">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div> -->
        </div>        
    </div>
    <?php include_once 'auxiliares/footer.php' ?>
</body>

</html>