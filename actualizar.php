<?php

include("conexion.php");

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$edad = $_POST["edad"];
$semestre = $_POST["semestre"];

$sql = "UPDATE alumnos SET

nombre = '$nombre',
apellido = '$apellido',
correo = '$correo',
edad = '$edad',
semestre = '$semestre'

WHERE id = $id";

if ($conexion->query($sql) === TRUE) {

    header("Location: index.php");

    exit();

} else {

    echo "Error al actualizar: " . $conexion->error;

}

?>