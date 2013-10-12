		$(document).ready(function(){
			$('.slidershow2').cycle({
				fx: 'scrollRight'
			});
		});

		

		//aqui comienza el codigo para validar campos con jquery
		// son expresiones regulares para validar correo y rfc
		var expr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
		var expr2 = /^[a-zA-Z]{3,4}(\d{6})((\D|\d){3})?$/;
		

		$(document).ready(function() {
			$("#Enviar").click(function() {
				/* Act on the event */
				var nombre = $("#Nombre").val();
				var primerap = $("#Primerap").val();
				var segudnoap = $("#Segundoap").val();
				var email = $("#Email").val();
				var rfc = $("#Rfc").val();
				var contra1 = $("#Password1").val();
				var contra2 = $("#Password2").val();
				var grado = $("#grado option:selected");
				var obtencion =$("#Obtencion option:selected");
				var instit = $("#institucion option:selected");
				var campus = $("#Campus option:selected");
				var institlab = $("#institucionlab").val();
				var Campuslab = $("#Campuslab option:selected");
				var pais = $("#Pais option:selected");
				var estado = $("#Estado").val();
				var tipo = $("#Tipo option:selected");
				//condiciones para validar los campos

				if (nombre == "") {
					alert("Ingrese nombre");
					return false;
				}
				if (primerap == "") {
					alert ("Ingrese Primer Apellido");
					return false;
				}
				if (segudnoap == "") {
					alert("Ingrese segundo apellido");
					return false;
				}
				if (email == "" || !expr.test(email)) {
					alert("Ingrese un correo valido");
					return false;
				}
				if (rfc == "" || !expr2.test(rfc)) {
					alert("Ingrese RFC");
					return false;

				}
				if (contra1 == "" || contra2 == "" || contra1 != contra2 ) {
					alert ("Ingrese el password correcto");
					return false;
				}
				if (grado.val() == ""){
					alert ("Seleccione un grado academico");
					return false;
				}
				if (obtencion.val() == ""){
					alert ("Seleccione un año de obtención");
					return false;
				}
				if (instit == "") {
					alert ("Seleccione una institución");
					return false;
				}
				if (campus.val() == ""){
					alert ("Seleccione un campus");
					return false;
				}
				if (institlab == ""){
					alert ("Seleccione una institución laboral");
					return false;
				}
				if (Campuslab.val() == ""){
					alert ("Seleccione un campus laboral");
					return false;
				}
				if (pais.val() == ""){
					alert ("Seleccione un país laboral");
					return false;
				}
				if (estado == ""){
					alert ("Seleccione un estado laboral");
					return false;
				}
				if (tipo.val() == ""){
					alert ("Seleccione un tipo de congresista");
					return false;
				}

			});
		});

		

