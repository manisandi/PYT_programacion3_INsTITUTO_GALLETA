<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener datos del formulario
    $codigo = $_POST['codigo'];
    $nuevaContrasena = $_POST['nueva_contrasena'];

    // Conectar a la base de datos
    $conn = new mysqli('localhost', 'root', '', 'pytGalleta');

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Verificar si el código de restablecimiento es válido
    $sql = "SELECT * FROM usuarios WHERE codigo_restablecimiento = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $codigo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Actualizar la contraseña en la base de datos
        $hashContrasena = password_hash($nuevaContrasena, PASSWORD_BCRYPT);
        $sql = "UPDATE usuarios SET password = ?, codigo_restablecimiento = NULL WHERE codigo_restablecimiento = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ss', $hashContrasena, $codigo);
        $stmt->execute();

        echo "<div class='alert alert-success'>Contraseña actualizada con éxito.</div>";
    } else {
        echo "<div class='alert alert-danger'>Código de restablecimiento inválido.</div>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <?php include './shared/header.php'; ?>

    <div class="container mt-5">
        <h2>Restablecer Contraseña</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="codigo" class="form-label">Código de Restablecimiento</label>
                <input type="text" class="form-control" id="codigo" name="codigo" required>
            </div>
            <div class="mb-3">
                <label for="nueva_contrasena" class="form-label">Nueva Contraseña</label>
                <input type="password" class="form-control" id="nueva_contrasena" name="nueva_contrasena" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Contraseña</button>
        </form>
    </div>

    <?php include './shared/footer.php'; ?>
</body>
</html>


