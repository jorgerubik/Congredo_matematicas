
<div class="cajatextoscroll">
	<div class="cajatexto">
	
	<form action="registro_cartel_confirmacion.php" method="post" autocomplete="on" class="forms">
		<fieldset id="ponencia">
			<legend>Formulario de registro</legend>
			<legend>Título (maximo 15 palabras)</legend>
			<input type="text"  name="Titulo_cartel" id="titulo_cartel" required onblur="wordCounte();">
			<legend>Categoría:</legend>
			<input type="radio" name="Categoria" value="investigacion">Investigación <br>
			<input type="radio" name="Categoria" value="experiencia"> Experiencia en aula
		</fieldset>
		<fieldset>	
			<legend>Modalidad (Solo seleccionar una)</legend>
			<legend>Enseñanza de las matemáticas</legend>
			<select id="Modalidad" name="modalidad">
				<option>Modalidad</option>
				<option value="">------------Enseñanza de las matemáticas------------</option>
				<option value="AC">Aprendizaje cooperativo (AC) </option>
				<option value="ID">Innovación didáctica y metodológica  (ID)</option>
				<option value="EA">Entorno al aprendizaje (EA)</option>
				<option value="HM">Historia (HM)</option>
				<option value="RP">Resolución de problemas y habilidades (RP)</option>
				<option value="UT">Uso de las TIC´s (UT) </option>
				<option value="ED">Experiencias docentes (ED)</option>
				<option value="EM">Enseñando con manipulables (EM)</option>
				<option value="PN">Pensamiento numérico y simbólico (PN)</option>
				<option>--------------Aplicación de las matemáticas--------------</option>
				<option value="AE">Análisis estadístico y diseño de experimentos (AE)</option>
				<option value="MS">Modelación y simulación (MS)</option>
				<option value="OP">Optimización (OP)</option>
				<option value="VD">Vinculación con otras disciplinas (VD)</option>
			</select>
		</fieldset>
		<fieldset>
			<legend>Resumen (máximo 300 palabras)</legend>
			<textarea rows="6" cols="50" id="Contenido_area" name="Resumen" required pattern="[a-zA-ZñáéíóúÑÁÉÍÓÚ /]{2,300}" onblur="wordCount();"> </textarea>
		</fieldset>
		<fieldset>
			<legend>Referencias (máximo 30 palabras)</legend>
			<textarea row="6" cols="50" name="Referencias" id="Contenido_area2" required  onblur="wordCountc();"></textarea>
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
			<input type="text" id="id_trabajo" name="id_cartel" maxlength="10" size="10"  style="visibility:hidden;" />

		</fieldset>
		
		<input type="submit" name="enviar" id="enviar" value="enviar" >
	</form>
</div>
</div>
