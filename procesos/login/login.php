<?php
session_start();

require_once '../../clases/config.class.php';
require_once '../../clases/usuario.class.php';

$obj = new Usuarios();

$datos = array(
    $_POST['email'],
    $_POST['password']
);

$resultado = $obj->loginUsuario($datos);

if($resultado){
    header("Location: ../../vistas/index.php");
}
else{
    die("El correo o la contraseña no son correctas");
}

