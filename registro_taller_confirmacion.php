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
<?php

require ('script/utiles.php');
require('script/conexion.php');

//defino variables del formulario de registro general
	$id_taller = htmlspecialchars($_POST['id_taller']);
	$titulo = htmlspecialchars($_POST['titulo_taller']);
	$contenido = htmlspecialchars($_POST['Contenido']);
	$materiales = htmlspecialchars($_POST['materiales']);
	$rfc_autor = htmlspecialchars($_POST['rfc_autor']);
	$rfc_coautor1 = htmlspecialchars($_POST['rfc_coautor1']);
	$rfc_coautor2 = htmlspecialchars($_POST['rfc_coautor2']);
	$requiere = $_POST['requiere'];
	$requiere1 = $_POST['requiere1'];
	$requiere2 = $_POST['requiere2'];
	
//conexión con servidor
	require('script/bd.php');
//conectar con el servidor
	$conn = mysql_connect("$host", "$user", "$pass");

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
		$query = "SELECT `RFC`, `nombre_usuario`, `apellido_paterno`, `apellido_materno` FROM `usuarios` WHERE RFC = '".$rfc_autor."'";
		$query1 = "SELECT `RFC`, `nombre_usuario`, `apellido_paterno`, `apellido_materno` FROM `usuarios` WHERE RFC = '".$rfc_coautor1."'";
		$query2 = "SELECT `RFC`, `nombre_usuario`, `apellido_paterno`, `apellido_materno` FROM `usuarios` WHERE RFC = '".$rfc_coautor2."'";
		$r = mysql_query($query);
					if(!$r){
						echo "No se pudo ejecutar el query: $query";
						echo "<br>";
						trigger_error(mysql_error(), E_USER_ERROR);
					}
					else{
						echo " ";
						
					}
					echo "<form action = 'registro_taller_exitoso.php' method='post'><fieldset>";
					echo "<legend>Confirmación de datos</legend>";
					echo "<legend>AUTORES:</legend> ";
					echo "<table border='1'> <tbody>";
					echo "<tr>"."<td>"."RFC"."</td><td> "."Nombre usuario"."</td><td>"."Primer apellido"."</td><td>"."Segundo apellido"."</td></tr>";

					while ($row = mysql_fetch_assoc($r)){
						
						echo "<tr>"."<td>".$row['RFC']."</td><td> ".$row['nombre_usuario']."</td><td>".$row['apellido_paterno']."</td><td>".$row['apellido_materno']."</td></tr>";

					}
		$r1 = mysql_query($query1);
				if(!$r1){
						echo "No se pudo ejecutar el query: $query";
						echo "<br>";
						trigger_error(mysql_error(), E_USER_ERROR);
					}
					
					while ($row = mysql_fetch_assoc($r1)){
						
						echo "<tr>"."<td>".$row['RFC']."</td><td> ".$row['nombre_usuario']."</td><td>".$row['apellido_paterno']."</td><td>".$row['apellido_materno']."</td></tr>";

					}
		$r2 = mysql_query($query2);
				if(!$r2){
						echo "No se pudo ejecutar el query: $query";
						echo "<br>";
						trigger_error(mysql_error(), E_USER_ERROR);
					}
					
					while ($row = mysql_fetch_assoc($r2)){
						
						echo "<tr>"."<td>".$row['RFC']."</td><td> ".$row['nombre_usuario']."</td><td>".$row['apellido_paterno']."</td><td>".$row['apellido_materno']."</td></tr>";

					}
		

					echo "</tbody> </table>";
					echo " <legend> Titulo: </legend>";	
					echo "<input type='text' name='titulo_confirma' value='".$titulo."'>";
					echo " <legend> Contenido: </legend>";
					echo "<textarea  rows='6' cols='50' name='contenido_confirma' >".$contenido."</textarea>";
					echo " <legend> Materiales: </legend>";
					echo "<textarea  rows='6' cols='50' name='materiales_confirma'>".$materiales."</textarea>";
					echo "<table border='1'><tr><td>Id_usuario</td><td>Constancia</td></tr>";
					echo "<tr><td><input type='text' name='rfc_autor_conf' value='".$rfc_autor."'></td><td><input type='text' name='requiere_autor' value='".$requiere."'></td></tr>";
					echo "<tr><td><input type='text' name='rfc_coautor1_conf' value='".$rfc_coautor1."'></td><td><input type='text' name='requiere_coautor1' value='".$requiere1."'></td></tr>";
					echo "<tr><td><input type='text' name='rfc_coautor2_conf' value='".$rfc_coautor2."'></td><td><input type='text' name='requiere_coautor2' value='".$requiere2."'></td></tr>";
					echo "<input type='text' id='id_taller' name='id_taller' style='visibility:hidden;' value='".$id_taller."' />";
					echo "</table></fieldset><input type='submit' name='enviar' value='enviar'></form>";
	mysql_close();

?>
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