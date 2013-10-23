<?
//  Autentificator
//  Gestión de Usuarios PHP+Mysql+sesiones
//  by Pedro Noves V. (Cluster)
//  clus@hotpop.com
// ------------------------------------------
require("aut_verifica.inc.php");
$nivel_acceso=-1; // Nivel de acceso para esta página.
// se chequea si el usuario tiene un nivel inferior
// al del nivel de acceso definido para esta página.
// Si no es correcto, se mada a la página que lo llamo con
// la variable de $error_login definida con el nº de error segun el array de
// aut_mensaje_error.inc.php
if ($nivel_acceso >= $_SESSION['usuario_nivel']){
header ("Location: $redir?error_login=5");
exit;
}
?>
<!doctype html>
<html lang="es">
	<head>
		<title>6&deg; Congreso de Matem&aacute;ticas - Registro Trabajos</title>
		<?php
			include_once "page/head.php";
		?>

		<script>
		<?php
		include "script/script_formulario.php";
		?>
		</script>		
	</head>

	<body>
            <div id="formatopagina">
		<!-- Cabecera de la página-->
		<section id="header">
			<?php
			include "page/header.php";
			?>
		</section>
		
		<!--Barra de navegación -->
		<section id="nav">
			<?php
				include "page/menucs.php";
			?>
		</section>
		
		<!--sección de contenido -->
		<section id="seccion">
			<div class="cajatextoscroll">
				<div class="cajatexto">
			
<?php

require ('script/utiles.php');
require('script/conexion.php');

//defino variables del formulario de registro general
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
	
		//insertando los datos
		$query = "SELECT * FROM ponencias_taller WHERE id_usuario = '".$usuario."'";
					$r = mysql_query($query);
					if(!$r){
						echo "No se pudo ejecutar el query: $query";
						echo "<br>";
						trigger_error(mysql_error(), E_USER_ERROR);
					}
					else{
						echo " ";
						
					}
					
					echo "<h3>Talleres registrados: </h3>";
					//echo "<table border='1'> <tbody>";
					while ($row = mysql_fetch_assoc($r)){
						echo "<table border='1'> <tbody>".
							 "<tr><td>Id taller:</td><td>".$row['id_ponencia_taller'].
							 "</td></tr><tr><td>Titulo Taller:</td><td>".
							 $row['titulo_taller'].
							 "</td></tr><tr><td>Resumen:</td><td>".
							 $row['resumen_taller'].
							 "</td></tr><tr><td>Material:</td><td>".
							 $row['material_taller']."</td></tr>".
							 "</tbody></table><br>";
					}		 
		
	mysql_close();
?>
		<form action="editar_taller_confirmacion.php" method="post" autocomplete="off" class="forms">
	<fieldset id="ponencia">
		<legend>Formulario de registro</legend>
		<legend>Título (máximo 15 palabras)</legend>
		<input type="text"  id="titulo_taller" name="titulo_taller" onblur="wordCountg();">
	</fieldset>
	<fieldset>
		<legend>Contenido (máximo 300 palabras)</legend>
		<textarea rows="6" id="Contenido_area" name="Contenido"  cols="70" required pattern="[a-zA-ZñáéíóúÑÁÉÍÓÚ /]{2,300}" onblur="wordCount();"> </textarea>
	</fieldset>
	<fieldset>
		<legend>Materiales (máximo 100 palabras)</legend>
		<textarea rows="4" cols="50" required name="materiales" id="Contenido_area1" name="Materiales" onblur="wordCountb();" ></textarea>
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
	
	
	<input type="submit" name="enviar" value="enviar">
</form>
	</div>
	</div>
</section>		
		
		<!-- aside de la página -->
		<section id="aside">
			<?php
				include "page/aside.php";
			?>
		</section>

		<!-- Creditos de la pagina -->
		<section id="footer">
			<?php
				include "page/footer.php";
			?>
		</section>
            </div>
	</body>
</html>