
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

    <div class="container" style=" background-color: #f3f5f7;">
        <br>
        <center>
            <h4 class="search_title">Realice una busqueda dependiendo de las caracteristicas de su viaje </h4>
        </center>

        <?php
        echo form_open('/ofertasBuscador/mostrar');
        ?>  
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <?php 
                    echo form_label('Tipo de Salida','tipoSalida');
                    ?></br><?php
                    echo form_dropdown('tipoSalida', $tiposSalida);
                    ?>
                </div>

                <div class="form-group col-md-5">
                    <?php 
                    echo form_label('Tipo de Plan','tipoPlan');
                    ?></br><?php
                    echo form_dropdown('tipoPlan', $tiposPlan);
                    ?>
                </div>  
                
                <div class="form-group col-md-1">
                    <label for="inputPersonas">Busqueda</label>
                    <?php echo form_submit('mostrar','Buscar','class="btn btn-danger"'); ?>
                </div> 

            </div>
        </form>
        <?php echo form_close(); ?>
    </div>

   


    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Nuestras Ofertas</h1>
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
                                <div class="carousel-inner" style="width: 100%;height: 400px">
                                    <div class="carousel-item active">
                                            <!-- Trae la informacion de las imagenes de cada lugar -->
                                            <?php 
                                            foreach ($salidasHuilaModel as $salidaHuilaModel){
                                            ?>  
                                                    <img class="d-block w-100" src="<?php echo base_url(); echo $salidaHuilaModel[0]['fotoSalida']?>" alt="Second slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3><?php echo $salidaHuilaModel[0]['nombreSalida']?></h3>
                                                  </div>
                                    </div>
                                            <?php 
                                                for ($i=1; $i < count($salidaHuilaModel) ; $i++) {    
                                            ?> 
                                                    <div class="carousel-item">
                                                    <img class="d-block w-100" src="<?php echo base_url(); echo $salidaHuilaModel[$i]['fotoSalida']?>" alt="Second slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3><?php echo $salidaHuilaModel[$i]['nombreSalida']?></h3>
                                                   </div>
                                                   </div> 
                                            <?php }  
                                        } ?>
                                       
                                                        
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
                                <a class="btn btn-dark btn-block" href="<?php echo base_url(); ?>/Ofertasdep/mostrar?idClasificacion=1" role="button">Ver mas informacion</a>
                            </div>
                        </div>
                    </li>
                </div>

                <div class="col-sm-6">
                        <li class="cards__item">
                            <div class="card">
                                <div id="carousel" class="carousel slide" data-ride="carousel" style="max-width:100%; ">
                                    <div class="carousel-inner" style="width: 100%;height: 400px">
                                        <div class="carousel-item active">
                                                <!-- Trae la informacion de las imagenes de cada lugar -->
                                                <?php 
                                                foreach ($salidasNacionalModel as $salidasNacionalModel){
                                                ?>  
                                                        <img class="d-block w-100" src="<?php echo base_url(); echo $salidasNacionalModel[0]['fotoSalida']?>" alt="Second slide">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h3><?php echo $salidasNacionalModel[0]['nombreSalida']?></h3>
                                                        </div>
                                        </div>
                                                <?php 
                                                    for ($i=1; $i < count($salidasNacionalModel) ; $i++) {    
                                                ?> 
                                                <div class="carousel-item">
                                                      <img class="d-block w-100" src="<?php echo base_url(); echo $salidasNacionalModel[$i]['fotoSalida']?>" alt="Second slide">
                                                     <div class="carousel-caption d-none d-md-block">
                                                        <h3><?php echo $salidasNacionalModel[$i]['nombreSalida']?></h3>
                                                     </div>
                                                </div>
                                                <?php }   } ?>
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
                                    <a class="btn btn-dark btn-block" href="<?php echo base_url(); ?>/Ofertasdep/mostrar?idClasificacion=2" role="button">Ver mas informacion</a>
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