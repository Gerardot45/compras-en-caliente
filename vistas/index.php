<!DOCTYPE html>
<html lang="es">
<head>
    <title>Compras en caliente</title>
</head>
    <!-- Dentro del head -->
    <?php require_once 'auxiliares/encabezado.php'; ?>
<body>
    <!-- navbar -->
    <?php include_once 'auxiliares/navbar.php'; ?>
    <br><br>
    <div class="container">
        
        <?php if(isset($_SESSION['email'])){ ?>
            <h1 class="text-center">Bienvenido/a <?php echo "<a href=\"perfil_usuario.php\">".$_SESSION['nombre_usuario'].' '.$_SESSION['primer_apellido']."</a>";?></h1>
        <?php } else{ ?>
            <h1 class="text-center">Bienvenido/a a nuestra página</h1>
        <?php }?>
        <h2 class="text-center">INICIO</h2>
        <div class="row">
            <div class="col-md-4">
                <h3>Nombre de los integrantes</h3>
                <br>
                <ul>
                    <li><i>Gerardo Rivera Ramírez</i></li>
                    <li><i>Marco Alexis Sánchez Epifanio</i></li>
                    <li><i>Samuel Gasca Fragoso</i></li>
                    <li><i>Ángel Daniel Huerta Tehuacatl</i></li>
                </ul>
            </div>
            <div class="col-md-8">
                <h3 class="text-center">Sobre el pequeño proyecto</h3>
                <hr>
                <h3 class="text-center">Misión</h3>
                <div><h5>"Nuestro propósito es el poder adquierir conocimiento escalando a partir de nuestros proyectos"</h5></div>
                <hr>
                <h3 class="text-center">Visión</h3>
                <div class="div"><h5>"Automatizar nuestros procesos"</h5></div>
            </div>
        </div>
    </div>
    <?php include_once 'auxiliares/footer.php'?>
</body>
</html>