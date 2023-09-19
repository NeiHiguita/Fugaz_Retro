<?php
function getConection(){
    $host ="localhost";
    $user = "root";
    $pass ="";
    $db ="fugazbd";
    $conexion = mysqli_connect($host, $user, $pass,$db);
    //mysqli_select_db($con, $db);
    return$conexion;
    
}
?>
  