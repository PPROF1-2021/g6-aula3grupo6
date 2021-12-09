<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="En esta pagina, podra ingresar su usuario y contraseña para acceder a las funciones del gestor">
    <meta name="keywords" content="suscripcion, manager, sesión, usuario, contraseña">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="icon" href="css/favicon.jpg" sizes="16x16" type="image/jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Iniciar Sesión</title>
    
</head>

<body>
    <section class="container">
        <div class="cabecera">
            <div class="row">
                <div class="col-12">
                    <p> </p>
                </div>
                <div class="col-9">
                    <h1>S.U.S Manager</h1>
                    <h2>Administrador de Suscripciones</h2>
                </div>
                <div class="col-3">
                    <figure>
                        <img src="css/logo.png" class="img-fluid">    
                    </figure>
                </div>
                
            </div>
        </div>
            
        <div class="cuerpo">
            <div class="row">
                <div class="col-8">
                    
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Inicio de Sesión</h4>
                        <p>
                            <form method="POST" action="ingreso_usuario.php" >

                                <div class="form-group">
                                
                                  <label for="exampleInputEmail1">Ingrese su nombre de usuario</label>

                                  <!-- Primero declaramos las variables que enviaremos al archivo ingresar_usuario.php y luego declaramos el estilo -->
                                  <input id="nombreUsuario" type="text" name="nombreUsuario"
                                  required required maxlength="20"
                                  class="form-control"  placeholder="Ingrese su usuario">

                                  <small id="emailHelp" class="form-text text-muted">Debe ingresar usuario con el cual se ha registrado.</small>
                                </div>

                                <div class="form-group">

                                    <label for="exampleInputPassword1">Contraseña</label>

                                    <!-- Primero declaramos las variables que enviaremos al archivo ingresar_usuario.php y luego declaramos el estilo -->
                                    <input id="contraseña" type="text" name="contraseña" required required maxlength ="10"
                                    class="form-control" placeholder="Contraseña">

                                  </div>
                                
                                <button type="button" class="btn btn-dark">
                                    <input id="submit" type="submit" name="submit" value="verificar">
                                </button>

                                <?php
                                    
                                    if(isset($_GET['si']))
                                    {
                                        echo "El usuario existe";
                                    }
                                    elseif(isset($_GET['no']))
                                    {
                                        echo "El usuario NO existe, debe registrarse";
                                    }

                                ?>


                                
                              </form>
                        </p>
                        <hr>
                        <p class="mb-0">Si ha olvidado su Contraseña haga click en <a href="recupero.html">He olvidado mi Clave</a>.</p>
                      </div>  

                </div>
    
                <div class="col-4">

                    <div class="menu">
                        <nav class="navbar navbar-light bg-light">
                            <a href="sesion.php">Iniciar Sesión</a>
                        </nav>
                        
                        <nav class="navbar navbar-light bg-light">
                            <a href="registro.php">Registro</a>
                        </nav>

                        <nav class="navbar navbar-light bg-light">
                            <a href="index.html">Inicio</a>
                        </nav>
                        
                    </div>
                    
                </div>
    
                
            </div>
        </div>
        <footer>
            <div class="pie">
                <div class="row">
                    <div class="col-12">
                        <p>
                            Todos los derechos reservados
                        </p>
                        
                    </div>
                    <div class="col-4">
                        <p>
                            I.S.P.C:
                        <br>
                            Instituto Superior Politecnico de Córdoba
                        </p>
                    </div>
                    <div class="col-4">
                        <p>
                            PROYECTO DE PRACTICA PROFESIONALIZANTE
                        <br>
                            En Coordinación con PROGRAMACIÓN WEB
                        </p>
                    </div>
                    
                </div>
            </div>
        </footer>      
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>

</body>
</html>