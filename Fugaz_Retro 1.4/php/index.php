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

    <title>Fugaz Retro</title>
</head>

<body>
    <!-- cabecera inicial -->
    <section class="headerandmenu">
        <header class="barraSup">
            <div class="centered">
                <p class="bienvenido">
                    ¡Bienvenidos a FUGAZ RETRO!
                </p>
            </div>
            <p class="icons">
                <a href="https://www.facebook.com/profile.php?id=100039835783405" target="_blank"><img src="/Fugaz_Retro 1.4/icons/facebook-circle-logo-84.png" height="24" alt=""></a>
                <a href="https://www.instagram.com/fug.az202/" target="_blank"><img src="/Fugaz_Retro 1.4/icons/instagram-logo-84.png" alt="" height="24"></a>
                <a href="#"><img src="/Fugaz_Retro 1.4/icons/whatsapp-logo-84.png" height="24" alt=""></a>
            </p>
        </header>
        <!-- barra de buzqueda -->
        <div class="menu">
            <span class="fr">¡FUGAZ RETRO!</span>
            <div>
                <div class="busqueda">
                    <input type="text" class="campo-busqueda" placeholder="Buscar productos...">
                    <div class="icono-lupa">
                        <img src="/Fugaz_Retro 1.4/icons/search-regular-24.png" alt="">
                    </div>
                </div>
                <div class="iconos" style="margin-top: -31px;">
                    <div class="icono">
                        <a href="/Fugaz_Retro 1.4/backend/index.php"><img src="/Fugaz_Retro 1.4/icons/dashboard-solid-24.png" height="24" alt=""></a>
                    </div>
                    <div class="icono">
                        <a href="/Fugaz_Retro 1.4/php/login.php"><img src="/Fugaz_Retro 1.4/icons/user-circle-regular-84.png" height="24" alt=""></a>
                    </div>
                    <div class="icono">
                        <a href="#"><img src="/Fugaz_Retro 1.4/icons/cart-regular-84.png" height="24" alt=""></a>
                    </div>
                    <div class="icono">
                        <a href="#"><img src="/Fugaz_Retro 1.4/icons/heart-regular-84.png" height="24" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- categorias -->
        <div class="burguer-menu">
            <img src="/Fugaz_Retro 1.4/icons/menu-regular-84.png" alt="">
        </div>
        <nav class="lista-Menu">
            <ul class="categorias">
                <li><a href="#">Vestidos</a></li>
                <li><a href="#">Faldas</a></li>
                <li><a href="#">Mom pants</a></li>
                <li><a href="#">Conjuntos</a></li>
                <li><a href="#">Crop-tops</a></li>
                <li><a href="#">Shorts</a></li>
                <li><a href="#">Blusas</a></li>
            </ul>
        </nav>
    </section>
    <section class="slider">
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img src="/Fugaz_Retro 1.4/img/Almas Fugaces.png" alt="Almas Fugaces" style="width: 100%;">
                </div>
                <div class="swiper-slide"><img src="/Fugaz_Retro 1.4/img/img1.png" alt="" style="width: 100%;"></div>
                <div class="swiper-slide"><img src="/Fugaz_Retro 1.4/img/Imagen.png" alt="" style="width: 100%;"></div>
                <div class="swiper-slide"><img src="/Fugaz_Retro 1.4/img/mas info.png" alt="" style="width: 100%;"></div>
                ....
                <!-- Agrega más slides aquí -->
            </div>

            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev" style="color: rgba(255, 255, 255, 0.877);"></div>
            <div class="swiper-button-next" style="color: rgba(255, 255, 255, 0.877);"></div>
        </div>
    </section>
    <!--Cajas de vantas-->
    <section class="cjventas">
        <h2>Nuevas Tendencias</h2>
        <div class="cjventa" id="cjventa">
            <div class="cj">
                <a href="#"><box-icon name='heart' animation='tada' flip='horizontal'></box-icon></a>
                <img src="/Fugaz_Retro 1.4/img/prenda0001.jpg" alt="">
                <p>Vestido melito</p>
                <form class="btnven" action="" method="post">
                    <div class="ch"><input id="ch" type="submit" value="Comprar">&nbsp;<img
                            src="/Fugaz_Retro 1.4/icons/shopping-bag-regular-24.png" alt="" style="width: 20px;
                            height: 20px;"></div>
                    <div class="ac"><input id="ac" type="submit" value="Añadir">&nbsp;<img
                            src="/Fugaz_Retro 1.4/icons/cart-add-regular-24.png" alt="" style="width: 20px;
                            height: 20px;"></div>
                </form>
            </div>
            <div class="cj">
                <a href="#"><box-icon name='heart' animation='tada' flip='horizontal'></box-icon></a>
                <img src="/Fugaz_Retro 1.4/img/prenda0002.jpg" alt="">
                <p>NOMBRE DE LA PRENDA</p>
                <form class="btnven" action="" method="post">
                    <div class="ch"><input id="ch" type="submit" value="Comprar">&nbsp;<img
                            src="/Fugaz_Retro 1.4/icons/shopping-bag-regular-24.png" alt="" style="width: 20px;
                            height: 20px;"></div>
                    <div class="ac"><input id="ac" type="submit" value="Añadir">&nbsp;<img
                            src="/Fugaz_Retro 1.4/icons/cart-add-regular-24.png" alt="" style="width: 20px;
                            height: 20px;"></div>
                </form>
            </div>
            <div class="cj">
                <a href="#"><box-icon name='heart' animation='tada' flip='horizontal'></box-icon></a>
                <img src="/Fugaz_Retro 1.4/img/prenda0003.jpg" alt="">
                <p>NOMBRE DE LA PRENDA</p>
                <form class="btnven" action="" method="post">
                    <div class="ch"><input id="ch" type="submit" value="Comprar">&nbsp;<img
                            src="/Fugaz_Retro 1.4/icons/shopping-bag-regular-24.png" alt="" style="width: 20px;
                            height: 20px;"></div>
                    <div class="ac"><input id="ac" type="submit" value="Añadir">&nbsp;<img
                            src="/Fugaz_Retro 1.4/icons/cart-add-regular-24.png" alt="" style="width: 20px;
                            height: 20px;"></div>
                </form>
            </div>
            <!-- Agrega mas cj aquí -->
        </div>
    </section>
    <!----------------------------------------lo mas vendido----------------------------------------->
    <section class="cjventas">
        <h2>Lo más vendido</h2>
        <div class="cjventa" id="cjventa">
            <div class="cj">
                <a href="#"><box-icon name='heart' animation='tada' flip='horizontal'></box-icon></a>
                <img src="/Fugaz_Retro 1.4/img/prenda0004.jpg" alt="">
                <p>Vestido amarillito :D</p>
                <form class="btnven" action="" method="post">
                    <div class="ch"><input id="ch" type="submit" value="Comprar">&nbsp;<img
                            src="/Fugaz_Retro 1.4/icons/shopping-bag-regular-24.png" alt="" style="width: 20px;
                            height: 20px;"></div>
                    <div class="ac"><input id="ac" type="submit" value="Añadir">&nbsp;<img
                            src="/Fugaz_Retro 1.4/icons/cart-add-regular-24.png" alt="" style="width: 20px;
                            height: 20px;"></div>
                </form>
            </div>
            <div class="cj">
                <a href="#"><box-icon name='heart' animation='tada' flip='horizontal'></box-icon></a>
                <img src="/Fugaz_Retro 1.4/img/prenda0003.jpg" alt="">
                <p>Vestido amarillito :D</p>
                <form class="btnven" action="" method="post">
                    <div class="ch"><input id="ch" type="submit" value="Comprar">&nbsp;<img
                            src="/Fugaz_Retro 1.4/icons/shopping-bag-regular-24.png" alt="" style="width: 20px;
                            height: 20px;"></div>
                    <div class="ac"><input id="ac" type="submit" value="Añadir">&nbsp;<img
                            src="/Fugaz_Retro 1.4/icons/cart-add-regular-24.png" alt="" style="width: 20px;
                            height: 20px;"></div>
                </form>
            </div>
            <div class="cj">
                <a href="#"><box-icon name='heart' animation='tada' flip='horizontal'></box-icon></a>
                <img src="/Fugaz_Retro 1.4/img/prenda0001.jpg" alt="">
                <p>Vestido amarillito :D</p>
                <form class="btnven" action="" method="post">
                    <div class="ch"><input id="ch" type="submit" value="Comprar">&nbsp;<img
                            src="/Fugaz_Retro 1.4/icons/shopping-bag-regular-24.png" alt="" style="width: 20px;
                            height: 20px;"></div>
                    <div class="ac"><input id="ac" type="submit" value="Añadir">&nbsp;<img
                            src="/Fugaz_Retro 1.4/icons/cart-add-regular-24.png" alt=""style="width: 20px;
                            height: 20px;"></div>
                </form>
            </div>
        </div>
        <!-- delet? -->
        <div class="fugazlovers">
            <h2>Fugaz lovers</h2>
            <div class="container col-8" style="display: flex; background-color:#e2b091 ; padding: 20px 0px 0px 100px; border-radius: 10px; margin-bottom: 70px;">
                <div class="col-3">
                    <img src="/Fugaz_Retro 1.4/img/prenda0001.jpg" alt="" style="height: 300px; width: 300px; margin-bottom: 200px ma; " class="">
                </div>
                <div class="col-6" style="margin-left: 150px; background-color: rgba(243, 243, 243, 0.527); margin-bottom: 20px;">
                    <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quae, molestiae ratione nam quam fugit molestias explicabo reiciendis quia autem provident alias, reprehenderit dignissimos tempore dolore modi? Labore, dolores animi!
                    Odio repellat est itaque ipsam. Ducimus, aspernatur cum corrupti dolores consectetur dolorem ullam voluptatem. Distinctio, a soluta obcaecati veniam velit voluptates expedita ab dicta odio aliquam, deserunt qui, quia harum.
                    Tempore eius placeat sint consequuntur enim dolore doloribus magnam temporibus incidunt nulla accusantii omnis dolorum voluptatem? Laborum nesciunt, non possimus explicabo totam error facere sint voluptates eaque minima.</p>
                </div>
            </div>
        </div>
        
    </section>
    <!-- Scripts -->
    <script type="text/javascript">
        const burguerMenu = document.querySelector('.burguer-menu');
        const listaMenu = document.querySelector('.lista-Menu');

        burguerMenu.addEventListener('click', () => {
            listaMenu.classList.toggle('active');
        });
    </script>
    <script>
        // Configuración del Swiper con autoplay
        const swiper = new Swiper('.swiper', {
            pagination: {
                el: '.swiper-pagination',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 4000, // 4 segundos
            },
        });
    </script>
</body>

</html>