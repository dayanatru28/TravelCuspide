<body>
        <br><br><br>
         	
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1>Revisa la informacion de tu reservación</h1>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>

    <div class="container">
        <h4 class="search_title"> Por favor ingrese el codigo que se envio a su correo para realizar la busqueda de su reservacion</h4> <br>
    </div>
    
    <!-- Buscador-->
    <div class=container>
          <form method="post" action="<?php echo base_url('/Reservaciones/buscar')?>" id="formReservacion">
            <div class="form-group">
                    <center>
                    <?php 
                    echo form_label('Codigo de reserva','Codigo');
                    echo form_input(array('name'=>'codigoReserva','id'=>'codigoReserva','class'=>'form-control','placeholder'=>'','required'=>''));
                    ?></center>
            </div>
            <center><?php echo form_submit('buscar','Buscar Reservacion','class="btn btn-danger"');?></center>
          </form>
    </div>
</body>