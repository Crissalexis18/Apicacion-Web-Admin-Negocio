<?php 
	$cliente=$_GET['clientejs'];//id
	$nombre=$_GET['nombrejs'];//nombre
	$cantidad=$_GET['cantidadjs'];//cantidad
	$precio=$_GET['preciojs'];//precio
	$total=$_GET['totaljs'];//total
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prueba";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{echo "Connected successfully";}
  $nombre;
$sql = "INSERT INTO ordenes (ID_PRO, NOMBRE_PRO,CANTIDAD_PRO,PRECIO_PRO_UNI,PRECIO_PRO_TOTAL,FECHA) VALUES ('$cliente', '$nombre', '$cantidad','$precio','$total','hoy')";
	 if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo ('"<meta charset="utf-8" http-equiv="refresh" content="60; url=paginaCobro.php">"');
?>
