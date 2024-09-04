// Obtener parámetro
const url = new URL(location.href);
const params = url.searchParams;
const Identificador = params.get("Identificador");

$.ajax({
    type: "GET",
    url: `http://localhost:8080/obtenerCurso/${Identificador}`,
    dataType: "JSON",
    success: function (res) {
        let datos = res[0];
        $("#imagen1").html(`<img src="${datos.imagen1}" alt="Imagen 1" >`);
        $("#imagen2").html(`<img src="${datos.imagen2}" alt="Imagen 2" >`);
        $("#imagen3").html(`<img src="${datos.imagen3}" alt="Imagen 3" >`);
        $("#nombreCurso").html(datos.nombreCurso);
        $("#duracion").html(datos.duracion);
        $("#modalidad").html(datos.modalidad);
        $("#descripcion").html(datos.descripcion);
        $("#categoria").html(datos.categoria);
        $("#precio").html(datos.precio);
        $("#nombrePromotor").html(datos.nombrePromotor);
        $("#telefonoPromotor").html(datos.telefonoPromotor);
        $("#whatsappPromotor").html(datos.whatsappPromotor);
        $("#correoPromotor").html(datos.correoPromotor);
    },
    error: function (xhr, status, error) {
        console.log(xhr + " " + status);
        console.log(error);
    }
});
