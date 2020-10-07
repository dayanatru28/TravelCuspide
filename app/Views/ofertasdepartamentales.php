

<body>

<br><br><br>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Ofertas Turisticas</h1>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <center>
            <h3 class="search_title">Cuspide nos brinda la posibilidad de recorrer muchos 
            de los lugares maravillosos que posee nuestro Pais... Quebradas, desiertos, paramos todo en un solo lugar.</h3>
        </center>
    </div>
    <br><br><br>


    <!--Ofertas departamentales-->
    <div class="container" style=" background-color: #f3f5f7; width: 100%;">
        <div class="row" style="padding-top: 15px;">
            <div class="col-md-12 text-center">
                <h1 style="display:none;color: black;" id="h2Title"></h1>
            </div>
        </div>

        <ul class="cards" id="ulSalida">
            <div class="row" style="width: 100%;">
            <!--Colocar informacion traida de la base de datos -->
            <?php
            foreach ($salidasModel as $salidaModel){ ?>
                <div class="col-sm-4" style="margin-top:3%">
                    <li class="cards__item">
                        <div class="card">
                            <div class="card__image card__image--fence">
                                <img class="d-block w-100" src="<?php echo base_url();echo $salidaModel['fotoSalida'] ?>" >
                            </div>
                            <div class="card__content">
                                    <div class="card__title" style="color: black ;background-color: #ffb606">
                                        <br>
                                        <center><h3><?php echo $salidaModel['nombreSalida']?></h3></center>
                                        <br>
                                     </div>
                                <div class="card__text" style="color: black ;background-color: #ffff">
                                    <br>
                                    <center><h4><?php echo $salidaModel['desSalida'] ?></h4></center>
                                    <br>
                                </div>
                                <a class="btn btn-dark btn-block" href="<?php echo base_url(); ?>/Desplan/mostrar?idSalida=<?php echo $salidaModel['idSalida'];?>"  role="button">Ver Plan</a>
                            </div>
                        </div>
                    </li>
                </div>
            <?php } ?>


            </div>
        </ul>
    </div>
<br><br>





<br><br>

</body>

</html>