<?php 
    $errores = '';
    $enviado = '';
    $mensaje_preparado = '';
    $enviar_a = '';
    // Comprobar que presiono el boton
    if(isset($_POST['submit'])){
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];

        // Comprobación Nombre
        if(!empty($nombre)){
            $nombre = trim($nombre);
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
            
        }else{
            $errores.= "Porfavor ingresa un nombre <br>";
        }
        // Comprobación de Correo
        if(!empty($correo)){
            $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
            if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
                $errores .= "Se esta ejecutando filter var <br>";
                 
            }

        }else{
            $errores.= "Porfavor ingresa un correo <br>";
        }
         // Comprobación de Mensaje
        if(!empty($mensaje)){
            $mensaje = trim($mensaje);
            $mensaje = htmlspecialchars($mensaje);
            $mensaje = stripslashes($mensaje);
        }else{
            $errores .= 'Porfavor ingresa el mensaje <br>';
        }
            if(!$errores){
                $enviado_a = "ivanmamz@gmail.com";
                $asunto = "Correo enviado desde mi pagina";
                $mensaje_preparado .= "De: $nombre \n";
                $mensaje_preparado .= "Correo $correo \n";
                $mensaje_preparado .= "Mensaje: " . $mensaje;

                // mail($enviar_a, $asunto,$mensaje_preparado);
                $enviado = TRUE;
                $enviado = 'Se ha enviado correctamente';
            } 
        
        
    }
       
    require 'index.view.php';
?>