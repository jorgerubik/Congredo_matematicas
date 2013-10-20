<div class="cajatextoscroll">
	
	<h1 align="justify"> El registro de trabajos ser&aacute; liberado a partir del d&iacute;a 21 de Octubre del 2013</h1>

	<!-- <p>Acceso Autorizado:</p>
	Esto es una página con acceso restringido.<br> -->
	<!--Bienvenido: <? //echo session_name(); ?> <br>-->
	<!--Usuario ID (referencia) = <?// echo $_SESSION['usuario_id'] ?><br>-->
	<!--Bienvenido: <? //echo $_SESSION['usuario_login'] ?><br>-->
	<!--Usuario Nivel de Acceso => <? //echo $_SESSION['usuario_nivel'] ?><br-->
	<br>
	<fieldset>
		<legend>Registro de trabajos</legend>
		 <!--?//if (0 >= $_SESSION['usuario_nivel']){ ?-->
		<form action="registro_asistente.php" method="post" class="forms">
			<input type="submit" value="Asistente" id="boton">
		</form> 
		<form action="registro_ponencia.php" method="post" autocomplete="off" class="forms">
					<input type="image" src='imagenes/Ponencia3.png' id="boton"> <br>
				</form>
				<form action="registro_cartel.php" method="post" autocomplete="off" class="forms">	
					<input type="image" src='imagenes/Cartel.png' id="boton"><br>
				</form>	
				<form action="registro_taller.php" method="post" autocomplete="off" class="forms"> 
					<input type="image" src='imagenes/Taller.png' id="boton"><br>
				</form>
				<form action="registro_curso.php" method="post" autocomplete="off"  class="forms">	
					<input type="submit" value="curso" id="boton"><br>
				</form>
		<!--? } ?-->
	</fieldset>
	<?if(0 < $_SESSION['usuario_nivel']){ ?>
		<fieldset>
			<legend>Administrativo</legend>
			<?if ((4 == $_SESSION['usuario_nivel'])|| (5 == $_SESSION['usuario_nivel']) || (6 == $_SESSION['usuario_nivel']) || (7 == $_SESSION['usuario_nivel'])){ ?>
				<FORM action="asignar_roles.php" method="post" class="form">
					<button type="submit" name="Admistrador" id="boton">Asignación de roles</button>
					<br>
				</FORM>
			<? } ?>
			<?if ( (1== $_SESSION['usuario_nivel']) || (3 == $_SESSION['usuario_nivel']) || (5 == $_SESSION['usuario_nivel']) || (7 == $_SESSION['usuario_nivel'])){ ?>
			<button type="submit" name="Comiterevisor" id="boton">Comite revisor</button>
			<br>
			<? } ?>
			<?if ((3 == $_SESSION['usuario_nivel']) || (7 == $_SESSION['usuario_nivel']) || (2 == $_SESSION['usuario_nivel']) || (6 == $_SESSION['usuario_nivel'])){ ?>
			<button type="submit" name="comitevaluador" id="boton">Comite evaluador</button>
			<!-- <button type="submit" name="comitevaluador" id="boton">Asignación de fechas</button>
			<button type="submit" name="comitevaluador" id="boton">Usuarios</button>
			<button type="submit" name="comitevaluador" id="boton">Informes</button> -->
			<br>
			<? } ?>
		</fieldset>
	<? } ?>
</div>


		