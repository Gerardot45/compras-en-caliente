<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registrarse</title>
    <!-- Dentro del head -->
    <?php require_once '../vistas/auxiliares/encabezado.php'; ?>
</head>
<body>
    <!-- Navbar -->
    <?php include_once '../vistas/auxiliares/navbar.php'; ?>
    <br><br>
    <div class="container">
        <h2>Registro</h2>
        <p>Ingrese los datos correspondientes, por favor<br>Con esto, usted podrá comprar los producto que vaya agregando al carrito</p>
        <form class="form-group" method="POST" action="">
            <label for="email" class="mb-2 mr-sm-2">Correo Electrónico:</label>
            <input type="email" class="form-control mb-2 mr-sm-2" id="email" placeholder="Coloque su correo electrónico" name="email">

            <label for="nombre" class="mb-2 mr-sm-2">Nombre: </label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="nombre" placeholder="Coloque su nombre" name="nombre">

            <label for="apellido1" class="mb-2 mr-sm-2">Primer Apellido:</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="apellido1" placeholder="Coloque su primer apellido" name="apellido1">

            <label for="apellido2" class="mb-2 mr-sm-2">Segundo Apellido:</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="apellido2" placeholder="Coloque su primer apellido" name="apellido2">
            
            <label for="direccion" class="mb-2 mr-sm-2">Dirección:</label>
            <textarea placeholder="Dirección" class="form-control mb-2 mr-sm-2" id="direccion" name="direccion"></textarea>
            <label for="password" class="mb-2 mr-sm-2">Contraseña:</label>
            <input type="password" class="form-control mb-2 mr-sm-2" id="password" placeholder="contraseña" name="password">

            <label for="password2" class="mb-2 mr-sm-2">Confirme su contraseña:</label>
            <input type="password" class="form-control mb-2 mr-sm-2" id="password2" placeholder="Confirme su contraseña" name="password2">
            <center><button type="submit" class="btn btn-primary mb-2">Registrarse</button></center>
        </form>
    </div>
    <?php include_once 'auxiliares/footer.php'?>
</body>

</html>