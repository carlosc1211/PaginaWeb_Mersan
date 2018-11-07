<?php
$servername = "localhost";
$database = "reg";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

date_default_timezone_set('America/Caracas');

$razon=$_POST['razon'];
$persona=$_POST['persona'];
$pais=$_POST['pais'];
$zona=$_POST['zona'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$negocio=$_POST['negocio'];
$requerimiento=$_POST['requerimiento'];
$mensaje=$_POST['mensaje'];
$fecha = date("Y-m-d H:i:s");

      $sql = "INSERT INTO clientes (razon_social, p_contacto, pais, zona_estado, telefono, correo, negocio, requerimiento, mensaje, fecha) 
      VALUES ('$razon', '$persona', '$pais', '$zona', '$telefono', '$correo', '$negocio', '$requerimiento', '$mensaje', '$fecha')";
      
      if (mysqli_query($conn, $sql)) {
            /*echo '<script> 
            alert("En breve sera contactado...");
            </script>';*/
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

mysqli_close($conn);
?>