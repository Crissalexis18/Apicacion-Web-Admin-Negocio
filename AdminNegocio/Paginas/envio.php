<?php
	$nombre=$_GET['nombrejs'];//nombre
	$cantidad=$_GET['cantidadjs'];//cantidad
	$total=$_GET['totaljs'];//total
$servername = "idawis-uaz.ddns.net:33060";
$username = "cesarv2001";
$password = "Qkmqd43";
$dbname = "cesarv2001";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{echo "Connected successfully<br><br>";}
  $nombre;
$sql = "INSERT INTO ORDENES (NOMBRE,CANTIDAD,PRECIO_TOTAL,FECHA) VALUES ('$nombre', '$cantidad','$total',CURRENT_TIMESTAMP())";
	 if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo ('"<meta charset="utf-8" http-equiv="refresh" content="0; url=PaginaCobro.php">"');
?>
