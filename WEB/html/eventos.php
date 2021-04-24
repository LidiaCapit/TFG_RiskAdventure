<!DOCTYPE html>
<html lang="en">

<head>
    <title>Eventos Risk Adventure</title><!-- título-->
    <meta charset="utf-8">
    <!--juego caracteres del lengiaje-->
    <meta name="keywords"
        content="Eventos,Empresas,Despedidas,Grupos,Familias,Parejas,Tierra,Treeking,Raquetas,Agua,Surf,Esquí,Aire,Globo,Aladelta,Blog,Aventura,Multiaventura,Riesgo,Home,Experiencias,Eventos,Packs,Grupos,Nosotros,Contacto,Team Building,Incentive Day,Empresas,Paquete,Día,Fin de semana,Gastronomía,Alojamiento,Lili,Pilu,Raúl,Materiales,Clientes,Escalada,Quads,Alpinismo,Material,Calzado,Bicicletas,Montaña,Accesorio, Outdoor,Consulta, Chat, Online, cookies,Soporte,Opiniones">
    <!-- palabras clave-->
    <meta name="description"
        content="Página web que contacta usuarios con empresas que ofrecen experiencias multiaventura de todo tipo para todos los públicos.">
    <!-- descripción-->
    <meta name="author" content="Raúl Montero, Pilar Bermejo, Lidia Martínez"><!-- autores-->
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- escla visualización-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!--cdn para los iconos fontawesome-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- cdn para librería jquery-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--cdn para framework bootstrap-->
    <link rel="stylesheet" href="../css/eventos.css" type="text/css">
    <!--Enlace externo a CSS-->
</head>

