
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo(rand()); ?>" />
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h2 id="login" style="font-weight:500;">INICIAR SESIÓN</h2>
            <form action="validate.php" method="post">
                <input class="login" type="email" placeholder="Correo" name="email" required>
                <input class="login" type="password" placeholder="Contraseña" name="password" required>
                <input class="submit" type="submit" value="Ingresar">
            </form>
    </div>
</body>
</html>