<div class="cajatextoscroll">
	<?php
	$usuario = $_SESSION['usuario_id']; 
	//conexión con servidor
	$host = "localhost";
	$user = "root";
	$pass = "0515delux!";
	$db = "congresomat";

//conectar con el servidor
	$conn = mysql_connect($host, $user, $pass);

				if (!$conn) {
					echo "No se posible conectar al servidor. <br>";
					trigger_error(mysql_error(), E_USER_ERROR);
				}
				mysql_query("SET NAMES utf8");
				# seleccionar BD
				$rdb = mysql_select_db($db);

				if (!$rdb) {
					echo "No se puede seleccionar la BD. <br>";
					trigger_error(mysql_error(), E_USER_ERROR);
				}
		////////////////////////// FUNCIÓN PARA EJECUTAR QUERY

				function exe_query($query){
					
					$r = mysql_query($query);
					if (!$r) {
						echo "No se ejecutó el query: $query <br>";
						trigger_error(mysql_error(), E_USER_ERROR);
					}
					return $r;
					
				}	

				$query = "SELECT COUNT(*) FROM autores WHERE id_usuario = '".$usuario."'";
				$result=exe_query($query);
				$row = mysql_fetch_array($result); 
				
				if ($row[0]>=5) {
					# code...
					echo "ha registrado el número límite de trabajos (5) si desea actualizar o dar de baja alguno, de click en los botones de abajo";
				}
				else{
					
				
				
				
	?>
	<form action="registro_ponencia_confirmacion.php" method="post" autocomplete="off" class="forms">
		<fieldset id="ponencia">
			<legend>Formulario de registro</legend>
			<legend>Título (maximo 15 palabras)</legend>
			<input type="text"  name="Titulo_ponencia" id="titulo_ponencia" onblur="wordCountd();">
			<legend>Categoría:</legend>
			<input type="radio" name="Categoria" value="investigacion">Investigación <br>
			<input type="radio" name="Categoria" value="experiencia"> Experiencia en aula
		</fieldset>
		<fieldset>	
			<legend>Modalidad</legend>
			<legend>Enseñanza de las matemáticas</legend>
			<select ID="ensenanza" name="modalidad">
				<option value=""></option>
				<option value="AC">Aprendizaje cooperativo (AC) </option>
				<option value="ID">Innovación didáctica y metodológica  (ID)</option>
				<option value="EA">Entorno al aprendizaje (EA)</option>
				<option value="HM">Historia (HM)</option>
				<option value="RP">Resolución de problemas y habilidades (RP)</option>
				<option value="UT">Uso de las TIC´s (UT) </option>
				<option value="ED">Experiencias docentes (ED)</option>
				<option value="EM">Enseñando con manipulables (EM)</option>
				<option value="PN">Pensamiento numérico y simbólico (PN)</option>
			</select>
			<legend>Aplicación de las matemáticas</legend>
			<select id="aplicacion" name="modalidad">
				<option value=""></option>
				<option value="AE">Análisis estadístico y diseño de experimentos (AE)</option>
				<option value="MS">Modelación y simulación (MS)</option>
				<option value="OP">Optimización (OP)</option>
				<option value="VD">Vinculación con otras disciplinas (VD)</option>
			</select>
		</fieldset>
		<fieldset>
			<legend>Resumen (máximo 300 palabras)</legend>
			<textarea rows="6" cols="50" name="Resumen" id="Contenido_area" required pattern="[a-zA-ZñáéíóúÑÁÉÍÓÚ /]{2,300}" onblur="wordCount();" > </textarea>
		</fieldset>
		<fieldset>
			<legend>Referencias (máximo 30 palabras)</legend>
			<textarea row="6" cols="50" id="Contenido_area2" name="Referencias"  required onblur="wordCountc();"></textarea>
		</fieldset>

		<fieldset>
			<legend>Autores</legend>
			<table border="1" id="autores">
				<tr>
					<th>Autor</th>
					<th>Id_usuario</th>
					<th>Requiere constancia</th>
					
				</tr>
				<tr>
					<th>Autor</th>
					<td><input type="text" id="id_ponente" name="Id_autor" maxlenght="10" required></td>
					<td><input type="radio" name="requiere" id="requiere" value="SI" >Si <input type="radio" name="requiere" id="requiere" value="NO">No</td>
				</tr>
				<tr>
					<th>Coautor 1</th>
					<td><input type="text" id="id_ponente" name="Id_coautor1" maxlenght="10"></td>
					<td><input type="radio" name="requiere1" id="requiere1" value="SI">Si <input type="radio" name="requiere1" id="requiere1" value="NO">No</td>
					
				</tr>
				<tr>
					<th>Coautor 2</th>
					<td><input type="text" id="id_ponente" name="Id_coautor2" maxlenght="10"></td>
					<td><input type="radio" name="requiere2" id="requiere2" value="SI" >Si <input type="radio" name="requiere2" id="requiere2" value="NO">No</td>
				</tr>
				<tr>
					<th>Coautor 3</th>
					<td><input type="text" id="id_ponente" name="Id_coautor3" maxlenght="10"></td>
					<td><input type="radio" name="requiere3" id="requiere3" value="SI" >Si <input type="radio" name="requiere3" id="requiere3" value="NO">No</td>
				</tr>
				<tr>
					<th>Coautor 4</th>
					<td><input type="text" id="id_ponente" name="Id_coautor4" maxlenght="10"></td>
					<td><input type="radio" name="requiere4" id="requiere4" value="SI" >Si <input type="radio" name="requiere4" id="requiere4" value="NO">No</td>
				</tr>
			</table>
			<input type="text" id="id_trabajo" name="id_ponencia" maxlength="10" size="10"  style="visibility:hidden;" />
		</fieldset>
		
		<input type="submit" name="enviar" value="enviar"  >
</form>
</div>
<?php
}
?>