<?php 
include("conec.php");

if (isset($_GET['bus'])) {
	$nombre = trim($_GET['nombre']);
	$sql = "SELECT * FROM adeudo WHERE nombre='$nombre'";

	$resul = mysqli_query($conn,$sql);

}else if (isset($_GET['del'])) {
	$nombre = trim($_GET['nombre']);
	$del = "DELETE FROM adeudo WHERE nombre='$nombre'";
	$sql = "SELECT * FROM adeudo";

	$resul = mysqli_query($conn,$del);
	print('Adeudo de '.$nombre.' eliminado correctamente');
	$resul = mysqli_query($conn,$sql);
	}else if (isset($_GET['mos'])) {
		$sql = "SELECT * FROM adeudo";

		$resul = mysqli_query($conn,$sql);
	}else{
		$sql = "SELECT * FROM adeudo";

		$resul = mysqli_query($conn,$sql);
	}



	print('<table>');
		print('<tr>');;
    	print('<th scope="row">Nombre</th>');
    	print('<th>Fecha</th>');
    	print('<th>Adeudo</th>');
  		print('</tr>');
  			if ($resul) {
  				while ($dat =mysqli_fetch_array($resul)){
				echo "<tr><th>";
				echo $dat ["nombre"];
				echo "</th><td>"; 
				echo $dat["fecha"];
				echo "</td><td>"; 
				echo $dat ["adeudo"];
				echo "</td></tr>";
				}
  			}else{
					echo " ";
				}
    		
	print('</table>');
mysqli_close($conn);
 ?>