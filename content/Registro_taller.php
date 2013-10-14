<form action="registro_taller_exitoso.php" method="post" autocomplete="off" class="forms">
	<fieldset id="ponencia">
		<legend>Formulario de registro</legend>
		<legend>Título (maximo 15 palabras)</legend>
		<input type="text" maxleght="15" id="Titulo" name="Titulo" >
	</fieldset>
	<fieldset>
		<legend>Contenido</legend>
		<textarea rows="6" id="Contenido_area" name="Contenido" value="Contenido" cols="70" maxlength="300" required pattern="[a-zA-ZñáéíóúÑÁÉÍÓÚ /]{2,300}"> </textarea>
	</fieldset>
	<fieldset>
		<legend>Materiales</legend>
		<textarea rows="4" cols="50" required id="Contenido_area1" name="Materiales" value="Materiales" ></textarea>
	</fieldset>
	<fieldset>
		<legend>Autores</legend>
		<table border="1" id="autores">
			<tr>
				<th>Datos</th>
				<th>Autor</th>
				<th>Coautor 1</th>
				<th>Coautor 2</th>
			</tr>
			<tr>
				<th>id_autor</th>
				<td><input type="text" size="15" id="Autor" name="Autor" ></td>
				<td><input type="text" size="15"></td>
				<td><input type="text" size="15"></td>
			</tr>
			<tr>
				<th>Contraseña</th>
				<td><input type="password" size="15"></td>
				<td><input type="password" size="15"></td>
				<td><input type="password" size="15"></td>
			</tr>
			<tr>
				<th>Nombre</th>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th>Primer Apellido</th>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th>Segundo Apellido</th>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th>Institución</th>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th>País</th>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th>Estado</th>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th>Requiere constancia</th>
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
