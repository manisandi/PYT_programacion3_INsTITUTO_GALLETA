document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.getElementById('loginForm');

    if (!(loginForm instanceof HTMLFormElement)) {
        console.error('Formulario no encontrado o no es un elemento de formulario');
        return;
    }

    loginForm.addEventListener('submit', (e) => {
        e.preventDefault();

        const formData = new FormData(loginForm);
        const cedula = formData.get('cedula');
        const password = formData.get('password');

        if (!cedula || !password) {
            console.error('Cedula o password no definidos');
            return;
        }

        fetch('http://localhost:8080/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ cedula, password }),
        })
        .then(response => response.json())
        .then(result => {
            if (result.message === 'Login successful') {
                // Guardar los datos en sessionStorage
                sessionStorage.setItem('token', result.token);
                sessionStorage.setItem('cedula', result.user.cedula);
                sessionStorage.setItem('nombre', result.user.nombre);
                sessionStorage.setItem('primer_apellido', result.user.primer_apellido);
                sessionStorage.setItem('segundo_apellido', result.user.segundo_apellido);
                sessionStorage.setItem('correo_electronico', result.user.correo_electronico);
                sessionStorage.setItem('fecha_nacimiento', result.user.fecha_nacimiento);
                sessionStorage.setItem('telefono', result.user.telefono);
                sessionStorage.setItem('numero_whatsapp', result.user.numero_whatsapp);
                sessionStorage.setItem('password', result.user.password);
                sessionStorage.setItem('fotografia', result.user.fotografia);
                
                // Enviar datos al servidor para guardarlos en la sesión PHP
                fetch('save_session.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        token: sessionStorage.getItem('token'),
                        cedula: sessionStorage.getItem('cedula'),
                        nombre: sessionStorage.getItem('nombre'),
                        primer_apellido: sessionStorage.getItem('primer_apellido'),
                        segundo_apellido: sessionStorage.getItem('segundo_apellido'),
                        correo_electronico: sessionStorage.getItem('correo_electronico'),
                        fecha_nacimiento: sessionStorage.getItem('fecha_nacimiento'),
                        telefono: sessionStorage.getItem('telefono'),
                        numero_whatsapp: sessionStorage.getItem('numero_whatsapp'),
                        password: sessionStorage.getItem('password'),
                        fotografia: sessionStorage.getItem('fotografia')
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Inicio de sesión exitoso');
                        window.location.href = 'index.php'; // Redirige a la página principal
                    } else {
                        alert(data.error || 'Error al guardar la sesión en el servidor');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            } else {
                alert(result.error || 'Error al iniciar sesión');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
    
});
