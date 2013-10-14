	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="estilos/estilo.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
	<script type="text/javascript" src="js/usuariocrea.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<script type="text/javascript" src="js/jquery.textareaCounter.js"></script>
	

	<script type="text/javascript">
		$(document).ready(function(){
			$('.slidershow').cycle({
				fx: 'fadeZoom'
			});
			$('.slidershow2').cycle({
				fx: 'scrollRight'
			});
		});

		//contador de palabras

			var info;
			$(document).ready(function(){
				var options = {
					'maxCharacterSize': -2,
					'originalStyle': 'originalTextareaInfo',
					'warningStyle' : 'warningTextareaInfo',
					'warningNumber': 40	
				};
				$('#Contenido_area').textareaCount(options);

				var options2 = {
						'maxCharacterSize': 200,
						'originalStyle': 'originalTextareaInfo',
						'warningStyle' : 'warningTextareaInfo',
						'warningNumber': 40,
						'displayFormat' : '#input/#max | #words words'
				};
				$('#Contenido_area1').textareaCount(options2);

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
	

