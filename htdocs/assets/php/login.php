<?php 
	
	session_start();
	include("conec.php");

	if (isset($_GET['reg'])) {
		if (strlen($_GET['usuario']) >=1 && strlen($_GET['contraseña']) >=1) {
			$user = trim($_GET['usuario']);
			$pas = trim($_GET['contraseña']);

			$pass = md5($pas);

			$val = "SELECT * FROM superusuario WHERE  user='$user' and pass='$pass'";

			$vali = mysqli_query($conn,$val);

			$dat = mysqli_fetch_array($vali);

			if ($dat[0]==$user && $dat[1]==$pass) {
				$_SESSION['username'] = $user;
  				header("location: ../admin/princi.php");
			}else{
				print '<h3>Usuario y/o contraseña no válidos</h3>';
			}

		}else{
			print '<h3>Usuario y/o contraseña no válidos</h3>';
		}
	}
	mysqli_close($conn);
 ?>