<?php

    class Usuarios{
        public function registrarUsuario($datos){
            try{
                $c = new Conectar();
                $conexion = $c->conexion();
                $fecha = date('Y-m-d');
                $sql = "INSERT INTO compras_en_caliente.usuarios_registrados VALUES 
                                        ('$datos[0]',
                                        '$datos[1]',
                                        '$datos[2]',
                                        '$datos[3]',
                                        '$datos[4]',
                                        '$datos[5]',
                                        '$fecha')";                                        
                $error = mysqli_query($conexion,$sql);
                if($error == false){
                    throw new mysqli_sql_exception();
                }
            }
            catch(mysqli_sql_exception $ex){
                die("Hubo un problema al agregar los datos -> ".$ex);
            }
        }

        public function loginUsuario($datos){
            $c = new Conectar();
            $conexion = $c->conexion();
            $password = sha1($datos[1]);
            $sql = "SELECT * FROM compras_en_caliente.usuarios_registrados WHERE email = '$datos[0]' AND password = '$password'";
            $result = mysqli_query($conexion,$sql);

            if(mysqli_num_rows > 0){
                return 1;
            }
            else{
                return 0;
            }
        }
    }