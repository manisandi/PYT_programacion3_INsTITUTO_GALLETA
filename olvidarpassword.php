<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener el correo electrónico del formulario
    $correo = $_POST['correo'];

    // Conectar a la base de datos
    $conn = new mysqli('localhost', 'root', '', 'pytGalleta');

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Verificar si el correo electrónico existe en la base de datos
    $sql = "SELECT * FROM usuarios WHERE correo_electronico = ?";
    $stmt = $conn->prepare($sql);

    // Verificar si la preparación de la consulta falló
    if (!$stmt) {
        die("Error en la preparación de la consulta: " . $conn->error);
    }

    $stmt->bind_param('s', $correo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Usuario encontrado, enviar correo electrónico
        $nuevaContrasena = 'reset123';
        $hashContrasena = password_hash($nuevaContrasena, PASSWORD_BCRYPT);

        // Actualizar la contraseña en la base de datos
        $sql = "UPDATE usuarios SET password = ? WHERE correo_electronico = ?";
        $stmt = $conn->prepare($sql);

        // Verificar si la preparación de la consulta falló
        if (!$stmt) {
            die("Error en la preparación de la consulta: " . $conn->error);
        }

        $stmt->bind_param('ss', $hashContrasena, $correo);
        $stmt->execute();

        // Enviar correo electrónico
        $to = $correo;
        $subject = 'Restablecimiento de Contraseña';
        $message = 'Tu nueva contraseña es: ' . $nuevaContrasena;
        $headers = 'From: no-reply@tudominio.com' . "\r\n" .
                   'Reply-To: no-reply@tudominio.com' . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);

        echo "<div class='alert alert-success'>Se ha enviado un correo con la nueva contraseña.</div>";
    } else {
        echo "<div class='alert alert-danger'>El correo electrónico no está registrado.</div>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olvidé mi Contraseña</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <?php include './shared/header.php'; ?>

    <div class="container mt-5">
        <h2>Olvidé mi Contraseña</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="correo" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <?php include './shared/footer.php'; ?>
</body>
</html>


