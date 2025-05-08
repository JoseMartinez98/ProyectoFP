<!DOCTYPE html>
<html>
<head>
<script src="js/jquery.min.js"></script>
</head>
<body>

<?php
require_once("../MODELO/conexionBD.php");

$DB = crearConexion();
if ($_POST["botonInicio"] == "Aceptar") {
    
    $NombreUsuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    $sql = "SELECT NombreUsuario FROM usuarios WHERE NombreUsuario = '$NombreUsuario' AND contraseña = '$contraseña'";
    $result = mysqli_query($DB, $sql);
    if ($result->num_rows == 1) {
        
        $_SESSION["NombreUsuario"] = $NombreUsuario;
        $_SESSION["contraseña"] = $contraseña;
        session_start();
    "<script>
    window.location.href ='http://localhost/Proyecto/VISTA/paginaPeliculas.php';
    </script>";
        header("Location:../VISTA/paginaPeliculas.php");
    } else {
    echo "<script>
    window.location.href ='http://localhost/Proyecto/VISTA/login.php';
    alert('Usuario o contraseña incorrectos');
    </script>";
    }
}
cerrarConexion();
?>
</body>
</html>