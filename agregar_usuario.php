<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Usuario</title>
</head>
<body>
    <h1>Agregar Usuario</h1>
    <form action="procesarUsuario.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion"><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono"><br>

        <input type="submit" value="Agregar">
    </form>
    <a href="listar_usuarios.php">Volver a la Lista de Usuarios</a>
</body>
</html>
