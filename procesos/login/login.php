<?php

require_once '../../clases/config.class.php';
require_once '../../clases/usuario.class.php';

$obj = new Usuarios();

$datos = array(
    $_POST['email'],
    $_POST['password']
);

echo $obj->loginUsuario($datos);