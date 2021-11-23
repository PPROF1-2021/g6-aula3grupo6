<?php

$nombreUsuario =$_POST['nombreUsuario'];
$contraseña=$_POST['contraseña'];

include("conexion.php");

$resultado=mysqli_query($datos_conexion, "SELECT * FROM usuario WHERE nombreUsuario='$nombreUsuario' 
           AND contraseña='$contraseña'") 
or exit("Error algo salio mal no se pudo efectuar la consulta a la base de datos");

if(mysqli_num_rows($resultado))
{
    while($row = mysqli_fetch_row($resultado)>0)
    {
        header ("location: plataforma.html");
    }
}
else
{
    header("location: sesion.php?no");
}

?>