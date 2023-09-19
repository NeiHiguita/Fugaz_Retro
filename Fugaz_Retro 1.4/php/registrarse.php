<?php
include("conexion.php");
$con = getConection();
$query = "select * from registro";
$registros = mysqli_query($con, $query) or die("problemas en el select, ");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/FUGAZ-RETRO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            background: #ee9ca7;
            background: -webkit-linear-gradient(to right, #ffdde1, #ee9ca7);
            background: linear-gradient(to right, #ffdde1, #ee9ca7);
        }

        .bg {
            background-image: url(/FugazR1.4/img/woman-1840538_1280.jpg);
            background-position: center center;
        }
    </style>
</head>


<body>
    <div class="container w-75 bg-light mt-5 rounded shadow-1" style="box-shadow: 0px 25px 100px rgba(0, 0, 0, 0.5);">

        <div class="row aling-items-stretch">
            <div class="col bg-white p-5">
                <div class="text-end">
                    <img src="/FugazR1.4/icons/user-circle-regular-24.png " width="48px" alt="">
                </div>
                <h2 class="fw-bold text-center py-5">
                    ¡Bienvenidos!
                </h2>

                <form name="form1" action="registro.php" method="post">
                    <div class="mb-4">
                        <label for="Nombre" class="form-label">Nombre</label>
                        <input type="text" name="txtnombre" id="nombre" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="Apellido" class="form-label">Apellido</label>
                        <input type="text" name="txtapellido" id="apellido" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="Email" class="form-label">Correo electronico</label>
                        <input type="email" name="txtemail" id="email" class="form-control">
                    </div>
                    <div class=" mb-4 ">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="txtpassword" id="password" class="form-control">
                    </div>
                    <div class="d-grid">
                        <button type="submit" id="btnr" name="registrarse" class="btn btn-primary">Registrarse</button>
                    </div>
                    <?php
                    /*$contra = $_POST['txtpassword'];
                    $contrac = $_POST['txtcpassword'];
                    if(isset($_REQUEST['registrarse'])){
                        $contra = $contrac;
                    }else{
                        echo ("Ingresa la misma contraseña");
                    }*/
                    ?>
                </form>
                <script>
                    var btn = document.getElementById("btnr");

                    btn.addEventListener("click", function () {
                        alert("Su usuario ha sido creado correctamente");
                    });
                </script>
                <!-- Login con aplicaciones -->
                <div class="container w-100 my-5">
                    <div class="row text-center">
                        <div class="col-12">Iniciar sesion</div>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-outline-primary w-100 my-1">
                                    <div class="row aling-items-center">
                                        <div class="col-2">
                                            <img src="/FugazR1.4/icons/facebook.png" alt="" width="32">
                                        </div>
                                        <div class="col-12 col-md-10 text-center my-1 d-none d-md-block">
                                            Facebook
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="col">
                                <button class="btn btn-outline-danger w-100 my-1">
                                    <div class="row aling-items-center">
                                        <div class="col-2">
                                            <img src="/FugazR1.4/icons/google.png" alt="" width="32">
                                        </div>
                                        <div class="col-10 text-center my-1 d-none d-md-block">
                                            Google
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

            </div>

        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

</html>