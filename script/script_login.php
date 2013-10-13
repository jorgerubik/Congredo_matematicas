<?php
/*
 * Valida un usuario y contraseña o presenta el formulario para hacer login
 */

if ($_SERVER['REQUEST_METHOD']=='POST') { // ¿Nos mandan datos por el formulario?
    include('php_lib/config.ini.php'); //incluimos configuración
    include('php_lib/login.lib.php'); //incluimos las funciones
    include('nivel_usuario');
    //verificamos el usuario y contraseña mandados
    
    if ( (login($_POST['id'],$_POST['pass'])) && ($validacion == 1) ) {
         header('Location: admin.php');

    }  
    elseif ( login($_POST['id'],$_POST['pass']) ) {

       //acciones a realizar cuando un usuario se identifica
       //EJ: almacenar en memoria sus datos, registrar un acceso a una tabla de datos
       //Estas acciones se veran en los siguientes tutorianes en http://www.emiliort.com

        //saltamos al inicio del área restringida
        header('Location: registro_trabajos.php');
    
     
        
        die();
    } else {
        //acciones a realizar en un intento fallido
        //Ej: mostrar captcha para evitar ataques fuerza bruta, bloqueas durante un rato esta ip, ....
        //Estas acciones se veran en los siguientes tutorianes en http://www.emiliort.com

        //preparamos un mensaje de error y continuamos para mostrar el formulario
        $mensaje='Usuario o contraseña incorrecto.';
    }
} //fin if post
?>