<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesión</title>
</head>
<body>
    <main>          
                <h2>Iniciar Sesión</h2> 
                    <form action="Controladores\validarUsuario.php" method="POST">
                        <h4>Usuario:</h4>
                        <input type="text" name="Usuario" placeholder="Ingrese Usuario"required><br>
                        <h4>Contraseña:</h4><input type="password" name="contrasena" placeholder="Contraseña" required><br>
                        <button>Ingresar</button><h4>¿Todavía no tienes usuario? <a href="Controladores/altaUsuario.php">Regístrate</a></h4>       
                    </form>
    </main>
</body>
</html>