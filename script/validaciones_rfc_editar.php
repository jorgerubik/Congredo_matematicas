		<?php

		$query = "SELECT `RFC`, `nombre_usuario`, `apellido_paterno`, `apellido_materno` FROM `usuarios` WHERE RFC = '".$rfc_autor."'";
		$query1 = "SELECT `RFC`, `nombre_usuario`, `apellido_paterno`, `apellido_materno` FROM `usuarios` WHERE RFC = '".$rfc_coautor1."'";
		$query2 = "SELECT `RFC`, `nombre_usuario`, `apellido_paterno`, `apellido_materno` FROM `usuarios` WHERE RFC = '".$rfc_coautor2."'";
		$query3 = "SELECT `RFC`, `nombre_usuario`, `apellido_paterno`, `apellido_materno` FROM `usuarios` WHERE RFC = '".$rfc_coautor3."'";
		$query4 = "SELECT `RFC`, `nombre_usuario`, `apellido_paterno`, `apellido_materno` FROM `usuarios` WHERE RFC = '".$rfc_coautor4."'";

		$query_editar = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_autor."'";
		$query_editar1 = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_coautor1."'";
		$query_editar2 = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_coautor2."'";
		$query_editar3 = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_coautor3."'";
		$query_editar4 = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_coautor4."'";

		$rfc_invalido = 0;

		$r_verificacion_rfc_autor = exe_query($query);
		$r_existencia = exe_query($query_editar);
		$row_editar = mysql_fetch_array($r_existencia);

		if($row_editar[0]>=0){
		
			if(!$row = mysql_fetch_array($r_verificacion_rfc_autor)){
				$rfc_autor_error = $rfc_autor;
				$rfc_invalido++;
			}
			else
				$rfc_autor_error = "";
		}

		$r_verificacion_rfc_coautor1 = exe_query($query1);
		$r_existencia1 = exe_query($query_editar1);
		$row_editar = mysql_fetch_array($r_existencia1);

		if($row_editar[0]>=0){
		
			if(!$row = mysql_fetch_array($r_verificacion_rfc_coautor1)){
				$rfc_coautor1_error = $rfc_coautor1;
				$rfc_invalido++;
			}
			else
				$rfc_coautor1_error = "";
		}

		$r_verificacion_rfc_coautor2 = exe_query($query2);
		$r_existencia2 = exe_query($query_editar2);
		$row_editar = mysql_fetch_array($r_existencia2);

		if($row_editar[0]>=0){
		
			if(!$row = mysql_fetch_array($r_verificacion_rfc_coautor2)){
				$rfc_coautor2_error = $rfc_coautor2;
				$rfc_invalido++;
			}
			else
				$rfc_coautor2_error  = "";
		}

		$r_verificacion_rfc_coautor3 = exe_query($query3);
		$r_existencia3 = exe_query($query_editar3);
		$row_editar = mysql_fetch_array($r_existencia3);

		if($row_editar[0]>=0){
			if(!$row = mysql_fetch_array($r_verificacion_rfc_coautor3)){
				$rfc_coautor3_error = $rfc_coautor3;
				$rfc_invalido++;
			}
			else
				$rfc_coautor3_error  = "";
		}

		$r_verificacion_rfc_coautor4 = exe_query($query4);
		$r_existencia4 = exe_query($query_editar4);
		$row_editar = mysql_fetch_array($r_existencia4);

		if($row_editar[0]>=0){
			if(!$row = mysql_fetch_array($r_verificacion_rfc_coautor4)){
				$rfc_coautor4_error = $rfc_coautor4;
				$rfc_invalido++;
			}
			else
				$rfc_coautor4_error  = "";
		}

		if ($rfc_invalido>0) {
			$mensaje_rfc_error = "El o los RFC:<br><ul>";
			echo $mensaje_rfc_error;
			if ($rfc_autor_error != "") {
				echo "<li type='disc'>".$rfc_autor_error."</li>";
			}
			if ($rfc_coautor1_error != "") {
				echo "<li type='disc'>".$rfc_coautor1_error."</li>";
			}
			if ($rfc_coautor2_error != "") {
				echo "<li type='disc'>".$rfc_coautor2_error."</li>";
			}
			if ($rfc_coautor3_error != "") {
				echo "<li type='disc'>".$rfc_coautor3_error."</li>";
			}
			if ($rfc_coautor4_error != "") {
				echo "<li type='disc'>".$rfc_coautor4_error."</li>";
			}
			echo "</ul>no se encuentran registrados, por favor verifique que los datos que introdujo son correctos";
		}
		//verifica que el rfc no tenga mas de 5 registros
		$rfc_limite = 0;

		$query_limite_trabajos = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_autor."'";
				$query_limite_trabajos1 = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_coautor1."'";
				$query_limite_trabajos2 = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_coautor2."'";
				$query_limite_trabajos3 = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_coautor3."'";
				$query_limite_trabajos4 = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_coautor4."'";

				$query_editar = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_autor."'";
				$query_editar1 = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_coautor1."'";
				$query_editar2 = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_coautor2."'";
				$query_editar3 = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_coautor3."'";
				$query_editar4 = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_coautor4."'";

				$r_verificacion_limite_trabajos= exe_query($query_limite_trabajos);
				$r_existencia = exe_query($query_editar);
				$row_editar = mysql_fetch_array($r_existencia);

				if($row_editar[0]>=0){

				$row = mysql_fetch_array($r_verificacion_limite_trabajos);
				if ($row[0]>=5){
					$rfc_autor_limite = $rfc_autor;
					$rfc_limite++;
				}
				else
					$rfc_autor_limite = "";
				}

				$r_verificacion_limite_trabajos1 = exe_query($query_limite_trabajos1);
				$r_existencia1 = exe_query($query_editar1);
		$row_editar = mysql_fetch_array($r_existencia1);

		if($row_editar[0]>=0){

				$row = mysql_fetch_array($r_verificacion_limite_trabajos1);
				if ($row[0]>=5){
					$rfc_coautor1_limite = $rfc_coautor1;
					$rfc_limite++;
				}
				else
					$rfc_coautor1_limite = "";
			}

				$r_verificacion_limite_trabajos2 = exe_query($query_limite_trabajos2);
				$r_existencia2 = exe_query($query_editar2);
		$row_editar = mysql_fetch_array($r_existencia2);

		if($row_editar[0]>=0){

				$row = mysql_fetch_array($r_verificacion_limite_trabajos2);
				if ($row[0]>=5){
					$rfc_coautor2_limite = $rfc_coautor2;
					$rfc_limite++;
				}
				else
					$rfc_coautor2_limite = "";
			}

				$r_verificacion_limite_trabajos3 = exe_query($query_limite_trabajos3);
				$r_existencia3 = exe_query($query_editar3);
		$row_editar = mysql_fetch_array($r_existencia3);

		if($row_editar[0]>=0){

				$row = mysql_fetch_array($r_verificacion_limite_trabajos3);
				if ($row[0]>=5){
					$rfc_coautor3_limite = $rfc_coautor3;
					$rfc_limite++;
				}
				else
					$rfc_coautor3_limite = "";
			}

				$r_verificacion_limite_trabajos4 = exe_query($query_limite_trabajos4);
				$r_existencia4 = exe_query($query_editar4);
		$row_editar = mysql_fetch_array($r_existencia4);

		if($row_editar[0]>=0){

				$row = mysql_fetch_array($r_verificacion_limite_trabajos4);
				if ($row[0]>=5){
					$rfc_coautor4_limite = $rfc_coautor4;
					$rfc_limite++;
				}
				else
					$rfc_coautor4_limite = "";
			}

				if ($rfc_limite>0) {
					$mensaje_rfc_limite = "La o las personas con RFC:<br><ul>";
					echo $mensaje_rfc_limite;
					if ($rfc_autor_limite != "") {
						echo "<li type='disc'>".$rfc_autor_limite."</li>";
					}
					if ($rfc_coautor1_limite != "") {
						echo "<li type='disc'>".$rfc_coautor1_limite."</li>";
					}
					if ($rfc_coautor2_limite != "") {
						echo "<li type='disc'>".$rfc_coautor2_limite."</li>";
					}
					if ($rfc_coautor3_limite != "") {
						echo "<li type='disc'>".$rfc_coautor3_limite."</li>";
					}
					if ($rfc_coautor4_limite != "") {
						echo "<li type='disc'>".$rfc_coautor4_limite."</li>";
					}
					echo "</ul>participan en el numero límite de trabajos (5), verifique que los datos son los correctos";
				}
		//termina

		////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
				$rfc_autor_taller_curso = 0;

				$query_limite_taller_curso = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_autor."' AND (id_tipo_congresista = 'T07' OR id_tipo_congresista = 'T09')";
				$query_limite_taller_curso1 = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_coautor1."' AND (id_tipo_congresista = 'T07' OR id_tipo_congresista = 'T09')";
				$query_limite_taller_curso2 = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_coautor2."' AND (id_tipo_congresista = 'T07' OR id_tipo_congresista = 'T09')";
				$query_limite_taller_curso3 = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_coautor3."' AND (id_tipo_congresista = 'T07' OR id_tipo_congresista = 'T09')";
				$query_limite_taller_curso4 = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_coautor4."' AND (id_tipo_congresista = 'T07' OR id_tipo_congresista = 'T09')";

				$query_editar = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_autor."'";
				$query_editar1 = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_coautor1."'";
				$query_editar2 = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_coautor2."'";
				$query_editar3 = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_coautor3."'";
				$query_editar4 = "SELECT COUNT(*) FROM autores WHERE RFC = '".$rfc_coautor4."'";

				$r_verificacion_taller_curso= exe_query($query_limite_taller_curso);
				$r_existencia = exe_query($query_editar);
		$row_editar = mysql_fetch_array($r_existencia);

		if($row_editar[0]>=0){

				$row = mysql_fetch_array($r_verificacion_limite_taller_curso);
				if ($row[0]>=1){
					$rfc_autor_taller_curso = $rfc_autor;
					$rfc_limite_taller_curso++;
				}
				else
					$rfc_autor_taller_curso = "";
			}

				$r_verificacion_limite_taller_curso1 = exe_query($query_limite_taller_curso1);
				$r_existencia1 = exe_query($query_editar1);
		$row_editar = mysql_fetch_array($r_existencia1);

		if($row_editar[0]>=0){

				$row = mysql_fetch_array($r_verificacion_limite_taller_curso1);
				if ($row[0]>=1){
					$rfc_coautor1_taller_curso = $rfc_coautor1;
					$rfc_limite_taller_curso++;
				}
				else
					$rfc_coautor1_taller_curso = "";
			}

				$r_verificacion_limite_taller_curso2 = exe_query($query_limite_taller_curso2);
				$r_existencia2 = exe_query($query_editar2);
		$row_editar = mysql_fetch_array($r_existencia2);

		if($row_editar[0]>=0){

				$row = mysql_fetch_array($r_verificacion_limite_taller_curso2);
				if ($row[0]>=1){
					$rfc_coautor2_taller_curso = $rfc_coautor2;
					$rfc_limite_taller_curso++;
				}
				else
					$rfc_coautor2_taller_curso = "";
			}

				$r_verificacion_limite_taller_curso3 = exe_query($query_limite_taller_curso3);
				$r_existencia3 = exe_query($query_editar3);
		$row_editar = mysql_fetch_array($r_existencia3);

		if($row_editar[0]>=0){

				$row = mysql_fetch_array($r_verificacion_limite_taller_curso2);
				if ($row[0]>=1){
					$rfc_coautor2_taller_curso = $rfc_coautor2;
					$rfc_limite_taller_curso++;
				}
				else
					$rfc_coautor3_taller_curso = "";
			}

				$r_verificacion_limite_taller_curso4 = exe_query($query_limite_taller_curso4);
				$r_existencia4 = exe_query($query_editar4);
		$row_editar = mysql_fetch_array($r_existencia4);

		if($row_editar[0]>=0){

				$row = mysql_fetch_array($r_verificacion_limite_taller_curso4);
				if ($row[0]>=1){
					$rfc_coautor4_taller_curso = $rfc_coautor4;
					$rfc_limite_taller_curso++;
				}
				else
					$rfc_coautor4_taller_curso = "";
			}

				if ($rfc_limite_taller_curso>0) {
					$mensaje_rfc_taller_curso = "La o las personas con RFC:<br><ul>";
					echo $mensaje_rfc_taller_curso;
					if ($rfc_autor_taller_curso != "") {
						echo "<li type='disc'>".$rfc_autor_taller_curso."</li>";
					}
					if ($rfc_coautor1_taller_curso != "") {
						echo "<li type='disc'>".$rfc_coautor1_taller_curso."</li>";
					}
					if ($rfc_coautor2_taller_curso != "") {
						echo "<li type='disc'>".$rfc_coautor2_taller_curso."</li>";
					}
					if ($rfc_coautor3_taller_curso != "") {
						echo "<li type='disc'>".$rfc_coautor3_taller_curso."</li>";
					}
					if ($rfc_coautor4_taller_curso != "") {
						echo "<li type='disc'>".$rfc_coautor4_taller_curso."</li>";
					}
					echo "</ul>participan en el numero límite de talleres o cursos (1), verifique que los datos son los correctos";
				}
				?>