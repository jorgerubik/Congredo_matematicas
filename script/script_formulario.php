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
					alert ("Seleccione un a�o de obtenci\u00f3n");
					return false;
				}
				if (instit == "") {
					alert ("Seleccione una instituci\u00f3n");
					return false;
				}
				if (campus.val() == ""){
					alert ("Seleccione un campus");
					return false;
				}
				if (institlab == ""){
					alert ("Seleccione una instituci\u00f3n laboral");
					return false;
				}
				if (Campuslab.val() == ""){
					alert ("Seleccione un campus laboral");
					return false;
				}
				if (pais.val() == ""){
					alert ("Seleccione un pa\u00eds laboral");
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

		
		$(document).ready(function(){
			$("#registro").click(function() {
			var autor = $("#id_ponente1").val();
			var coautor1 = $("#id_ponente2").val();
			var coautor2 = $("#id_ponente3").val();
			var coautor3 = $("#id_ponente4").val();
			var coautor4 = $("#id_ponente5").val();
			var modalidad = $("#ensenanza option:selected");

			if( $("#formulario input[name='Categoria']:radio").is(':checked')) {  
			  
			} else {  
			alert("No ha seleccionado una categor\u00eda"); 
			return false; 
			}  
			
			if (modalidad.val() == ""){
			alert ("No ha seleccionado una modalidad valida, favor de seleccionar una");
			return false;
			}
			//verificaci�n de autor
			if (autor == coautor1 || autor == coautor2 || autor == coautor3 || autor == coautor4 ){
				alert ("El o los RFC que introdujo son identicos favor de rectificar");
				return false;
			}
			if( $("#formulario input[name='requiere']:radio").is(':checked')) {  
			  
			} else {  
			alert("No ha seleccionado si el autor requiere constancia"); 
			return false; 
			}  
			// verificaci�n de coautor1
			if (coautor1 != ""){
				if (coautor1 == coautor2 || coautor1 == coautor3 || coautor1 == coautor4){
					alert ("El o los RFC que introdujo son identicos, favor de rectificar");
					return false;
				}
				if( $("#formulario input[name='requiere1']:radio").is(':checked')) {  
				  
				} else {  
				alert("No ha seleccionado si el coautor1 requiere constancia"); 
				return false; 
				}  	
			}
			//verificaci�n de coautor2
			if (coautor2 != "") {
				if (coautor2 == coautor3 || coautor2 == coautor4) {
					alert("El o los RFC que introdujo son identicos, favor de rectificar");
					return false;
				};
				if($("#formulario input[name='requiere2']:radio").is(':cheked')){

				}else{
					alert("No ha seleccionado si el coautor2 requiere constancia");
					return false
				}
			};
			//verificaci�n de coautor3
			if (coautor3 != "") {
				if (coautor3 == coautor4) {
					alert("El o los RFC que introdujo son identicos, favor de rectificar");
					return false;
				};
				if ($("#formulario input[name='requiere3']:radio").is(':checked')) {

				}else{
					alert("No ha seleccionado si el coautor3 requiere constancia");
					return false;
				}

			};
			//verificaci�n de coautor4
			if (coautor4 != "") {
				if ($("#formulario input[name='requiere4']:radio").is(':checked')) {

				}else{
					alert("No ha seleccionado su el coautor4 requiere constancia");
					return false;
				}
			};
			

			
						

			});
		});

		$(document).ready(function(){
			$("#registro2").click(function() {
			var autor = $("#id_ponente1").val();
			var coautor1 = $("#id_ponente2").val();
			var coautor2 = $("#id_ponente3").val();
			
			
			//verificaci�n de autor
			if (autor == coautor1 || autor == coautor2){
				alert ("El o los RFC que introdujo son identicos favor de rectificar");
				return false;
			}	
			

			if( $("#formulario input[name='requiere']:radio").is(':checked')) {  
			  
			} else {  
			alert("No ha seleccionado si el autor requiere constancia"); 
			return false; 
			}  

			// verificaci�n de coautor1
			if (coautor1 != ""){
				if (coautor1 == coautor2 || coautor1 == coautor3 || coautor1 == coautor4){
					alert ("El o los RFC que introdujo son identicos, favor de rectificar");
					return false;
				}
				if( $("#formulario input[name='requiere1']:radio").is(':checked')) {  
				  
				} else {  
				alert("No ha seleccionado si el coautor1 requiere constancia"); 
				return false; 
				}  	
			}
			//verificaci�n de coautor2
			if (coautor2 != "") {
				if (coautor2 == coautor3 || coautor2 == coautor4) {
					alert("El o los RFC que introdujo son identicos, favor de rectificar");
					return false;
				};
				if($("#formulario input[name='requiere2']:radio").is(':cheked')){

				}else{
					alert("No ha seleccionado si el coautor2 requiere constancia");
					return false
				}
			};
						

			});
		});
		