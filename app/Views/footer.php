

<body>
    <!-- Mayor informacion-->

    <div id="divDetalle" class="demo-gallery" style="display: none;padding-top: 15px;"></div>
    <hr>
    <div class="col-md-12 text-center">
        <h2 style="color: black;">Mayor información comunicate con nosotros a caminatas@cuspide.com.co</h2>
    </div>
    <hr>
    <div class="col-md-12 text-center">
        <h2 style="color: black;">Conoce más acerca de nosotros</h2>
    </div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="section_bg_gray"><br>
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="cursor: pointer">
                    <div class="single_what_we_do tab_a">
                        <div class="top_line"></div>
                        <div class="what_we_do_figure"></div>
                        <h4 class="what_we_do_title">Corporación Cúspide</h4>
                        <div class="what_we_do_content" style="margin-top:-50px;"><img style="width: 100px;height: 100px;" src="<?php echo base_url();?>/public/img/S-01.png"></div>
                        <a class="what_we_do_icon tab_a" href="">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-3" style="cursor: pointer">
                    <div class="single_what_we_do tab_b">
                        <div class="top_line"></div>
                        <div class="what_we_do_figure"></div>
                        <h4 class="what_we_do_title">&nbsp;&nbsp;Cúspide &nbsp;&nbsp;&nbsp;&nbsp;Estéreo &nbsp;</h4>
                        <div class="what_we_do_content" style="margin-top:-50px;"><img style="width: 100px;height: 100px;" src="<?php echo base_url();?>/public/img/S-03.png"></div>
                        <a class="what_we_do_icon tab_b" href="#">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-3" style="cursor: pointer">
                    <div class="single_what_we_do tab_c">
                        <div class="top_line"></div>
                        <div class="what_we_do_figure"></div>
                        <h4 class="what_we_do_title">Fraternidad Sostenible</h4>
                        <div class="what_we_do_content" style="margin-top:-50px;"><img style="width: 120px;height: 100px;" src="<?php echo base_url();?>/public/img/S-04.png"></div>
                        <a class="what_we_do_icon tab_c" href="#">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-3" style="cursor: pointer">
                    <div class="single_what_we_do tab_d">
                        <div class="top_line"></div>
                        <div class="what_we_do_figure"></div>
                        <h4 class="what_we_do_title">Publicaciones &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
                        <div class="what_we_do_content" style="margin-top:-50px;"><img style="width: 100px;height: 100px;" src="<?php echo base_url();?>/public/img/S-05.png"></div>
                        <a class="what_we_do_icon tab_d" href="#">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>



    <footer class="footer">
        <div class="container">

            <!-- Newsletter -->

            <div class="newsletter">
                <div class="row">
                    <div class="col">
                        <div class="section_title text-center">
                            <h1>Subscribete para recibir más información</h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col text-center">
                        <div class="newsletter_form_container mx-auto">
                            <form action="correo.php" method="post">
                                <div
                                    class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
                                    <input name="email" id="newsletter_email" class="newsletter_email" type="text"
                                        placeholder="Correo electrónico" required="required"
                                        data-error="Correo electrónico invalido.">

                                    <button id="newsletter_submit" type="submit" name="registroFooter"
                                        class="newsletter_submit_btn trans_300" value="Submit">Subscribirse</button>

                                </div>
                                <h10 class="terminos">
                                    <input type="checkbox" required>Acepto la
                                    <a href=".bd-example-modal-lg" data-toggle="modal">Políticas de privacidad y
                                        Política de datos</a>
                                    Te enviaremos notificaciones por email, que puedes desactivar
                                    cuando quieras.</h10>
                                <br><br>
                                <center>
                                    <div class="g-recaptcha" data-sitekey="6LcpJcEUAAAAALkIaimgWFPzNBgRUS0G4tfjD_er">
                                    </div>
                                </center>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Footer Content -->

            <div class="footer_content" id="contacto">
                <div class="row">

                    <!-- Footer Column - About -->
                    <div class="col-lg-3 footer_col">

                        <!-- Logo -->
                        <div class="logo_container">
                            <div class="logo text-center">
                                <span>Corporación Cúspide</span>
                            </div>
                        </div>

                        <h4 class="footer_about_text text-center">Asesoría en sustentabilidad territorial, gestión
                            ambiental
                            y cambio climático.</h4>

                    </div>

                    <!-- Footer Column - Menu -->

                    <div class="col-lg-2 footer_col">
                        <div class="footer_column_title">Menú</div>
                        <div class="footer_column_content">
                            <ul>
                                <li class="footer_list_item"><a href="index.php">Inicio</a></li>
                                <li class="footer_list_item"><a href="nosotros.php">Nosotros</a></li>
                                <li class="footer_list_item"><a href="index.php#eventos">Eventos</a></li>
                                <li class="footer_list_item"><a href="servicios.php">Servicios</a></li>
                                <li class="footer_list_item"><a href="contacto.php">Contácto</a></li>
                                <li class="footer_list_item"><a href="publicacion.php">publicaciones</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Column Map -->
                    <div class="col-lg-4 footer_col">
                        <div class="footer_column_title">Mapa</div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.6152384552493!2d-75.28706688573702!3d2.
                            926433155298687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b747af131f6bf%3A0x17c13dcfe737605b!2sCl.
                            +6+%238-54%2C+Neiva%2C+Huila!5e0!3m2!1sen!2sco!4v1555632772692!5m2!1sen!2sco" width="300"
                            height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                    <!-- Footer Column - Contact -->

                    <div class="col-lg-2 footer_col">
                        <div class="footer_column_title">Contácto</div>
                        <div class="footer_column_content">
                            <ul>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="img/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                    </div>
                                    Cl. 6 #8-54, Neiva, Huila
                                </li>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="img/phone-call.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                    </div>
                                    +57 3005542958
                                </li>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="img/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                    </div>info@cuspide.com.co
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Footer Copyright -->

            <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
                <div class="footer_copyright">
                    <span class="terminos">
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                        template is made by <a href="mailto:info@cuspide.com.co" target="_blank">Equipo Cúspide</a>
                </div>
                <div class="footer_social ml-sm-auto">
                    <ul class="menu_social">
                        <li class="menu_social_item"><a href="https://instagram.com" target="_blank"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li class="menu_social_item"><a href="https://www.facebook.com/cupside.corp/" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li class="menu_social_item"><a href="https://www.youtube.com/channel/UCEG69MHC0GTgxDpRijrttzg"
                                target="_blank"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </footer>
    </body>
    </html>

<script>
    $(function(){
        $('.tab_a').click(function(e){
            e.preventDefault();
            window.open('https://cuspide.com.co/', '_blank');
        });
        $('.tab_b').click(function(e){
            e.preventDefault();
            window.open('https://www.estereo.cuspide.com.co/', '_blank');
        });
        $('.tab_c').click(function(e){
            e.preventDefault();
            window.open('https://www.fraternidadsostenible.cuspide.com.co/', '_blank');
        });
        $('.tab_d').click(function(e){
            e.preventDefault();
            window.open('https://cuspide.com.co/publicacion.php', '_blank');
        });
    });
 </script>
