<?php

include("conexion.php");

$sql = "SELECT * FROM alumnos ORDER BY id DESC";

$resultado = $conexion->query($sql);

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRUD de Alumnos</title>

    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >

</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">

            <h2 class="text-center">
                Sistema de Alumnos
            </h2>

        </div>

        <div class="card-body">

            <h4 class="mb-4">
                Registrar alumno
            </h4>

            <form action="guardar.php" method="POST">

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Nombre
                        </label>

                        <input 
                            type="text"
                            name="nombre"
                            class="form-control"
                            required
                        >

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Apellido
                        </label>

                        <input 
                            type="text"
                            name="apellido"
                            class="form-control"
                            required
                        >

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">
                            Correo
                        </label>

                        <input 
                            type="email"
                            name="correo"
                            class="form-control"
                            required
                        >

                    </div>

                    <div class="col-md-3 mb-3">

                        <label class="form-label">
                            Edad
                        </label>

                        <input 
                            type="number"
                            name="edad"
                            class="form-control"
                            required
                        >

                    </div>

                    <div class="col-md-3 mb-3">

                        <label class="form-label">
                            Semestre
                        </label>

                        <input 
                            type="text"
                            name="semestre"
                            class="form-control"
                            required
                        >

                    </div>

                </div>

                <button 
                    type="submit"
                    class="btn btn-success"
                >
                    Registrar alumno
                </button>

            </form>

        </div>

    </div>


    <div class="card shadow mt-4">

        <div class="card-header">

            <h4>
                Lista de alumnos
            </h4>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-striped table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Edad</th>
                            <th>Semestre</th>
                            <th>Acciones</th>

                        </tr>

                    </thead>

                    <tbody>

                    <?php while($alumno = $resultado->fetch_assoc()) { ?>

                        <tr>

                            <td>
                                <?php echo $alumno['id']; ?>
                            </td>

                            <td>
                                <?php echo $alumno['nombre']; ?>
                            </td>

                            <td>
                                <?php echo $alumno['apellido']; ?>
                            </td>

                            <td>
                                <?php echo $alumno['correo']; ?>
                            </td>

                            <td>
                                <?php echo $alumno['edad']; ?>
                            </td>

                            <td>
                                <?php echo $alumno['semestre']; ?>
                            </td>

                            <td>

                                <a 
                                    href="editar.php?id=<?php echo $alumno['id']; ?>"
                                    class="btn btn-warning btn-sm"
                                >
                                    Editar
                                </a>





                                <a 
                                    href="eliminar.php?id=<?php echo $alumno['id']; ?>"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Deseas eliminar este alumno?')"
                                >
                                    Eliminar
                                </a>

                            </td>

                        </tr>

                    <?php } ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

</body>

</html>