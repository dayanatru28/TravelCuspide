 <body>
        <br><br><br>
        <?php 
        foreach ($salidasModel as $salidaModel){ ?>
    <div class="container">

        <center>
            <h1 class="search_title"><?php echo $salidaModel['0']['nombreSalida']?></h1>
        </center>
        </div>

        <br><br><br>
        <div class="container">
            <center>
                <h2 class="search_title" style="font-size: 20px;"><?php echo $salidaModel['0']['desSalida']?></h2>
            </center>
        </div>

        
        <!--imagenes y mapa-->
        
        <div class="super-container" style=" background-color: #7e5e4; margin:5%">
            <div class="row" style="padding-top: 15px;">
                <div class="col-md-12 text-center">
                    <h1 style="display:none;color: black;" id="h2Title"></h1>
                </div>
            </div>
            
                <ul class="cards" id="ulSalida">
                    <div class="row" style="width: 100%;">
                        <div class="col-sm-9">
                            <li class="cards__item">
                                <div class="card">
                                    <div id="carousel" class="carousel slide" data-ride="carousel" style="max-width:100%; ">
                                        <div class="carousel-inner" style="width: 100%;height: 600px">
                                            <div class="carousel-item active">
                                            <!-- Trae la informacion de las imagenes de cada lugar -->
                                            <?php 
                                            foreach ($imagenesModel as $imagenModel){ 
                                            ?>  
                                                    <img class="d-block w-100" src="http://localhost/AdminTravelCode/<?php echo $imagenModel[0]['direcFoto']?>" alt="Second slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                  </div>
                                            </div>

                                            
                                            <?php 
                                                for ($i=1; $i < count($imagenModel) ; $i++) {    
                                            ?>      
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="http://localhost/AdminTravelCode/<?php echo $imagenModel[$i]['direcFoto']?>" alt="Second slide">
                                                    <div class="carousel-caption d-none d-md-block">
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
                                </div>
                            </li>
                        </div>

                     <!-- Trae la informacion de la direccion del mapa -->
                        <div class="col-sm-3" style="width: 300; height: 300;">
                            <iframe src="<?php echo $salidaModel['0']['dirMapa']?>" frameborder="0" style="border:0" allowfullscreen></iframe>

                        </div>
                    </div>
                </ul>
        </div>    
    
    </div>
    <!--Sitios de interes-->

    <?php 
        //Obtengo la informacion de los sitios de interes
        foreach ($sitiosInteresModel as $sitioInteresModel){ 
            //Confirmo si hay o no lugares de interes para mostrar o no el letrero
            if($sitioInteresModel!=null){ ?>
                <br>
                <div class="super-container">
                    <div class="row">
                        <div class="col">
                            <div class="section_title text-center">
                                <h1>Sitios de interes</h1> </br>
                            </div>
                        </div>
                    </div>
                </div>

        <?php    }

            
            for ($i=0; $i < count($sitioInteresModel) ; $i++) {    
        ?>

        <div class="container">
                    <h3 class="search_title"><?php echo $sitioInteresModel[$i]['nombreSitio']?></h3>
                    <h4 class="search_title"><?php echo $sitioInteresModel[$i]['desSitio']?></h4> <br>
        </div>
        <?php } } ?>
   
    
<!--Actividades de Ecoturismo-->
    <?php 
        //Obtengo la informacion de las actividades ecoturisticas
        foreach ($ActividadesTurModel as $actividad){ 
            //Confirmo si la consulta esta vacia o tiene informacion para mostrar el letrero
            if($actividad!=null) {?>
                
                <br>
                <div class="super-container">
                    <div class="row">
                        <div class="col">
                            <div class="section_title text-center">
                                <h1>Actividades de Ecoturismo</h1></br>
                                <h4> Estas son las actividades que se pueden realizar: </h4>
                            </div>
                        </div>
                    </div>
                </div><br>
               <?php } 
            //Mediante el for traigo toda la informacion de las actividades
            for ($i=0; $i < count($actividad) ; $i++) { ?>
                <div class="container">
                            <h3 class="search_title"><?php echo $actividad[$i]['nombreActividad']?></h3>
                            <h4 class="search_title"><?php echo $actividad[$i]['desActividad']?></h4> <br>
                </div>
                <?php } } ?>
   
    <br><br><br>

    <!-- incluye o no incluye-->
    
    <div class="container">
                  <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">INCLUYE</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">NO INCLUYE</a>
                    </div>
                  </nav>
                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" >
                        <div class="container">
                            <h4> <?php echo $salidaModel['0']['incluyeSalida']?></h4>
                         </div>
                    </div>
                            
                    
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="container">
                            <h4> <?php echo $salidaModel['0']['noIncluyeSalida']?> </h4>
                            </div>
                    </div>
                  </div>                
        </div>
      </div>
</div>
 <br> <br>   
<!-- Boton de reservas-->
<center>
    <a class="btn btn-danger btn-lg" href="<?php echo base_url(); ?>/Cotizacion/mostrar?idSalida=<?php echo $salidaModel['0']['idSalida'];?>"  role="button">Realizar la cotización de este plan</a>
</center>


        <br><br>
    </body>
  <?php }?>
</html>    