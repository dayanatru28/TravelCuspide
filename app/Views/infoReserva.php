<!-- Se recibe la informacion mandada del controlador para ser mostrada de manera inmediata en el formulario -->
<?php

    // recibo la informacion del id para editar-
    
        if(isset($ReservacionesModel)){
            $codigoReserva=$ReservacionesModel[0]['codigoReserva'];
            $nombreReserva=$ReservacionesModel[0]['nombreReserva'];
            $correoReserva=$ReservacionesModel[0]['correoReserva'];
            $salidaReserva=$ReservacionesModel[0]['salidaReserva'];
            $destino=$ReservacionesModel[0]['destinoReserva'];
            $cantPersonas=$ReservacionesModel[0]['cantPersonas'];
            $cantNinos=$ReservacionesModel[0]['cantNinos'];
            $costoPersona=$ReservacionesModel[0]['costoPersona'];
            $diaSalida=$ReservacionesModel[0]['diaSalida'];
            $diaLlegada=$ReservacionesModel[0]['diaLlegada'];
            $menReserva=$ReservacionesModel[0]['menReserva'];
        }
        else{
            $codigoReserva="";
            $nombreReserva="";
            $correoReserva="";
            $salidaReserva="";
            $destino="";
            $cantPersonas="";
            $cantNinos="";
            $costoPersona="";
            $diaSalida="";
            $diaLlegada="";
            $menReserva="";

        }
?>


<br><br>
<center>
<div class="container">
    <h3 class="search_title"> Esta es la informacion de su reserva</h3> <br>
</div>
</center>
   
<!--formulario-->
    <div class=container>
          <form method="post"?>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <?php 
                        echo form_label('Codigo de la reserva','codigoReserva');
                        echo form_input(array('name'=>'codigoReserva','class'=>'form-control','value'=>$codigoReserva,'disabled'=>''));
                        ?>
                    </div>
                    <div class="form-group col-md-6">
                        <?php 
                        echo form_label('Nombre de la persona que reserva','nombreReserva');
                        echo form_input(array('name'=>'nombreReserva','class'=>'form-control','value'=>$nombreReserva,'disabled'=>''));
                        ?>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <?php 
                        echo form_label('Correo Electronico','correoReserva');
                        echo form_input(array('name'=>'correoReserva','class'=>'form-control','value'=>$correoReserva,'disabled'=>''));
                        ?>
                    </div>
                    <div class="form-group col-md-6">
                        <?php 
                            echo form_label('Lugar de salida','salidaReserva');
                            echo form_input(array('name'=>'salidaReserva','class'=>'form-control','value'=>$salidaReserva,'disabled'=>''));
                        ?>
                    </div>
                </div>         
                
                 <div class="form-row">
                        <div class="form-group col-md-4">
                            <div class="form-group">
                                <?php 
                                echo form_label('Destino','destino');
                                ?></br><?php
                                echo form_input(array('name'=>'destino','id'=>'destino','class'=>'form-control','value'=>$destino,'disabled'=>''));
                                ?>
                        </div>
                        </div>
                        <div class="form-group col-md-4">
                             <?php 
                                echo form_label('Cantidad de Personas','cantPersonas');
                                echo form_input(array('name'=>'cantPersonas','id'=>'cantPersonas','class'=>'form-control','value'=>$cantPersonas ,'disabled'=>''));
                            ?>
                        </div>
                        <div class="form-group col-md-4">
                            <?php 
                                echo form_label('Cantidad de Niños','cantNinos');
                                echo form_input(array('name'=>'cantNinos','id'=>'cantNinos','class'=>'form-control','value'=>$cantNinos,'disabled'=>''));
                            ?>
                        </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="form-group col-md-7">
                                <?php 
                                    echo form_label('Costo por persona','costoPersona');
                                    echo form_input(array('name'=>'costoPersona','class'=>'form-control','value'=>$costoPersona,'disabled'=>''));
                                ?>
                        </div> 

                        <div class="form-group col-md-2">
                            <?php 
                                echo form_label('Dia de salida:  ','diaSalida');
                                echo form_input(array('name'=>'diaSalida','class'=>'form-control','value'=>$diaSalida,'disabled'=>''));
                                ?>
                        </div> 
                        <div class="form-group col-md-3">
                            <?php 
                                echo form_label('Dia de Llegada:','diaLlegada');
                                echo form_input(array('name'=>'diaLlegadaa','class'=>'form-control','value'=>$diaLlegada,'disabled'=>''));
                                ?>
                        </div> 
                       
                    </div>
                </div>
                <div class="form-group">
                        <?php 
                            echo form_label('Mensaje','menReserva');
                            echo form_textarea(array('name'=>'menReserva','class'=>'form-control','value'=>$menReserva,'disabled'=>''));
                        ?>
                </div>
               
            </form>
    </div>

<div class="container">
    </br>
    <center>
    <br> <h4 class="search_title"> Continua disfrutando de nuestros servicios </h4>
    <br>
    <a class="btn btn-danger" href="<?php echo base_url(); ?>/Home/index" rol="button">Regresa al Inicio </a>
     </center>
</div>  

    </body>
</html>  