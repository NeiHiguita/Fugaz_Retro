<?php

function getCone(){
    $host ="localhost";
    $user = "root";
    $pass ="";
    $db ="prov";
    $conexion = mysqli_connect($host, $user, $pass,$db);
    //mysqli_select_db($con, $db);
    return$conexion;
    
}
?>