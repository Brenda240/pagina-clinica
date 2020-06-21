<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
include_once 'app/Redireccion.inc.php';

if (isset($_GET['nombre'])&& !empty($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
}  else {
    Redireccion :: redirigir(SERVIDOR);
} 
       
    include_once 'plantillas/doc-apertura.inc.php';
    include_once 'plantillas/navbar.inc.php';
    
?>

<title>RegistroCorrecto | Clinica Dental</title>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span>Se ha registrado correctamente
                </div>
                <div class="panel-body text-center">
                    <p> ¡GRACIAS POR REGISTRATE! <b><?php echo $nombre ?></b></p>
                    <br>
                    <p><a href="<?php echo RUTA_LOGIN ?>">Inicia Sesión</a> Para comenzar.</p>
                </div>
            </div>
        </div>
    </div>
</div>
