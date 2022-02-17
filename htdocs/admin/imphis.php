<?php 
session_start();
$sesion = $_SESSION['username'];
if(!isset($sesion)){
    header("location: admin.php");
}else{
	include("../assets/php/conec.php");
	$exp= trim($_GET['exp']);

	$info = "SELECT * FROM infopersonal WHERE expediente='$exp'";
	$sign = "SELECT * FROM signosvitales WHERE expediente='$exp'";
	$resumen = "SELECT * FROM resumen WHERE expediente='$exp'";
	$antefam = "SELECT * FROM antefam WHERE expediente='$exp'";
	$anteper = "SELECT * FROM anteper WHERE expediente='$exp'";
	$antepat = "SELECT * FROM antepat WHERE expediente='$exp'";
	$exaesto = "SELECT * FROM exaesto WHERE expediente='$exp'";
	$odontograma = "SELECT * FROM odontograma WHERE expediente='$exp'";

	$infosq = mysqli_query($conn,$info);
	$signsq = mysqli_query($conn,$sign);
	$resumensq = mysqli_query($conn,$resumen);
	$antefamsq = mysqli_query($conn,$antefam);
	$antepersq = mysqli_query($conn,$anteper);
	$antepatsq = mysqli_query($conn,$antepat);
	$exaestosq = mysqli_query($conn,$exaesto);
	$odontogramasq = mysqli_query($conn,$odontograma);


	print('  <!DOCTYPE html>'); 
print('  <html>'); 
print('  <head>'); 
print('    <title>Resultado</title>'); 
print('    <meta charset="utf-8" />'); 
print('   <link rel="stylesheet" href="../assets/css/his.css" />'); 
print('    '); 
print('  </head>'); 
print('  <body bgcolor="#BF5FF6">'); 
print('    <div class="main-block">'); 
print('      <form  method="GET">'); 
print('        <h1>MIA DENTAL. Estetica y cuidado de tu boca</h1>'); 
print('        <h2>Historia Clínica</h2>'); 
print('        <hr>'); 
print(''); 
print('        <div class="personal-details">'); 
print(''); 

while ($dat = mysqli_fetch_array($infosq)) {
	print('             <div>'); 
print('          <label>FECHA:<span class="required">*</span>'); 
print('          </label>'); 
print('          <input  class="seminar-title" type="date" name="date" value="'.$dat["fecha"].'" disabled/>'); 
print('          <label>NO. EXP:<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="exp" value="'.$dat["expediente"].'" disabled/>'); 
print('          </div>'); 
print(''); 
print('          <div>'); 
print('            <label>NOMBRE<span class="required">*</span></label>'); 
print('            <input class="first-name" type="text" name="apellido-paterno" value="'.$dat["a_paterno"].'"  disabled/>'); 
print('            <input type="text" name="apellido-materno"value="'.$dat["a_materno"].'" disabled/>'); 
print('            <input  class="first-name" type="text" name="nombres" value="'.$dat["nombre"].'" disabled/>'); 
print('          </div>             '); 
print(''); 
print('           <div>'); 
print('            <label>DOMICILIO:<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="domicilio" value="'.$dat["domicilio"].'" disabled/>&nbsp; '); 
print('            <label>COL.:<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="colonia" value="'.$dat["colonia"].'" disabled/>&nbsp; '); 
print('            <label>TEL:<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="tel1" value="'.$dat["tel1"].'" disabled/>'); 
print('          </div>'); 
print(''); 
print('            <div>'); 
print('            <label>POBLACIÓN:<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="poblacion" value="'.$dat["tel1"].'" disabled/>&nbsp; '); 
print('            <label>OCUPACIÓN:<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="ocupacion" value="'.$dat["ocupacion"].'" disabled/>&nbsp; '); 
print('            <label>EDAD:<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="edad" value="'.$dat["edad"].'" disabled/>&nbsp; '); 
print('          </div>'); 
print(''); 
print('            <div>'); 
print('            <label>EDO. CIVIL:<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="edocivil" value="'.$dat["edocivil"].'" disabled/>&nbsp; '); 
print('            <label>ESCOLARIDAD:<span class="required">*</span></label>&nbsp; '); 
print('            <input  class="seminar-title" type="text" name="esco" value="'.$dat["escolaridad"].'" disabled/>   &nbsp;         '); 
print('          </div>'); 
print('  <br>'); 
print('            <div>'); 
print('            <label>PERSONA RESPONSABLE:<span class="required">*</span></label>&nbsp; '); 
print('            <input  class="seminar-title" type="text" name="perres" value="'.$dat["perres"].'" disabled/>   &nbsp;        '); 
print('            <label>TEL:<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="tel2" value="'.$dat["tel2"].'" disabled/>&nbsp; '); 
print('          </div>'); 
print('  <br>'); 
print('          <div>'); 
print(''); 
print('            <label>INSTITUCIÓN DE SALUD AFILIADA<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="insaf" value="'.$dat["insaf"].'" disabled/>               '); 
print('          </div>'); 
}

while ($dat2 = mysqli_fetch_array($signsq)) {
	print(''); 
print('  <br>'); 
print('            <h3>Signos Vitales</h3>'); 
print('        <hr>'); 
print(''); 
print('        <div>'); 
print('            <label>PESO:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="peso" value="'.$dat2["peso"].'" disabled/>'); 
print('            <label>PULSO:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="pulso" value="'.$dat2["pulso"].'" disabled/>  '); 
print('            <label>TALLA:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="talla" value="'.$dat2["talla"].'" disabled/>   '); 
print('            <label>FR:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="fr" value="'.$dat2["fr"].'" disabled/>  '); 
print('            <label>TA:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="ta" value="'.$dat2["ta"].'" disabled/>  '); 
print('            <label>TEMP:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="temp" value="'.$dat2["temp"].'" disabled/>  '); 
print('          </div>'); 
}

while ($dat3 = mysqli_fetch_array($resumensq)) {
	print(''); 
print('          <br>'); 
print('            <h3>Resumen</h3>'); 
print('        <hr>'); 
print(''); 
print('        <div>'); 
print('            <label>HIPERTENSIÓN:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="hiperten" value="'.$dat3["hiperten"].'" disabled/>'); 
print('            <label>DIABETES:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="diabetes" value="'.$dat3["diabetes"].'" disabled/>  '); 
print('            <label>HEPATITIS:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="hepatitis" value="'.$dat3["hepatitis"].'" disabled/>'); 
print('            <label>ALERGIAS:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="alergias" value="'.$dat3["alergias"].'" disabled/> '); 
print('          </div>'); 
print('  <div>'); 
print(''); 
print('             '); 
print('            <label>INMUNOSUPRIMIDO:<span class="required">*</span></label>'); 
print('            <BR>'); 
print('            <input  class="small-title" type="text" name="inmunosuprimido" style="margin-left: 5%;" value="'.$dat3["inmunosuprimido"].'" disabled/>                      '); 
print('          </div>'); 
}

while ($dat4 = mysqli_fetch_array($antefamsq)) {
	print(''); 
print('  <br>'); 
print('            <h3>Antecedentes Heredo Familiares</h3>'); 
print('        <hr>'); 
print(''); 
print('      '); 
print('        <div class="question-block">'); 
print('          <p class="question">Algún familiar a padecido o padece de las siguientes enfermedades:<span class="required">*</span></p>'); 
print('          <div class="answer">'); 
print('            <div>'); 
if ($dat4["cardio"] == "si") {
	print('              <input type="checkbox" value="si" id="rOne" name="cardio" checked disabled/>'); 
}else{
	print('              <input type="checkbox" value="si" id="rOne" name="cardio" disabled/>');
}

print('              <label for="rOne" class="radio">Cardiopatías</label>'); 
print('            '); 
if ($dat4["hipert"] == "si") {
	
print('              <input type="checkbox" value="si" id="rTwo" name="hipert" checked disabled/>'); 
}else{
	print('              <input type="checkbox" value="si" id="rTwo" name="hipert" disabled/>'); 
}
print('              <label for="rTwo" class="radio">Hipertensión</label>'); 
print('            </div>'); 
print(''); 
print('            <div>'); 
if($dat4["cancer"] == "si"){
	print('              <input type="checkbox" value="si" id="rThree" name="cancer" checked disabled/>');
}else{
	print('              <input type="checkbox" value="si" id="rThree" name="cancer" disabled/>');
}
 
print('              <label for="rThree" class="radio">Cáncer</label>'); 
print('           '); 
if($dat4['diabet'] == "si"){
	print('              <input type="checkbox" value="si" id="rFour" name="diabet" checked disabled/>'); 
}else{
	print('              <input type="checkbox" value="si" id="rFour" name="diabet" disabled/>'); 
}

print('              <label for="rFour" class="radio">Diabetes</label>'); 
print('            </div>'); 
print(''); 
print('            <div>'); 
if($dat4["asma"] == "si"){
	print('              <input type="checkbox" value="si" id="rFive" name="asma" checked disabled/>'); 
}else{
	print('              <input type="checkbox" value="si" id="rFive" name="asma" disabled/>'); 
}
print('              <label for="rFive" class="radio">Asma</label>'); 
print('            </div>'); 
print('          </div>'); 
print('          <label>¿Quién?:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="familiar" value="'.$dat4["familiar"].'" disabled/>'); 
print('        </div>'); 
}

while ($dat5 = mysqli_fetch_array($antepersq)) {
	print(''); 
print('        <br>'); 
print('            <h3>Antecedentes Personales</h3>'); 
print('        <hr>'); 
print(''); 
print('        <div class="question-block">'); 
print('          <p class="question">Fuma, ingiere bebidas alcohólicas o alguna droga</p>'); 
print('          <div class="answer">'); 
print('            <div>'); 
if($dat5["bebe"] == "si"){
	print('              <input type="radio" value="si" id="radioOne" name="bebe" checked disabled/>'); 
	print('              <label for="radioOne" class="radio">Sí</label>          '); 
	print('              <input type="radio" value="no" id="radioTwo" name="bebe" disabled/>'); 
	print('              <label for="radioTwo" class="radio">No</label>'); 
}else{
	print('              <input type="radio" value="si" id="radioOne" name="bebe" disabled/>'); 
	print('              <label for="radioOne" class="radio">Sí</label>          '); 
	print('              <input type="radio" value="no" id="radioTwo" name="bebe" checked disabled/>'); 
	print('              <label for="radioTwo" class="radio">No</label>'); 
}
print('            </div>           '); 
print('          </div>'); 
print('          <label>¿Cuál?:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="qued" value="'.$dat5["qued"].'" disabled/>'); 
print('        </div>'); 
}
while ($dat6 = mysqli_fetch_array($antepatsq)) {
	print(''); 
print('          <br>'); 
print('            <h3>Antecedentes Personales Patológicos</h3>'); 
print('        <hr>'); 
print(''); 
print('        <div class="statements-block">'); 
print('          <p>Padece de algunas de las siguientes condiciones: <span class="required">*</span></p>'); 
print(''); 
print('          <table>'); 
print('            <thead>'); 
print('              <tr>'); 
print('                <th class="first-col"></th>'); 
print('                <th>Sí</th>'); 
print('                <th>No</th>                '); 
print('              </tr>'); 
print('            </thead>'); 
print(''); 
print('            <tbody>'); 
print(''); 
print('              <tr>              '); 
print('                <td class="first-col">Gastritis</td>'); 
if ($dat6['gastritis'] == "si") {
	print('                <td><input type="radio" value="si" name="Gastritis" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Gastritis" disabled/></td>'); 	
}else{
	print('                <td><input type="radio" value="si" name="Gastritis" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Gastritis" checked disabled/></td>'); 
}
print('               </tr>'); 
print('             </tbody>'); 
print('              <tr>'); 
print('                <td class="first-col">Úlcera</td>');
if ($dat6['ulcera'] == "si") {
 	print('                <td><input type="radio" value="si" name="ulcera" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="ulcera" disabled/></td>'); 
 }else{
	print('                <td><input type="radio" value="si" name="ulcera" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="ulcera" checked disabled/></td>'); 
 }
print('               </tr>'); 
print('              <tr>'); 
print('                <td class="first-col">Colitis</td>'); 
if ($dat6['colitis'] == "si") {
	print('                <td><input type="radio" value="si" name="Colitis" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Colitis" disabled/></td>'); 
}else{
	print('                <td><input type="radio" value="si" name="Colitis" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Colitis" checked disabled/></td>');
}
print('               </tr>'); 
print('               <tr>'); 
print('                <td class="first-col">Sinusitis</td>'); 
if ($dat6['sinusitis'] == "si") {
	print('                <td><input type="radio" value="si" name="Sinusitis" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Sinusitis" disabled/></td>');
}else{
	print('                <td><input type="radio" value="si" name="Sinusitis" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Sinusitis" checked disabled/></td>');
} 
print('               </tr>'); 
print('               <tr>'); 
print('                <td class="first-col">Otitis</td>'); 
if ($dat6['otitis'] == "si") {
	print('                <td><input type="radio" value="si" name="Otitis" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Otitis" disabled/></td>'); 
}else{
	print('                <td><input type="radio" value="si" name="Otitis" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Otitis" checked disabled/></td>');
}
print('               </tr>'); 
print('              <tr>'); 
print('                <td class="first-col">Asma</td>'); 
if ($dat6['asma'] == "si") {
	print('                <td><input type="radio" value="si" name="Asma2" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Asma2" disabled/></td>'); 
}else{
	print('                <td><input type="radio" value="si" name="Asma2" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Asma2" checked disabled/></td>');
}
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">TB</td>'); 
if ($dat6['tb'] == "si") {
	print('                <td><input type="radio" value="si" name="TB" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="TB" disabled/></td>'); 
}else{
	print('                <td><input type="radio" value="si" name="TB" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="TB" checked disabled/></td>'); 
}
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Cardiopatías</td>'); 
if ($dat6['cardiopatias'] == "si") {
	print('                <td><input type="radio" value="si" name="Cardiopatias" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Cardiopatias" disabled/></td>');
}else{
	print('                <td><input type="radio" value="si" name="Cardiopatias" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Cardiopatias" checked disabled/></td>');
} 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Hipertensión</td>'); 
if ($dat6['hipertension'] == "si") {
	print('                <td><input type="radio" value="si" name="hipertension" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="hipertension" disabled/></td>');
}else{
	print('                <td><input type="radio" value="si" name="hipertension" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="hipertension" checked disabled/></td>');
} 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Hipotensión</td>'); 
if ($dat6['hipotension'] == "si") {
	print('                <td><input type="radio" value="si" name="Hipotension" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Hipotension" disabled/></td>'); 
}else{
	print('                <td><input type="radio" value="si" name="Hipotension" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Hipotension" checked disabled/></td>');
}
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Fiebre Reumática</td>'); 
if ($dat6['fiebre'] == "si") {
	print('                <td><input type="radio" value="si" name="Fiebre" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Fiebre" disabled/></td>'); 
}else{
	print('                <td><input type="radio" value="si" name="Fiebre" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Fiebre" checked disabled/></td>');
}
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Asc. Vasc. Cer.</td>');
if ($dat6['asv'] == "si") {
 	print('                <td><input type="radio" value="si" name="asv" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="asv" disabled/></td>');
 } else{
 	print('                <td><input type="radio" value="si" name="asv" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="asv" checked disabled/></td>');
 }
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Problemas Renales</td>'); 
if ($dat6['pr'] == "si") {
	print('                <td><input type="radio" value="si" name="PR" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="PR" disabled/></td>');
}else{
	print('                <td><input type="radio" value="si" name="PR" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="PR" checked disabled/></td>');
}
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Embarazo</td>'); 
if ($dat6['embarazo'] == "si") {
	print('                <td><input type="radio" value="si" name="Embarazo" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Embarazo" disabled/></td>');
}else{
	print('                <td><input type="radio" value="si" name="Embarazo" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Embarazo" checked disabled/></td>');
} 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Menopausia</td>'); 
if ($dat6['menopausia'] == "si") {
	print('                <td><input type="radio" value="si" name="Menopausia" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Menopausia" disabled/></td>'); 
}else{
	print('                <td><input type="radio" value="si" name="Menopausia" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Menopausia" checked disabled/></td>');
}
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Diabetes</td>');
if ($dat6['diabetes'] == "si") {
 	print('                <td><input type="radio" value="si" name="Diabetes2" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Diabetes2" disabled/></td>');
}else{
 	print('                <td><input type="radio" value="si" name="Diabetes2" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Diabetes2" checked disabled/></td>');
} 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Alteraciones de Tiroides</td>');
if ($dat6['at'] == "si") {
 	print('                <td><input type="radio" value="si" name="at" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="at" disabled/></td>');
 }else{
	print('                <td><input type="radio" value="si" name="at" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="at" checked disabled/></td>');
 } 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Anemia</td>'); 
if ($dat6['anemia'] == "si") {
	print('                <td><input type="radio" value="si" name="anemia" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="anemia" disabled/></td>');
}else{
	print('                <td><input type="radio" value="si" name="anemia" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="anemia" checked disabled/></td>');
} 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Transfusiones</td>');
if ($dat6['transfusiones'] == "si") {
 	print('                <td><input type="radio" value="si" name="Transfuciones" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Transfuciones" disabled/></td>');
 }else{
 	print('                <td><input type="radio" value="si" name="Transfuciones" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Transfuciones" checked disabled/></td>');
 } 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Tatuajes</td>'); 
if ($dat6['tatuajes'] == "si") {
	print('                <td><input type="radio" value="si" name="Tatuajes" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Tatuajes" disabled/></td>');
}else{
	print('                <td><input type="radio" value="si" name="Tatuajes" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Tatuajes" checked disabled/></td>');
} 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Neoplasias</td>');
if ($dat6['neoplasias'] == "si") {
	print('                <td><input type="radio" value="si" name="Neoplasias" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Neoplasias" disabled/></td>');	
 }else{
	print('                <td><input type="radio" value="si" name="Neoplasias" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Neoplasias" checked disabled/></td>');
 } 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Epilepsia</td>'); 
if ($dat6['epilepsia'] == "si") {
	print('                <td><input type="radio" value="si" name="Epilepsia" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Epilepsia" disabled/></td>');
}else{
	print('                <td><input type="radio" value="si" name="Epilepsia" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Epilepsia" checked disabled/></td>');
} 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Lupus</td>');
if ($dat6['lupus'] == "si") {
 	print('                <td><input type="radio" value="si" name="Lupus" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Lupus" disabled/></td>');
 }else{
 	print('                <td><input type="radio" value="si" name="Lupus" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Lupus" checked disabled/></td>');
 } 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Estrés</td>'); 
if ($dat6['estres'] == "si") {
	print('                <td><input type="radio" value="si" name="Estres" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Estres" disabled/></td>');
}else{
	print('                <td><input type="radio" value="si" name="Estres" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Estres" checked disabled/></td>');
} 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Depresión</td>'); 
if ($dat6['depresion'] == "si") {
	print('                <td><input type="radio" value="si" name="Depresion" checked disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Depresion" disabled/></td>');
}else{
	print('                <td><input type="radio" value="si" name="Depresion" disabled/></td>'); 
	print('                <td><input type="radio" value="no" name="Depresion" checked disabled/></td>');
} 
print('               </tr>'); 
print('            </tbody>'); 
print('          </table>         '); 
print('        </div>'); 
print('         <label>Alguna otra no mencionada:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="nomenc" value="'.$dat6["nomenc"].'" disabled/>'); 
print('            <br>'); 
print('             <label>Esta tomando algun otro medicamento?</label>'); 
print('             <label>(Cual y para qué)<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="medic" value="'.$dat6["medic"].'" disabled/>'); 
print('            <BR>'); 
print('           '); 
print('        <div class="question-block">'); 
print('          <p class="question">OBERVACIONES<span class="required">*</span><small>Toda la información proporcianada es para poder atenderle de la manera más eficiente poible</small></ p>');
print('          <div class="answer">'); 
print('            <textarea rows="5" name="observaciones" disabled>'.$dat6["observaciones"].'</textarea>'); 
print('          </div>'); 
print('        </div>'); 
}
while ($dat7 = mysqli_fetch_array($exaestosq)) {
	print(''); 
print('  <br>'); 
print('            <h3>Exámen Estomatológico</h3>'); 
print('        <hr>'); 
print('  <div>'); 
print('    <label>Motivo de la consulta:<span class="required">*</span></label>'); 
print('    <input  class="small-title" type="text" name="consulta"  value="'.$dat7["consulta"].'" disabled/>'); 
print('  </div>'); 
print(''); 
print('  <div>'); 
print('    <H5>EXPLORACIÓN POR REGIONES</H5>'); 
print(''); 
print('  </div>'); 
print(''); 
print('  <div>'); 
print('    <table>'); 
print(''); 
print('  <thead>'); 
print('              <tr>'); 
print('                <th class="first-col"></th>'); 
print('                <th></th>              '); 
print('              </tr>'); 
print('            </thead>'); 
print(''); 
print(''); 
print('            <tbody>'); 
print(''); 
print('              <tr>              '); 
print('                <td class="first-col">Labios</td>'); 
if ($dat7['labios'] == "si") {
	print('                <td><input type="checkbox" value="si" name="Labios" checked disabled/></td>');
}else{
	print('                <td><input type="checkbox" value="si" name="Labios" disabled/></td>');
} 
print('               </tr>'); 
print('                <tr>              '); 
print('                <td class="first-col">Carrillos</td>'); 
if ($dat7['carrillos'] == "si") {
	print('                <td><input type="checkbox" value="si" name="Carrillos" checked disabled/></td>');
}else{
	print('                <td><input type="checkbox" value="si" name="Carrillos" disabled/></td>');
} 
print('               </tr>'); 
print('                <tr>              '); 
print('                <td class="first-col">Paladar</td>'); 
if ($dat7['paladar'] == "si") {
	print('                <td><input type="checkbox" value="si" name="Paladar" checked disabled/></td>');
}else{
	print('                <td><input type="checkbox" value="si" name="Paladar" disabled/></td>');
}
print('               </tr>'); 
print('                <tr>              '); 
print('                <td class="first-col">Orofaringe</td>'); 
if ($dat7['orofaringe'] == "si") {
	print('                <td><input type="checkbox" value="si" name="Orofaringe" checked disabled/></td>');
}else{
	print('                <td><input type="checkbox" value="si" name="Orofaringe" disabled/></td>');
} 
print('               </tr>'); 
print('                <tr>              '); 
print('                <td class="first-col">Lengua</td>'); 
if ($dat7['lengua'] == "si") {
	print('                <td><input type="checkbox" value="si" name="Lengua" checked disabled/></td>');
}else{
	print('                <td><input type="checkbox" value="si" name="Lengua" disabled/></td>');
} 
print('               </tr>'); 
print('                <tr>              '); 
print('                <td class="first-col">Piso de Boca</td>'); 
if ($dat7['pb'] == "si") {
	print('                <td><input type="checkbox" value="si" name="PB" checked disabled/></td>'); 
}else{
	print('                <td><input type="checkbox" value="si" name="PB" disabled/></td>'); 
}
print('               </tr>              '); 
print('            </tbody>'); 
print('          </table>        '); 
print('  </div>'); 
}
while ($dat8 = mysqli_fetch_array($odontogramasq)) {
	print(''); 
print('  <br>'); 
print('            <h3>Odontograma</h3>'); 
print('        <hr>'); 
print(''); 
print('  <div>'); 
print('  '); 
print('  </div>'); 
print('            <h6>Las alteraciones de forma, tamaño, posición y numero de los órganos dentarios se anotarán en el diagnótico presuntivo</h6>'); 
print(''); 
print('        <div>'); 
print('          <label>Operatoria dental<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="opden" value="'.$dat8["opden"].'" disabled/>  '); 
print('            <label for="PPR" class="radio">PPR</label> '); 
if ($dat8['ppr'] == "si") {
	print('            <input type="checkbox" value="si" id="PPR" name="ppr" checked disabled/>              ');
}else{
	print('            <input type="checkbox" value="si" id="PPR" name="ppr" disabled/>              ');
} 
print('        </div>'); 
print(''); 
print('        <div>'); 
print('          <label>Exodoncia<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="exd" value="'.$dat8["exd"].'" disabled/>  '); 
print('             <label for="PT" class="radio">Protesis Total</label> '); 
if ($dat8['pt'] == "si") {
	print('            <input type="checkbox" value="si" id="PT" name="pt" checked disabled/>     ');
}else{
	print('            <input type="checkbox" value="si" id="PT" name="pt" disabled/>     ');
} 
print('        </div>'); 
print(''); 
print('        <div>'); 
print('          <label>Endodoncia<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="end" value="'.$dat8["endo"].'" disabled/>   '); 
print('            <label for="PER" class="radio">Periodoncia</label>'); 
if ($dat8['per'] == "si") {
	print('            <input type="checkbox" value="si" id="PER" name="per" checked disabled/>');
}else{
	print('            <input type="checkbox" value="si" id="PER" name="per" disabled/>');
} 
print('        </div>'); 
print(''); 
print('        <div>'); 
print('          <label>Protesis Fija<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="pf" value="'.$dat8["pf"].'" disabled/>  '); 
print('            <label for="I" class="radio">Integral</label>   '); 
if ($dat8['inte'] == "si") {
	print('                   <input type="checkbox" value="si" id="I" name="inte" checked disabled/>  '); 
}else{
	print('                   <input type="checkbox" value="si" id="I" name="inte" checked disabled/>  ');
}
print('        </div>'); 
print(''); 
print('        <div>'); 
print('          <label>Cirugía<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="cir" value="'.$dat8["cir"].'" disabled/>   '); 
print('     '); 
print('        </div>'); 
print('        <hr>'); 
}
#footer
print('  <div>'); 
print('  <p>Por este conducto manifiesto que los datos asentados en las presente histria clínica son verdades, por lo cual, en caso de presentarse alguna complicación por el tratamiento '); print('recibido, derivado de la inexactitud de los datos aportados, asumo totalmente la responsabilidad correspondiente, liberando a la --Dra. Marysol Ibarra Almedia-- de cualquier '); print('responsabilidad a este respecto para todos los efectos legales que diera lugar</p>'); 
print('  </div>'); 
print('  <br>'); 
print('  <br>'); 
print('        <div class="btn-block">'); 
print('        </div>'); 
print('      </form>'); 
print('    </div>'); 
print('  </body>'); 
print('  </html>'); 

	mysqli_close($conn);
}

 ?>