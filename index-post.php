<?php
include("conexion.php");
$conexion = conexion();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nro_doc = $_POST['nro_doc'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $direccion = $_POST['direccion'];
    $celular = $_POST['celular'];

    $query = "INSERT INTO usuarios (nro_doc, nombre, apellidos, direccion, celular) VALUES ('$nro_doc', '$nombre', '$apellidos', '$direccion', '$celular')";
    $result = pg_query($conexion, $query);

    if ($result) {
        header("Location: index.php?status=success");
    } else {
        echo "Error al registrar datos.";
    }
}
?>