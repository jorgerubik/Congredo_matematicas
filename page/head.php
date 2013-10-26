	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilos/estilo.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
	<script type="text/javascript" src="js/usuariocrea.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/jquery.textareaCounter.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.29473.js"></script>
	<script src="js/jquery.mousewheel.js"></script>
    <script src="js/perfect-scrollbar.js"></script>
	<meta name="keywords" content="accordion, css3, sibling selector, radio buttons, input, pseudo class" />
	<!-- scroll -->
	<script>
    function changeSize() {
        // var width = parseInt($("#Width").val());
        // var height = parseInt($("#Height").val());

        // if(!width || isNaN(width)) {
        //     width = 600;
        // }
        // if(!height || isNaN(height)) {
        //     height = 400;
        // }
        // $(".cajatextoscroll").width(width).height(height);

        // // update perfect scrollbar
        // $('.cajatexoscroll').perfectScrollbar('update');
    }
    $(function() {
        $('.cajatextoscroll').perfectScrollbar();
    });
</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.slidershow').cycle({
				fx: 'fadeZoom'
			});
			$('.slidershow2').cycle({
				fx: 'scrollRight'
			});
		});
	</script>
	<script type="text/javascript">	
		//contador de palabras

			var info;
			$(document).ready(function(){
				var options = {
					'maxCharacterSize': -2,
					'originalStyle': 'originalTextareaInfo',
					'warningStyle' : 'warningTextareaInfo',
					'warningNumber': 40,
					displayFormat: '#input caracteres | #words palabras'	
				};
				$('#Contenido_area').textareaCount(options);

				var options2 = {
					'maxCharacterSize': -2,
					'originalStyle': 'originalTextareaInfo',
					'warningStyle' : 'warningTextareaInfo',
					'warningNumber': 40,
					displayFormat: '#input caracteres | #words palabras'	
				};
				$('#Contenido_area1').textareaCount(options2);

				var options3 = {
					'maxCharacterSize': -2,
					'originalStyle': 'originalTextareaInfo',
					'warningStyle' : 'warningTextareaInfo',
					'warningNumber': 40,
					displayFormat: '#input caracteres | #words palabras'	
				};
				$('#Contenido_area2').textareaCount(options3);

				var options4 = {
					'maxCharacterSize': -2,
					'originalStyle': 'originalTextareaInfo',
					'warningStyle' : 'warningTextareaInfo',
					'warningNumber': 40,
					displayFormat: '#input caracteres | #words palabras'	
				};
				$('.titulo_trabajo').textareaCount(options4);
				// var options3 = {
				// 		'maxCharacterSize': 200,
				// 		'originalStyle': 'originalTextareaInfo',
				// 		'warningStyle' : 'warningTextareaInfo',
				// 		'warningNumber': 40,
				// 		'displayFormat' : '#left Characters Left / #max'
				// };
				// $('#Contenido_area').textareaCount(options3, function(data){
				// 	$('#showData').html(data.input + " characters input. <br />" + data.left + " characters left. <br />" + data.max + " max characters. <br />" + data.words + " words input.");
				// });
			});
		

	</script>
	<script type="text/javascript">
 	//300 palabras
 		function wordCount() {
 		  // Función que nos va a contar el número de caracteres
 		  // y de palabras del area de texto de un formulario

 		  // Obtenemos el texto del area.
 		  textoArea = document.getElementById("Contenido_area").value;
		  
 		  // El numero de caracteres es su longitud
 		  numeroCaracteres = textoArea.length;
		  
 		  // Eliminamos los caracteres en blanco del inicio y del final.
 		  // Como no tenemos funciones del tipo trim, rtrim y ltrim usamos
 		  // expresiones regulares
 		  // El ^ indica principio de cadena
 		  inicioBlanco = /^ /
 		  // El $ indica final de cadena
 		  finBlanco = / $/
 		  // El global (g) es para obtener todas las posibles combinaciones
 		  variosBlancos = /[ ]+/g

 		  textoArea = textoArea.replace(inicioBlanco,"");
 		  textoArea = textoArea.replace(finBlanco,"");
 		  textoArea = textoArea.replace(variosBlancos," ");

		 
 		  // Creamos un array con las diferentes palabras. Teniendo en
 		  // cuenta que la separación entre palabras es el espacio en blanco.
 		  textoAreaDividido = textoArea.split(" ");
 		  numeroPalabras = textoAreaDividido.length;

		  
 		  // Mostramos los datos.
 		  // Tendremos en cuenta si hay que escribir en plural o en singular.
 		  tC = (numeroCaracteres==1)?" carácter":" caracteres";
 		  tP = (numeroPalabras==1)?" palabra":" palabras";

		  

 		  if(numeroPalabras >= 300){   
 		  	alert (numeroCaracteres + tC +"\n" + numeroPalabras + tP);

 		  }	 
		  
		  
 		 }

 		 /////////////////////////////////////////////////////////////
 		 //////////////////////////100 palabras//////////////////////
		function wordCountb() {
 		  // Función que nos va a contar el número de caracteres
 		  // y de palabras del area de texto de un formulario

 		  // Obtenemos el texto del area.
 		  textoArea = document.getElementById("Contenido_area1").value;
		  
 		  // El numero de caracteres es su longitud
 		  numeroCaracteres = textoArea.length;
		  
 		  // Eliminamos los caracteres en blanco del inicio y del final.
 		  // Como no tenemos funciones del tipo trim, rtrim y ltrim usamos
 		  // expresiones regulares
 		  // El ^ indica principio de cadena
 		  inicioBlanco = /^ /
 		  // El $ indica final de cadena
 		  finBlanco = / $/
 		  // El global (g) es para obtener todas las posibles combinaciones
 		  variosBlancos = /[ ]+/g

 		  textoArea = textoArea.replace(inicioBlanco,"");
 		  textoArea = textoArea.replace(finBlanco,"");
 		  textoArea = textoArea.replace(variosBlancos," ");

		 
 		  // Creamos un array con las diferentes palabras. Teniendo en
 		  // cuenta que la separación entre palabras es el espacio en blanco.
 		  textoAreaDividido = textoArea.split(" ");
 		  numeroPalabras = textoAreaDividido.length;

		  
 		  // Mostramos los datos.
 		  // Tendremos en cuenta si hay que escribir en plural o en singular.
 		  tC = (numeroCaracteres==1)?" carácter":" caracteres";
 		  tP = (numeroPalabras==1)?" palabra":" palabras";

		  

 		  if(numeroPalabras >= 100){   
 		  	alert (numeroCaracteres + tC +"\n" + numeroPalabras + tP);
 		  }	 
		  
		  
 		 }
 		 //////////////////////////////////////////////////////////////////////
 		 ///////////////////////para 30 papalbras/////////////////////////////
 		 function wordCountc() {
 		  // Función que nos va a contar el número de caracteres
 		  // y de palabras del area de texto de un formulario

 		  // Obtenemos el texto del area.
 		  textoArea = document.getElementById("Contenido_area2").value;
		  
 		  // El numero de caracteres es su longitud
 		  numeroCaracteres = textoArea.length;
		  
 		  // Eliminamos los caracteres en blanco del inicio y del final.
 		  // Como no tenemos funciones del tipo trim, rtrim y ltrim usamos
 		  // expresiones regulares
 		  // El ^ indica principio de cadena
 		  inicioBlanco = /^ /
 		  // El $ indica final de cadena
 		  finBlanco = / $/
 		  // El global (g) es para obtener todas las posibles combinaciones
 		  variosBlancos = /[ ]+/g

 		  textoArea = textoArea.replace(inicioBlanco,"");
 		  textoArea = textoArea.replace(finBlanco,"");
 		  textoArea = textoArea.replace(variosBlancos," ");

		 
 		  // Creamos un array con las diferentes palabras. Teniendo en
 		  // cuenta que la separación entre palabras es el espacio en blanco.
 		  textoAreaDividido = textoArea.split(" ");
 		  numeroPalabras = textoAreaDividido.length;

		  
 		  // Mostramos los datos.
 		  // Tendremos en cuenta si hay que escribir en plural o en singular.
 		  tC = (numeroCaracteres==1)?" carácter":" caracteres";
 		  tP = (numeroPalabras==1)?" palabra":" palabras";

		  

 		  if(numeroPalabras >= 30){   
 		  	alert (numeroCaracteres + tC +"\n" + numeroPalabras + tP);
 		  }	 
		  
		  
 		 }
 		 //////////////////////7para 15 palabras////////////////////////////////
 		 function wordCountd() {
 		  // Función que nos va a contar el número de caracteres
 		  // y de palabras del area de texto de un formulario

 		  // Obtenemos el texto del area.
 		  textoArea = document.getElementById("titulo_ponencia").value;
		  
 		  // El numero de caracteres es su longitud
 		  numeroCaracteres = textoArea.length;
		  
 		  // Eliminamos los caracteres en blanco del inicio y del final.
 		  // Como no tenemos funciones del tipo trim, rtrim y ltrim usamos
 		  // expresiones regulares
 		  // El ^ indica principio de cadena
 		  inicioBlanco = /^ /
 		  // El $ indica final de cadena
 		  finBlanco = / $/
 		  // El global (g) es para obtener todas las posibles combinaciones
 		  variosBlancos = /[ ]+/g

 		  textoArea = textoArea.replace(inicioBlanco,"");
 		  textoArea = textoArea.replace(finBlanco,"");
 		  textoArea = textoArea.replace(variosBlancos," ");

		 
 		  // Creamos un array con las diferentes palabras. Teniendo en
 		  // cuenta que la separación entre palabras es el espacio en blanco.
 		  textoAreaDividido = textoArea.split(" ");
 		  numeroPalabras = textoAreaDividido.length;

		  
 		  // Mostramos los datos.
 		  // Tendremos en cuenta si hay que escribir en plural o en singular.
 		  tC = (numeroCaracteres==1)?" carácter":" caracteres";
 		  tP = (numeroPalabras==1)?" palabra":" palabras";

		  

 		  if(numeroPalabras >= 15){   
 		  	alert (numeroCaracteres + tC +"\n" + numeroPalabras + tP);
 		  }	 
		  
		  
 		 }


 		 function wordCounte() {
 		  // Función que nos va a contar el número de caracteres
 		  // y de palabras del area de texto de un formulario

 		  // Obtenemos el texto del area.
 		  textoArea = document.getElementById("titulo_cartel").value;
		  
 		  // El numero de caracteres es su longitud
 		  numeroCaracteres = textoArea.length;
		  
 		  // Eliminamos los caracteres en blanco del inicio y del final.
 		  // Como no tenemos funciones del tipo trim, rtrim y ltrim usamos
 		  // expresiones regulares
 		  // El ^ indica principio de cadena
 		  inicioBlanco = /^ /
 		  // El $ indica final de cadena
 		  finBlanco = / $/
 		  // El global (g) es para obtener todas las posibles combinaciones
 		  variosBlancos = /[ ]+/g

 		  textoArea = textoArea.replace(inicioBlanco,"");
 		  textoArea = textoArea.replace(finBlanco,"");
 		  textoArea = textoArea.replace(variosBlancos," ");

		 
 		  // Creamos un array con las diferentes palabras. Teniendo en
 		  // cuenta que la separación entre palabras es el espacio en blanco.
 		  textoAreaDividido = textoArea.split(" ");
 		  numeroPalabras = textoAreaDividido.length;

		  
 		  // Mostramos los datos.
 		  // Tendremos en cuenta si hay que escribir en plural o en singular.
 		  tC = (numeroCaracteres==1)?" carácter":" caracteres";
 		  tP = (numeroPalabras==1)?" palabra":" palabras";

		  

 		  if(numeroPalabras >= 15){   
 		  	alert (numeroCaracteres + tC +"\n" + numeroPalabras + tP);
 		  }	 
		  
		  
 		 }


 		 function wordCountf() {
 		  // Función que nos va a contar el número de caracteres
 		  // y de palabras del area de texto de un formulario

 		  // Obtenemos el texto del area.
 		  textoArea = document.getElementById("titulo_curso").value;
		  
 		  // El numero de caracteres es su longitud
 		  numeroCaracteres = textoArea.length;
		  
 		  // Eliminamos los caracteres en blanco del inicio y del final.
 		  // Como no tenemos funciones del tipo trim, rtrim y ltrim usamos
 		  // expresiones regulares
 		  // El ^ indica principio de cadena
 		  inicioBlanco = /^ /
 		  // El $ indica final de cadena
 		  finBlanco = / $/
 		  // El global (g) es para obtener todas las posibles combinaciones
 		  variosBlancos = /[ ]+/g

 		  textoArea = textoArea.replace(inicioBlanco,"");
 		  textoArea = textoArea.replace(finBlanco,"");
 		  textoArea = textoArea.replace(variosBlancos," ");

		 
 		  // Creamos un array con las diferentes palabras. Teniendo en
 		  // cuenta que la separación entre palabras es el espacio en blanco.
 		  textoAreaDividido = textoArea.split(" ");
 		  numeroPalabras = textoAreaDividido.length;

		  
 		  // Mostramos los datos.
 		  // Tendremos en cuenta si hay que escribir en plural o en singular.
 		  tC = (numeroCaracteres==1)?" carácter":" caracteres";
 		  tP = (numeroPalabras==1)?" palabra":" palabras";

		  

 		  if(numeroPalabras >= 15){   
 		  	alert (numeroCaracteres + tC +"\n" + numeroPalabras + tP);
 		  }	 
		  
		  
 		 }

 		 function wordCountg() {
 		  // Función que nos va a contar el número de caracteres
 		  // y de palabras del area de texto de un formulario

 		  // Obtenemos el texto del area.
 		  textoArea = document.getElementById("titulo_taller").value;
		  
 		  // El numero de caracteres es su longitud
 		  numeroCaracteres = textoArea.length;
		  
 		  // Eliminamos los caracteres en blanco del inicio y del final.
 		  // Como no tenemos funciones del tipo trim, rtrim y ltrim usamos
 		  // expresiones regulares
 		  // El ^ indica principio de cadena
 		  inicioBlanco = /^ /
 		  // El $ indica final de cadena
 		  finBlanco = / $/
 		  // El global (g) es para obtener todas las posibles combinaciones
 		  variosBlancos = /[ ]+/g

 		  textoArea = textoArea.replace(inicioBlanco,"");
 		  textoArea = textoArea.replace(finBlanco,"");
 		  textoArea = textoArea.replace(variosBlancos," ");

		 
 		  // Creamos un array con las diferentes palabras. Teniendo en
 		  // cuenta que la separación entre palabras es el espacio en blanco.
 		  textoAreaDividido = textoArea.split(" ");
 		  numeroPalabras = textoAreaDividido.length;

		  
 		  // Mostramos los datos.
 		  // Tendremos en cuenta si hay que escribir en plural o en singular.
 		  tC = (numeroCaracteres==1)?" carácter":" caracteres";
 		  tP = (numeroPalabras==1)?" palabra":" palabras";

		  

 		  if(numeroPalabras >= 15){   
 		  	alert (numeroCaracteres + tC +"\n" + numeroPalabras + tP);
 		  }	 
		  
		  
 		 }
 </script>
	

