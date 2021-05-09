<?php
declare(strict_types=1);

namespace Moi\Test\Cartas;

use Moi\Cartas\Carta;
use PHPUnit\Framework\TestCase;

Class CartaTest extends TestCase{


    /**
     * covers ::__construct
     * 
     */
    public function testDevuelveTrueSiNombreConstruidoEsString(){
        $sut = new Carta("100",'Dragón Prueba','6','1','15',2,'1',0,'4',
        'img/dibujo/Dragónvoraz.png','2','Dragón','3',
        'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
        Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
        Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
        al doble del número de Trasgos que devoró.','1','',
        4,4,'Dominick Domingo',75,'#f4e1d2',1);

        $sut->nombre;
        
        $this->assertIsString($sut->imprime());
        
    }
}

// $sut = new Carta(100,'Dragón Prueba','6','1','15',2,'1',0,'4',
//     'img/dibujo/Dragónvoraz.png','2','Dragón','3',
//     'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
//     Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
//     Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
//     al doble del número de Trasgos que devoró.','1','',
//     4,4,'Dominick Domingo',75,'#f4e1d2',1);