<?php

class Compra_hecha
{
    public function agregarCompra($datos)
    {
        $c = new Conectar();
        $con = $c->conexion();
        $sql = "INSERT INTO compras_hechas 
            (fk_email_usuario,fk_producto,nombre_producto,descripcion_producto,precio,fecha_del_pedido,fecha_de_entrega) VALUES
            ('$datos[0]',$datos[1],'$datos[2]','$datos[3]',$datos[4],'$datos[5]','$datos[6]')";        
        mysqli_query($con, $sql);        
        $this->seleccionarCantidadProductos($datos[1]);
    }
    public function seleccionarCantidadProductos($id)
    {
        $d = new Conectar();
        $con2 = $d->conexion();
        $sql1 = "SELECT cantidad_productos FROM productos WHERE id_producto = $id";

        $resultado = mysqli_query($con2,$sql1);
        $columna = mysqli_fetch_row($resultado);
        if($columna[0] <= 0){
            die("Los artículos ya se han agotado, lo sentimos");
        }
        $this->modificarCantidadProductos($columna[0],$id);
    }
    public function modificarCantidadProductos($cantidadAModificar, $id)
    {
        $cantidad_nueva = $cantidadAModificar - 1;
        $cantidad_nueva;
        $e = new Conectar();
        $con3 = $e->conexion();
        $sql2= "UPDATE productos SET cantidad_productos = $cantidad_nueva WHERE id_producto = $id";
        $resultado = mysqli_query($con3,$sql2);
        print_r($resultado);
    }
}
