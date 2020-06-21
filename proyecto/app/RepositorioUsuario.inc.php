<?php

include_once 'Conexion.inc.php';
include_once 'usuario.inc.php';

class RepositorioUsuario{

//    protected static $cnx;
//
//    public static function getConexion($conexion) {
//        self::$cnx = Conexion::conectar();
//    }
//
//    private static function desconectar() {
//
//        self::$conexion = null;
//    }
//
//    //metodo que sirve para validar el login
//
//    public static function login($usuario) {
//
//        $query = "SELECT * FROM usuarios WHERE email = :email AND password = :password";
//
//        self::getConexion();
//
//        $resultado = self::$cnx->prepare($query);
//
//        $resultado->bindValue(":email", $usuario->obtener_email());
//        $resultado->bindValue(":password", $usuario->obtener_password());
//
//        $resultado->execute();
//
//        if ($resultado->rowCount() > 0) {
//
//           $filas = $resultado->fetch();
//           
//           if ($filas["email"] == $usuario->obtener_email()
//                   && $filas["password"] == $usuario->obtener_password()){
//               return true;
//               
//        } 
//            return false;
//        }

    public static function obtener_todos($conexion){
        
        $usuarios = array();
        
        if (isset($conexion)) {
            
            try {
                
                include_once 'Usuario.inc.php';
                
                $sql = "SELECT * FROM usuarios";
                
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> execute();
                $resultado = $sentencia -> fetchAll();
                
                if (count($resultado)){
                    foreach ($resultado as $fila) {
                        $usuarios[] = new Usuario(
                                $fila['id'], $fila['nombre'], $fila['apellido'],$fila['telefono'], $fila['email'], $fila['password']
                                );
                         }
                    
                }else {
                    print 'No hay usuarios';
                }
                
            } catch (PDOException $ex) {
                print 'ERROR' . $ex -> getMessage();
            }
        }
        return $usuarios;
        
    }
    
    public static function insertar_usuario($conexion, $usuario) {
        $usuario_insertado = false;
        
        if (isset($conexion)){
            try {
                $sql = "INSERT INTO usuarios(nombre, apellido, telefono, email, password) VALUES(:nombre, :apellido, :telefono, :email, :password)";
                 $nombretemp = $usuario -> obtener_nombre();
                 $apellidotemp = $usuario -> obtener_apellido();
                 $teltemp = $usuario -> obtener_tel();
                 $emailtemp = $usuario->obtener_email();
                 $passwordtemp = $usuario->obtener_password();
                
                $sentencia = $conexion -> prepare($sql);
                
                $sentencia -> bindParam(':nombre', $nombretemp, PDO::PARAM_STR);
                $sentencia -> bindParam(':apellido', $apellidotemp, PDO::PARAM_STR);
                $sentencia -> bindParam(':telefono', $teltemp, PDO::PARAM_STR);
                $sentencia -> bindParam(':email', $emailtemp, PDO::PARAM_STR);
                $sentencia -> bindParam(':password', $passwordtemp, PDO::PARAM_STR);
                
                $usuario_insertado = $sentencia -> execute();
            } catch (PDOException $ex) {
                print 'ERROR' . $ex ->getMessage();
                
            }
        }
        
        return $usuario_insertado;
        
    }
    
    public static function obtener_usuario_por_email($conexion, $email) {
        $usuario = null;
        
        if (isset($conexion)){
            try {
                include_once 'Usuario.inc.php';
                    
                $sql = "SELECT * FROM usuarios WHERE email = :email";
                
                $sentencia = $conexion -> prepare($sql);
                
                $sentencia -> bindParam(':email', $email, PDO::PARAM_STR);
                
                $sentencia -> execute();
                
                $resultado = $sentencia -> fetch();
                
                if (!empty($resultado)) {
                   $usuario = new Usuario($resultado['id'],
                           $resultado['nombre'], 
                           $resultado['apellido'], 
                           $resultado['telefono'], 
                           $resultado['email'], 
                           $resultado['password'],
                           $resultado['privilegio']); 
                }
            } catch (PDOException $ex) {
                print 'ERROR' . $ex -> getMessage();
                
            }
        }
        return $usuario;
    }
    }


