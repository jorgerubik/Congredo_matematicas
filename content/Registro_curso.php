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

<form action="registro_curso_verifica.php" method="post" autocomplete="off" class="forms">
	<fieldset id="ponencia">
		<legend>Formulario de registro</legend>
		<legend>Título (máximo 15 palabras)</legend>
		<input type="text"  id="titulo_curso" name="titulo_curso" onblur="wordCountf();">
	</fieldset>
	<fieldset>
		<legend>Contenido (máximo 300 palabras)</legend>
		<textarea rows="6" id="Contenido_area" name="Contenido" cols="70"  required pattern="[a-zA-ZñáéíóúÑÁÉÍÓÚ /]{2,300}" onblur="wordCount();"> </textarea>
	</fieldset>
	<fieldset>
		<legend>Materiales (máximo 100 palabras)</legend>
		<textarea rows="4" cols="50" required id="Contenido_area1" name="Materiales"  onblur="wordCountb();" ></textarea>
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
	<input type="text" id="id_trabajo" name="id_curso" maxlength="10" size="10"  style="visibility:hidden;" />

	
	<input type="submit" name="enviar" value="enviar">
</form>
<?php
}
?>