<?php include '../shared/headerAdmin.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
<div class="container">
    
    <div class="d-flex bd-highlight mb-3">
        <div class="me-auto p-2 bd-highlight">

        </div>
        <div class="p-2 bd-highlight">

            <a href="./administracionCursos.php" class="btn btn-secondary"><i class="fas fa-plus"></i> Ingresar nuevo curso</a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table text-center">
            <thead>
                <tr>
                <th scope="col">Identificador</th>
                    <th scope="col">Nombre Curso</th>
                    <th scope="col">Duración</th>
                    <th scope="col">Modalidad</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Precio</th>

                </tr>
            </thead>
            <tbody id="datosTabla">
                
            </tbody>
        </table>
    </div>
</div>
<script src="../js/verCursos.js"></script>
<?php include "../shared/footer.php"; ?>