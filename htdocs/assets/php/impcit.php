<?php 
		include("conec.php");

		if (isset($_GET['reg'])) {
				$id = trim($_GET['id']);
				$fecha = trim($_GET['fecha']);
				$sqlid = "SELECT * FROM citas WHERE id='$id'";
				$sqlfecha = "SELECT * FROM citas WHERE fecha='$fecha'";
				$sql = "SELECT * FROM citas WHERE id='$id' and fecha='$fecha'";

				if ($id) {
					$resul = mysqli_query($conn,$sqlid);
				}else if ($fecha) {
					$resul = mysqli_query($conn, $sqlfecha);
				}else if ($id && $fecha) {
					$resul = mysqli_query($conn, $sql);
				}

				print('<table>');
					print('<tr>');
    				print('<th scope="row">ID</th>');
    				print('<th>Nombre</th>');
    				print('<th>telefono</th>');
    				print('<th>correo</th>');
    				print('<th>fecha</th>');
    				print('<th>hora</th>');
  				print('</tr>');
    			while ($dat =mysqli_fetch_array($resul)){
					echo "<tr><th>";
					echo $dat ["id"];
					echo "</th><td>"; 
					echo $dat["nombre"];
					echo "</td><td>"; 
					echo $dat ["telefono"];
					echo "</td><td>"; 
					echo $dat["correo"];
					echo "</td><td>";
					echo $dat["fecha"];
					echo "</td><td>";
					echo $dat["hora"];
					echo "</td></tr>";
				}
				print('</table>');


			


			}
			print("<h3><b>Citas de hoy</b></h3>");
		$hoy=date("Y-m-d");

		$sql = "SELECT * FROM citas WHERE fecha='$hoy'";

		$resul = mysqli_query($conn,$sql);

		print('<table>');
			print('<tr>');
    			print('<th scope="row">ID</th>');
    			print('<th>Nombre</th>');
    			print('<th>telefono</th>');
    			print('<th>correo</th>');
    			print('<th>fecha</th>');
    			print('<th>hora</th>');
  			print('</tr>');
    			while ($dat =mysqli_fetch_array($resul)){
			echo "<tr><th>";
			echo $dat ["id"];
			echo "</th><td>"; 
			echo $dat["nombre"];
			echo "</td><td>"; 
			echo $dat ["telefono"];
			echo "</td><td>"; 
			echo $dat["correo"];
			echo "</td><td>";
			echo $dat["fecha"];
			echo "</td><td>";
			echo $dat["hora"];
			echo "</td></tr>";
		}
		print('</table>');

mysqli_close($conn);
?>