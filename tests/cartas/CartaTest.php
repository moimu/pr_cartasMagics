<?php
declare(strict_types=1);

namespace Moi\Test\Cartas;

use Moi\Cartas\Carta;
use PHPUnit\Framework\TestCase;

Class CartaTest extends TestCase{
    /**
     * covers ::__toString
     * 
     */
    public function testDevuelveTrueSiNombreConstruidoEsString(){
        $sut = new Carta(100,'Dragón Prueba','6','1','15',2,'1',0,'4',
        'img/dibujo/Dragónvoraz.png','2','Dragón','3',
        'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
        Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
        Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
        al doble del número de Trasgos que devoró.','1','',
        4,4,'Dominick Domingo',75,'#f4e1d2',1);

        $retorno =  $sut->__toString();
        
        $esperado = "
        'id:   100<br> nombre:   Dragón Prueba<br> fondo:   6<br>\r\n
          shiny: 1<br> colormana1: 15<br> cantidad: 2<br> \r\n
          colormana2: 1<br> cantidad: 0<br>\r\n
          manainc: 4<br> imagen: img/dibujo/Dragónvoraz.png<br> \r\n
          tipo: 2<br> tipo especifico: Dragón<br> expansión: 3<br>\r\n
          habilidad: Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.\r\n
          Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)\r\n
          Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual \r\n
          al doble del número de Trasgos que devoró.<br> imagen tierra: 1<br> texto ambiente: <br>\r\n
         fuerza: 4<br> resistencia: 4<br>\r\n
         artista: Dominick Domingo<br> numero coleccion: 75<br>\r\n
         colorbase: #f4e1d2<br> cantidad: 1<br><br>'

        ";
        $this->assertEquals($esperado , $retorno);
    }
}