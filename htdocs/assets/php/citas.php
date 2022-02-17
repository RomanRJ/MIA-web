<?php 
 	include("conec.php");

	if (isset($_GET['reg'])) {
		if (strlen($_GET['nombre']) >=1 && strlen($_GET['correo']) >=1 && strlen($_GET['telefono']) >=1 && strlen($_GET['fecha']) >=1 && strlen($_GET['hora']) >=1){
				$nombre=trim($_GET['nombre']);
				$telefono=trim($_GET['telefono']);
				$correo=trim($_GET['correo']);
				$fecha=trim($_GET['fecha']);
				$hora=trim($_GET['hora']);
				#Continuar aqui consulta para igualar si no se repiten fecha y hora 
				$val="SELECT * FROM citas WHERE  fecha='$fecha' and hora='$hora'";

				$vali=mysqli_query($conn,$val);

				if (mysqli_num_rows($vali)>0) {
					print '<script language="JavaScript">';
					print 'alert("La hora en ese dia ya fue ocupada, intente en otro horario");';
					print '</script>';
				}else{
					$inser = "INSERT INTO citas(nombre, telefono, correo, fecha, hora) VALUES ('$nombre','$telefono','$correo','$fecha','$hora')";

					$resul = mysqli_query($conn,$inser);

					if ($resul) {
						$rec="SELECT id FROM citas WHERE  fecha='$fecha' and hora='$hora'";

						$reco = mysqli_query($conn,$rec);

						$id = mysqli_fetch_array($reco);

						$cabeceras = 'MIME-Version: 1.0' . "\r\n";
						$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
						$cabeceras .= 'De: MIA';

						$asunto="Confirmación de cita";
						$mensaje=	'<html lang="es">'.
									'<head>'.
									'<meta charset="UTF-8">'.
									'<title>Cita Confirmada</title>'.
									'</head>'.
									'<body>'.
									'<style type="text/css">'.
										'#xd{'.
											'font: 250% sans-serif;'.
										'}'.
		 								'p{ '.
		 									'font: 150% sans-serif;'.
		  								'}'.
		 								'div{'.
											'background-color: #6E6E6E;'.
											'margin: 0;'.
											'padding: 5%'.
		  								'}'.
									'</style>'.
									'<div><p></p></div>'.
									'<p id="xd" align="center"><b>Tú cita ha sido confirmada</b></p>'.
									'<p align="center">'.
									'<b>ID: </b>'.$id[0].'<br>'.
									'<b>Nombre: </b>'.$nombre.'<br>'.
									'<b>Correo: </b>'.$correo.
									'<b>Teléfono: </b> <br>'.
									'<b>Fecha: </b>'.$fecha.'  	<b>Hora: </b>'.$hora.' <br>'.
									'No olvides presentarte 10 minutos antes de la hora acordada y presentar este correo como pase'. ' de ingreso :) <br>'.
									'Sí tienes alguna duda o necesitas alguna aclaración comunicate al número: 449 415 9593'.
									'</p>'.
									'<div><p></p></div>'.
									'</body>'.
									'</html>';

						mail($correo, $asunto, $mensaje, $cabeceras);

						print '<script language="JavaScript">';
						print 'alert("Cita agendada con éxito! se ha enviado un correo de confirmación");';
						print '</script>';
					}
				}
		}
	}
	mysqli_close($conn);
 ?>