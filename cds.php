<html>
<head>
  <title>Comprobante de servicio. </title>
</head>
<?php
//obtenemos las variables para la conexión a la base de cds_web.conf

$servername = "localhost";
$username = "root";
$database = "call_center";
$password = "4st3r1skMySQL"; //modificar par URG

// conectamos a la base.
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


//recuperamos fecha actual
$fecha = date('Y-m-d H:i:s');

 ?>


<body>






</body>
</html>
