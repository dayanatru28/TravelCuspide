
<body>

    <!--Header-->

    <!--Inicio-->
    

    <div class="home" id="inicio">
            <div class="home_background_container prlx_parent">
                <div class="home_background prlx"
                    style="background-image:url(<?php echo base_url();?>/public/img/Letrero.jpeg); transform: translate(0%, -20.6566%) translate3d(0px, 0px, 0px);}">
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
                    <a class="nav-link active" href="<?php echo base_url(); ?>/Home/index">Inicio <span class="sr-only">(current)</span></a>
                    <a class="nav-link" href="<?php echo base_url(); ?>/Ofertasdep/mostrar?idClasificacion=1">Ofertas Departamentales</a>
                    <a class="nav-link" href="<?php echo base_url(); ?>/Ofertasdep/mostrar?idClasificacion=2">Ofertas Nacionales</a>
                    <a class="nav-link" href="#">Contacto</a>
                    </div>
                </div>
            </div>
        </nav>

</body>    
</html>