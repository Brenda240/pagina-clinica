<?php

include_once 'plantillas/doc-apertura.inc.php';
include_once 'plantillas/navbar.inc.php';

?>

<title>Contacto</title>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <h3 class="text-center">Contacto</h3>

                <div class="panel-body">
                    <br>
                    <form role="form" action="enviar-prueba.php" method="post" class="formulario">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control" placeholder="ingrese su nombre" required=""> 

                        </div>
                        <div class="form-group">
                            <label>Correo Electronico</label>
                            <input type="text" name="correo"class="form-control"placeholder="ejemplo@mail.com" required="">
                        </div>
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="tel"  name="telefono" class="form-control" placeholder="ingrese su Telefono" required="">
                        </div>

                        <div class="form-group">
                            <label>Mensaje</label>
                            <textarea name="mensaje" class="form-control" placeholder="Escriba aqui su mensaje" required=""></textarea>
                        </div>
                        <button type="submit" name="enviar" class="btn btn-lg btn-primary btn-block" >
                            ENVIAR
                        </button>
                    </form>


                </div>

            </div></div>

        
        <div class="col-md-4">
            <h2>Más Información</h2>
            <p><strong>CLÍNICA DENTAL SHARM DENT</strong></p>
            <p>
                <strong>Dirección:</strong>
                &nbsp;Calle Valentin Gómez Farias,#556,
                <br>
                Nueva Puesta Del Sol, C.P. 23095
                <br>
                La Paz, Baja California Sur
                <br>
                <br>
                <strong>Teléfono:</strong>
                6121419358
                <br>
                <br>
                <strong>Email:</strong>
                clinicashardent@gmail.com
                
            
            
            </p>
        </div>
        
    </div>
</div>

<?php

include_once 'plantillas/doc-cierre.inc.php';
?>