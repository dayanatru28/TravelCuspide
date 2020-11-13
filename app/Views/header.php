
<body>


    <!--Header-->  



    <!--Inicio-->

    <!--Barra de navegacion-->  
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
                <a class="nav-link" href="<?php echo base_url(); ?>/Reservaciones/index">Reservaciones</a>
                </div>
            </div>
        </div>
    </nav>

    <!--Imagen de inicio-->   
    <div class="home" id="inicio">
            <div class="home_background_container prlx_parent">
                <div class="home_background prlx"
                    style="background-image:url(http://localhost/AdminTravelCode/public/img/Letrero.jpeg); transform: translate(0%, -15.6566%)}">
                </div>
            </div>
            
    </div>

    

</body>    
</html>