<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de Videojuegos</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
<!-- CABECERA -->
    <header id="cabecera">
        <!-- LOGO -->
        <div id="logo">
            <a href="index.php">
                Blog de Videojuegos
            </a>
        </div>
        <!-- MENU -->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="index.php">Categoria 1</a>
                    </li>
                    <li>
                        <a href="index.php">Categoria 2</a>
                    </li>
                    <li>
                        <a href="index.php">Categoria 3</a>
                    </li>
                    <li>
                        <a href="index.php">Categoria 4</a>
                    </li>
                    <li>
                        <a href="index.php">Sobre mi</a>
                    </li>
                    <li>
                        <a href="index.php">Contacto</a>
                    </li>
                </ul>
            </nav>
    </header>

    <div id="contenedor">

        <!-- BARRA LATERAL -->
        <aside id="sidebar">
            <div id="login" class="bloque">
                <h3>Identificate</h3>
                <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email" />
                   
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" />
                
                    <input type="submit" value="Entrar" />
                </form>
            </div>
            
            <div id="register" class="bloque">
                <h3>Registrate</h3>
                <form action="registro.php" method="POST">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" />

                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" />

                    <label for="email">Email</label>
                    <input type="email" name="email" />
                   
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" />
                
                    <input type="submit" value="Registrar" />
                </form>
            </div>
        </aside>

        <!-- CAJA PRINCIPAL -->
        <div id="principal">
            <h1 id="principal">Ultimas entradas</h1>
            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Pellentesque dui erat, mattis id arcu sit amet, aliquam fringilla ante. 
                    Quisque aliquet suscipit ante, vitae scelerisque justo tempor quis. 
                </p>
            </article>

            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Pellentesque dui erat, mattis id arcu sit amet, aliquam fringilla ante. 
                    Quisque aliquet suscipit ante, vitae scelerisque justo tempor quis. 
                </p>
            </article>

            <article class="entrada">
                <h2>Titulo de mi entrada</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Pellentesque dui erat, mattis id arcu sit amet, aliquam fringilla ante. 
                    Quisque aliquet suscipit ante, vitae scelerisque justo tempor quis. 
                </p>
            </article>
        </div>

    </div>

    <!-- PUE DE PAGINA -->
     <footer id="pie">
        <p>Desarrollado por Juan Doe &copy; 2024</p>
     </footer>
</body>
</html>