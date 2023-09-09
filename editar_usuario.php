<?php 
include('usuario.php');
    
$id = $_GET["id"];
$usuario = new Usuario($conexion);
$usuario = $usuario->obtenerUnUsuario($id);


?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <form action="procesar_editar_usuario.php" method="post">
        <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $usuario['nombre']; ?>" required><br>

        <label for="direccion">Dirección:</label>
        <input type="text" name="direccion" value="<?php echo $usuario['direccion']; ?>"><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" value="<?php echo $usuario['telefono']; ?>"><br>

        <input type="submit" value="Guardar Cambios">
    </form>
    <a href="listar_usuarios.php">Volver a la Lista de Usuarios</a>
</body>
</html>
