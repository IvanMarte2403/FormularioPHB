<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="wrap">
        <!-- Action: Permite volver a redirigir al PHP -->
        <form method="POST"action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" >
        <input type="text" class="form-control" name = "nombre" placeholder = "Nombre:" value ="<?php if(!$enviado && isset($nombre)) echo $nombre?>" id="nombre">
        <input type="email" class="form-control" name = "correo" placeholder = "Correo:" value ="<?php if(!$enviado && isset($correo)) echo $correo?>" id="correo">
        <textarea name="mensaje" class="form-control" id="mensaje" value="<?php if(!$enviado && isset($mensaje))echo $mensaje?>"></textarea>

        <?php if(!empty($errores)):?>
            <div class="alert error">
                <?php echo $errores; ?>
            </div>
        <?php elseif($enviado): ?>
            <div class="alert success">
                <?php echo $enviado?>
            </div>
        <?php endif?>

        <input type="submit" value="Enviar" name="submit" class="btn btn-primary">

        </form>
    </div>
</body>
</html>