<?php

$nombre_formu = $_POST['nombre'];
$apellido_formu = $_POST['apellido'];
$telefono_formu = $_POST['telefono'];
$mail_formu = $_POST['mail'];
$fecha_formu = $_POST['fechaNacimiento'];
$suario_formu = $_POST['usuario'];
$clave_formu = $_POST['clave'];


include("conexion.php");

/*
previamente ejecutamos este comando en mysql luego de crear la base de datos
CREATE TABLE usuarios (nombre VARCHAR(30), apellido VARCHAR(50), telefono int(11), mail VARCHAR(100), fecha DATE, usuario VARCHAR(6) NOT NULL, clave VARCHAR(6) NOT NULL, PRIMARY KEY (usuario))
*/

mysqli_query($datos_conexion, "INSERT INTO usuarios VALUES('$nombre_formu', '$apellido_formu', '$telefono_formu', '$mail_formu', '$fecha_formu', '$suario_formu', '$clave_formu')");

/*
enviamos un mail automatica al usuario para confirmarle su usuario y clave
*/

$respuesta = "Estimado/a: "."\r\n"."Le damos la bienvenida a S.U.S. Manager de aplicaciones."."\r\n"."Le informamos que su usuario y clave han sido confirmados, ahora puede ingresar a su cuenta con los siguientes datos: "."\r\n"."Usuario: ".$usuario_formu."\r\n"."Clave: ".$clave_formu; 

@mail($correo_formu, "Bienvenido a SUS Manager", $respuesta);

header("location: registro.php?ok");

?>
