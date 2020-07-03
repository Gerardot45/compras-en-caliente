<!DOCTYPE html>
<html lang="en">
<head>
    <title>Iniciar Sesión</title>
    <?php require_once './auxiliares/encabezado.php'; ?>
</head>
<body>
    <?php require_once './auxiliares/navbar.php';?>
    <br><br>
    <div class="container">
        <h2>Inicio de sesión</h2>
        <p>Coloque los datos para poder acceder al sistema</p>
        <form class="form-inline" action="../procesos/login/login.php" method="POST">        
            <label for="email" class="mb-2 mr-sm-2">Email:</label>
            <input type="email" class="form-control mb-2 mr-sm-2" id="email" placeholder="Correo Electrónico" name="email" required><br>
            <label for="password" class="mb-2 mr-sm-2">Contraseña:</label>
            <input type="password" class="form-control mb-2 mr-sm-2" id="password" placeholder="Contraseña" name="password" required>      
            <button type="submit" class="btn btn-primary mb-2">Iniciar Sesión</button>
        </form>
    </div>
    <?php include_once 'auxiliares/footer.php'?>
</body>

</html>