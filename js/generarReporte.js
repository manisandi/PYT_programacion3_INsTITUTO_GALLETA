document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('generarBtn').addEventListener('click', function() {
        // Crear un objeto con los datos del formulario
        const formData = new FormData();
        formData.append('tipoReporte', 'general');

        // Hacer la petición POST
        fetch('http://localhost:8080/generarReporte', {
            method: 'POST',
            // body: formData
        })
        .then(response => {
            if (response.ok) {
                return response.blob(); // Obtener el PDF como blob
            } else {
                throw new Error('Error al generar el reporte');
            }
        })
        .then(blob => {
            // Crear una URL temporal para el archivo PDF
            const url = window.URL.createObjectURL(blob);
            // Redirigir al PDF generado
            window.location.href = url;
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});
