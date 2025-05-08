<?php
    require_once("conexion.php");
    $conexion=null; 
    
    function crearConexion(){    
        global $conexion;
        $conexion = mysqli_connect(HOST,USER,PASSWORD,DATABASE);  
        
        if (!$conexion) {
               
            die("<br>Error de conexión con la base de datos: " . mysqli_connect_error());
            }
            return $conexion;
            
    }
    function cerrarConexion(){
        global $conexion;
        mysqli_close($conexion);

    }
    