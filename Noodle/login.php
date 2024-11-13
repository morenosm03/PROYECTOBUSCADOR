<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in/Sign up</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="styles/normalize.css"/>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/login.css">
</head>
<body>
    <main>
        <div class="caja">
            <div class="caja-interna">
                <div class="formulario">
                    <!-- Formulario de inicio de sesión -->
                    <form action="BaseDatos/login.inc.php" method="post" autocomplete="off" class="sign-in">
                        <div class="logo">
                            <img src="img/imagenes-generales/login/logo.jpg" alt="noodle">
                            <h4>Noodle</h4>
                        </div>
    
                        <div class="bienvenida">
                            <h2>Bienvenido</h2>
                            <h6>No tienes una cuenta?</h6>
                            <a href="#" class="toggle">Regístrate</a>
                        </div>
    
                        <div class="datos-inicio">
                            <div class="seccion-datos">
                                <input type="text" name="email" minlength="4" class="input-datos"
                                autocomplete="off" required/>
                                <label>Email</label>
                            </div>

                            <div class="seccion-datos">
                                <input type="password" name="password" class="input-datos"
                                autocomplete="off" required/>
                                <label>Password</label>
                            </div>
    
                            <button type="submit" name="submit" class="sign-btn">Inicia sesión</button>
    
                            <p class="texto">
                                Contraseña o datos de sesión olvidados?
                                <a href="#">Obtén ayuda</a> para iniciar sesión
                            </p>
                        </div>

                    </form>
                    <?php
                        if(isset($_GET["error"])) {
                            if($_GET["error"] == "emptyinput") {
                                echo "<p>Fill in all fields!</p>";
                            }
                            else if ($_GET["error"] == "wronglogin") {
                                echo "<p>Incorrect login information!</p>";
                            }
                            else if ($_GET["error"] == "wrongpassword") {
                                echo "<p>Incorrect password!</p>";
                            }
                            else if ($_GET["error"] == "invalidemail") {
                                echo "<p>Register a valid email account!</p>";
                            }
                            else if ($_GET["error"] == "notexist") {
                                echo "<p>Account not found! Sign Up</p>";
                            }
                            else if ($_GET["error"] == "notexist") {
                                echo "<p>Account not found! Sign Up</p>";
                            }
                            else if ($_GET["error"] == "stmtfailed") {
                                echo "<p>Something failed, try again!</p>";
                            }
                        }
                    ?>

                    <!-- Formulario de registro -->
                    <form action="login.html" autocomplete="off" class="sign-up">
                        <div class="logo">
                            <img src="img/imagenes-generales/login/logo.jpg" alt="noodle">
                            <h4>Noodle</h4>
                        </div>
    
                        <div class="bienvenida">
                            <h2>Comenzar</h2>
                            <h6>Ya tienes una cuenta?</h6>
                            <a href="#" class="toggle">Inicia sesión</a>
                        </div>
    
                        <div class="datos-inicio">
                            <div class="seccion-datos">
                                <input type="text" minlength="4" class="input-datos"
                                autocomplete="off" required/>
                                <label>Nombre</label>
                            </div>

                            <div class="seccion-datos">
                                <input type="email" name="email" minlength="4" class="input-datos"
                                autocomplete="off" required/>
                                <label>Email</label>
                            </div>

                            <div class="seccion-datos">
                                <input type="password" name="password" minlength="4" class="input-datos"
                                autocomplete="off" required/>
                                <label>Password</label>
                            </div>
    
                            <input type="submit" value="Regístrate" class="sign-btn">
    
                            <p class="texto">
                                Al registrarte, aceptas los
                                <a href="#">Términos de Servicio</a> y la
                                <a href="#">Política de Privacidad</a>
                            </p>
                        </div>

                    </form>
                </div>
               
                <div class="carousel-fotos">
                    <div class="contenedor-imagenes">
                        <img src="img/imagenes-generales/login/carousel-login1.png" class="imagen img-1 mostrar" alt="">
                        <img src="img/imagenes-generales/login/carousel-login2.png" class="imagen img-2" alt="">
                        <img src="img/imagenes-generales/login/carousel-login4.png" class="imagen img-3" alt="">
                    </div>
                    <div class="contenedor-noimg">
                        <div class="contenedor-texto">
                            <div class="texto-grupo">
                                <h2>Descubre y transforma la ciencia</h2>
                                <h2>Aprende, comparte, avanza</h2>
                                <h2>La ciencia a tu alcance</h2>
                            </div>
                        </div>
                        <div class="puntos">
                            <span class="activo" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
</body>
</html>
