<?php 
  // header('Access-Control-Allow-Origin: *'); 
  // header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  // require("conexion.php");
  // $con=retornarConexion();

  // $registros=mysqli_query($con,"select codigo, descripcion, precio from articulos");
  // $vec=[];  
  // while ($reg=mysqli_fetch_array($registros))  
  // {
  //   $vec[]=$reg;
  // }
  
  // $cad=json_encode($vec);
  // echo $cad;
  // header('Content-Type: application/json');



  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  require("conexion.php");
  
  try {
    $con=retornarConexion();
  
    $registros=mysqli_query($con,"select codigo, descripcion, precio from articulos");
    $vec=[];  
    while ($reg=mysqli_fetch_array($registros))  
    {
      $vec[]=$reg;
    }
    
    $cad=json_encode($vec);
    echo $cad;
    header('Content-Type: application/json');
  } catch (Exception $e) {
    // Mostrar mensaje de error en la consola del navegador
    echo '<script>console.error("Error de conexión: '.$e->getMessage().'");</script>';
  }
?> 
