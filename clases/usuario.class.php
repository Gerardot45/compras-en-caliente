<?php

    class Usuarios{
        public function registrarUsuario($datos){
            try{
                $c = new Conectar();
                $conexion = $c->conexion();
                $fecha = date('Y-m-d');
                $sql = "INSERT INTO usuarios_registrados VALUES 
                                        ('$datos[0]',
                                        '$datos[1]',
                                        '$datos[2]',
                                        '$datos[3]',
                                        '$datos[4]',
                                        '$datos[5]',
                                        '$fecha')";                                        
                $error = mysqli_query($conexion,$sql);
                if(!$error){
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
            $sql = "SELECT * FROM usuarios_registrados WHERE email_usuario = '$datos[0]' AND password = '$password'";
            $result = mysqli_query($conexion,$sql);               
            if(mysqli_num_rows($result) > 0){            
                $columna = mysqli_fetch_row($result);                
                $_SESSION['email'] = $columna[0];                                
                $_SESSION['nombre_usuario'] = $columna[1];                                
                $_SESSION['primer_apellido'] = $columna[2];
                $_SESSION['segundo_apellido'] = $columna[3];
                $_SESSION['direccion'] = $columna[5];
                $_SESSION['fecha_registro'] = $columna[6];                                
                return 1;
            }
            else{
                return 0;
            }
        }
    }