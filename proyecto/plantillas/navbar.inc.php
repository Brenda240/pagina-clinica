<?php
include_once 'app/ControlSesion.inc.php';
include_once 'app/config.inc.php';
?>

 
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <!-- logo -->
            <div class="col-md-2 pull-left"><a class="logo-light" href="index.html">
                    <img alt="#" src="images/logofi.jpg" class="logo" />
                </a>
            </div>
            <!--end logo -->

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>

        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo SERVIDOR ?>"><span class="glyphicon glyphicon-home" style="color: blue"aria-hidden="true"></span> INICIO</a></li>
                <li><a href="instalaciones.php"> INSTALACIONES</a></li>
                <li>
                    <a href="tratamientos.php">TRATAMIENTOS</a>
                   
                </li>

                <li><a href="contacto.php">CONTACTANOS</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                
                <?php
                if (ControlSesion::sesion_iniciada()) {
                    ?>
                    <li>
                        <a href="#">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                            <?php echo '' . $_SESSION['nombre_usuario']; ?>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo RUTA_LOGOUT; ?>">
                            <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>Cerrar sesión
                        </a>
                    </li>

                    <?php
                } else {
                    ?>

                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>Iniciar sesión</a></li>
                    <li><a href="registro.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Registro</a></li>
                        <?php
                    }
                    ?>


            </ul>
        </div>
    </div>
</nav>






