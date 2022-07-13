<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>

        <h2>Agregar Usuario</h2>
        <form action="../Controladores/registrarUsuario.php" method="POST">
            <h4>Datos del Usuario:</h4>
            <input type="text" placeholder="Usuario" class="usuario" name="usuario" required><br>
            <input type="text" placeholder="Nombre y Apellido" class="datosUsuario" name="datosUsuario" required><br>
            <input type="password" placeholder="Contraseña" class="ContrasenaUsuario" name="ContrasenaUsuario"
                required><br>
            <button name="agregarUsuario">Agregar Usuario</button>
            <h4 id="tit">¿Ya tienes usuario? <a href="iniciarSesion.php">Iniciar Sesión</a></h4>
            </h4>
        </form>
    </main>
</body>

</html>