$(document).ready(function()
	{
		$("#Primerap, #Segundoap,#Nombre").keyup(function(){
		
    paterno=document.getElementById('Primerap').value.toUpperCase().substr(0,3);
    materno=document.getElementById('Segundoap').value.substr(0,1);
    nombres=document.getElementById('Nombre').value.substr(0,3);
    aleatorio = Math.floor(Math.random() * 900) + 100;
    cadena=paterno+materno+nombres+aleatorio;

 		 $("#id_usuario").val(cadena);
	})
	
		
})
