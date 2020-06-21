<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

include_once 'plantillas/doc-apertura.inc.php';
include_once 'plantillas/navbar.inc.php';
?>
<title>Agendar Cita | Clinica Dental</title>
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-7"><div id="calendario"></div></div>
        <div class="col"></div>
    </div>
</div>





<script>
    $(document).ready(function () {
        $('#calendario').fullCalendar({
            header: {
                left: 'today,prev,next,miboton',
                center: 'title',
                right: 'month,basicWeek, basicDay, agendaWeek, agendaDay'
            },
            dayClick: function (date, jsEvent, view) {
                
                $('#btnAgregar').prop("disabled",false);
                $('#btnModificar').prop("disabled",true);
                $('#btnEliminar').prop("disabled",true);
                
                limpiarFormulario();
                $('#txtFecha').val(date.format());
                $("#modalCitas").modal();

            },
            events: 'http://localhost/proyecto/agen.php'
                    
//                   [
//                {
//                    title: 'Cita Agendada',
//                    nombre: 'Jazmin',
//                    apellido: 'garnica',
//                    telefono: '6131234567',
//                    start: '2020-06-17T12:30:00',
//                },
//                {
//                    title: 'Cita Agendada',
//                    start: '2020-06-15T12:30:00'
//                }
//            ]
                    ,
            eventClick: function (calEvent, jsEvent, view) {
                
                 $('#btnAgregar').prop("disabled",true);
                $('#btnModificar').prop("disabled",false);
                $('#btnEliminar').prop("disabled",false);

                $('#titulo').html(calEvent.title);
                $('#txtID').val(calEvent.id);
                $('#txtNombre').val(calEvent.nombre);
                $('#txtApellido').val(calEvent.apellido);
                $('#txtTel').val(calEvent.telefono);

                FechaHora = calEvent.start._i.split(" ");
                $('#txtFecha').val(FechaHora[0]);
                $('#txtHora').val(FechaHora[1]);

                $("#modalCitas").modal();
            },
            editable: true,
            eventDrop: function (calEvent) {
                $('#txtID').val(calEvent.id);
                $('#titulo').html(calEvent.title);
                $('#txtNombre').val(calEvent.nombre);
                $('#txtApellido').val(calEvent.apellido);
                $('#txtTel').val(calEvent.telefono);

                var fechaHora = calEvent.start.format().split("T");
                $('#txtFecha').val(fechaHora[0]);
                $('#txtHora').val(fechaHora[1]);

                RecolectarDatos();
                EnviraInformacion('modificar', Nuevo,true);
            }



        });
    });
</script>

<!-- Modal (agregar modificar eliminar)-->
<div class="modal fade" id="modalCitas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title" id="titulo">AGENDAR CITA</h5>
            </div>
            <div class="modal-body">
                
                
                <input type="hidden" id="txtID" name="txtID">            
                <input type="hidden" id="txtFecha" name="txtFecha">
               
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nombre:</label>
                        <input type="text" id="txtNombre" class="form-control" placeholder="Nombre" name="txtNombre"> 
                    </div>
                    <div class="form-group col-md-6">
                        <label> Apellido:</label>
                        <input type="text" id="txtApellido" name="txtApellido" class="form-control" placeholder="Apellido"> 
                    </div>
                    </div>
                <div class="form-group">
                    <label>Telefono:</label>
                    <input type="text" id="txtTel" name="txtTel"class="form-control" placeholder="Telefono">
                </div>
                <div class="form-group">
                    <label>Hora:</label>
                    <div class="input-group clockpicker" data-autoclose="true">
                       <input type="text" id="txtHora" value="10:30" class="form-control">     
                    </div>
                  
                </div>
                          
        </div>
            <div class="modal-footer">
                <button type="button" id="btnAgregar" class="btn btn-success">Agregar</button>
                <button type="button" id="btnModificar "class="btn btn-success">Modificar</button>
                <button type="button" id="btnEliminar "class="btn btn-danger">Eliminar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<script>

    var Nuevo;

    $('#btnAgregar').click(function() {
        RecolectarDatos();
        EnviraInformacion('agregar', Nuevo);
    });

    $('#btnEliminar').click(function() {
        RecolectarDatos();
        EnviraInformacion('eliminar', Nuevo);
    });

    $('#btnModificar').click(function() {
        RecolectarDatos();
        EnviraInformacion('modificar', Nuevo);
    });

    function RecolectarDatos() {
        Nuevo = {
            id:$('#txtID').val(),
            title: $('#txtTitulo').val(),
            start: $('#txtFecha').val() + " " + $('#txtHora').val(),
            nombre: $('#txtNombre').val(),
            apellido: $('#txtApellido').val(),
            telefono: $('#txtTel').val()
        };
    }

    function EnviraInformacion(accion, objCita,modal) {
        $.ajax({
            type: 'POST',
            url: 'agen.php?accion=' + accion,
            data: objCita,
            success: function (msg) {
                if (msg) {
                    $('#calendario').fullCalendar('refetchEvents');
                    if(!modal){
                        $("#modalCitas").modal('toggle');
                    }
                    
                }
            },
            error: function () {
                alert("Hay un error...")
            }
        });
    }
    
    $('.clockpicker').clockpicker();
    function limpiarFormulario(){
                $('#txtID').val('');
                $('#titulo').html('');
                $('#txtNombre').val('');
                $('#txtApellido').val('');
                $('#txtTel').val('');  
    }

</script>
