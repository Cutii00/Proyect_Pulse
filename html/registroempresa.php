<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="../css/stylesForm.css">
</head>
<body>
<nav class="navbar">
        <a href="inicio.php">
            <img src="../img/LogoProyectPulse-01.png" alt="Inicio" class="nav-logo">
        </a>
        <ul class="nav-links">
            <li><a href="login.php">Login</a></li>
            <li><a href="ayuda.php">Ayuda</a></li>
        </ul>  
</nav>
<div class="registro-formulario" id="formularioEmpresa">
        <h1>Registro de Empresa</h1 >
        <br>
        <form id="registroFormEmpresa" method = "POST" action = "../database/registroempresa.php" >
            <label for="nombreEmpresa">Nombre de Empresa</label>
            <input type="text" id="nombreEmpresa" name="nombreEmpresa" required>

            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>

            <label for="password">Repetir Contraseña</label>
            <input type="password" id="password" name="password" required>

            <label for="cuit">CUIT</label>
            <input type="text" id="cuit" name="cuit" required>


            <input type="submit" value="Registrarse" class="radio-buttons" name = "register">
        </form>    
        <p>¿Se confundió de selección? <a href="index.php">Cambiar</a></p>
    </div>
</body>