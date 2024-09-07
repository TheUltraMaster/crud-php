<?php 
require 'usuario.php';
require 'conexion.php';
$usuario = new Usuario($conexion);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $id = $_POST["id"];

    if ($usuario->actualizarUsuario($id, $nombre, $direccion, $telefono)) {
        // El usuario se agregó correctamente, redirecciona a la lista de usuarios
        header("Location: index.php");
        exit();
    } else {
        // Hubo un error al agregar el usuario, muestra un mensaje de error
        echo "Error al agregar el usuario.";
    }

}
else{
    echo "Error al agregar el usuario.";
}




?>

