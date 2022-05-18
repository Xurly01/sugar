<?php

 session_start();

require('conexion.php');

$email = $_POST["email"];
$contrasena = $_POST["contrasena"];


$queryusuario = mysqli_query($conn,"SELECT * FROM registro WHERE email ='$email' and contrasena = '$contrasena'");
$nr 		= mysqli_num_rows($queryusuario);  
	
if ($nr == 1)  
	{ 
	echo "<script> alert('Logeado correctamente.');window.location= 'index.html' </script>";

	}
else
	{
	echo "<script> alert('Usuario o contraseña incorrecto.');window.location= 'inicio.html' </script>";
	}


if ($nr == 1){
    session_start();
    $_SESSION['email'] = $email;
}

?>