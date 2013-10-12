<?php
//defino variables del formulario de registro general
	$nombre = $_POST['Nombre'];
	$primerap = $_POST['Primerap'];
	$segundoap = $_POST['Segundoap'];
	$id_usuario = $_POST['id_usuario'];
	$email = $_POST['Email'];
	$rfc = $_POST['Rfc'];
	$contra = $_POST['Password1'];

	echo "usuario: $id_usuario";
//conexión con servidor
//	$host = "127.0.0.1";
//	$user = "root";
//	$pass = "0515delux!";
//	$db = "congresomatematicas";

//conectar con el servidor
//	$conn = mysql_connect($host, $user, $pass);

			/*	if (!$conn) {
					echo "No se posible conectar al servidor. <br>";
					trigger_error(mysql_error(), E_USER_ERROR);
				}

				# seleccionar BD
				$rdb = mysql_select_db($db);

				if (!$rdb) {
					echo "No se puede seleccionar la BD. <br>";
					trigger_error(mysql_error(), E_USER_ERROR);
				}*/
		////////////////////////// FUNCIÓN PARA EJECUTAR QUERY

				/*function exe_query($query){
					
					$r = mysql_query($query);
					if (!$r) {
						echo "No se ejecutó el query: $query <br>";
						trigger_error(mysql_error(), E_USER_ERROR);
					}
					return $r;
					
				}	*/
//insertando los datos
				
	/*$query = "INSERT INTO usuarios VALUES('$id_usuario', '$rfc', '$contra', '$nombre', '$primerap', '$segundoap', '$email')";
	exe_query($query);
	echo "se introdujeron los datos";
	mysql_close(); */

?>