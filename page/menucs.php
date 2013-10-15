Bienvenido:<br> <? echo $_SESSION['usuario_login'] ?><br>
<FIELDSET>

			<LEGEND class="font_titulos">Cerrar sesión</LEGEND>
				<a href="aut_logout.php">Cerrar sesión</a>
		</FIELDSET>

		<ul id="menu" class="font_titulos">
			<li><a href="indexsecure.php"><b>Inicio</b></a></li>
			<li><a href="conferencias_magistrales.php"><b>Conferencias magistrales</b></a></li>
			<li><b>Organizaci&oacute;n del evento</b>
				<ul class="submenu">
					<li><a href="comite_organizadorsecure.php">Comit&eacute; organizador</a></li>
					<li><a href="comite_evaluadorsecure.php">Comit&eacute; evaluador</a></li>
					<li><a href="programa_general.php">Programa General</a></li>
					<li><a href="#">Programa espec&iacute;fico</a></li>
				</ul>
			</li>
			<li><b>Instrucciones</b>
				<ul class="submenu">
					<li><a href="instrucciones_ponencia.php">Registro ponencias orales y cartel</a></li>
					<!-- <li><a href="instrucciones_cartel.php">Registro cartel</a></li> -->
					<li><a href="instrucciones_curso.php">Registro curso o taller</a></li>
				</ul>
			</li>	
			<li><b>Inscripciones</b>
				<ul class="submenu">
					<li><a href="costos.php">Costos</a></li>
					<li><a href="registro_general.php">Registro</a></li>
				</ul>
			</li>
			
			<li><a href="registro_trabajos.php"><b>Registro de trabajos</b></a></li>
			<li><a href="presentacion_trabajos.php"><b>Presentaci&oacute;n de trabajos</b></a></li>
		</ul>