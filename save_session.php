<?php
session_start();

$data = json_decode(file_get_contents('php://input'), true);

if ($data) {
    // Guardar los datos en la sesión
    $_SESSION['token'] = $data['token'];
    $_SESSION['cedula'] = $data['cedula'];
    $_SESSION['nombre'] = $data['nombre'];
    $_SESSION['primer_apellido'] = $data['primer_apellido'];
    $_SESSION['segundo_apellido'] = $data['segundo_apellido'];
    $_SESSION['correo_electronico'] = $data['correo_electronico'];
    $_SESSION['fecha_nacimiento'] = $data['fecha_nacimiento'];
    $_SESSION['telefono'] = $data['telefono'];
    $_SESSION['numero_whatsapp'] = $data['numero_whatsapp'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['fotografia'] = $data['fotografia'];

    // Enviar una respuesta al cliente
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => 'Datos no recibidos']);
}
?>
