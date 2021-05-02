<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Blog de Videojuegos</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css"/>
    </head>
    <body>
        <!-- CABECERA -->
        <header id="cabecera">
            <!-- LOGO  -->
            <div id="logo">
                <a href="">
                    Blog de Videojuegos
                </a>
            </div>
            <!-- MENU -->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="">Inicio</a>
                    </li>
                    <li>
                        <a href="">Lucha</a>
                    </li>
                    <li>
                        <a href="">Sobre mí</a>
                    </li>
                    <li>
                        <a href="">Contacto</a>
                    </li>
                </ul>
            </nav>
            <div class="clearfix"></div>
        </header>
        <div id="contenedor">
            <!-- BARRA LATERAL -->        
            <aside id="sidebar">
                <div id="register" class="bloque">
                    <h3>Registrate</h3>
                    <!--Mostrar errores-->
                    <form action="registro.php" method="POST">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre"/>

                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos"/>

                        <label for="email">Email</label>
                        <input type="email" name="email"/>

                        <label for="password">Contraseña</label>
                        <input type="password" name="password"/>

                        <input type="submit" name="submit" value="Registrar"/>
                    </form>
                </div>
            </aside>
            <!-- CAJA PRINCIPAL -->
            <div id="principal">
                <h1>Ultimas entradas</h1>

                <article class="entrada">
                    <a href="">
                        <h2>Entradas</h2>
                        <span class="fecha">02-05-2021</span>
                        <p>
                            Es conveniente no usar mucho las líneas horizontales, limitándolas al comienzo y fin de la página. 
                            La razón de esto es que las líneas en medio de la página dificultan la lectura de esta. 
                            Si se desea separar secciones un espacio vertical del tamaño adecuado es más efectivo.
                        </p>
                    </a>
                </article>
            </div> <!-- Fin Principal -->
            <div class="clearfix"></div>
        </div><!--fin del contenedor-->
        <!-- PIE PAGINA -->
        <footer id="pie">
            <p>Desarrollado por Jose Nuñez &COPY; 2021</p>
        </footer>
    </body>
</html>