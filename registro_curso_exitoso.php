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
	$id_curso = htmlspecialchars($_POST['id_curso']);
	$titulo = htmlspecialchars($_POST['titulo_confirma']);
	$contenido = htmlspecialchars($_POST['contenido_confirma']);
	$materiales = htmlspecialchars($_POST['materiales_confirma']);
	$rfc_autor = htmlspecialchars($_POST['rfc_autor_conf']);
	$rfc_coautor1 = htmlspecialchars($_POST['rfc_coautor1_conf']);
	$rfc_coautor2 = htmlspecialchars($_POST['rfc_coautor2_conf']);
	$requiere = $_POST['requiere_autor'];
	$requiere1 = $_POST['requiere_coautor1'];
	$requiere2 = $_POST['requiere_coautor2'];
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
		$query = "INSERT INTO ponencias_curso VALUES('$id_curso', '$rfc_autor', '$titulo', '$contenido', ' ', ' ', '$materiales', ' ', ' ', ' ', ' ', ' ')";
		exe_query($query);
		$query="INSERT INTO autores VALUES ('$rfc_autor', 'autor', 'T09', '$id_curso', '$requiere')";
				exe_query($query);
				if ($rfc_coautor1 != "") {
					$query="INSERT INTO autores VALUES ('$rfc_coautor1', 'coautor1', 'T09', '$id_curso', '$requiere1')";
					exe_query($query);
				}
				if ($rfc_coautor2 != ""){
					$query="INSERT INTO autores VALUES ('$rfc_coautor2', 'coautor2', 'T09', '$id_curso', '$requiere2')";
					exe_query($query);
				}
		echo "Se ha introducido satisfactoriamente el registro <br>";
		
		
	mysql_close();
?>
<br>
<a href="registro_curso.php">Agregar otro taller</a>
<br>
<a href="registro_trabajos.php">Ir al menú principal</a>
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