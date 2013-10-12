<form action="#" method="post" autocomplete="off" class="forms">
	<fieldset id="ponencia">
		<legend>Formulario de registro</legend>
		<legend>Título (maximo 15 palabras)</legend>
		<input type="text" maxleght="15">
	</fieldset>
	<fieldset>
		<legend>Contenido</legend>
		<textarea rows="6" cols="50" required pattern="[a-zA-ZñáéíóúÑÁÉÍÓÚ /]{2,300}"> </textarea>
	</fieldset>
	<fieldset>
		<legend>Materiales</legend>
		<textarea rows="4" cols="50" required></textarea>
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
				<th>Correo electrónico</th>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th>Contraseña</th>
				<td></td>
				<td></td>
				<td></td>
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
