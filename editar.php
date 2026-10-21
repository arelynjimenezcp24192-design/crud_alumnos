<?php

include("conexion.php");

$id = $_GET["id"];

$sql = "SELECT * FROM alumnos WHERE id = $id";

$resultado = $conexion->query($sql);

$alumno = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Editar Alumno</title>

    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-warning">

            <h3>
                Editar alumno
            </h3>

        </div>

        <div class="card-body">

            <form action="actualizar.php" method="POST">

                <input 
                    type="hidden"
                    name="id"
                    value="<?php echo $alumno['id']; ?>"
                >

                <div class="mb-3">

                    <label class="form-label">
                        Nombre
                    </label>

                    <input
                        type="text"
                        name="nombre"
                        class="form-control"
                        value="<?php echo $alumno['nombre']; ?>"
                        required
                    >

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Apellido
                    </label>

                    <input
                        type="text"
                        name="apellido"
                        class="form-control"
                        value="<?php echo $alumno['apellido']; ?>"
                        required
                    >

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Correo
                    </label>

                    <input
                        type="email"
                        name="correo"
                        class="form-control"
                        value="<?php echo $alumno['correo']; ?>"
                        required
                    >

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Edad
                    </label>

                    <input
                        type="number"
                        name="edad"
                        class="form-control"
                        value="<?php echo $alumno['edad']; ?>"
                        required
                    >

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Semestre
                    </label>

                    <input
                        type="text"
                        name="semestre"
                        class="form-control"
                        value="<?php echo $alumno['semestre']; ?>"
                        required
                    >

                </div>

                <button 
                    type="submit"
                    class="btn btn-success"
                >
                    Actualizar
                </button>

                <a 
                    href="index.php"
                    class="btn btn-secondary"
                >
                    Cancelar
                </a>

            </form>

        </div>

    </div>

</div>

</body>

</html>