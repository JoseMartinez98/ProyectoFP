<?php
require_once("../MODELO/conexionBD.php");

    $DB = crearConexion();
    $sql = "INSERT INTO usuarios(NombreUsuario,contraseña,edad,email) VALUES ('".$_POST["nombre"]."','".$_POST["contraseña"]."','".$_POST["edad"]."','".$_POST["email"]."')";
    
     if ($_POST["botonRegistro"]=="Registrar") {
        $result = mysqli_query($DB, $sql);
        header("Location:../VISTA/login.php");
    }else {
        echo ("Error.");
    }
    cerrarConexion();

?>