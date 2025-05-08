<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">  
    <meta http_equiv="X_UA_Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Estas lineas que hemos incluido arriba nos servirán para compatibilidad de idioma, caracteres, navegadores y dispositivos -->

    <title>PROYECTO_DAW_ILERNA_JOSE_ANTONIO_MARTINEZ_GONZALEZ</title>
    <link href="style_index.css" rel="stylesheet">
    
    </head>
    <body>
    <header>
      <nav>
        <h1>LA CAVERNA DEL CINÉFILO</h1>
          <ul>
            <li><a class="cabecera" href="paginaPeliculas.php">PELÍCULAS</a></li>
            <li><a class="cabecera" href="index.php" onclick= "<?php session_destroy();?>"> CERRAR SESIÓN</a></li>
            <li><a class="cabecera" href="eliminarCuenta.php">ELIMINAR CUENTA</a></li>
          </ul>
      </nav>
    </header>
    <div class="centrarForm">
      <h2> ELIMINAR CUENTA</h2>
      <form class="form1" action="../CONTROLADOR/dropCuenta.php" method="post">
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
        <input type="checkbox" name="cbox1" value="Estoy de acuerdo." /> Estoy de acuerdo.</label>
        <br>
        <br>
        <button class="boton" name="botonInicio" type="submit" value="ELIMINAR">ELIMINAR</button>
      </form>
    </div>