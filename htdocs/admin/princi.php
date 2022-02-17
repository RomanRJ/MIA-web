<?php
session_start();
$sesion = $_SESSION['username'];
if(!isset($sesion)){
    header("location: admin.php");

}else{

   print('<!DOCTYPE HTML>');
print('<html>');
	print('<head>');
		print('<title>Inicio de sesión</title>');
		print('<meta charset="utf-8" />');
		print('<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />');
		print('<link rel="stylesheet" href="../assets/css/main.css" />');
		print('<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>');
	print('</head>');
	print('<body class="is-preload">');

		print('<!-- Wrapper -->');
			print('<div id="wrapper">');

				print('<!-- Header -->');
					print('<header id="header">');
						print('<h1>Sesión de: '.$sesion.'</h1>');
					print('</header>');

				print('<!-- Main -->');
					print('<div id="main">');

						print('<!-- Content -->');
							print('<section id="content" class="main">');
							print('<a href="hist.php" class="button">Registrar nuevo historial</a>');
							print('<form method="GET" action="imphis.php">');
								print('Buscar expediente: <input type="text" placeholder="No. Expediente" name="exp" style="width : 50%;">');
								print('<input type="submit" name="bus" value="Buscar">');
							print('</form><br>');	


							print('</section>');
							print('<section id="content" class="main">');
							print('<h2>Citas pendientes</h2>');
							print('<form method="GET">');
								print('<input type="text" name="id" placeholder="buscar id" style="width : 15%;">');
								print('<input id="cita" type="date" name="fecha" step="1" min="2020-06-01" max="2021-12-31">');
								print('<input type="submit" name="reg" value="Buscar">');
							print('</form>');	
							include("../assets/php/impcit.php");
							print('<form method="GET">');
								print('<input type="text" name="id" placeholder="buscar id a cancelar" style="width : 22%;">');
								print('<input type="submit" name="del" value="Eliminar">');
							print('</form>');

							print('</section>');
							print('<section id="content" class="main">');
							print('<h2>Adeudos</h2>');
							print('<h3>Ingresar nuevo adeudo</h3>');
							print('<form method="GET">');
								print('Nombre: <input type="text" name="nombre" style="width : 50%;">');
								print('Adeudo: <input type="text" name="adeudo" style="width : 50%;">');
								print('<input type="submit" name="regis" value="Agregar">');
							print('</form><br>');
							include("../assets/php/addade.php");
							print('<h3>Buscar Pendiente</h3>');	
							print('<form method="GET">');
								print('Nombre: <input type="text" name="nombre" style="width : 50%;">');
								print('<input type="submit" name="bus" value="Buscar">');
								print('<input type="submit" name="del" value="Eliminar">');
								print('<input type="submit" name="mos" value="Mostrar todos">');

							print('</form><br>');
							include("../assets/php/busade.php");


							print('</section>');

					print('</div>');
					
					print('<a href="../assets/php/sesion.php" class="button primary">Cerrar Sesión</a>');
					print('<footer id="footer">');
						
					print('</footer>');

			print('</div>');

		print('<!-- Scripts -->');
			print('<script src="../assets/js/jquery.min.js"></script>');
			print('<script src="../assets/js/jquery.scrollex.min.js"></script>');
			print('<script src="../assets/js/jquery.scrolly.min.js"></script>');
			print('<script src="../assets/js/browser.min.js"></script>');
			print('<script src="../assets/js/breakpoints.min.js"></script>');
			print('<script src="../assets/js/util.js"></script>');
			print('<script src="../assets/js/main.js"></script>');

	print('</body>');
print('</html>');


}

?>
