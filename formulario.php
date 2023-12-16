
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




    <link rel="stylesheet" type="text/css" href="estiloregistro.css">


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
                        <a class="nav-link " href=""> </a>

                    </li>
                    <li class="nav-item active">
                        <a class="nav-link " href=""> </a>
                    </li>


                </ul>
            </div>
        </nav>
    </header>


    <form method="post">
        <title> Envíanos tus datos</title>
        <h1>Envianos tus datos</h1>
        <p>Al proporconarnos tus datos, nosotros te contactaremos para dar seguimiento .</p>
        <input type="text" placeholder="nombre" name="name">
        <input type="email" placeholder="email" name="email">
        <input type="text" placeholder="asunto" name="asunto">
        <textarea placeholder="mensaje, dirección" name="msg"></textarea>
        <input type="submit" name="enviar">
    </form>
    <?php
    include("correo.php");
    ?>
</body>






</html>