<?php

// function retornarConexion() {
//   // $con=mysqli_connect("localhost","root","","bd1");
//   return $con;
// }

// Datos de la base de datos
$servername = "db4free.net";
$username = "engelcbt";
$password = "tu_contraseña";
$dbname = "angularphp";
$port = 3306;

// Crear una conexión
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// Verificar si la conexión fue exitosa
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
echo "Conexión exitosa";

?>
