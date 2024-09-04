<?php

include '../shared/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cedula = $_POST['cedula'];
    $password = $_POST['password'];

    // Consulta SQL para verificar las credenciales
    $mysqli = new mysqli('localhost', 'root', '', 'pytGalleta');
    $sql = "SELECT * FROM iniciaradmin WHERE cedula = ? AND password = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("is", $cedula, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar si se encontró un registro
    if ($result->num_rows > 0) {
        // Iniciar sesión y redirigir a indexadmin.php
        $_SESSION['admin'] = $cedula;
        header("Location: ../shared/headerAdmin.php");
        exit();
    } else {
        echo "<div class='alert alert-danger'>Cédula o contraseña incorrecta.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
    <main>
        <section class="gradient-custom">
            <div class="container d-flex justify-content-center align-items-center bg-light py-4">
                <div class="login-container">
                    <h2 class="text-center mb-4">Iniciar Sesión Administrador</h2>
                    <form id="loginForm" method="POST">
                        <div class="form-outline mb-4">
                            <input type="text" id="cedula" name="cedula" class="form-control form-control-lg" placeholder="Cédula" required />
                            <label class="form-label" for="cedula">Cédula</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" placeholder="Contraseña" required />
                            <label class="form-label" for="typePasswordX">Contraseña</label>
                        </div>
                        <button id="login" type="submit" class="btn btn-outline-dark">Iniciar Sesión</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <?php include "../shared/footer.php"; ?>
</body>
