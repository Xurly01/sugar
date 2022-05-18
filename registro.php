<?php

require('conexion.php');


  if (isset($_POST['enviar'])) {
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $dni = $_POST["dni"];
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];
    $direccion = $_POST["direccion"];
    $codigopostal = $_POST["codigopostal"];
    $ciudad = $_POST["ciudad"];


    $insertarDatos = "INSERT INTO registro VALUES('$nombre', '$apellidos','$dni','$email','$contrasena', '$direccion', '$codigopostal', '$ciudad')";

    $ejecutarInsertar = mysqli_query($conn, $insertarDatos);


    echo "<script> alert('Se ha registrado correctamente.');window.location= 'sesion.html'</script>";

    if(!$ejecutarInsertar){

        echo"<script> alert('Usuario ya registrado, introduzca otro usuario.');window.location= 'registro.html' </script>";
    }
}