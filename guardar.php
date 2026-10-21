<?php

include("conexion.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$edad = $_POST["edad"];
$semestre = $_POST["semestre"];

$sql = "INSERT INTO alumnos
(nombre, apellido, correo, edad, semestre)
VALUES
('$nombre', '$apellido', '$correo', '$edad', '$semestre')";

if ($conexion->query($sql) === TRUE) {

    header("Location: index.php");

    exit();

} else {

    echo "Error: " . $conexion->error;

}

?>