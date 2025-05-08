<?php
header("Location:http://localhost/Proyecto/VISTA/perfilPelicula.php?id=".$_GET["id"]);
require_once("../MODELO/conexionBD.php");


    

    $DB = crearConexion();
    $sql = "INSERT INTO comentarios(comentario,id_pelicula) VALUES ('".$_POST["comentario"]."','".$_POST["idPellicula"]."')";
    
     if ($_POST["botonComentar"]=="comentar") {
        $result = mysqli_query($DB, $sql);

    }else {
        echo ("Error.");
    }
    cerrarConexion();

?>