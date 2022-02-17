 <?php
session_start();
$sesion = $_SESSION['username'];
if(!isset($sesion)){
    header("location: admin.php");

}else{
	print('  <!DOCTYPE html>'); 
print('  <html>'); 
print('  <head>'); 
print('    <title>Registrar nuevo historial</title>'); 
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
print('             <div>'); 
print('          <label>FECHA:<span class="required">*</span>'); 
print('          </label>'); 
print('          <input  class="seminar-title" type="date" name="date" required/>'); 
print('          <label>NO. EXP:<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="exp" required/>'); 
print('          </div>'); 
print(''); 
print('          <div>'); 
print('            <label>NOMBRE<span class="required">*</span></label>'); 
print('            <input class="first-name" type="text" name="apellido-paterno" placeholder="Apellido Paterno" required/>'); 
print('            <input type="text" name="apellido-materno" placeholder="Apellido Materno" required/>'); 
print('            <input  class="first-name" type="text" name="nombres" placeholder="Nombres(s)" required/>'); 
print('          </div>             '); 
print(''); 
print('           <div>'); 
print('            <label>DOMICILIO:<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="domicilio" required/>&nbsp; '); 
print('            <label>COL.:<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="colonia" required/>&nbsp; '); 
print('            <label>TEL:<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="tel1" required/>'); 
print('          </div>'); 
print(''); 
print('            <div>'); 
print('            <label>POBLACIÓN:<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="poblacion" required/>&nbsp; '); 
print('            <label>OCUPACIÓN:<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="ocupacion" required/>&nbsp; '); 
print('            <label>EDAD:<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="edad" required/>&nbsp; '); 
print('          </div>'); 
print(''); 
print('            <div>'); 
print('            <label>EDO. CIVIL:<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="edocivil" required/>&nbsp; '); 
print('            <label>ESCOLARIDAD:<span class="required">*</span></label>&nbsp; '); 
print('            <input  class="seminar-title" type="text" name="esco" required/>   &nbsp;         '); 
print('          </div>'); 
print('  <br>'); 
print('            <div>'); 
print('            <label>PERSONA RESPONSABLE:<span class="required">*</span></label>&nbsp; '); 
print('            <input  class="seminar-title" type="text" name="perres" required/>   &nbsp;        '); 
print('            <label>TEL:<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="tel2" required/>&nbsp; '); 
print('          </div>'); 
print('  <br>'); 
print('          <div>'); 
print(''); 
print('            <label>INSTITUCIÓN DE SALUD AFILIADA<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="insaf" required/>               '); 
print('          </div>'); 
print(''); 
print('  <br>'); 
print('            <h3>Signos Vitales</h3>'); 
print('        <hr>'); 
print(''); 
print('        <div>'); 
print('            <label>PESO:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="peso" required/>'); 
print('            <label>PULSO:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="pulso" required/>  '); 
print('            <label>TALLA:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="talla" required/>   '); 
print('            <label>FR:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="fr" required/>  '); 
print('            <label>TA:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="ta" required/>  '); 
print('            <label>TEMP:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="temp" required/>  '); 
print('          </div>'); 
print(''); 
print('          <br>'); 
print('            <h3>Resumen</h3>'); 
print('        <hr>'); 
print(''); 
print('        <div>'); 
print('            <label>HIPERTENSIÓN:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="hiperten" required/>'); 
print('            <label>DIABETES:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="diabetes" required/>  '); 
print('            <label>HEPATITIS:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="hepatitis" required/>'); 
print('            <label>ALERGIAS:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="alergias" required/> '); 
print('          </div>'); 
print('  <div>'); 
print(''); 
print('             '); 
print('            <label>INMUNOSUPRIMIDO:<span class="required">*</span></label>'); 
print('            <BR>'); 
print('            <input  class="small-title" type="text" name="inmunosuprimido" style="margin-left: 5%;" required/>                      '); 
print('          </div>'); 
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
print('              <input type="checkbox" value="si" id="rOne" name="cardio"  />'); 
print('              <label for="rOne" class="radio">Cardiopatías</label>'); 
print('            '); 
print('              <input type="checkbox" value="si" id="rTwo" name="hipert" />'); 
print('              <label for="rTwo" class="radio">Hipertensión</label>'); 
print('            </div>'); 
print(''); 
print('            <div>'); 
print('              <input type="checkbox" value="si" id="rThree" name="cancer" />'); 
print('              <label for="rThree" class="radio">Cáncer</label>'); 
print('           '); 
print('              <input type="checkbox" value="si" id="rFour" name="diabet" />'); 
print('              <label for="rFour" class="radio">Diabetes</label>'); 
print('            </div>'); 
print(''); 
print('            <div>'); 
print('              <input type="checkbox" value="si" id="rFive" name="asma" />'); 
print('              <label for="rFive" class="radio">Asma</label>'); 
print('            </div>'); 
print('          </div>'); 
print('          <label>¿Quién?:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="familiar" />'); 
print('        </div>'); 
print(''); 
print('        <br>'); 
print('            <h3>Antecedentes Personales</h3>'); 
print('        <hr>'); 
print(''); 
print('        <div class="question-block">'); 
print('          <p class="question">Fuma, ingiere bebidas alcohólicas o alguna droga</p>'); 
print('          <div class="answer">'); 
print('            <div>'); 
print('              <input type="radio" value="si" id="radioOne" name="bebe" />'); 
print('              <label for="radioOne" class="radio">Sí</label>          '); 
print('              <input type="radio" value="no" id="radioTwo" name="bebe" />'); 
print('              <label for="radioTwo" class="radio">No</label>'); 
print('            </div>           '); 
print('          </div>'); 
print('          <label>¿Cuál?:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="qued" required/>'); 
print('        </div>'); 
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
print('                <td><input type="radio" value="si" name="Gastritis" required/></td>'); 
print('                <td><input type="radio" value="no" name="Gastritis" required/></td>'); 
print('               </tr>'); 
print('             </tbody>'); 
print('              <tr>'); 
print('                <td class="first-col">Úlcera</td>'); 
print('                <td><input type="radio" value="si" name="ulcera" required/></td>'); 
print('                <td><input type="radio" value="no" name="ulcera" required/></td>'); 
print('               </tr>'); 
print('              <tr>'); 
print('                <td class="first-col">Colitis</td>'); 
print('                <td><input type="radio" value="si" name="Colitis" required/></td>'); 
print('                <td><input type="radio" value="no" name="Colitis" required/></td>'); 
print('               </tr>'); 
print('               <tr>'); 
print('                <td class="first-col">Sinusitis</td>'); 
print('                <td><input type="radio" value="si" name="Sinusitis" required/></td>'); 
print('                <td><input type="radio" value="no" name="Sinusitis" required/></td>'); 
print('               </tr>'); 
print('               <tr>'); 
print('                <td class="first-col">Otitis</td>'); 
print('                <td><input type="radio" value="si" name="Otitis" required/></td>'); 
print('                <td><input type="radio" value="no" name="Otitis" required/></td>'); 
print('               </tr>'); 
print('              <tr>'); 
print('                <td class="first-col">Asma</td>'); 
print('                <td><input type="radio" value="si" name="Asma2" required/></td>'); 
print('                <td><input type="radio" value="no" name="Asma2" required/></td>'); 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">TB</td>'); 
print('                <td><input type="radio" value="si" name="TB" required/></td>'); 
print('                <td><input type="radio" value="no" name="TB" required/></td>'); 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Cardiopatías</td>'); 
print('                <td><input type="radio" value="si" name="Cardiopatias" required/></td>'); 
print('                <td><input type="radio" value="no" name="Cardiopatias" required/></td>'); 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Hipertensión</td>'); 
print('                <td><input type="radio" value="si" name="hipertension" required/></td>'); 
print('                <td><input type="radio" value="no" name="hipertension" required/></td>'); 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Hipotensión</td>'); 
print('                <td><input type="radio" value="si" name="Hipotension" required/></td>'); 
print('                <td><input type="radio" value="no" name="Hipotension" required/></td>'); 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Fiebre Reumática</td>'); 
print('                <td><input type="radio" value="si" name="Fiebre" required/></td>'); 
print('                <td><input type="radio" value="no" name="Fiebre" required/></td>'); 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Asc. Vasc. Cer.</td>'); 
print('                <td><input type="radio" value="si" name="asv" required/></td>'); 
print('                <td><input type="radio" value="no" name="asv" required/></td>'); 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Problemas Renales</td>'); 
print('                <td><input type="radio" value="si" name="PR" required/></td>'); 
print('                <td><input type="radio" value="no" name="PR" required/></td>'); 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Embarazo</td>'); 
print('                <td><input type="radio" value="si" name="Embarazo" required/></td>'); 
print('                <td><input type="radio" value="no" name="Embarazo" required/></td>'); 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Menopausia</td>'); 
print('                <td><input type="radio" value="si" name="Menopausia" required/></td>'); 
print('                <td><input type="radio" value="no" name="Menopausia" required/></td>'); 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Diabetes</td>'); 
print('                <td><input type="radio" value="si" name="Diabetes2" required/></td>'); 
print('                <td><input type="radio" value="no" name="Diabetes2" required/></td>'); 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Alteraciones de Tiroides</td>'); 
print('                <td><input type="radio" value="si" name="at" required/></td>'); 
print('                <td><input type="radio" value="no" name="at" required/></td>'); 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Anemia</td>'); 
print('                <td><input type="radio" value="si" name="anemia" required/></td>'); 
print('                <td><input type="radio" value="no" name="anemia" required/></td>'); 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Transfusiones</td>'); 
print('                <td><input type="radio" value="si" name="Transfuciones" required/></td>'); 
print('                <td><input type="radio" value="no" name="Transfuciones" required/></td>'); 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Tatuajes</td>'); 
print('                <td><input type="radio" value="si" name="Tatuajes" required/></td>'); 
print('                <td><input type="radio" value="no" name="Tatuajes" required/></td>'); 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Neoplasias</td>'); 
print('                <td><input type="radio" value="si" name="Neoplasias" required/></td>'); 
print('                <td><input type="radio" value="no" name="Neoplasias" required/></td>'); 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Epilepsia</td>'); 
print('                <td><input type="radio" value="si" name="Epilepsia" required/></td>'); 
print('                <td><input type="radio" value="no" name="Epilepsia" required/></td>'); 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Lupus</td>'); 
print('                <td><input type="radio" value="si" name="Lupus" required/></td>'); 
print('                <td><input type="radio" value="no" name="Lupus" required/></td>'); 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Estrés</td>'); 
print('                <td><input type="radio" value="si" name="Estres" required/></td>'); 
print('                <td><input type="radio" value="no" name="Estres" required/></td>'); 
print('               </tr>'); 
print('                <tr>'); 
print('                <td class="first-col">Depresión</td>'); 
print('                <td><input type="radio" value="si" name="Depresion" required/></td>'); 
print('                <td><input type="radio" value="no" name="Depresion" required/></td>'); 
print('               </tr>'); 
print('            </tbody>'); 
print('          </table>         '); 
print('        </div>'); 
print('         <label>Alguna otra no mencionada:<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="nomenc" required/>'); 
print('            <br>'); 
print('             <label>Esta tomando algun otro medicamento?</label>'); 
print('             <label>(Cual y para qué)<span class="required">*</span></label>'); 
print('            <input  class="small-title" type="text" name="medic" required/>'); 
print('            <BR>'); 
print('           '); 
print('        <div class="question-block">'); 
print('          <p class="question">OBERVACIONES<span class="required">*</span><small>Toda la información proporcianada es para poder atenderle de la manera más eficiente poible</small></ p>');
print('          <div class="answer">'); 
print('            <textarea rows="5" name="observaciones" required></textarea>'); 
print('          </div>'); 
print('        </div>'); 
print(''); 
print('  <br>'); 
print('            <h3>Exámen Estomatológico</h3>'); 
print('        <hr>'); 
print('  <div>'); 
print('    <label>Motivo de la consulta:<span class="required">*</span></label>'); 
print('    <input  class="small-title" type="text" name="consulta" required/>'); 
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
print('                <td><input type="checkbox" value="si" name="Labios" /></td>'); 
print('               </tr>'); 
print('                <tr>              '); 
print('                <td class="first-col">Carrillos</td>'); 
print('                <td><input type="checkbox" value="si" name="Carrillos" /></td>'); 
print('               </tr>'); 
print('                <tr>              '); 
print('                <td class="first-col">Paladar</td>'); 
print('                <td><input type="checkbox" value="si" name="Paladar" /></td>'); 
print('               </tr>'); 
print('                <tr>              '); 
print('                <td class="first-col">Orofaringe</td>'); 
print('                <td><input type="checkbox" value="si" name="Orofaringe" /></td>'); 
print('               </tr>'); 
print('                <tr>              '); 
print('                <td class="first-col">Lengua</td>'); 
print('                <td><input type="checkbox" value="si" name="Lengua" /></td>'); 
print('               </tr>'); 
print('                <tr>              '); 
print('                <td class="first-col">Piso de Boca</td>'); 
print('                <td><input type="checkbox" value="si" name="PB" /></td>'); 
print('               </tr>              '); 
print('            </tbody>'); 
print('          </table>        '); 
print('  </div>'); 
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
print('            <input  class="seminar-title" type="text" name="opden" required/>  '); 
print('            <label for="PPR" class="radio">PPR</label> '); 
print('            <input type="checkbox" value="si" id="PPR" name="ppr" />              '); 
print('        </div>'); 
print(''); 
print('        <div>'); 
print('          <label>Exodoncia<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="exd" required/>  '); 
print('             <label for="PT" class="radio">Protesis Total</label> '); 
print('            <input type="checkbox" value="si" id="PT" name="pt" />     '); 
print('        </div>'); 
print(''); 
print('        <div>'); 
print('          <label>Endodoncia<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="end" required/>   '); 
print('            <label for="PER" class="radio">Periodoncia</label>'); 
print('            <input type="checkbox" value="si" id="PER" name="per" />'); 
print('        </div>'); 
print(''); 
print('        <div>'); 
print('          <label>Protesis Fija<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="pf" required/>  '); 
print('            <label for="I" class="radio">Integral</label>   '); 
print('                   <input type="checkbox" value="si" id="I" name="inte" />  '); 
print('        </div>'); 
print(''); 
print('        <div>'); 
print('          <label>Cirugía<span class="required">*</span></label>'); 
print('            <input  class="seminar-title" type="text" name="cir" required/>   '); 
print('     '); 
print('        </div>'); 
print('        <hr>'); 
print('  <div>'); 
print('  <p>Por este conducto manifiesto que los datos asentados en las presente histria clínica son verdades, por lo cual, en caso de presentarse alguna complicación por el tratamiento '); print('recibido, derivado de la inexactitud de los datos aportados, asumo totalmente la responsabilidad correspondiente, liberando a la --Dra. Marysol Ibarra Almedia-- de cualquier '); print('responsabilidad a este respecto para todos los efectos legales que diera lugar</p>'); 
print('  </div>'); 
print('  <br>'); 
print('        <div class="btn-block">'); 
print('          <input id="button" type="submit" value="Enviar" name="submit">'); 
print('        </div>'); 
print('      </form>'); 
include("../assets/php/addhis.php");
print('    </div>'); 
print('  </body>'); 
print('  </html>'); 

}

?> 

