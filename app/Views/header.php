
<body>

    <!-- Contenedor -->
    <div class="super_container">

        <header class="header d-flex flex-row">

            <div class="header_content d-flex flex-row align-items-center">
                <div style="
                    position: fixed;
                    width: 45px;
                    height: 40px;
                    margin-left: 70%;
                    margin-top: -3%;
                    z-index: 15;
                ">

                    <!--  <a href="en/index.php" style="text-decoration: none; color: lightgray;" onmouseover="this.style.color='orange'" onmouseout="this.style.color='lightgray'"><b>Idioma</b></a> -->
                    <ul class="idioma">
                        <li><b>Language</b>
                            <ul>
                                <li><a href="index.php">Español</a></li>
                                <li><a href="en/index.php">English</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <!-- Logo -->
                <div class="logo_container">
                    <div class="logo">
                        <a href="index.php"><img src="<?php echo base_url();?>/public/img/logo.png" alt=""></a>
                    </div>
                </div>

                <!-- Main Navigation -->
                <nav class="main_nav_container ">
                    <div class="main_nav">
                        <ul class="main_nav_list">
                            <li class="main_nav_item"><a href="index.php">Inicio</a></li>
                            <li class="main_nav_item"><a href="ofertasdepartamentales.php">Ofertas en el Huila</a></li>
                            <li class="main_nav_item"><a href="ofertasnacionales.php">Ofertas Nacionales</a></li>
                            <li class="main_nav_item"><a href="cotizacion.php">Cotizacion</a></li>
                            <li class="main_nav_item"><a href="contacto.php">Contácto</a></li>
                            <!--<li class="main_nav_item"></li>-->
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="header_side ">
                <div class="footer_social ml-sm-auto">
                    <nav><br>
                        <ul class="menu_red">
                            <li class="facebook"><a class="red_social" href="https://www.facebook.com/cupside.corp/"
                                    target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="youtube"><a class="red_social"
                                    href="https://www.youtube.com/channel/UCEG69MHC0GTgxDpRijrttzg" target="_blank"><i
                                        class="fab fa-youtube"></i></a></li>
                            <li class="instagram"><a class="red_social" href="https://instagram.com" target="_blank"><i
                                        class="fab fa-instagram"></i></a></li>
                        </ul>
                    </nav>
                    <ul class="menu_social">
                        <li><audio controls="" src="https://emisorasvirtuales.net:9015/live"></audio></li>
                    </ul>
                </div>

            </div>
            <!-- Hamburger -->
            <div class="hamburger_container">
                <i class="fas fa-bars trans_200"></i>
            </div>
        </header>
    </div>

    <!--Inicio-->
    
        <div class="home" id="inicio">
            <div class="home_background_container prlx_parent">
                <div class="home_background prlx" style="background-image:url(<?php echo base_url();?>/public/img/Letrero.jpeg); transform: translate(0%, -15%) translate3d(0px, 0px, 0px);}">
                </div>
            </div>  
        </div>

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f5b003;"> 
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav nav-fill">
                    <a class="nav-link active" href="#">Inicio <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="#">Ofertas Departamentales</a>
                    <a class="nav-link" href="#">Ofertas Nacionales</a>
                    <a class="nav-link" href="#">Cotización</a>
                    <a class="nav-link" href="#">Contacto</a>
                    </div>
                </div>
            </div>
        </nav>

</body>    
</html>