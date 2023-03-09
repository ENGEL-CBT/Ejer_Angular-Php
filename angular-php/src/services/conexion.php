<?php

// function retornarConexion() {
//   $con=mysqli_connect("localhost","root","","bd1");
//   return $con;
// }

function retornarConexion() {
    // $servidor = "pruebaspipex.esy.es";
    $servidor = "localhost";
    $usuario = "u381394134_engel";
    $contraseña = "Lancelot23$";
    $base_datos = "u381394134_angular";
  
    $con = mysqli_connect($servidor, $usuario, $contraseña, $base_datos);
    
    // Verifica si hay algún error en la conexión
    if (mysqli_connect_errno()) {
      echo "Error al conectar a la base de datos: " . mysqli_connect_error();
      exit();
    }  
    return $con;
}  

?>


