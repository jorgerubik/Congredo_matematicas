<form action="#" method="post" autocomplete="off" class="forms">
	<fieldset id="ponencia">
		<legend>Formulario de registro</legend>
		<legend>Título (maximo 15 palabras)</legend>
		<input type="text" maxleght="15">
		<legend>Categoría:</legend>
		<input type="radio" name="categoria" value="investigacion">Investigación <br>
		<input type="radio" name="categoria" value="experiencia"> Experiencia en aula
	</fieldset>
	<fieldset>	
		<legend>Modalidad</legend>
		<legend>Enseñanza de las matemáticas</legend>
		<select>
			<option value=""></option>
			<option value="">Aprendizaje cooperativo (AC) </option>
			<option value="">Innovación didáctica y metodológica  (ID)</option>
			<option value="">Entorno al aprendizaje (EA)</option>
			<option value="">Historia (HM)</option>
			<option value="">Resolución de problemas y habilidades (RP)</option>
			<option value="">Uso de las TIC´s (UT) </option>
			<option value="">Experiencias docentes (ED)</option>
			<option value="">Enseñando con manipulables (EM)</option>
			<option value="">Pensamiento numérico y simbólico (PN)</option>
		</select>
		<legend>Aplicación de las matemáticas</legend>
		<select>
			<option value=""></option>
			<option value="">Análisis estadístico y diseño de experimentos (AE)</option>
			<option value="">Modelación y simulación (MS)</option>
			<option value="">Optimización (OP)</option>
			<option value="">Vinculación con otras disciplinas (VD)</option>
		</select>
	</fieldset>
	<fieldset>
		<legend>Resumen (máximo 300 palabras)</legend>
		<textarea rows="6" cols="50" id="Contenido_area" required pattern="[a-zA-ZñáéíóúÑÁÉÍÓÚ /]{2,300}"> </textarea>
	</fieldset>
	<fieldset>
		<legend>Referencias (máximo 30 palabras)</legend>
		<textarea row="6" cols="50" id="Contenido_area1" required ></textarea>
	</fieldset>

	<fieldset>
		<legend>Autores</legend>
		<table border="1" id="autores">
			<tr>
				<th>Datos</th>
				<th>Autor</th>
				<th>Coautor 1</th>
				<th>Coautor 2</th>
				<th>Coautor 3</th>
				<th>Coautor 4</th>
			</tr>
			<tr>
				<th>Correo electrónico</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th>Contraseña</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th>Nombre</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th>Primer Apellido</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th>Segundo Apellido</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th>Institución</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th>País</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th>Estado</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th>Requiere constancia</th>
				<td><input type="checkbox"></td>
				<td><input type="checkbox"></td>
				<td><input type="checkbox"></td>
				<td><input type="checkbox"></td>
				<td><input type="checkbox"></td>
			</tr>
		</table>
	</fieldset>
	<fieldset>
		<legend>Desea enviar otro trabajo</legend>
		<input type="radio" name="otro" value="si"> Sí <br>
		<input type="radio" name="otro" value="no"> No <br>
	</fieldset>
	<input type="submit" name="enviar" value="enviar">
</form>
