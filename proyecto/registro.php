<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/Usuario.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
include_once 'app/Validadorregistro.inc.php';
include_once 'app/Redireccion.inc.php';

if (isset($_POST['enviar'])){
    Conexion :: abrir_conexion();
    $validador = new ValidadorRegistro($_POST['nombre'], $_POST['apellido'], $_POST['tel'], 
            $_POST['email'], $_POST['clave1'], $_POST['clave2']);
    
    if ($validador -> registro_valido()) {
        $usuario = new Usuario('',$validador -> obtener_nombre(),
                $validador -> obtener_apellido(),
                $validador -> obtener_tel(), 
                $validador -> obtener_email(),
                password_hash($validador -> obtener_clave(),PASSWORD_DEFAULT));
        $usuario_insertado = RepositorioUsuario :: insertar_usuario(Conexion :: obtener_conexion(), $usuario);
        
        if ($usuario_insertado){
            Redireccion::redirigir(RUTA_REGISTRO_CORRECTO . '?nombre=' . $usuario -> obtener_nombre());
            
        }  
    }
    Conexion:: cerrar_conexion();
    
}
include_once 'plantillas/doc-apertura.inc.php';
include_once 'plantillas/navbar.inc.php';
?> 
<title>Registro | Clinica Dental</title>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-title">
             <h3 class="text-center">Registrarse</h3>
                </div>
        
        <div class="panel-body">
            <br>
            <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <?php
                if (isset($_POST['enviar'])){
                    include_once 'plantillas/registro_validado.inc.php';
                } else {
                    include_once 'plantillas/registro_vacio.inc.php';
                }
                    ?>
                    
            </form>
            
            
        </div>
   
</div>
</div>
        </div>
</div>


<?php
include_once 'plantillas/doc-cierre.inc.php';
?>