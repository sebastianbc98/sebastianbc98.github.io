<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <main class="formulario">
        <header >
            <h1 class="h1iniciodesesion">Inicio de Sesion</h1>
        </header>
        <form method="post" action="validar.php">
            <div class="username">
                <input type="text" name="usuario" required >
                <label>Nombre del usuario</label>
            </div>
            <div class="username">
                <input type="password" name="password" required>
                <label>Contraseña</label>
            </div>
            <div class="recordar">¿Olvido su contraseña?</div>
            <input class="buttoniniciar" type="submit" value="Iniciar" name="registro">
            <div class="registrarse">
                    Has clic <a href="resgistro.html">aqui</a> para gistrarte </div>
        </form>
    </main>
</body>
 <!-- Botón flotante -->
 <section id="buttonflotante">
    <a href="inicio.php"><button class="floating-button">VOLVER</button></a>
</section>

