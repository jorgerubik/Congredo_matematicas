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
	$id_ponencia = htmlspecialchars($_POST['id_ponencia']);
	$titulo = htmlspecialchars($_POST['titulo_confirma']);
	$categoria = $_POST['categoria_confirma'];
	$modalidad = $_POST['modalidad_confirma'];
	$resumen = htmlspecialchars($_POST['resumen_confirma']);
	$referencias = htmlspecialchars($_POST['referencias_confirma']);
	$id_autor = htmlspecialchars($_POST['id_autor_conf']);
	$id_coautor1 = htmlspecialchars($_POST['id_coautor1_conf']);
	$id_coautor2 = htmlspecialchars($_POST['id_coautor2_conf']);
	$id_coautor3 = htmlspecialchars($_POST['id_coautor3_conf']);
	$id_coautor4 = htmlspecialchars($_POST['id_coautor4_conf']);
	$requiere = $_POST['requiere_autor'];
	$requiere1 = $_POST['requiere_coautor1'];
	$requiere2 = $_POST['requiere_coautor2'];
	$requiere3 = $_POST['requiere_coautor3'];
	$requiere4 = $_POST['requiere_coautor4'];

	
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
				$query="INSERT INTO ponencias_oral VALUES ('$id_ponencia', '$id_autor', '$categoria', '$modalidad', '$titulo', '$resumen', '$referencias', NULL, NULL, NULL)";
				exe_query($query);
				$query="INSERT INTO autores VALUES ('$id_autor', '$id_ponencia', '$requiere')";
				exe_query($query);
				if ($id_coautor1 != "") {
					$query="INSERT INTO autores VALUES ('$id_coautor1', '$id_ponencia', '$requiere1')";
					exe_query($query);
				}
				if ($id_coautor2 != ""){
					$query="INSERT INTO autores VALUES ('$id_coautor2', '$id_ponencia', '$requiere2')";
					exe_query($query);
				}
				if ($id_coautor3 != ""){
					$query="INSERT INTO autores VALUES ('$id_coautor3', '$id_ponencia', '$requiere3')";
					exe_query($query);
				}
				if ($id_coautor4 != ""){
					$query="INSERT INTO autores VALUES ('$id_coautor4', '$id_ponencia', '$requiere4')";
					exe_query($query);
				}
	mysql_close();
	echo"Se an introducido satisfactoriamente sus datos";

?>
<br>
<a href="registro_ponencia.php">Agregar otra ponencia</a>
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