<!DOCTYPE HTML>
<html>
	<head>
		<title>Formulario de citas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1>¡Haz tú cita ahora!</h1>
						<p>realiza tú cita desde el siguiente formulario o al teléfono: 449 415 9593</p>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">
								<span class="image main"><img src="images/secre.jpg" alt="" /></span>
								<form method="GET">
									<h3><b>NOMBRE COMPLETO</b></h3>
										<input id="cita" type="text" placeholder="Nombre" name="nombre">
									<h3><b>CORREO DE CONTACTO (ahí es donde llegará tu confirmación de la cita)</b></h3>
										<input id="cita" type="Email" placeholder="Correo" name="correo">
									<h3><b>NÚMERO DE TELÉFONO</b></h3>
										<input id="cita" type="text" placeholder="Numero" name="telefono">
									<h3><b>FECHA DE LA CITA</b></h3>
										<input id="cita" type="date" name="fecha" step="1" min="2020-06-17" max="2021-12-31" value=<?php echo date("y-m-d");?>>
									<h3><b>HORA DE LA CITA</b></h3>
										<select name="hora" id="hora">
											<option value="8:00am">8:00am</option> 
											<option value="9:00am">9:00am</option> 
  											<option value="10:00am">10:00am</option> 
  											<option value="11:00am">11:00am</option>
  											<option value="12:00pm">12:00pm</option>
  											<option value="1:00pm">1:00pm</option>
  											<option value="2:00pm">2:00pm</option>
  											<option value="3:00pm">3:00pm</option>
  											<option value="4:00pm">4:00pm</option> 
  											<option value="5:00pm">5:00pm</option> 
  											<option value="6:00pm">6:00pm</option> 
  											<option value="7:00pm">7:00pm</option> 
  											<option value="8:00pm">8:00pm</option>
  											<option value="9:00pm">9:00pm</option>     
										</select>
									<input type="submit" name="reg">
								</form>
								<?php 
									include("assets/php/citas.php")

								 ?>


							</section>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<h2>Contacto</h2>
							<dl class="alt">
								<dt>Direccíon</dt>
								<dd><a href="https://goo.gl/maps/CNM2hoCrTXHQPWos6" target="_blank">Silos 501 &bull; Trojes de Oriente I &bull; C.P. 20115 &bull; Aguascalientes, Ags.</a></dd>
								<dt>Teléfono</dt>
								<dd>449 415 9593</dd>
								<dt>Email</dt>
								<dd><a href="#">miadental@gmail.com</a></dd>
							</dl>
							<ul class="icons">
								<li><a href="#" class="icon brands fa-twitter alt"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands fa-facebook-f alt"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands fa-instagram alt"><span class="label">Instagram</span></a></li>
							</ul>
						</section>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>