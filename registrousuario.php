<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estiloregistro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	

</head>
<body>
            <header class="header">
			
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <img src="https://pwebdaniela.000webhostapp.com/ImagenesTehuacaninos/logo1.png" width="100px">
                <a class="navbar-brand" href="inicio.php">Inicio</a>
                <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="my-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link " href="registrousuario.php">Registro </a>
                            
                        </li>
                        
                    
                        
                    </ul>
                </div>
            </nav>	
                    
                    
            </header>


    <form method="post">
    	<h1>Reisgtro</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
        <input type="text" name="usuario" placeholder="Usuario">
    	<input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Contraseña">
        <input type="text" name="Organización" placeholder="Organización">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>