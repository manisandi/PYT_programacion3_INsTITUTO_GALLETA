
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>
<body>
    <?php include './shared/header.php'; ?>

    <main>
        <section class="gradient-custom">
            <div class="container d-flex justify-content-center align-items-center py-4">
                <div class="login-container">
                    <h2 class="text-center mb-4">Iniciar Sesión</h2>
                    <form id="loginForm" method="POST">
                        <div class="form-outline mb-4">
                            <input type="text" id="cedula" name="cedula" class="form-control form-control-lg" placeholder="Cédula" />
                            <label class="form-label" for="cedula">Cédula</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" placeholder="Contraseña" />
                            <label class="form-label" for="typePasswordX">Contraseña</label>
                        </div>
                        <button id="login" type="button" class="btn btn-outline-dark">Iniciar Sesión</button>
                    </form>
                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                        <p class="small mb-5 pb-lg-2"><a id="loginAdminLink" class="loginadmin-link" href="#!">Iniciar como Administrador</a></p>
                    </div>
                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                        <p class="small mb-5 pb-lg-2"><a id="olvidarPasswordLink" class="login-link" href="#!">Olvidé mi Contraseña</a></p>
                    </div>
                    <p class="text-center mb-0">¿No tienes cuenta? <a id="crearCuentaLink" href="#!" class="login-link fw-bold">Crear una cuenta</a></p>

                </div>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const crearCuentaLink = document.getElementById('crearCuentaLink');
            const olvidarPasswordLink = document.getElementById('olvidarPasswordLink');
            const loginAdminLink = document.getElementById('loginAdminLink');
            
            crearCuentaLink.addEventListener('click', (e) => {
                e.preventDefault();
                window.location.href = 'crearUsuario.php';
            });

            olvidarPasswordLink.addEventListener('click', (e) => {
                e.preventDefault();
                window.location.href = 'olvidarpassword.php';
            });

            loginAdminLink.addEventListener('click', (e) => {
                e.preventDefault();
                window.location.href = '../pytGalleta/admin/loginadmin.php';
            });
        });
    </script>

    <script src="js/login.js"></script>
    <?php include "shared/footer.php"; ?>
</body>
</html>

