<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/Fugaz_Retro 1.4/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Birthstone&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap');
    </style>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <title>Dashboard-Proveedores</title>
</head>

<body>
<section class="headerandmenu">
        <!-- barra de buzqueda -->
        <div class="menu">
            <span class="fr">Dashboard Fugaz</span>
            <div>
                <div class="busqueda">
                    <input type="text" class="campo-busqueda" placeholder="Buscar proveedores...">
                    <div class="icono-lupa">
                        <img src="/Fugaz_Retro 1.4/icons/search-regular-24.png" alt="">
                    </div>
                </div>
                <div class="iconos" style="margin-top: -31px;">
                <div>
                    <a href="/Fugaz_Retro 1.4/php/index.php"><img src="/Fugaz_Retro 1.4/icons/home-solid-24.png" height="24" alt=""></a>
                </div>
                    <div class="icono">
                        <a href="/Fugaz_Retro 1.4/php/login.php"><img src="/Fugaz_Retro 1.4/icons/user-circle-regular-84.png" height="24" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </section>

<?php
    require_once ("controlador/clientecontrolador.php");
    if(!isset($_GET['m'])){
        require_once ("vista/listarclientes.php");

    }else{
        $m=$_GET['m'];
        $controlador= new Clientecontrolador();
        if(method_exists($controlador,$m)):
            $controlador->$m();
        endif;
    }
?>