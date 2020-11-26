
<body>


    <!--Header-->  



    <!--Inicio-->

    <!--Barra de navegacion-->  
    <nav class="navbar navbar-expand-lg navbar-light" > 
        
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                
                <div class="logo_container">
                    <div class="logo">
                        <a href="<?php echo base_url(); ?>/Home/index"><img src="http://localhost/AdminTravelCode/public/img/logo.png" alt=""></a>
                    </div>
                </div>
               
                <div class="navbar-nav nav-fill">
                <a class="nav-link active" href="<?php echo base_url(); ?>/Home/index">Inicio <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="<?php echo base_url(); ?>/Ofertasdep/mostrar?idClasificacion=1">Ofertas Departamentales</a>
                <a class="nav-link" href="<?php echo base_url(); ?>/Ofertasdep/mostrar?idClasificacion=2">Ofertas Nacionales</a>
                <a class="nav-link" href="<?php echo base_url(); ?>/Reservaciones/index">Reservaciones</a>
                </div>
                
                <ul class="navbar-text flex-row ml-md-auto d-none d-md-flex" >
                    <li class="nav-item">
                        <a class="nav-link p-1" href="https://www.facebook.com/cupside.corp/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-1" href="https://www.youtube.com/channel/UCEG69MHC0GTgxDpRijrttzg" target="_blank"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-1" href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
                
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