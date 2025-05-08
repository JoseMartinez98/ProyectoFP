<!DOCTYPE html>
<html>
<head>
<script src="js/jquery.min.js"></script>
</head>
<body>

<?php
require_once("../MODELO/conexionBD.php");

$DB = crearConexion();
if (($_POST["botonInicio"] == "ELIMINAR") && ($_POST["cbox1"] == "Estoy de acuerdo.")) {
    
    $NombreUsuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    $sql = "SELECT NombreUsuario FROM usuarios WHERE NombreUsuario = '$NombreUsuario' AND contraseña = '$contraseña'";
    $result = mysqli_query($DB, $sql);
    if ($result->num_rows == 1) {
        $sql1 = "DELETE FROM usuarios WHERE NombreUsuario = '$NombreUsuario' AND contraseña = '$contraseña'";
        $result1 = mysqli_query($DB, $sql1);
        $_SESSION["NombreUsuario"] = $NombreUsuario;
        $_SESSION["contraseña"] = $contraseña;
    echo "<script>
    window.location.href ='http://localhost/Proyecto/VISTA/index.php';
    alert('USUARIO ELIMINADO CON EXITO');
    </script>";
       
    } else {
    echo "<script>
    window.location.href ='http://localhost/Proyecto/VISTA/eliminarCuenta.php';
    alert('USUARIO O CONTRASEÑA INCORRECTOS!');
    </script>";
    }
}
cerrarConexion();
?>
</body>
</html>