<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$nombreUsuario = $_POST['nombreUsuario'];
$contraseña = $_POST['contraseña'];


include("conexion.php");

$consulta = "INSERT INTO usuario (nombre, apellido, telefono, email, fecha_Nacimiento, nombreUsuario, contraseña) 
             VALUES ('$nombre', '$apellido', '$telefono', '$email', '$fechaNacimiento', '$nombreUsuario', '$contraseña')";
$resultado = mysqli_query ($datos_conexion, $consulta);

if ($resultado){
    echo "<h3>Registro agregado.</h3>";
    } else {
    echo "<h3>No se agregó nuevo registro</h3>";
    echo "Error: " . $consulta . "<br>" . mysqli_error($datos_conexion);
 }
 

header("location: plataforma.html");

?>
