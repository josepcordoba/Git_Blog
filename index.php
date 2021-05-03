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
                    Blog
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

                        <input type="submit" name="submit" value="Registrar"/>
                    </form>
                </div>
            </aside>
            <!-- CAJA PRINCIPAL -->
            <div id="principal">
                <h1>Ultimas entradas</h1>

                <article class="entrada">
                    <a href="">
                        <h2>Primera Entrada</h2>
                        <span class="fecha">02-03-2021</span>
                        <p>
                            Es conveniente no usar mucho las líneas horizontales, limitándolas al comienzo y fin de la página. 
                            La razón de esto es que las líneas en medio de la página dificultan la lectura de esta. 
                            Si se desea separar secciones un espacio vertical del tamaño adecuado es más efectivo.
                        </p>
                        <h2>Segunda Entrada</h2>
                        <span class="fecha">02-02-2021</span>
                        <p>
                            Está compuesto por un conjunto de oraciones que tienen cierta unidad temática o que, sin tenerla, se enuncian juntas. 
                            Es un componente del texto que en su aspecto externo comienza con una mayúscula y termina en un punto y aparte. 
                            Comprende varias oraciones relacionadas sobre el mismo subtema; una de ellas expresa la idea principal.
                        </p>
                        <h2>Tercera Entrada</h2>
                        <span class="fecha">02-03-2021</span>
                        <p>
                            Para escribir texto dentro de un documento HTML simplemente tenemos que añadir texto al fichero que contenga
                            nuestra página web. Así de simple.
                        </p>
                        <h2>Git Hub</h2>
                        <span class="fecha">02-04-2021</span>
                        <p>
                            Aprendiendo GitHub con codigo facilito.
                        </p>
                        <h2>Cuarta Entrada</h2>
                        <span class="fecha">01-05-2021</span>
                        <p>
                            Estos textos contienen párrafos cortos de fácil asimilación para esta edad. 
                            Por su parte, los juegos contienen preguntas relativas al contenido del texto, estando.
                        </p>
                        <h2>Quinta Entrada</h2>
                        <span class="fecha">02-05-2021</span>
                        <p>
                            Estos textos contienen párrafos cortos de fácil asimilación para esta edad. 
                            Por su parte, los juegos contienen preguntas relativas al contenido del texto, estando.
                        </p>
                         <h2>Sexta Entrada</h2>
                        <span class="fecha">02-05-2021</span>
                        <p>
                            Un cazador de vampiros lucha para salvar a una ciudad asediada de un ejército de 
                            bestias de otro mundo controladas por Drácula.
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
