<?php   

    require_once '../../clases/config.class.php';
    require_once '../../clases/usuario.class.php';

    if($_POST['password'] === $_POST['password2']){
        $obj = new Usuarios();
        $correo_electronico = $_POST['email'];
        $nombres = $_POST['nombres'];
        $primer_apellido = $_POST['apellido1'];
        $segundo_apellido = $_POST['apellido2'];
        $password = $_POST['password'];
        $direccion = $_POST['direccion'];

        $pass = sha1($password); //Se encripta la contraseña
        $datos = array(
            $correo_electronico,
            $nombres,
            $primer_apellido,
            $segundo_apellido,
            $pass,
            $direccion
        );

        $obj->registrarUsuario($datos);
        header("Location: ../../vistas/iniciar_sesion.php");
    }
    else{
        die("Las contraseñas no son iguales, confirme su contraseña de favor");
        // header("Location:".$_SERVER['HTTP_REFERER']);
        // echo "<div class=\"alert alert-danger\" role=\"alert\">
        //         Contraseñas diferentes, por favor, verifique las contraseñas
        // </div>";
    }