

$.ajax({
    type: "GET",
    url: "http://localhost:8080/obtenerTodosCursos",
    dataType: "JSON",
    success: function (res) {
        let cartas = "";
        $.each(res, function (i, v) {
            cartas += crearCarta(v);
        });

        $("#resultados").html(cartas);
    },
    error: function (xhr, status, error) {
        console.log(xhr + " " + status);
        console.log(error);
    }
});

function crearCarta(datos) {
    return `
        <div class="card mt-5 col-md-6 col-lg-4" style="width: 18rem;">
            <img src="${datos.imagen1}" class="card-img-top" alt="Imagen del curso">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nombre Curso: ${datos.nombreCurso}</li>
                <li class="list-group-item">Duracion: ${datos.duracion}</li>
                <li class="list-group-item">Modalidad: ${datos.modalidad}</li>
            </ul>
            <div class="card-body">
                <a href="detalle_cursos.php?Identificador=${datos.Identificador}" class="card-link">Ver más</a>
            </div>
        </div>
    `;
}
