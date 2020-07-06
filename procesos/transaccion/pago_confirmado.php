<?php
session_start();
require_once '../../clases/config.class.php';
require_once '../../clases/compra_hecha.class.php';
if (isset($_POST)) {    
    $obj = new Compra_hecha();
    $id_producto = intval($_POST['id']);
    $nombre_producto = $_POST['nombre'];
    $descripcion_producto = $_POST['descripcion'];
    $precio_producto = $_POST['precio'];
    $correo_usuario = $_SESSION['email'];
    $fecha_actual = date('Y-m-d');
    $fecha_entrega = strtotime('+5 day', strtotime($fecha_actual));
    $fecha_entrega = date('Y-m-j', $fecha_entrega);

    $datos = array(
        $correo_usuario,
        $id_producto,
        $nombre_producto,
        $descripcion_producto,
        $precio_producto,
        $fecha_actual,
        $fecha_entrega
    );    
    
    $obj->agregarCompra($datos);  
    header("Location: ../../vistas/historial_compras.php");
    
    //header("Location: ../../vistas/historial_compras.php");
    // $d = new Conectar();
    // $conexion = $d->conexion();
    // $sql = "SELECT cantidad_productos FROM productos WHERE id_producto = $id_producto";
    // $cantidad_actual_productos = mysqli_query($conexion,$sql);    
    // $cantidad_real = $cantidad_actual_productos - 1;
    // $e = new Conectar();
    // $conexion = $e->conexion();
    // $sql = "UPDATE productos SET cantidad_productos = $cantidad_real WHERE id_producto = $id_producto";
    
}
