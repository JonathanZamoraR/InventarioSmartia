<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="d-flex justify-content-center flex-column align-items-center vh-100" style="background-color: #ee7373;">
    <div class="fs-1 pb-3 fw-bold text-white text-center">SISTEMA DE INVENTARIO</div>
    <!-- Contenedor login -->
    <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem;">
        <!-- Ícono de login -->
        <div class="d-flex justify-content-center">
            <img src="./assets/login-icon.svg" alt="login-icon" style="height: 7rem;">
        </div>
        <!-- login -->
        <div class="text-center fs-2 fw-bold">Bienvenido</div>
        <form action="login.php">
            <!-- Username -->
            <div class="input-group mt-4">
                <!-- Ícono de usuario -->
                <div class="input-group-text bg-danger">
                    <img src="./assets/username-icon.svg" alt="username-icon" style="height: 1rem;">
                </div>
                <!-- Campo de texto para usuario -->
                <input name="name" class="form-control bg-light" type="text" placeholder="Usuario" />
            </div>
            <!-- Password -->
            <div class="input-group mt-2">
                <!-- Ícono de password -->
                <div class="input-group-text bg-danger">
                    <img src="./assets/password-icon.svg" alt="pasword-icon" style="height: 1rem;">
                </div>
                <!-- Campo de texto para password -->
                <input name="psw" class="form-control bg-light" type="password" placeholder="Contraseña" />
            </div>
            <!-- Botón Login -->
            <div class="btn btn-danger w-100 mt-4">Iniciar Sesión</div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>