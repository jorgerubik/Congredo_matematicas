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
			<br>
			<form>
				<button type="submit" >editar</button>
			</form>
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
		$query = "SELECT * FROM usuarios WHERE id_usuario = '".$usuario."'";
					$r = mysql_query($query);
					if(!$r){
						echo "No se pudo ejecutar el query: $query";
						echo "<br>";
						trigger_error(mysql_error(), E_USER_ERROR);
					}
					else{
						echo " ";
						
					}
					
					echo "<h3>USUARIO: </h3>";
					echo "<table border='1'> <tbody>";
					//echo "<tr><td>"."RFC"."</td></tr><tr> "."Contraseña"."</tr><tr>"."Nombre"."</tr><tr> "."Primer Apellido"."</tr><tr>"."Segundo apellido"."</tr><tr> "."E-mail"."</tr>";

					while ($row = mysql_fetch_assoc($r)){
						
						echo "<tr><td> RFC:</td><td>".$row['RFC']."</td></tr><tr><td>Contraseña:</td><td> ".$row['contrasena']."</td></tr><tr><td>Nombre:</td><td>".$row['nombre_usuario']."</td></tr><tr><td>Apellido paterno:</td><td>".$row['apellido_paterno']."</td></tr><tr><td>Apellido materno:</td><td>".$row['apellido_materno']."</td></tr><tr><td>E-mail:</td><td> ".$row['email']."</td></tr>";

					}
					echo "</tbody> </table>";	
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