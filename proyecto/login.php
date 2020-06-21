<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
include_once 'app/ValidadorLogin.inc.php';
include_once 'app/ControlSesion.inc.php';
include_once 'app/Redireccion.inc.php';

if (ControlSesion::sesion_iniciada()){
    Redireccion::redirigir(SERVIDOR);
}




if (isset($_POST['login'])) {
    Conexion::abrir_conexion();

    $validador = new ValidadorLogin($_POST['email'], $_POST['clave'], Conexion::obtener_conexion());

    if ($validador -> obtener_error() === '' &&
            !is_null($validador -> obtener_usuario())) {
    ControlSesion::iniciar_sesion(
            $validador -> obtener_usuario() -> obtener_id(),
            $validador -> obtener_usuario() -> obtener_nombre());
    Redireccion::redirigir(SERVIDOR);
    }

    Conexion::cerrar_conexion();
}


include_once 'plantillas/doc-apertura.inc.php';
include_once 'plantillas/navbar.inc.php';
?>

<title>Login | Clinica Dental</title>

<div class="container">
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                <h4>Iniciar Sesión</h4>
            </div>
            <div class="panel-body">
                <form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <h2>Introdute Tus Datos</h2>
                    <br>
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" 
                    <?php
                    if (isset($_POST['login']) && isset($_POST['email']) && !empty($_POST['email'])) {
                        echo 'value="' . $_POST['email'] . '"';
                    }
                    ?>
                           required autofocus>
                    <br>
                    <label for="clave" class="sr-only">Contraseña</label>
                    <input type="password" name="clave" id="clave" class="form-control" placeholder="Contraseña" required>
                    <br>
                    <?php
                    if (isset($_POST['login'])) {
                        $validador -> mostrar_error();
                    }
                    ?>
                    <button type="submit" name="login" class="btn btn-lg btn-primary btn-block">
                        Iniciar Sesión
                    </button>

                </form>
                <br>
                <br>
                <div class="text-center">
                    <a href="#">¿Olvidaste la Contraseña?</a>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
