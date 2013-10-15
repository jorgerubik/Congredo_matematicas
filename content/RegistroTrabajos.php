<div class="cajatextoscroll">
	
	<h1 align="justify"> El registro de trabajos ser&aacute; liberado a partir del d&iacute;a 21 de Octubre del 2013</h1>

	<!-- <p>Acceso Autorizado:</p>
	Esto es una página con acceso restringido.<br> -->
	<!--Bienvenido: <? //echo session_name(); ?> <br>-->
	<!--Usuario ID (referencia) = <?// echo $_SESSION['usuario_id'] ?><br>-->
	<!--Bienvenido: <? //echo $_SESSION['usuario_login'] ?><br>-->
	<!--Usuario Nivel de Acceso => <? //echo $_SESSION['usuario_nivel'] ?><br-->
	<br>


	<?if (0 >= $_SESSION['usuario_nivel']){ ?>
		<button type="submit" name="Admistrador" id="boton">Asignación de roles</button>
		<br>
	<? } ?>
	<?if (2 >= $_SESSION['usuario_nivel']){ ?>
	<button type="submit" name="Comiterevisor" id="boton">Comite revisor</button>
	<br>
	<? } ?>
	<?if ((3 >= $_SESSION['usuario_nivel']) || (5 >= $_SESSION['usuario_nivel'])){ ?>
	<button type="submit" name="comitevaluador" id="boton">Comite evaluador</button>
	<button type="submit" name="comitevaluador" id="boton">Asignación de fechas</button>
	<button type="submit" name="comitevaluador" id="boton">Usuarios</button>
	<button type="submit" name="comitevaluador" id="boton">Informes</button>
	<br>
	<? } ?>
	<?if (10 >= $_SESSION['usuario_nivel']){ ?>
	<form action="registro_ponencia.php" method="post" autocomplete="off" class="forms">
				<button type="submit" name="ponencia" id="boton">Ponencia</button>  <br>
			</form>
			<form action="registro_cartel.php" method="post" autocomplete="off" class="forms">	
				<button type="submit" name="cartel" id="boton">Cartel</button><br>
			</form>	
			<form action="registro_taller.php" method="post" autocomplete="off" class="forms"> 
				<button type="submit" name="taller" id="boton">Taller</button><br>
			</form>
			<form action="registro_curso.php" method="post" autocomplete="off"  class="forms">	
				<button type="submit" name="curso" id="boton">Curso</button><br>
			</form>
	<? } ?>
</div>


		