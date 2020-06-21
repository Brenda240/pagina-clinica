<?php

include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

include_once 'plantillas/doc-apertura.inc.php';
include_once 'plantillas/navbar2.inc.php';


?>

        
        

<title>Clinica Dental</title>
<div class="row" >
    <div class="col-md-8" >
        <h3 class="text-center">Haz tu cita de manera rápida</h3>
    </div>
    <div class="col-md-4 text-center" >
        <span class="glyphicon glyphicon-phone"  aria-hidden="true"></span>612 141 9358
        
        <a href="agendar.php"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>Agendar</a>
        
    </div>
      </div>
<!-- INICIO carousel -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active" style="height: 70vh">
            <img  width="10000" class="first-slide" src="images/sonrrisa.jpg" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>CREAMOS SONRRISAS</h1>
                    <!--<p>pequeña descripcion</p>-->
                    <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">nombre boton</a></p>-->
                </div>
            </div>
        </div>
        <div class="item" style="height: 70vh">
            <img width="10000" class="second-slide" src="images/silla.jpeg" alt="Second slide"  > 
            <div class="container">
                <div class="carousel-caption">
                    <h1>CLINICA DENTAL</h1>
                    <p>HOY ES UN BUEN DIA para SONRREIR</p>
                    <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">CONÓZCANOS</a></p>-->
                </div>
            </div>
        </div>
        <div class="item" style="height: 70vh">
            <img width="10000" class="third-slide" src="images/inst7.jpg" alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>CALIDAD Y ATENCION</h1>
                    <p></p>
                    <!--<p><a class="btn btn-lg btn-primary" href="#" role="button">REGISTRATE</a></p>-->
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- FIN carousel -->
<div class="row margin-five no-margin-top">
                   
       <div class="col-md-8 col-sm-8 center-col text-center">
                    	
           <h2><b>Promociones Del Mes</b></h2><br>
                 
         </div>
                        
<div class="col-md-6 col-sm-12">
  
</div> 
                        </div>
                        </div>

<div class="container marketing">
    <div class="row">
        <div class="col-lg-4 text-center">
            <img class="img-circle" src="images/pro1.jpg" alt="Generic placeholder image" width="340" height="340">
            <h2></h2>
            <p></p>
            <!--<p><a class="btn btn-default" href="#" role="button">DETALLES &raquo;</a></p>-->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 text-center">
            <img class="img-circle" src="images/pro2.jpg" alt="Generic placeholder image" width="340" height="340">
            <h2></h2>
            <p></p>
            <!--<p><a class="btn btn-default" href="#" role="button">DETALLES &raquo;</a></p>-->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 text-center">
            <img class="img-circle " src="images/pro3.jpg" alt="Generic placeholder image" width="340" height="340">
            <h2></h2>
            <p></p>
                            <!--<p><a class="btn btn-default" href="#" role="button">DETALLES &raquo;</a></p>-->
        </div><!-- /.col-lg-4 -->
    </div>
<?php

include_once 'plantillas/doc-cierre.inc.php';
?>
