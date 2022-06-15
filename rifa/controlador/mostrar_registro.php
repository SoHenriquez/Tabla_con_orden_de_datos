<?php 
    require_once("../conexion/conexion.php");
    $consulta = "SELECT idpersona, nombre, apellido_p, numero, correo, direccion,date_format(fecha_ingreso, '%h:%i:%s-%d-%m-%Y') AS fecha_ingreso  FROM persona WHERE 1;";
    $consultasql = mysqli_query($con,$consulta);
?>
