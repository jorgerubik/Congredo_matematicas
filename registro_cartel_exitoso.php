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
	$id_cartel = htmlspecialchars($_POST['id_cartel']);
	$titulo = htmlspecialchars($_POST['titulo_confirma']);
	$categoria = $_POST['categoria_confirma'];
	$modalidad = $_POST['modalidad_confirma'];
	$resumen = htmlspecialchars($_POST['resumen_confirma']);
	$referencias = htmlspecialchars($_POST['referencias_confirma']);
	$rfc_autor = htmlspecialchars($_POST['rfc_autor_conf']);
	$rfc_coautor1 = htmlspecialchars($_POST['rfc_coautor1_conf']);
	$rfc_coautor2 = htmlspecialchars($_POST['rfc_coautor2_conf']);
	$rfc_coautor3 = htmlspecialchars($_POST['rfc_coautor3_conf']);
	$rfc_coautor4 = htmlspecialchars($_POST['rfc_coautor4_conf']);
	$requiere = $_POST['requiere_autor'];
	$requiere1 = $_POST['requiere_coautor1'];
	$requiere2 = $_POST['requiere_coautor2'];
	$requiere3 = $_POST['requiere_coautor3'];
	$requiere4 = $_POST['requiere_coautor4'];

	
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
				$query="INSERT INTO ponencias_cartel VALUES ('$id_cartel', '$rfc_autor', '$categoria', '$modalidad', '$titulo', '$resumen', '$referencias', NULL, NULL, NULL, NULL, NULL)";
				exe_query($query);
				$query="INSERT INTO autores VALUES ('$rfc_autor','autor', 'T06' , '$id_cartel', '$requiere')";
				exe_query($query);
				if ($rfc_coautor1 != "") {
					$query="INSERT INTO autores VALUES ('$rfc_coautor1', 'coautor1', 'T06' , '$id_cartel', '$requiere1')";
					exe_query($query);
				}
				if ($rfc_coautor2 != ""){
					$query="INSERT INTO autores VALUES ('$rfc_coautor2', 'coautor2', 'T06' , '$id_cartel', '$requiere2')";
					exe_query($query);
				}
				if ($rfc_coautor3 != ""){
					$query="INSERT INTO autores VALUES ('$rfc_coautor3', 'coautor3', 'T06' , '$id_cartel', '$requiere3')";
					exe_query($query);
				}
				if ($rfc_coautor4 != ""){
					$query="INSERT INTO autores VALUES ('$rfc_coautor4', 'coautor4', 'T06' , '$id_cartel', '$requiere4')";
					exe_query($query);
				}
	echo"Se an introducido satisfactoriamente sus datos";
		
		
	mysql_close();
?>
<br>
<a href="registro_cartel.php">Agregar otro cartel</a>
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