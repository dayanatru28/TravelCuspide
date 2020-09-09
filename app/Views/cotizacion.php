
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

   


<!--formulario-->
    <div class=container>
            <form>
                <div class="form-group">
                    <label for="inputName">Nombre completo</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Pepito Perez">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Correo electronico</label>
                        <input type="email" class="form-control" id="inputEmail4"placeholder="pepitoperez@gmail.com">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCel">Celular</label>
                        <input type="text" class="form-control" id="inputCel">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Direccion</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputDestino">Destino</label>
                        <select id="inputDestino" class="form-control">
                            <option selected>Seleccione...</option>
                            <option>Desierto de la tatacoa</option>
                            <option>Cascada del Fraile</option>
                            <option>San agustin</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                         <label for="inputPersonas">Rango de Personas</label>
                        <select id="inputPersonas" class="form-control">
                                <option>1-5</option>
                                <option>5-10</option>
                                <option>10-15</option>
                                <option>15-25</option>
                                <option>25 o más</option>
                        </select>
                    </div>
                    
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="start">Dia de salida prevista:</label>
                                <br>
                                <input type="date" id="start" name="trip-start"
                                    value="2020-08-19"
                                    min="2020-01-01" max="2021-12-31">
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="inputDias">Cantidad de dias de viaje</label>
                            <select id="inputDestino" class="form-control">
                                <option selected>Seleccione...</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div> 
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mensaje</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <center>
                    <button type="submit" class="btn btn-danger">Enviar cotización</button>
                </center>
            </form>
    </div>
<br><br>


    </body>
</html>  