<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gerardo Rivera</title>
    <?php require_once 'auxiliares/encabezado.php' ?>
</head>

<body>
    <?php require_once 'auxiliares/navbar.php' ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-2">
                                <img src="" class="img-circle" alt="Foto_de_perfil">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        Nombre : <strong><?php echo $_SESSION['nombre_usuario'] ?></strong><br>
                        Apellido(s) : <strong><?php echo $_SESSION['primer_apellido'].' '.$_SESSION['segundo_apellido'];?></strong><br>
                        Dirección : <strong><?php echo $_SESSION['direccion'] ?></strong><br>
                        Fecha de registro : <strong><?php echo $_SESSION['fecha_registro'];?></strong>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
    <?php require_once 'auxiliares/footer.php' ?>
</body>

</html>