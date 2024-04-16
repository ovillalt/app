<?php
if ($_SERVER["HTTP_HOST"] == "localhost") {
    $servidor = "localhost";
    $baseDeDatos = "app";
    $usuario = "root";
    $contrasenia = "";
} else {
    $servidor = "localhost";
    $baseDeDatos = "chowa_app";
    $usuario = "chowa_app";
    $contrasenia = "0Pto9g53#";
}
try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $usuario, $contrasenia);
} catch (Exception $ex) {
    echo $ex->getMessage();
}

?>