<body>

    <!-- va todo el documento dentro de una caja con clase container que mediante Bootstrap nos permitirá hacer
     nuestra página responsive y que se adapte a diferentes tamaños de pantalla. Para ello nos serviremos también
      de las media queries @-->
    <div class="container">
        <!-- HEADER----COMUN-->
        <!-- iconos-->
        <header>
            <div class="row" id="icon">
                <div id="iconos" class="col-md-12 col-xs-12 ">
                    <a href="carrito.php"><i class="fa fa-shopping-cart" id="carrito" title="carrito"></i></a>
                    <a href="login.php"><i class="fas fa-user" id="login" title="login"></i></a>
                    <i class="fas fa-search" id="buscar" title="buscar"></i>
                </div>
            </div>
            <div class="row" id="logo_menu">
                <!-- logo-->
                <div class="col-md-4 col-xs-12 col-xm-12 " id="logo1"><img src="../imagenes/header_logo.png" id="logo"
                        alt="logo risk adventure" title="logo risk adventure" /> </div>
                <!-- menu ------------NAV INTEGRADO EN EL HEADER---COMÚN-->
                <nav class="col-md-8 col-xs-12 col-xm-12 " id="menu">
                    <ul>
                        <li><a id="home" href="home.php">HOME</a></li>
                        <li><a id="experiencias" href="experiencias.php">EXPERIENCIAS</a></li>
                        <li><a id="eventos" href="eventos.php">EVENTOS EMPRESA</a></li>
                        <li><a id="packs" href="packs.php">PACKS & GRUPOS</a></li>
                        <li><a id="sobre" href="nosotros.php">NOSOTROS</a></li>
                        <li><a id="blog" href="blog.php">BLOG</a></li>
                        <li><a id="contacto" href="contacto.php">CONTACTO</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- SECTION-->
        <!-- parte central eventos-->
        <section class="row">
            <!-- imagen eventos team building-->
            <div class="col-md-7 col-xs-12 col-xm-12 eventosempresa">
                <img src="../imagenes/eventos_teambuilding.jpg" alt="team building eventos empresa"
                    title="imagen team building eventos empresa">
            </div>

            <!-- texto team building-->
            <div class="col-md-5 col-xs-12 col-xm-12 " id="boton_packs">
                <div class="evento">Team Building</div>
                <div class="texto3">¿Necesitas que los compañeros hagan un equipo de verdad?
                    ¿Quieres alcanzar los objetivos de la empresa antes de lo previsto? <br><br>
                    ¿Prefieres la solución antes del problema?
                    Ponte en contacto con nosotros y elaboraremos una experiencia a medida...
                </div>
            </div>
        </section>
        <!-- botones ver más y contacto-->
        <section class="row">
            <div class="col-md-12 col-xs-12" id="boton_listo">
                <a href="contacto.php">
                    <div class="boton_pack" id="contact"> CONTÁCTANOS</div>
                </a>
            </div>
            <!-- imagen partner escapada rural-->
            <div class="col-md-3 col-xs-12 col-xm-12" id="teamb">
                <img src="../imagenes/footer_escapada_rural.jpg" alt="partner escapada rural eventos empresa"
                    title="imagen escapada rural eventos empresa">
            </div>
            <!-- imagen partner decathlon -->
            <div class="col-md-2 col-xs-12 col-xm-12" id="decathlon">
                <img src="../imagenes/footer_decathlon.png" alt="incentive day eventos empresa"
                    title="imagen decathlon eventos empresa">
            </div>
        </section>
        <section class="row">

            <!-- imagen eventos incentive day -->
            <div class="col-md-7 col-xs-12 col-xm-12 eventosempresa">
                <img src="../imagenes/eventos_incentiveday.jpg" alt="incentive day eventos empresa"
                    title="imagen incentive day eventos empresa">
            </div>

            <!-- texto incentive day -->
            <div class="col-md-5 col-xs-12 col-xm-12 " id="boton_packs">
                <div class="evento">Incentive Day</div>
                <div class="texto3">La motivación de tus empleados es fundamental para que tu empresa vaya viento en
                    popa y consigas las metas que
                    os habéis propuesto alcanzar. Debes mantener el interés, la implicación y el compromiso de tu equipo
                    de trabajo.
                    Por eso te organizamos un día para poner todo esto en práctica, reforzarlo y llevarlo a cabo en el
                    día a día en la empresa....
                </div>
            </div>
        </section>
        <!-- botones ver más y contacto-->
        <section class="row">
            <div class="col-md-12" id="boton_evento">
                <a href="contacto.php">
                    <div class="boton_pack" id="contact"> CONTÁCTANOS</div>
                </a>
            </div>
        </section>
        <section class="row">
            <!-- imagen eventos incentive day -->
            <div class="col-md-7 col-xs-12 col-xm-12 eventosempresa">
                <img src="../imagenes/eventos_empresa.jpg" alt="incentive day eventos empresa"
                    title="imagen incentive day eventos empresa">
            </div>

            <!-- texto incentive day -->
            <div class="col-md-5 col-xs-12 col-xm-12 " id="boton_packs">
                <div class="evento">Eventos de Empresa</div>
                <div class="texto3">Conectamos tus necesidades con nuestras ideas, entendemos que todos somos diferentes y que existe un tipo de mensaje para cada persona.
                   Nuestra experiencia con cientos de clientes nos avalan. Jornadas para los mas intrépidos, actividades de aventura y team building con la posibilidad de diseñar un evento totalmente personalizado.
                   ¿Te atreves?.
                </div>
            </div>
        </section>
        <!-- botones ver más y contacto-->
        <section class="row">
            <div class="col-md-12" id="boton_listo">
                <a href="contacto.php">
                    <div class="boton_pack" id="contact"> CONTÁCTANOS</div>
                </a>
            </div>
            <!-- imagen partner columbia -->
            <div class="col-md-7 col-xs-12 col-xm-12" id="sportiva">
                <img src="../imagenes/la_sportiva.jpg" alt="incentive day eventos empresa"
                    title="imagen columbia eventos empresa">
            </div>
        </section>
        <!-- efecto bolitas----COMÚN-->
        <hr>
        <section class="row">
            <div class="col-md-12" id="bolitas">
                <div id="bola1" class="bola"></div>
                <div id="bola2" class="bola"></div>
                <div id="bola3" class="bola"></div>
                <div id="bola4" class="bola"></div>
                <div id="bola5" class="bola"></div>
                <div id="bola6" class="bola"></div>
                <div id="bola7" class="bola"></div>
                <div id="bola8" class="bola"></div>
                <div id="bola9" class="bola"></div>
                <div id="bola10" class="bola"></div>
                <div id="bola11" class="bola"></div>
                <div id="bola12" class="bola"></div>
                <div id="bola13" class="bola"></div>
                <div id="bola14" class="bola"></div>
                <div id="bola15" class="bola"></div>
                <div id="bola16" class="bola"></div>
                <div id="bola17" class="bola"></div>
                <div id="bola18" class="bola"></div>
                <div id="bola19" class="bola"></div>
                <div id="bola20" class="bola"></div>
                <div id="bola21" class="bola"></div>
                <div id="bola22" class="bola"></div>
                <div id="bola23" class="bola"></div>
                <div id="bola24" class="bola"></div>
                <div id="bola24" class="bola"></div>
                <div id="bola25" class="bola"></div>
                <div id="bola26" class="bola"></div>
            </div>
        </section>


        <!-- FOOTER-----COMÚN-->
        <footer class="row">
            <!-- Logo risk adventure negativo-->
            <div class="col-md-8 col-xs-8" id="adventure">
                <img src="../imagenes/footer_logo.png" alt="logo ris adventure" title="logo risk adventure">
            </div>
            <!-- sección de contáctanos-->
            <div class="col-md-2 col-xs-2  " id="texto_footer">
                <p>CONTÁCTANOS</p>
            </div>
            <div class="col-md-4 col-xs-4 " id="contacto_footer">
                <div id="dire">
                    <p class="texto_contacto">Dirección :</p>
                    <p>123 Avenida de Bolonia, Madrid</p>
                </div>
                <div id="email">
                    <p class="texto_contacto">Email :</p>
                    <p>info@riskadventure.es</p>
                </div>
                <div>
                    <p class="texto_contacto">Teléfono :</p>
                    <p>(+34)677 899 900</p>
                </div>
            </div>
            <!-- Logos publicitarios-->
            <div class="col-md-12 col-xs-12" id="publi">
                <a href="https://eu.oneill.com/"><img src="../imagenes/footer_oneill.png" id="oneill" alt="logo oneill"
                        title="logo oneill" /></a>
                <a href="https://www.columbia.com/"><img src="../imagenes/footer_columbias.jpg" id="columbia"
                        alt="logo columbia" title="logo columbia" /></a>
                <a href="https://www.escapadarural.com/"><img src="../imagenes/footer_escapada_rural.jpg" id="escapada"
                        alt="logo la escapada" title="logo la escapada" /></a>
                <a href="https://www.lasportiva.com/es"><img src="../imagenes/footer_la_esportiva.jpg" id="esportiva"
                        alt="logo la esportiva" title="logo la esportiva" /></a>
                <a href="https://www.decathlon.es/es/"><img src="../imagenes/footer_decathlon.png" id="decathlon"
                        alt="logo decathlon" title=" logo decathlon" /></a>
                <a href="http://www.bardis.com/"><img src="../imagenes/footer_restaurante.jpg" id="restaurante"
                        alt="logo bardir restaurante" title="logo bardis restaurante" /></a>
            </div>
            <!-- iconos redes sociales y texto copyright-->
            <div class="col-md-12 col-xs-12" id="redes">
                <p>Síguenos en:</p>
                <a href="https://m.facebook.com/adventurerisk/"><i class="fab fa-facebook-f" id="face"
                        title="facebook"></i></a>
                <a href="https://www.instagram.com/riskadventure/"><i class="fab fa-instagram"
                        title="instagram"></i></a>
                <a href="https://cutt.ly/UvIKPOG"><i class="fab fa-whatsapp" title="whatsapp"></i></a>
                <a href="https://twitter.com/adventurerisk"><i class="fab fa-twitter" title="twitter"></i></a>
                <p>2020 © Copyright</p>
            </div>
            <hr>
            <!-- efecto bolitas---COMÚN-->

            <!--enlaces a aviso legal, política de privacidad y cookies-->
            <div class="col-md-12 col-xs-12 " id="privacidad"> <a href="aviso_legal.php" id="aviso_legal">Aviso
                    Legal</a> | <a href="politica_privacidad.php" id="politica_privacidad">Política de privacidad</a> |
                <a href="cookies.php" id="cookies"> Cookies</a>
            </div>
        </footer>
        <script type="text/javascript" src="../js/eventos.js"></script>
        <!--Enlace externo a archivo JS-->
    </div>
</body>

</html>