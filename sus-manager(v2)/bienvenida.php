<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bienvenida</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pagina de bienvenida al sistema y de muestra de los datos registrados">
    <meta name="keywords" content="suscripcion, manager, sistema, bienvenida, datos">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/logo.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body class="container-fluid" onload="redireccion()">
    <header>
    <nav class="navbar navbar-expand-sm nav-color">
            <div class="container-fluid">
              <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon top-bar"></span>
                <span class="toggler-icon middle-bar"></span>
                <span class="toggler-icon bottom-bar"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="registro.html">REGISTRO</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.html">INICIAR SESIÓN</a></li>
                        <li class="nav-item"><a class="nav-link" href="contacto.html">CONTACTO</a></li>
                    </ul>
              </div>
              <h1>S.U.S MANAGER</h1>
              <a href="#"><img src="./images/logo.png" alt="" class="logo"></a>
            </div>
        </nav>
    </header>
    <main>
        <section class="container">
          <div class="row p-4 gap-4">
          <div class="caja-form">
            <h1 class="titulo">Bienvenido, <?php echo $_POST["nombre"];?>, a S.U.S Manager</h1>
            <h2 class="texto">Estos son los datos registrados</h2>
            <p class="textoL">Nombre: <?php echo $_POST["nombre"];?></p>
            <p class="textoL">Apellido: <?php echo $_POST["apellido"];?></p>
            <p class="textoL">Fecha de nacimiento: <?php echo $_POST["fechaNacimiento"];?></p>
            <p class="textoL">Correo: <?php echo $_POST["correo"];?></p>
            <p class="textoL">Telefono: <?php echo $_POST["telefono"];?></p>
            <p class="textoL">Pais: <?php echo $_POST["pais"];?></p>
            <p class="textoL">Provincia: <?php echo $_POST["provincia"];?></p>
            <p class="texto">Confirmaermos tu nombre de Usuario y contraseña por correo electronico</p>
            </div>
          </div>
        </section>
    </main>
    <footer>
        <p>
          Copyright 2021© - Todos los derechos reservados
        </p>
    </footer>
    <script defer src="./script/funcionesGrupo99.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>