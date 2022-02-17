<?php 
include("conec.php");

if (isset($_GET['regis'])) {
	$nombre = trim($_GET['nombre']);
	$fecha = date("Y-m-d");
	$adeudo = trim($_GET['adeudo']);
	$sql = "INSERT INTO adeudo (nombre, fecha, adeudo) VALUES ('$nombre','$fecha','$adeudo')";

	$resul = mysqli_query($conn,$sql);
	echo "Agregado correctamente";
}
mysqli_close($conn);
 ?>