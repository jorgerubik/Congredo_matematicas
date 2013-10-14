<div class="cajatextoscroll">
	<form action="registro_cartel_exitoso.php" method="post" autocomplete="off" class="forms">
		<fieldset id="ponencia">
			<legend>Formulario de registro</legend>
			<legend>Título (maximo 15 palabras)</legend>
			<input type="text" maxleght="15" name="Titulo" id="Titulo" required >
			<legend>Categoría:</legend>
			<input type="radio" name="Categoria" value="investigacion">Investigación <br>
			<input type="radio" name="Categoria" value="experiencia"> Experiencia en aula
		</fieldset>
		<fieldset>	
			<legend>Modalidad (Solo seleccionar una)</legend>
			<legend>Enseñanza de las matemáticas</legend>
			<select id="Modalidad">
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
			<select id="Modalidad">
				<option value=""></option>
				<option value="AE">Análisis estadístico y diseño de experimentos (AE)</option>
				<option value="MS">Modelación y simulación (MS)</option>
				<option value="OP">Optimización (OP)</option>
				<option value="VD">Vinculación con otras disciplinas (VD)</option>
			</select>
		</fieldset>
		<fieldset>
			<legend>Resumen (máximo 300 palabras)</legend>
			<textarea rows="6" cols="50" id="Contenido_area" name="Resumen" required pattern="[a-zA-ZñáéíóúÑÁÉÍÓÚ /]{2,300}"> </textarea>
		</fieldset>
		<fieldset>
			<legend>Referencias (máximo 30 palabras)</legend>
			<textarea row="6" cols="50" name="Referencias" id="Contenido_area1" required ></textarea>
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
					<th>Id_autor</th>
					<td><input type="text" size="15" id="Autor" name="Autor" ></td>
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
</div>