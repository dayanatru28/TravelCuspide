
<body>

    <!-- Informacion general -->

    <br><br><br>
    <div class="container">
        <center>
            <h2 class="search_title">Corporacion Cuspide ofrece a nuestros usuarios, el servicio de
                salidas de campo con enfoque educativo, práctico, lúdico, experiencial,
                donde se puede disfrutar de los principales ecosistemas
                del departamento del Huila y del territorio colombiano</h2>
        </center>
    </div>
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Nuetras Ofertas</h1>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>

    <!-- ofertas Nivel Huila- Nacional -->

    <div class="container" style=" background-color: #f3f5f7;">
        <div class="row" style="padding-top: 15px;">
            <div class="col-md-12 text-center">
                <h1 style="display:none;color: black;" id="h2Title"></h1>
            </div>
        </div>

        <ul class="cards" id="ulSalida">
            <div class="row" style="width: 100%;">
                <div class="col-sm-6">
                    <li class="cards__item">
                        <div class="card">
                            <div id="carousel" class="carousel slide" data-ride="carousel" style="max-width:100%; ">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel" data-slide-to="1"></li>
                                    <li data-target="#carousel" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="<?php echo base_url();?>/public/img/gal1.JPG" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>Desierto de la tatacoa</h3>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<?php echo base_url();?>/public/img/gal2.JPG" alt="Second slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>San Agustin</h4>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="<?php echo base_url();?>/public/img/gal3.JPG" alt="Third slide">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h3>Cascada del fraile</h3>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>

                            </div>
                            <div class="card__content">
                                <div class="card__title" style="color: black ;background-color: #ffb606">
                                    <br>
                                    <center><h2>En el Huila</h2></center>
                                    <br>
                                </div>
                                <a class="btn btn-dark btn-block" href="<?php echo base_url(); ?>/Ofertasdep/index" role="button">Ver mas informacion</a>
                            </div>
                        </div>
                    </li>
                </div>

                <div class="col-sm-6">
                        <li class="cards__item">
                            <div class="card">
                                <div id="carousel" class="carousel slide" data-ride="carousel" style="max-width:100%; ">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel" data-slide-to="1"></li>
                                        <li data-target="#carousel" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="<?php echo base_url();?>/public/img/gal1.JPG" alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h3>Desierto de la tatacoa</h3>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?php echo base_url();?>/public/img/gal2.JPG" alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h3>San Agustin</h3>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?php echo base_url();?>/public/img/gal3.JPG" alt="Third slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h3>Cascada del fraile</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
    
                                </div>
                                <div class="card__content">
                                    <div class="card__title" style="color: black;background-color: #ffb606;"">
                                        <br>
                                        <center><h2>A nivel Nacional</h2></center>
                                        <br>
                                    </div>
                                    <a class="btn btn-dark btn-block" href="ofertasnacionales.php" role="button">Ver mas informacion</a>
                                </div>
                            </div>
                        </li>
                    </div>

            </div>
        </ul>
    </div>
<br><br>
</body>

</html>