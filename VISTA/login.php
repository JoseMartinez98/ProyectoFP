<head>
    <meta charset="utf-8">  
    <meta http_equiv="X_UA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Estas lineas que hemos incluido arriba nos servirán para compatibilidad de idioma, caracteres, navegadores y dispositivos -->

    <title>PROYECTO_DAW_ILERNA_JOSE_ANTONIO_MARTINEZ_GONZALEZ</title>
    <link href="style_index.css" rel="stylesheet">
    
    
    <body>

    <header>
      <nav>
        <h1>LA CAVERNA DEL CINÉFILO</h1>
          <ul>
            <li><a class="cabecera" href="index.php">INICIO</a></li>
            <li><a class="cabecera" href="registro.php">REGISTRARSE</a></li>
            <li><a class="cabecera" href="login.php">INICIAR SESIÓN</a></li>
            <li><a class="cabecera" href="nosotros.php">SOBRE NOSOTROS</a></li>
          </ul>
      </nav>
    </header>
     
    <div class="centrarForm">
      <h2> INICIAR SESIÓN</h2>
      <form class="form1" action="../CONTROLADOR/inicioSesion.php" method="post">
        <div class="campoF1">
        <input class="input-linea" type ="nombre" name="usuario"></imput>
        <label for="nombre">    Nick</label>
        </div>
        <br>
        <div class="campoF1">
        <input class="input-linea" type="password" name="contraseña"></imput>
        <label for="password">     Contraseña</label>
        </div>
        <br>
        <button class="boton" name="botonInicio" type="submit" value="Aceptar">ACEPTAR</button>
        
      </form>
    </div>
      <script src="js/jquery.min.js"></script>
      <!--En estas etiquetas he enlazado con los archivos de JavaScript para habilitarlos-->
    </body>

   
</head>