<?php

// function retornarConexion() {
//   $con=mysqli_connect("localhost","root","","bd1");
//   return $con;
// }

function retornarConexion() {
    $servidor = "pruebaspipex.esy.es";
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

//   $servername = "localhost";
//   $username = "u381394134_engel";
//   $password = "Lancelot23$";
//   $database = "u381394134_angular";
//   // Create connection
//   $conn = mysqli_connect($servername, $username, $password, $database);
//   // Check connection
//   if (!$conn) {
//       die("Connection failed: " . mysqli_connect_error());
//   }
//   echo "Connected successfully";
//   mysqli_close($conn);  

?>


