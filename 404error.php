<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Error</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/error-404s/error-404-1/assets/css/error-404-1.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <?php include './shared/header.php'; ?>

    <div class="container">
        <!-- <img src="./img/pngtree-error-404-page-not-found-website-png-image_3545448.jpg">
        <div class="overlay">
            <h1>404 - Página No Encontrada</h1>
            <p>Lo sentimos, pero la página que estás buscando no existe.</p>
        </div> -->
        <section class="py-3 py-md-5 min-vh-80 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h2 class="d-flex justify-content-center align-items-center gap-2 mb-4">
                                <span class="display-1 fw-bold">4</span>
                                <i class="bi bi-exclamation-circle-fill text-danger display-4"></i>
                                <span class="display-1 fw-bold bsb-flip-h">4</span>
                            </h2>
                            <h3 class="h2 mb-2">¡Ups! ¡Estás perdido!.</h3>
                            <p class="mb-5">La página que estás buscando no fue encontrada</p>
                            <a class="btn bsb-btn-5xl btn-dark rounded-pill px-5 fs-6 m-0" href="#!" role="button">Regresar al Inicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include './shared/footer.php'; ?>
</body>

</html>