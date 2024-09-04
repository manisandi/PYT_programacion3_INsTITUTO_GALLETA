<?php
session_start();

if (empty($_SESSION['admin'])) {
    header("location:../index.php");
}
?>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<header>

    <nav class="navbar navbar-expand-lg bg-principal">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/pytgalleta/index.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/verCursos.php">Administrar cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/reportes.php">Reportes</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/cerrarSesion.php">Cerrar Sesión</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    
</header>
