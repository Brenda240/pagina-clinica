<?php

include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

include_once 'plantillas/doc-apertura.inc.php';
include_once 'plantillas/navbar.inc.php';

$enlace = mysqli_connect($nombre_servidor, $nombre_usuario, $password, $nombre_base_datos);
if (!$enlace) {
    echo 'Error en la conexion';
}
?>
<title>Agendar Cita | Clinica Dental</title>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <h3 class="text-center">Agendar una Cita</h3>
     
                <div class="panel-body">

                    <br>
                    <form method="post" action="/" id="contact" role="form">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control" placeholder="Nombres" required=""> 

                        </div>
                        <div class="form-group">
                            <label>Apellido</label>
                            <input type="text" class="form-control"placeholder="Apellido" required="">
                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="tel" class="form-control" placeholder="Telefono" required="">
                        </div>

                        <p class="h4 text-center mb-4 title">Elige Fecha para tu cita</p>

                       
                        <div class="form-group">
                            <label>Fecha</label>
                            <input type="text" class="form-control" required="">
                        </div>

                        <div class="form-group">
                            <label>Hora</label>
                            <input type="time" class="form-control" required="">
                        </div>
                        <div class="form-footer">
                        <button type="submit" name="agendar" class="btn btn-primary btn-block" >
                            Agendar
                        </button>
                        <button type="reset" class="button">Cancelar</button>
                        </div>
                </form>


            </div>

        </div></div>

</div>
</div>

<?php

include_once 'plantillas/doc-cierre.inc.php';
?>