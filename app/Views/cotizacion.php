    <body>
        <br><br><br>
         	
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Realiza tu cotización</h1>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>

    <div class="container">
                    <h4 class="search_title"> Por favor diligencie el formulario. Con estos datos lo contáctaremos para enviarle la información solicitada</h4> <br>
        </div>

 <!-- Utiliza el helper form para la recepcion de informacion 

        
       echo form_open('/cotizacion/insertar');-->
     


<!--formulario-->
    <div class=container>
          <form method="post" action="<?php echo base_url('/cotizacion/insertar')?>" id="formulario">
                <div class="form-group">
                    <?php 
                    echo form_label('Nombre Completo','nombreCoti');
                    echo form_input(array('name'=>'nombreCoti','id'=>'nombreCoti','class'=>'form-control','placeholder'=>'Pepito Perez','required'=>''));
                    ?>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <?php 
                        echo form_label('Correo Electronico','correoCoti');
                        echo form_input(array('name'=>'correoCoti','id'=>'correoCoti','class'=>'form-control', 'placeholder'=>'pepitoperez@gmail.com','required'=>''));
                        ?>
                    </div>
                    <div class="form-group col-md-6">
                        <?php 
                        echo form_label('Celular','celularCoti');
                        echo form_input(array('name'=>'celularCoti','id'=>'celularCoti','class'=>'form-control', 'placeholder'=>'3212020029','required'=>''));
                        ?>
                    </div>
                </div>
                <div class="form-group">
                    <?php 
                        echo form_label('Direccion','direccionCoti');
                        echo form_input(array('name'=>'direccionCoti','id'=>'direccionCoti','class'=>'form-control', 'placeholder'=>'1234 Main St Municipio, Departamento','required'=>''));
                     ?>
                </div>                
                
                 <div class="form-row">
                        <div class="form-group col-md-4">
                            <?php 
                                echo form_label('Destino','destino');
                                echo form_input(array('name'=>'destino','id'=>'destino','class'=>'form-control','value'=>$salidasModel[0]['nombreSalida']));               
                             ?> 
                        </div>
                        <div class="form-group col-md-4">
                             <?php 
                                echo form_label('Cantidad de Personas','cantPersonas');
                                echo form_input(array('name'=>'cantPersonas','id'=>'cantPersonas','class'=>'form-control', 'placeholder'=>'1, 2, 3... 10','required'=>''));
                            ?>
                        </div>
                        <div class="form-group col-md-4">
                            <?php 
                                echo form_label('Cantidad de Niños','cantNinos');
                                echo form_input(array('name'=>'cantNinos','id'=>'cantNinos','class'=>'form-control', 'placeholder'=>'1, 2, 3... 10'));
                            ?>
                        </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <?php 
                                echo form_label('Dia de salida prevista:','diaSalida');?>
                                <br>
                                <input type="date" name="trip-start" id="start" value="<?php echo set_value('trip-start'); ?> " min="2020-01-01" max="2021-12-31" required="" />
                        </div> 
                        <div class="form-group col-md-10">
                            <?php 
                                echo form_label('Cantidad de dias de viaje','cantDias');
                                echo form_input(array('name'=>'cantDias','id'=>'cantDias','class'=>'form-control', 'placeholder'=>'1, 2, 3... 10','required'=>''));
                            ?>
                        </div> 
                    </div>
                </div>
                <div class="form-group">
                        <?php 
                            echo form_label('Mensaje','mensajeCoti');
                            echo form_textarea(array('name'=>'mensajeCoti','id'=>'mensajeCoti','class'=>'form-control','required'));
                        ?>
                </div>
                <center>
                    <?php echo form_submit('insertar','Enviar Cotizacion','class="btn btn-danger"','onclick="return enviarFormulario()"','id="bEnviar"'); ?>
                <center>
            </form>
    </div>
    <?php echo form_close(); ?>
<br><br>

    </body>
</html>  