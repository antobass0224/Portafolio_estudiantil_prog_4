<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Formulario</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #e3f2fd;
        }
        .data-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: left;
        }
        .data-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
        .data-container p {
            margin: 10px 0;
            padding: 10px;
            background-color: #bbdefb;
            border-radius: 5px;
        }
        .data-container p strong {
            color: #1e88e5;
        }
    </style>
</head>
<body>
    <div class="data-container">
        <h1>Datos del Formulario</h1>
        <p><strong>Primer Nombre:</strong> <span id="primer_nombre"></span></p>
        <p><strong>Segundo Nombre:</strong> <span id="segundo_nombre"></span></p>
        <p><strong>Usuario:</strong> <span id="usuario"></span></p>
        <p><strong>Email:</strong> <span id="email"></span></p>
        <p><strong>Teléfono:</strong> <span id="telefono"></span></p>
    </div>

    <script>
        // Obtener los parámetros de la URL
        const urlParams = new URLSearchParams(window.location.search);
        document.getElementById('primer_nombre').textContent = urlParams.get('primer_nombre');
        document.getElementById('segundo_nombre').textContent = urlParams.get('segundo_nombre');
        document.getElementById('usuario').textContent = urlParams.get('usuario');
        document.getElementById('email').textContent = urlParams.get('email');
        document.getElementById('telefono').textContent = urlParams.get('telefono');
    </script>
</body>
</html>