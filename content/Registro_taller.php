<form action="registro_taller_confirmacion.php" method="post" autocomplete="off" class="forms">
	<fieldset id="ponencia">
		<legend>Formulario de registro</legend>
		<legend>Título (máximo 15 palabras)</legend>
		<input type="text" maxleght="15" id="titulo_taller" name="titulo_taller" >
	</fieldset>
	<fieldset>
		<legend>Contenido (máximo 300 palabras)</legend>
		<textarea rows="6" id="Contenido_area" name="Contenido"  cols="70" required pattern="[a-zA-ZñáéíóúÑÁÉÍÓÚ /]{2,300}" onkeypress="wordCount();"> </textarea>
	</fieldset>
	<fieldset>
		<legend>Materiales (máximo 100 palabras)</legend>
		<textarea rows="4" cols="50" required name="materiales" id="Contenido_area1" name="Materiales" value="Materiales" onkeypress="wordCounta();" ></textarea>
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
				
			</table>
	</fieldset>
	<input type="text" id="id_taller" name="id_taller" maxlength="10" size="10"  style="visibility:hidden;" />
	
	<input type="submit" name="enviar" value="enviar">
</form>
