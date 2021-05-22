<?php
declare(strict_types=1);

namespace Moi\Test\Cartas;

use Moi\Clases\Carta;
use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

Class CartaTest extends TestCase{
    
    /**
     * @covers Carta::idcarta
     */
    public function testDevuelveTrueSiIdcartaEsNumeroEntero(){
        $sut = new Carta(100,'Dragón Prueba','6','1','15',2,'1',0,'4',
        'img/dibujo/Dragónvoraz.png','2','Dragón','3',
        'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
        Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
        Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
        al doble del número de Trasgos que devoró.','1','',
        4,4,'Dominick Domingo',75,'#f4e1d2',1);
        $ret= $sut->idcarta();
        $this->assertIsInt($ret);
    }
    /**
     * @covers Carta::nombre
     */
    public function testDevuelveTrueSiNombreEsUnaCadena(){
        $sut = new Carta(100,'Dragón Prueba','6','1','15',2,'1',0,'4',
        'img/dibujo/Dragónvoraz.png','2','Dragón','3',
        'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
        Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
        Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
        al doble del número de Trasgos que devoró.','1','',
        4,4,'Dominick Domingo',75,'#f4e1d2',1);
        $ret= $sut->nombre();
        $this->assertIsString($ret);
    }
    /**
     * @covers Carta::fondo
     */
    public function testDevuelveTrueSiFondoEsUnaCadena(){
        $sut = new Carta(100,'Dragón Prueba','6','1','15',2,'1',0,'4',
        'img/dibujo/Dragónvoraz.png','2','Dragón','3',
        'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
        Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
        Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
        al doble del número de Trasgos que devoró.','1','',
        4,4,'Dominick Domingo',75,'#f4e1d2',1);
        $ret= $sut->fondo();
        $this->assertIsString($ret);
    }
    /**
     * @covers Carta::shiny
     */
    public function testDevuelveTrueSiShinyEsUnaCadena(){
        $sut = new Carta(100,'Dragón Prueba','6','1','15',2,'1',0,'4',
        'img/dibujo/Dragónvoraz.png','2','Dragón','3',
        'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
        Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
        Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
        al doble del número de Trasgos que devoró.','1','',
        4,4,'Dominick Domingo',75,'#f4e1d2',1);
        $ret= $sut->shiny();
        $this->assertIsString($ret);
    }
    /**
     * @covers Carta::mana1
     */
    public function testDevuelveTrueSiMana1EsUnaCadena(){
        $sut = new Carta(100,'Dragón Prueba','6','1','15',2,'1',0,'4',
        'img/dibujo/Dragónvoraz.png','2','Dragón','3',
        'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
        Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
        Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
        al doble del número de Trasgos que devoró.','1','',
        4,4,'Dominick Domingo',75,'#f4e1d2',1);
        $ret= $sut->mana1();
        $this->assertIsString($ret);
    }
    /**
     * @covers Carta::cantmana1
     */
    public function testDevuelveTrueSiCantmana1EsUnNumeroEntero(){
        $sut = new Carta(100,'Dragón Prueba','6','1','15',2,'1',0,'4',
        'img/dibujo/Dragónvoraz.png','2','Dragón','3',
        'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
        Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
        Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
        al doble del número de Trasgos que devoró.','1','',
        4,4,'Dominick Domingo',75,'#f4e1d2',1);
        $ret= $sut->cantmana1();
        $this->assertIsInt($ret);
    }
    /**
     * @covers Carta::mana2
     */
    public function testDevuelveTrueSiMana2EsUnEsUnaCadena(){
        $sut = new Carta(100,'Dragón Prueba','6','1','15',2,'1',0,'4',
        'img/dibujo/Dragónvoraz.png','2','Dragón','3',
        'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
        Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
        Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
        al doble del número de Trasgos que devoró.','1','',
        4,4,'Dominick Domingo',75,'#f4e1d2',1);
        $ret= $sut->mana2();
        $this->assertIsString($ret);
    }
    /**
     * @covers Carta::cantmana2
     */
    public function testDevuelveTrueSiCantmana2EsUnNumeroEntero(){
        $sut = new Carta(100,'Dragón Prueba','6','1','15',2,'1',0,'4',
        'img/dibujo/Dragónvoraz.png','2','Dragón','3',
        'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
        Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
        Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
        al doble del número de Trasgos que devoró.','1','',
        4,4,'Dominick Domingo',75,'#f4e1d2',1);
        $ret= $sut->cantmana2();
        $this->assertIsInt($ret);
    }
    /**
     * @covers Carta::cantmanainc
     */
    public function testDevuelveTrueSiCantmanaincEsUnaCadena(){
        $sut = new Carta(100,'Dragón Prueba','6','1','15',2,'1',0,'4',
        'img/dibujo/Dragónvoraz.png','2','Dragón','3',
        'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
        Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
        Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
        al doble del número de Trasgos que devoró.','1','',
        4,4,'Dominick Domingo',75,'#f4e1d2',1);
        $ret= $sut->cantmanainc();
        $this->assertIsString($ret);
    }
    /**
     * @covers Carta::img
     */
    public function testDevuelveTrueSiImgEsUnaCadena(){
        $sut = new Carta(100,'Dragón Prueba','6','1','15',2,'1',0,'4',
        'img/dibujo/Dragónvoraz.png','2','Dragón','3',
        'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
        Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
        Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
        al doble del número de Trasgos que devoró.','1','',
        4,4,'Dominick Domingo',75,'#f4e1d2',1);
        $ret= $sut->img();
        $this->assertIsString($ret);
    }
    /**
     * @covers Carta::tipo
     */
    public function testDevuelveTrueSiTipoEsUnaCadena(){
        $sut = new Carta(100,'Dragón Prueba','6','1','15',2,'1',0,'4',
        'img/dibujo/Dragónvoraz.png','2','Dragón','3',
        'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
        Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
        Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
        al doble del número de Trasgos que devoró.','1','',
        4,4,'Dominick Domingo',75,'#f4e1d2',1);
        $ret= $sut->tipo();
        $this->assertIsString($ret);
    }
    /**
     * @covers Carta::tipoespecifico
     */
    public function testDevuelveTrueSiTipoespecificoEsUnaCadena(){
        $sut = new Carta(100,'Dragón Prueba','6','1','15',2,'1',0,'4',
        'img/dibujo/Dragónvoraz.png','2','Dragón','3',
        'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
        Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
        Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
        al doble del número de Trasgos que devoró.','1','',
        4,4,'Dominick Domingo',75,'#f4e1d2',1);
        $ret= $sut->tipoespecifico();
        $this->assertIsString($ret);
    }
    /**
     * @covers Carta::expansion
     */
    public function testDevuelveTrueSiExpansionEsUnaCadena(){
        $sut = new Carta(100,'Dragón Prueba','6','1','15',2,'1',0,'4',
        'img/dibujo/Dragónvoraz.png','2','Dragón','3',
        'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
        Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
        Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
        al doble del número de Trasgos que devoró.','1','',
        4,4,'Dominick Domingo',75,'#f4e1d2',1);
        $ret= $sut->expansion();
        $this->assertIsString($ret);
    }
    /**
     * @covers Carta::habilidad
     */
    public function testDevuelveTrueSiHabilidadEsUnaCadena(){
        $sut = new Carta(100,'Dragón Prueba','6','1','15',2,'1',0,'4',
        'img/dibujo/Dragónvoraz.png','2','Dragón','3',
        'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
        Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
        Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
        al doble del número de Trasgos que devoró.','1','',
        4,4,'Dominick Domingo',75,'#f4e1d2',1);
        $ret= $sut->habilidad();
        $this->assertIsString($ret);
    }
    /**
     * @covers Carta::imgtierra
     */
    public function testDevuelveTrueSiImgtierraEsUnaCadena(){
        $sut = new Carta(100,'Dragón Prueba','6','1','15',2,'1',0,'4',
        'img/dibujo/Dragónvoraz.png','2','Dragón','3',
        'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
        Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
        Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
        al doble del número de Trasgos que devoró.','1','',
        4,4,'Dominick Domingo',75,'#f4e1d2',1);
        $ret= $sut->imgtierra();
        $this->assertIsString($ret);
    }
    /**
     * @covers Carta::textambiente
     */
    public function testDevuelveTrueSiTextambienteEsUnaCadena(){
        $sut = new Carta(100,'Dragón Prueba','6','1','15',2,'1',0,'4',
        'img/dibujo/Dragónvoraz.png','2','Dragón','3',
        'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
        Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
        Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
        al doble del número de Trasgos que devoró.','1','',
        4,4,'Dominick Domingo',75,'#f4e1d2',1);
        $ret= $sut->textambiente();
        $this->assertIsString($ret);
    }
    /**
     * @covers Carta::fuerza
     */
    public function testDevuelveTrueSiFuerzaEsNumeroEntero(){
        $sut = new Carta(100,'Dragón Prueba','6','1','15',2,'1',0,'4',
        'img/dibujo/Dragónvoraz.png','2','Dragón','3',
        'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
        Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
        Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
        al doble del número de Trasgos que devoró.','1','',
        4,4,'Dominick Domingo',75,'#f4e1d2',1);
        $ret= $sut->fuerza();
        $this->assertIsInt($ret);
    }
    /**
     * @covers Carta::resistencia
     */
    public function testDevuelveTrueSiResistenciaEsNumeroEntero(){
        $sut = new Carta(100,'Dragón Prueba','6','1','15',2,'1',0,'4',
        'img/dibujo/Dragónvoraz.png','2','Dragón','3',
        'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
        Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
        Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
        al doble del número de Trasgos que devoró.','1','',
        4,4,'Dominick Domingo',75,'#f4e1d2',1);
        $ret= $sut->resistencia();
        $this->assertIsInt($ret);
    }
    /**
     * @covers Carta::artista
     */
    public function testDevuelveTrueSiArtistaEsUnaCadena(){
        $sut = new Carta(100,'Dragón Prueba','6','1','15',2,'1',0,'4',
        'img/dibujo/Dragónvoraz.png','2','Dragón','3',
        'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
        Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
        Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
        al doble del número de Trasgos que devoró.','1','',
        4,4,'Dominick Domingo',75,'#f4e1d2',1);
        $ret= $sut->artista();
        $this->assertIsString($ret);
    }
    /**
     * @covers Carta::numcoleccion
     */
    public function testDevuelveTrueSiNumcoleccionEsNumeroEntero(){
        $sut = new Carta(100,'Dragón Prueba','6','1','15',2,'1',0,'4',
        'img/dibujo/Dragónvoraz.png','2','Dragón','3',
        'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
        Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
        Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
        al doble del número de Trasgos que devoró.','1','',
        4,4,'Dominick Domingo',75,'#f4e1d2',1);
        $ret= $sut->numcoleccion();
        $this->assertIsInt($ret);
    }
    /**
     * @covers Carta::colorbase
     */
    public function testDevuelveTrueSiColorbaseEsUnaCadena(){
        $sut = new Carta(100,'Dragón Prueba','6','1','15',2,'1',0,'4',
        'img/dibujo/Dragónvoraz.png','2','Dragón','3',
        'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
        Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
        Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
        al doble del número de Trasgos que devoró.','1','',
        4,4,'Dominick Domingo',75,'#f4e1d2',1);
        $ret= $sut->colorbase();
        $this->assertIsString($ret);
    }
    /**
     * @covers Carta::cantidad
     */
    public function testDevuelveTrueSiCantidadEsNumeroEntero(){
        $sut = new Carta(100,'Dragón Prueba','6','1','15',2,'1',0,'4',
        'img/dibujo/Dragónvoraz.png','2','Dragón','3',
        'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
        Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
        Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
        al doble del número de Trasgos que devoró.','1','',
        4,4,'Dominick Domingo',75,'#f4e1d2',1);
        $ret= $sut->cantidad();
        $this->assertIsInt($ret);
    }

}