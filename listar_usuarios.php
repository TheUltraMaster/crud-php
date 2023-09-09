<?php 
    include('usuario.php');
    
    
    $usuario = new Usuario($conexion);
    $usuarios = $usuario->listarUsuarios();


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($usuarios as $usuario) { ?>
        <tr>
            <td><?php echo $usuario['id']; ?></td>
            <td><?php echo $usuario['nombre']; ?></td>
            <td><?php echo $usuario['direccion']; ?></td>
            <td><?php echo $usuario['telefono']; ?></td>
            <td>
                <a href="editar_usuario.php?id=<?php echo $usuario['id']; ?>">Editar</a>
                <a href="eliminar_usuario.php?id=<?php echo $usuario['id']; ?>">Eliminar</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <a href="agregar_usuario.php">Agregar Usuario</a>
</body>
</html>
