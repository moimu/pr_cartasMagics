<?php
/**
 * La clase utiles contendrá en sus métodos 
 * estructuras html básicas en la aplicación
 * con el fin de no reescribir código y normalizar 
 * dichas estructuras
 * 
 * @param $title <titulo correspondiente a head>
 * @param $rutacss <dirección y fichero css a aplicar>
 * @param $class1 <nombre de clase a aplicar>
 * @param $class2... <nombre de clase a aplicar>
 * @param $link1 <link asociado al menú navegación del header>
 * @param $link2 <link asociado al menú navegación del header>
 * 
 */
class Utiles{

    private string $title;
    private string $rutacss;
    private string $class1;
    private string $class2;
    private string $class3;
    private string $class4;
    private string $class5;
    private string $link1;
    private string $link2;
    
    public function __construct(
        string $title = 'Colección cartas magic',
        string $rutacss = 'css/styles1.css',
        string $class1 = 'body',
        string $class2 = 'indexheader',
        string $class3 = 'logoymenu',
        string $class4 = 'menu',
        string $class5 = 'indexfooter',
        string $link1 = 'index.php',
        string $link2 = 'crearcarta.php'
    ){
        $this->title = $title;
        $this->rutacss = $rutacss;
        $this->class1 = $class1;
        $this->class2 = $class2;
        $this->class3 = $class3;
        $this->class4 = $class4;
        $this->class5 = $class5;
        $this->link1 = $link1;
        $this->link2 = $link2;

    }
    
    public function html_ini(){
        echo "<!DOCTYPE html>
        <html lang=\"es\"> ";
    }

    public function html_fin(){
        echo "</html>";
    }

    public function html_head(){
        echo "
        <head>
            <meta charset=\"UTF-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <title> {$this->title} </title>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{$this->rutacss}\">
        </head>";
    }

    public function html_body_ini(){
        echo "<body class=\" {$this->class1} \" >";
    }

    public function html_body_fin(){
        echo "</body>";
    }

    public function html_header(){
        echo "<header class=\" {$this->class2} \"> 
                <section class=\" {$this->class3} \">
                    <header >
                        <h1> Magics </h1>
                    </header>
                    <main>
                        <nav class=\" {$this->class4} \">
                            <ol>
                                <li><a href=\" {$this->link1} \"> Galeria </a></li>
                                <li><a href=\" {$this->link2} \"> Crear carta </a></li>
                            </ol>
                        </nav>
                    </main>
                </section>
              </header>";
    }

    public function html_footer_index(){
        echo "<footer class=\" {$this->class5} \">

                <section>
                    <header> <h1> Conteo de cartas </h1> </header>
                    <p>Total de cartas:  <script> document.writeln(totalcartas); </script> </p>
                    <p>Total de cartas diferentes: <script> document.writeln(totalcartasdif); </script> </p>
                </section>
    
            </footer>";
    }


    
}