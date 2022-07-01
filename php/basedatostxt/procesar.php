<?php

function agregarRegistro() {

    $nombre = (isset($_GET["nombre"])) ? $_GET["nombre"] : "";
    $edad = (isset($_GET["edad"])) ? $_GET["edad"] : "";
    $pasatiempo = (isset($_GET["pasatiempo"])) ? $_GET["pasatiempo"] : "";

    file_put_contents("registros.txt", "\n${nombre},${edad},${pasatiempo}", FILE_APPEND);
}

function editarRegistro() {

    $id = (isset($_GET["id"])) ? $_GET["id"] : "";
    $nombre = (isset($_GET["nombre"])) ? $_GET["nombre"] : "";
    $edad = (isset($_GET["edad"])) ? $_GET["edad"] : "";
    $pasatiempo = (isset($_GET["pasatiempo"])) ? $_GET["pasatiempo"] : "";

    $registros = file("registros.txt",FILE_IGNORE_NEW_LINES);
    $registros[$id] = "${nombre},${edad},${pasatiempo}";

    file_put_contents("registros.txt", implode("\n", $registros));
}

function eliminarRegistros() {

    $registrosBorrar = (isset($_GET["eliminar"])) ? $_GET["eliminar"] : "";
    rsort($registrosBorrar);

    $registros = file("registros.txt",FILE_IGNORE_NEW_LINES);

    foreach ($registrosBorrar as $id) {
        unset($registros[$id]);
    }

    file_put_contents("registros.txt", implode("\n", $registros));
}

$boton = (isset($_GET["boton"])) ? $_GET["boton"] : "";
if($boton == "Agregar")
    header("location:editar.php?boton=Agregar");
elseif ($boton == "Guardar") {
    agregarRegistro();
    header("location:index.php");
} elseif ($boton == "Editar") {
   editarRegistro();
    header("location:index.php");
} elseif ($boton == "Eliminar") {
    eliminarRegistros();
    header("location:index.php");
}

?>