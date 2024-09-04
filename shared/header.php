<?php
session_start();
$is_logged_in = isset($_SESSION['cedula']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-principal">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="Cursos.php">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Contactenos.php">Contáctenos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Ubicaciones.php">Ubicaciones</a>
                        </li>
                        <?php if (isset($_SESSION['token'])): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="IniciarSesion.php" style="display: none;">Iniciar Sesión</a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="IniciarSesion.php">Iniciar Sesión</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <form class="d-flex" role="search">
                        <input id="txtBuscar" class="form-control me-2" type="search" placeholder="Buscar Curso" aria-label="Buscar">
                        <button id="btnSearch" class="btn btn-outline-success" type="button">Buscar</button>
                    </form>
                    <ul class="navbar-nav">
                        <?php if (isset($_SESSION['token'])): ?>
                            <li class="nav-item dropdown" id="userDropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img id="userImage" src="./uploads/<?php echo $_SESSION['fotografia'] ?? 'default-avatar.jpg'; ?>" alt="Perfil" style="height: 40px; border-radius: 50%;">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="crearusuario.php">Editar Perfil</a></li>
                                    <li><a class="dropdown-item" href="administrarInscripciones.php">Administrar inscripciones</a></li>
                                    <li><a class="dropdown-item" id="logoutLink" href="cerrarSesion.php">Cerrar Sesión</a></li>
                                    
                                </ul>
                                
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const userImage = document.getElementById('userImage');
            const userDropdown = document.getElementById('userDropdown');
            const loginLink = document.querySelector('.nav-link[href="IniciarSesion.php"]');
            const logoutLink = document.getElementById('logoutLink');

            // Obtener datos del sessionStorage
            const fotografia = sessionStorage.getItem('fotografia');

            if (fotografia) {
                const imagePath = `/pytGalleta/uploads/${fotografia}`;
                userImage.src = imagePath; // Actualiza la ruta de la imagen

                // Verifica si la imagen carga correctamente
                userImage.onload = function() {
                    userDropdown.classList.remove('d-none'); // Muestra el menú desplegable
                    if (loginLink) {
                        loginLink.classList.add('d-none'); // Oculta el enlace de "Iniciar Sesión"
                    }
                };

                userImage.onerror = function() {
                    console.error('No se pudo cargar la imagen desde', imagePath);
                };
            }

            if (logoutLink) {
                logoutLink.addEventListener('click', function() {
                    sessionStorage.clear(); // Limpia todos los datos de sessionStorage
                });
            }
        });
    </script>
    <script src="js/header.js"></script> 
</body>
</html>
