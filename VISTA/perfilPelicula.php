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
            <li><a class="cabecera" href="index.php">CERRAR SESIÓN</a></li>
          </ul>
      </nav>
    </header>
    <body>

    <?php
        require_once("../MODELO/conexionBD.php");
        $DB=crearConexion();
        $query="SELECT * FROM peliculas WHERE id_pelicula=".$_GET["id"];
        $execute=mysqli_query($DB, $query) or die(mysqli_error($conexion));
        if($fila=mysqli_fetch_array(($execute))){
      ?>

    <div class="perfilPelicula">
      <img class="fotoPelicula2" src="<?php echo $fila['portada'] ?>">
      <div class="textPelicula">
      <p><b>Película:</b> <?php echo $fila['titulo'] ?></p>
      <p><b>Director:</b> <?php echo $fila['autor'] ?></p>
      <p><b>Año:</b> <?php echo $fila['año'] ?></p>
      <p><b>Sinopsis:</b> <?php echo $fila['sinopsis'] ?></p>
    </div>
    </div>
    <div class="trailer">
    <?php echo $fila['trailer']?>
    </div>
    
    <?php
        }
    ?>

<div class="comentarios">
      <form id="comentarios" action="http://localhost/Proyecto/CONTROLADOR/crearComentario.php?id=<?php echo $fila['id_pelicula'] ?>" method="post">
      <div>
        <textarea class="comentario" cols="30" rows="10" name="comentario" placeholder="Escribe tu comentario..."></textarea>
      </div> 
        <br>
        <button class="botonComentarios" name="botonComentar" type="submit" value="comentar">comentar</button>
        <input type="hidden" name="idPellicula" value="<?php echo $_GET["id"]?>">
      </form>

    <?php
        require_once("../MODELO/conexionBD.php");
        $DB=crearConexion();
        $query="SELECT comentario FROM comentarios WHERE id_pelicula=".$_GET["id"];
        $execute=mysqli_query($DB, $query) or die(mysqli_error($conexion));
        while ($fila=mysqli_fetch_array(($execute))){
    ?> 

      <p class="verComentarios"> <?php echo $fila['comentario']?> </p>
   
    <?php
        }
    ?> 

</div>
      <script src="js/jquery.min.js"></script>
      <!--En estas etiquetas he enlazado con los archivos de JavaScript para habilitarlos-->
    </body>

   

  
</html>