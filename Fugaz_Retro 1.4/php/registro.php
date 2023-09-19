<?php
    include("conexion.php");
    $con = getConection();
    $nom = $_REQUEST['txtnombre'];
    $apell = $_REQUEST['txtapellido'];
    $cor = $_REQUEST['txtemail'];
    $contra = $_REQUEST['txtpassword'];
    $query = "insert into registro(nombre, apellido, correo, contraseña) values('$nom','$apell','$cor','$contra')";
    $result = mysqli_query($con,$query);
    if($result){
        Header("Location: registrarse.php");
    }
?>
