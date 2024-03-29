<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="En esta pagina, podra ingresar sus datos para acceder a las funciones del gestor">
    <meta name="keywords" content="suscripcion, manager, datos, usuario, contraseña">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="icon" href="css/favicon.jpg" sizes="16x16" type="image/jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>S.U.S Manager - Registro</title>
    
</head>

<body>
    <section class="container">
        <div class="cabecera">
            <div class="row">

                <div class="col-12">
                    <p></p>
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
                    <!-- se cambia a tipo php y redirige a insertar usuario -->
                    <form method="POST" action="insertar_usuario.php">
                    <div class="form-row" >
                          <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Nombre</label>
                            <!--primero colocamos parametros que vamos a pasar por php y al ultimo el estilo-->
                            <input id="nombre" type="text" name="nombre" minlength="2" maxlength="45" placeholder="Nombre" required
                            class="form-control is-valid">
                          </div>

                          <div class="col-md-4 mb-3">
                            <label for="validationServer02">Apellido</label>

                            <!--primero colocamos parametros que vamos a pasar por php y al ultimo el estilo-->
                            <input id="apellido" type="text" name="apellido" minlength="2" maxlength="45" placeholder="Apellido" required
                            class="form-control is-valid">

                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationServer02">Telefono</label>
                            <!--primero colocamos parametros que vamos a pasar por php y al ultimo el estilo-->
                            <input id="telefono" type="int" name="telefono" required required maxlength="15" 
                            placeholder="(Cod Area) Nro.Telefono" value="Telefono" class="form-control is-valid">
                          </div>

                          <div class="col-md-4 mb-3">
                            <label for="validationServer02">E-Mail</label>
                            <!--primero colocamos parametros que vamos a pasar por php y al ultimo el estilo-->
                            <input id="email" type="email" name="email" required 
                            placeholder="name@example.com" class="form-control is-valid">
                          </div>

                          <div class="col-md-4 mb-3">
                            <label for="fechaNacimiento">Fecha Nacimiento</label>
                            <!--primero colocamos parametros que vamos a pasar por php y al ultimo el estilo-->
                            <input id="fechaNacimiento" type="date" name="fechaNacimiento" value="aaaa/mm/dd" required
                            placeholder="date" class="form-control is-valid">
                            <h6 id="edad"><h6>
                            
                          </div>
                          <div class="col-md-4 mb-3">
                            <label for="validationServerUsername">Ingrese un nombre de usuario</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                              </div>
                                <!--primero colocamos parametros que vamos a pasar por php y al ultimo el estilo-->
                                <input id="nombreUsuario" type="text" name="nombreUsuario" required required maxlength="20"
                                placeholder="Username" aria-describedby="inputGroupPrepend3" class="form-control is-valid">
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationServerPassword">Ingrese una contraseña</label>

                            <!--primero colocamos parametros que vamos a pasar por php y al ultimo el estilo-->
                            <input id="contraseña" type="text" name ="contraseña" 
                            placeholder="password" required required maxlength="20"
                            class="form-control is-valid">
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                            <label class="form-check-label" for="invalidCheck3">
                              Aceptar terminos y condiciones.
                            </label>
                            <div class="invalid-feedback">
                              Por favor acepte los términos y condiciones para poder continuar.
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-primary" type="submit" onclick="redireccion()">Enviar </button>

                        </br>
                        
                    </form>
                </div>

                <div class="col-4">
                    <div class="menu">
                        <nav class="navbar navbar-light bg-light">
                            <a href="index.html">Inicio</a>
                        </nav>
                        
                        <nav class="navbar navbar-light bg-light">
                            <a href="sesion.php">Iniciar Sesion</a>
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
                    <div class="col-4">
                        <u><a href="sesion.html">Iniciar sesión</a></u>  
                        <u><a href="registro.html"> Registrarse </a></u>
                        <u><a href="contacto.html"> Contacto </a></u>
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
    
    <script src="funcionesgrupo99.js"></script>
                  
</body>
</html>