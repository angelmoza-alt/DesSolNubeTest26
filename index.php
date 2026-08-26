<?php
include("conexion.php");
$conexion = conexion();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrando datos with Railway</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navegación Superior -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
        <div class="container-fluid px-4">
            <a class="navbar-link navbar-brand d-flex align-items-center text-dark text-decoration-none fw-bold" href="#">
                <span class="me-2">ඞ</span> Index
            </a>
            <div class="d-flex ms-auto">
                <a class="nav-link px-3 text-secondary" href="index.php">Registrar</a>
                <a class="nav-link px-3 text-secondary" href="#">Actualizar</a>
                <a class="nav-link px-3 text-secondary" href="#">Eliminar</a>
            </div>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <div class="container py-5">
        <div class="text-center mb-4">
            <h1 class="display-4 fw-normal">Registrando datos with Railway</h1>
            <p class="fs-5 text-muted">PostgreSQL + PHP</p>
        </div>

        <!-- Card del Formulario -->
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-8">
                <div class="card shadow-sm border-light-subtle rounded-3 p-4">
                    <form action="index-post.php" method="POST">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="nro_doc" class="form-label text-secondary small fw-semibold">Nro Documento</label>
                                <input type="text" class="form-control" id="nro_doc" name="nro_doc" placeholder="43424714" required>
                            </div>
                            <div class="col-md-4">
                                <label for="nombre" class="form-label text-secondary small fw-semibold">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="col-md-4">
                                <label for="apellidos" class="form-label text-secondary small fw-semibold">Apellidos</label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                            </div>
                            <div class="col-md-6">
                                <label for="direccion" class="form-label text-secondary small fw-semibold">Direccion</label>
                                <input type="text" class="form-control" id="direccion" name="direccion">
                            </div>
                            <div class="col-md-6">
                                <label for="celular" class="form-label text-secondary small fw-semibold">Celular</label>
                                <input type="text" class="form-control" id="celular" name="celular">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-primary px-4" style="background-color: #5555ff; border: none;">Registrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center text-muted mt-5 pt-4 border-top">
            <div class="mb-1">ඞ</div>
            <small>© 2023-1</small>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>