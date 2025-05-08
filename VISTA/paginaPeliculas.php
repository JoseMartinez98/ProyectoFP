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

<div>
    
    <?php
        require_once("../MODELO/conexionBD.php");
        $DB=crearConexion();
        $query="SELECT * FROM peliculas";
        $execute=mysqli_query($DB, $query) or die(mysqli_error($conexion));
        while($fila=mysqli_fetch_array(($execute))){
    
    ?>
        <div  class="caja" id=pelicula>
        <p><img id="portada" onclick="window.location.href ='http://localhost/Proyecto/VISTA/perfilPelicula.php?id=<?php echo $fila['id_pelicula'] ?>';" class="caja" src="<?php echo $fila['portada'] ?>"></p>
        <p>AÑO: <?php echo $fila['año'] ?></p>
        </div>
    <?php
        }
    ?>

      <script src="js/jquery.min.js"></script>
      <!--En estas etiquetas he enlazado con los archivos de JavaScript para habilitarlos-->
    </body>

   

  
</html>