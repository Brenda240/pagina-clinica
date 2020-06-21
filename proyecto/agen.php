<?php

header('Content-Type: application/json');

$pdo = new PDO("mysql:host=localhost;dbname=pagina", "root", "");


$accion = (isset($_GET['accion'])) ? $_GET['accion'] : 'leer';

switch ($accion) {
    case 'agregar':
//agregado
        $sentenciaSQL = $pdo->prepare("INSERT INTO "
                . "citas(nombre,apellido,telefono,start)"
                . "VALUES(:nombre,:apellido,:telefono,:start)");

        $respuesta = $sentenciaSQL->execute(array(
            
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "telefono" => $_POST['telefono'],
            "start" => $_POST['start']
        ));
        echo json_encode($respuesta);
        break;
    case 'eliminar':
        //eliminar
        $respuesta = false;

        if (isset($_POST['id'])) {

            $sentenciaSQL = $pdo->prepare("DELETE FROM citas WHERE ID=:ID");
            $respuesta = $sentenciaSQL->execute(array("ID" => $_POST['id']));
        }
        echo json_encode($respuesta);

        break;

    case 'modificar':
        //modificar
        $sentenciaSQL = $pdo->prepare("UPDATE citas SET nombre=:nombre,apellido=:apellido,telefono=:telefono,start=start WHERE ID=:ID");

        $respuesta = $sentenciaSQL->execute(array(
            "ID" => $_POST['id'],
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "telefono" => $_POST['telefono'],
            "start" => $_POST['start']
        ));
        echo json_encode($respuesta);
        break;
    default :

        $sentenciaSQL = $pdo->prepare('SELECT * FROM citas');
        $sentenciaSQL->execute();

        $resultado = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($resultado);

        break;
}
?>




