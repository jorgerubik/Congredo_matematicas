<?php
require ('utiles.php');
require('conexion.php');
$usuario = $_POST['id'];
//conexión con servidor
	$host = "localhost";
	$user = "root";
	$pass = "0515delux!";
	$db = "congresomatematicas";
	$val0 = 0;
	$val1 = 1;
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
				$query = "SELECT rol FROM roles WHERE id_usuario ='".$usuario."';";
				
				$validacion = consulta_tb($query);
?>