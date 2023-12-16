<html>

<head>
    <title>TehuaCaninos</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estiloSld.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">


</head>

<body>
    <header class="header">

        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <img src="img/logopng.png" width="100px">
            <a class="navbar-brand" href="inicio.php">Inicio</a>
            <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link " href=""></a>

                    </li>
                    <li class="nav-item active">
                        <a class="nav-link " href="c"> </a>
                    </li>


                </ul>
            </div>
        </nav>

        <main>
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <center>
                        <img class="first-slide" src="img/slider1adopta.jpg" width="1280" alt="First-slide">
                        </center>
                        <div class="container">
                            <div class="carousel-caption text-start">
                            <font color=#E7A625> <h1>Conoce más.</h1></font>
                               <font color=#E7A625 size=7 > <p >Enterate de las novedades en campañas de esterilización</p></font>
                                <p><a class="btn btn-warning" href="">Únete hoy</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#777" />
                        </svg>

                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Another example headline.</h1>
                                <p>Some representative placeholder content for the second slide of the carousel.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        

                        <div class="container">
                            <div class="carousel-caption text-end">
                                <h1>One more for good measure.</h1>
                                <p>Some representative placeholder content for the third slide of this carousel.</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>


            <!-- Marketing messaging and featurettes
  ================================================== -->
            <!-- Wrap the rest of the page in another container to center all the content. -->

            <div class="container marketing">

                <!-- Three columns of text below the carousel -->
                <div class="row">
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" width="140" height="140" alt="avatar1" src="img/perrito1.jpg" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
                        </img>

                        <h2 class="fw-normal">Sobre nosotros</h2>
                        <p>Mi mascota estetica y veterinaria, proporciamos nuestros servicios a la comunidad fomentando la adopción responsable.</p>
                        <p><a class="btn btn-secondary" href="#">Saber más &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle" width="140" height="140" alt="avatar1" src="img/perrito.jpg" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
                        </img>

                        <h2 class="fw-normal">Siguenos en redes sociales</h2>
                        <p>Enterate de las últimas novedades.</p>
                        <p><a class="btn btn-secondary" href="redsociales.php">Saber más &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140" alt="avatar1" src="img/perrito3.jpg" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
                    </img>

                        <h2 class="fw-normal">Forma parte de nuestro equipo</h2>
                        <p>Siempre nos encontramos en busca de personas que les guste ayudar a nuestros amigos caninos de la calle.</p>
                        <p><a class="btn btn-secondary" href="redsociales.php">Saber más &raquo;</a></p>
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->


                <!-- START THE FEATURETTES -->

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">Informate<span class="text-muted">.</span></h2>
                        <p class="lead">Adopta, no compres. El cambio lo puedes hacer tú, cada acción cuenta. Ayudanos en esta campaña de conscientización para difundir sobre nuestras campañas de adopción.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  src="img/perrito1.jpg" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">

                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
                        </img>

                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading fw-normal lh-1">Sabías que <span class="text-muted">...</span></h2>
                        <p class="lead">Al adoptar salvas la vida de un ser hermoso, salva un peludo, haz la diferencia.</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        
                        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  src="img/adoptame2.jpg" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">    
                        <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
                        </img>
                        

                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading fw-normal lh-1">Diversidad <span class="text-muted"></span></h2>
                        <p class="lead">No solo ofrecemos servicios para perros, los gatos son igualmente importantes, contrata nuestro servicio de desparacitación.</p>
                    </div>
                    <div class="col-md-5">
                    <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500"  src="img/adoptame3.jpg" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">    
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em"></text>
                    </img>

                    </div>
                </div>

                <hr class="featurette-divider">

                <!-- /END THE FEATURETTES -->

            </div><!-- /.container -->


            <!-- FOOTER -->
            <footer class="container">
                <p class="float-end"><a href="#">Regresar al inicio</a></p>
                <p>&copy; 2022 Daniela Jazmin Osorio Medrano & Luis Alberto Lezama. &middot; <a href="#">Privacidad</a> &middot; <a href="#"></a></p>
            </footer>
        </main>

        <script src="js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>









    </header>
    <div class="capa"></div>
    <!--	--------------->



    




    </div>


    <nav>
        <ul>

        </ul>
    </nav>

    <!-- <A href="http://www.facebook.com">Ir a pagina de Facebook</A> - para poner links 

	<A href="http://www.facebook.com"><img src="iconofb.png" width="50"></A>  -->
    <script src="lax.js"></script>

</body>

</html>