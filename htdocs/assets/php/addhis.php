<?php 
include("conec.php");

if (isset($_GET['submit'])) {

	#datos personales
	$expediente = trim($_GET['exp']);
	$fecha = trim($_GET['date']);
	$a_paterno = trim($_GET['apellido-paterno']);
	$a_materno = trim($_GET['apellido-materno']);
	$nombre = trim($_GET['nombres']);
	$domicilio = trim($_GET['domicilio']);
	$colonia = trim($_GET['colonia']);
	$tel1 = trim($_GET['tel1']);
	$poblacion = trim($_GET['poblacion']);
	$ocupacion = trim($_GET['ocupacion']);
	$edad = trim($_GET['edad']);
	$edocivil = trim($_GET['edocivil']);
	$escolaridad = trim($_GET['esco']);
	$perres = trim($_GET['perres']);
	$tel2 = trim($_GET['tel2']);
	$insaf = trim($_GET['insaf']);


	$datper = "INSERT INTO infopersonal(expediente, fecha, a_paterno, a_materno, nombre, domicilio, colonia, tel1, poblacion, ocupacion, edad, edocivil, escolaridad, perres, tel2, insaf) VALUES ('$expediente', '$fecha', '$a_paterno', '$a_materno', '$nombre', '$domicilio', '$colonia', '$tel1', '$poblacion', '$ocupacion', '$edad', '$edocivil', '$escolaridad', '$perres', '$tel2', '$insaf')";

	$datpersq = mysqli_query($conn,$datper);

	#Signos vitales
	$peso = trim($_GET['peso']);
	$pulso = trim($_GET['pulso']);
	$talla = trim($_GET['talla']);
	$fr = trim($_GET['fr']);
	$ta = trim($_GET['ta']);
	$temp = trim($_GET['temp']);

	$sv = "INSERT INTO signosvitales(expediente, peso, pulso, talla, fr, ta, temp) VALUES ('$expediente', '$peso', '$pulso', '$talla', '$fr', '$ta', '$temp')";

	$svsq = mysqli_query($conn,$sv);

	#resumen
	$hiperten = trim($_GET['hiperten']);
	$diabetes = trim($_GET['diabetes']);
	$hepatitis = trim($_GET['hepatitis']);
	$alergias = trim($_GET['alergias']);
	$inmunosuprimido = trim($_GET['inmunosuprimido']);

	$res = "INSERT INTO resumen(expediente, hiperten, diabetes, hepatitis, alergias, inmunosuprimido) VALUES ('$expediente', '$hiperten', '$diabetes', '$hepatitis', '$alergias', '$inmunosuprimido')";

	$ressq = mysqli_query($conn,$res);

	#antecedentes familiares
	if (isset($_GET['cardio'])) {
		$cardio = trim($_GET['cardio']);
	}else{
		$cardio = "no";
	}
	if (isset($_GET['hipert'])) {
		$hipert = trim($_GET['hipert']);
	}else{
		$hipert = "no";
	}
	if (isset($_GET['cancer'])) {
		$cancer = trim($_GET['cancer']);
	}else{
		$cancer = "no";
	}
	if (isset($_GET['diabet'])) {
		$diabet = trim($_GET['diabet']);
	}else{
		$diabet = "no";
	}
	if (isset($_GET['asma'])) {
		$asma = trim($_GET['asma']);
	}else{
		$asma = "no";
	}
	$familiar = trim($_GET['familiar']);

	$antefam = "INSERT INTO antefam(expediente, cardio, hipert, cancer, diabet, asma, familiar) VALUES ('$expediente', '$cardio', '$hipert', '$cancer', '$diabet', '$asma', '$familiar')";

	$antefamsq = mysqli_query($conn,$antefam);


	#antecedentes personales

	$bebe = trim($_GET['bebe']);
	$qued = trim($_GET['qued']);

	$anteper = "INSERT INTO anteper(expediente, bebe, qued) VALUES ('$expediente', '$bebe', '$qued')";

	$antepersq = mysqli_query($conn, $anteper);

	#antecedentes patologicos

	$gastritis = trim($_GET['Gastritis']);
	$ulcera = trim($_GET['ulcera']);
	$colitis = trim($_GET['Colitis']);
	$sinusitis = trim($_GET['Sinusitis']);
	$otitis = trim($_GET['Otitis']);
	$asma2 = trim($_GET['Asma2']);
	$tb = trim($_GET['TB']);
	$cardiopatias = trim($_GET['Cardiopatias']);
	$hipertension = trim($_GET['hipertension']);
	$hipotension = trim($_GET['Hipotension']);
	$fiebre = trim($_GET['Fiebre']);
	$asv = trim($_GET['asv']);
	$pr = trim($_GET['PR']);
	$embarazo = trim($_GET['Embarazo']);
	$menopausia = trim($_GET['Menopausia']);
	$diabetes2 = trim($_GET['Diabetes2']);
	$at = trim($_GET['at']);
	$anemia = trim($_GET['anemia']);
	$transfusiones = trim($_GET['Transfuciones']);
	$tatuajes = trim($_GET['Tatuajes']);
	$neoplasias = trim($_GET['Neoplasias']);
	$epilepsia = trim($_GET['Epilepsia']);
	$lupus = trim($_GET['Lupus']);
	$estres = trim($_GET['Estres']);
	$depresion = trim($_GET['Depresion']);
	$nomenc = trim($_GET['nomenc']);
	$medic = trim($_GET['medic']);
	$observaciones = trim($_GET['observaciones']);

	$antepat = "INSERT INTO antepat(expediente, gastritis, ulcera, colitis, sinusitis, otitis, asma, tb, cardiopatias, hipertension, hipotension, fiebre, asv, pr, embarazo, menopausia, diabetes, at, anemia, transfusiones, tatuajes, neoplasias, epilepsia, lupus, estres, depresion, nomenc, medic, observaciones) VALUES ('$expediente', '$gastritis', '$ulcera', '$colitis', '$sinusitis', '$otitis', '$asma2', '$tb', '$cardiopatias', '$hipertension', '$hipotension', '$fiebre', '$asv', '$pr', '$embarazo', '$menopausia', '$diabetes2', '$at', '$anemia', '$transfusiones', '$tatuajes','$neoplasias', '$epilepsia', '$lupus', '$estres', '$depresion', '$nomenc', '$medic', '$observaciones')";

	$antepatsq = mysqli_query($conn, $antepat);

	#Examen estomatologico
	$consulta = trim($_GET['consulta']);
	if (isset($_GET['Labios'])) {
		$labios = trim($_GET['Labios']);
	}else{
		$labios = "no";
	}
	if (isset($_GET['Carrillos'])) {
		$carrillos = trim($_GET['Carrillos']);
	}else{
		$carrillos = "no";
	}
	if (isset($_GET['Paladar'])) {
		$paladar = trim($_GET['Paladar']);
	}else{
		$paladar = "no";
	}
	if (isset($_GET['Orofaringe'])) {
		$orofaringe = trim($_GET['Orofaringe']);
	}else{
		$orofaringe = "no";
	}
	if (isset($_GET['Lengua'])) {
		$lengua = trim($_GET['Lengua']);
	}else{
		$lengua = "no";
	}
	if (isset($_GET['PB'])) {
		$pb = trim($_GET['PB']);
	}else{
		$pb = "no";
	}

	$exaesto = "INSERT INTO exaesto(expediente, consulta, labios, carrillos, paladar, orofaringe, lengua, pb) VALUES ('$expediente', '$consulta', '$labios', '$carrillos', '$paladar', '$orofaringe', '$lengua', '$pb')";

	$exaestosq = mysqli_query($conn, $exaesto);

	#odontograma
	$opden = trim($_GET['opden']);
	if (isset($_GET['ppr'])) {
		$ppr = trim($_GET['ppr']);
	}else{
		$ppr = "no";
	}
	$exd = trim($_GET['exd']);
	if (isset($_GET['pt'])) {
		$pt = trim($_GET['pt']);
	}else{
		$pt = "no";
	}
	$endo = trim($_GET['end']);
	if (isset($_GET['per'])) {
		$per = trim($_GET['per']);
	}else{
		$per = "no";
	}
	$pf = trim($_GET['pf']);
	if (isset($_GET['inte'])) {
		$inte = trim($_GET['inte']);
	}else{
		$inte = "no";
	}
	$cir = trim($_GET['cir']);

	$odon = "INSERT INTO odontograma(expediente, opden, ppr, exd, pt, endo, per, pf, inte, cir) VALUES ('$expediente', '$opden', '$ppr', '$exd', '$pt', '$endo', '$per', '$pf', '$inte', '$cir')";

	$odonsq = mysqli_query($conn, $odon);

	echo "Agregado correctamente";
}
mysqli_close($conn);
 ?>