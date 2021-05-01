<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Galeria Magic </title>
    <link rel="icon" href="#">
    <link rel="stylesheet" type="text/css" href="./css/styles1.css">
</head>
<body class="body" >

    <header class="indexheader"> 
            <section class="logoymenu">
                <header >
                    <img src="./img/fondos/shiny.png" class="imglogo">
                    <h1> Galeria de magics </h1>
                </header>
                <main>
                    <nav class="menu">
                        <ol>
                            <li><a href="index.php"> Galeria </a></li>
                            <li><a href="crearCarta.php"> Crear carta </a></li>
                        </ol>
                    </nav>
                </main>
            </section>
    </header>
    <main class="indexmain">

        <?php
            
            include('cartas.php');
    
            foreach($cartas as $clave=>$valor){
                $valor->thumbnail();     
                $valor->imprime(); 
            }
        
           
        ?>

    </main>
    <footer class="indexfooter">
        <nav>
            <section>
                <h1> Articulos de interés </h1>
                <p>
                    <video width="220" height="140" controls>
                        <source src="movie.mp4" type="video/mp4">
                        texto a mostrar si no se carga el video
                    </video>  
                    Te asaltan dudas cuando juegas a magic con tu amigos, 
                    ehca un vistazo a este completo tutorial y aprenderas 
                    como lo hacen los profesionales.
                    
                </p>
                <p>
                    <img src="cartaYforrada.jpg"> 
                    Tus magic pueden valer mucho dinero.
                    Protejelas con estos sencillos pasos...
                    <a href="articles/kindplus/1"> Leer más...</a>
                </p>
                
            </section>
            <ol>
                <li> <a href="#"> Sobre nosotros </a> </li>
                <li> <a href="#"> Deja tu comentario </a> </li>
                <li> <a href="#"> Ubicación </a> </li>
            </ol>
        </nav>
        <p>
            <small> Copyright © 2021 MoimuMagic — <a href="#">Términos y Condiciones del Servicio</a> </small>
        </p>
    </footer>
    <script src="./js/script.js" language="javascript" type="text/javascript"></script>
    
</body>

</html>