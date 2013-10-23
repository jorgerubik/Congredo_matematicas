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
	$id_usuario = $_SESSION['usuario_id']; 
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
	
				$query = "SELECT * FROM ponencias_oral WHERE id_usuario = '".$id_usuario."'";
				$cambio = exe_query($query);
				$row = mysql_fetch_assoc($cambio);
				$id_ponencia = $row['id_ponencia_oral'];

				$query = "SELECT * FROM autores WHERE tipo_autor = 'coautor1'";
				$cambio1 = exe_query($query);
				$row1 = mysql_fetch_assoc($cambio1);
				$coautor1 = $row1['id_usuario'];

				$query = "SELECT * FROM autores WHERE tipo_autor = 'coautor2'";
				$cambio2 = exe_query($query);
				$row2 = mysql_fetch_assoc($cambio2);
				$coautor2 = $row2['id_usuario'];

				$query = "SELECT * FROM autores WHERE tipo_autor = 'coautor3'";
				$cambio3 = exe_query($query);
				$row3 = mysql_fetch_assoc($cambio3);
				$coautor3 = $row3['id_usuario'];

				$query = "SELECT * FROM autores WHERE tipo_autor = 'coautor4'";
				$cambio4 = exe_query($query);
				$row4 = mysql_fetch_assoc($cambio4);
				$coautor4 = $row4['id_usuario'];
				

				//insertando los datos
				$query = "UPDATE ponencias_oral SET id_usuario = '$id_autor', titulo_oral = '$titulo', resumen_oral = '$contenido', referencias_oral = '$referencias', id_categoria = '$categoria', id_modalidad = '$modalidad' WHERE id_ponencia_oral = '$id_ponencia' ";
				exe_query($query);
				$query = "UPDATE autores SET id_usuario = '$id_autor', tipo_autor = 'autor', constancia = '$requiere' WHERE id_trabajo = '$id_ponencia' AND id_usuario = '$id_usuario'";
				exe_query($query);
				if($id_coautor1 != ""){
					$query = "UPDATE autores SET id_usuario = '$id_coautor1', tipo_autor = 'coautor1', constancia = '$requiere1' WHERE id_trabajo = '$id_ponencia' AND id_usuario = '$coautor1'";
					exe_query($query);
				}
				if ($id_coautor2 != "") {
					$query = "UPDATE autores SET id_usuario = '$id_coautor2', tipo_autor = 'coautor2', constancia = '$requiere2' WHERE id_trabajo = '$id_ponencia' AND id_usuario = '$coautor2'";
					exe_query($query);
				}

				if ($id_coautor3 != "") {
					$query = "UPDATE autores SET id_usuario = '$id_coautor3', tipo_autor = 'coautor3', constancia = '$requiere3' WHERE id_trabajo = '$id_ponencia' AND id_usuario = '$coautor3'";
					exe_query($query);
				}

				if ($id_coautor4 != "") {
					$query = "UPDATE autores SET id_usuario = '$id_coautor4', tipo_autor = 'coautor4', constancia = '$requiere4' WHERE id_trabajo = '$id_ponencia' AND id_usuario = '$coautor4'";
					exe_query($query);
				}
							

					
		echo "Se ha introducido satisfactoriamente el cambio <br>";
		
	mysql_close();
?>
		
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