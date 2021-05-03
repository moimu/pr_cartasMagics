-- 8 tipos de carta
INSERT INTO `tipos`(`descripcion`) 
VALUES (''),
('Criatura'),('Artefacto'),
('Criatura artefacto'),('Criatura legendaria'),
('Instantáneo'),('Encantamiento'),
('Conjuro'),('Tierra');

-- fondos
INSERT INTO `fondos`(`descripcion`,`direccion`) 
VALUES ('Sin fondo',''),
('fondo shiny','img/fondos/shiny.png'), 
('fondo azul','img/fondos/azul.png'), 
('fondo blanco','img/fondos/blanco.png'), 
('fondo negro','img/fondos/negro.png'), 
('fondo rojo','img/fondos/rojo.png'), 
('fondo verde','img/fondos/verde.png');

-- manas
INSERT INTO `manas`(`descripcion`,`direccion`) 
VALUES ('Sin mana',''),
('un mana incoloro','img/manas/incoloro1.png'),
('dos manas incoloro','img/manas/incoloro2.png'), 
('tres manas incoloro','img/manas/incoloro3.png'),
('cuatro manas incoloro','img/manas/incoloro4.png'),
('cinco manas incoloro','img/manas/incoloro5.png'),
('seis manas incoloro','img/manas/incoloro6.png'),
('siete manas incoloro','img/manas/incoloro7.png'),
('ocho manas incoloro','img/manas/incoloro8.png'),
('nueve manas incoloro','img/manas/incoloro9.png'),
('diez manas incoloro','img/manas/incoloro10.png'),
('mana azul','img/manas/manaAzul.png'),
('mana blanco','img/manas/manaBlanco.png'),
('mana negro','img/manas/manaNegro.png'),
('mana rojo','img/manas/manaRojo.png'),
('mana verde','img/manas/manaVerde.png');
-- imagenes tierras

INSERT INTO `imgtierras`(`descripcion`,`direccion`) 
VALUES ('Sin imagen',''), 
('llanura básica','img/tierras/llanura.png'), 
('pantano básico','img/tierras/pantano.png'), 
('montaña básica','img/tierras/montana.png'), 
('bosque básico','img/tierras/bosque.png'), 
('isla básica','img/tierras/isla.png'), 
('llanura nevada','img/tierras/nevadoLlanura.png'), 
('pantano nevado','img/tierras/nevadoPantano.png'), 
('montaña nevada','img/tierras/nevadoMontana.png'), 
('bosque nevado','img/tierras/nevadoBosque.png'), 
('isla nevada','img/tierras/nevadoIsla.png');

-- expansiones
INSERT INTO `expansiones`(`descripcion`,`direccion`) 
VALUES ('Sin expansión',''),
('conflux negro','img/expansiones/confluxNegro.png'), 
('conflux dorado','img/expansiones/confluxDorado.png'), 
('conflux gris','img/expansiones/confluxGris.png'), 
('conflux rojo','img/expansiones/confluxRojo.png'); 

-- 10 cartas
INSERT INTO `cartas`(`nombre`,`idfondo`,`idshiny`,`idmana1`,`cantmana1`,`idmana2`,
`cantmana2`,`idmanaincoloro`,`img`,`idtipo`,`tipoespecifico`,
`idexpansion`,`habilidad`,`idimgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`,`colorbase`,`cantidad`) 
VALUES ('Escudero aven','4','1','13','1','1','0','2',
'img/dibujo/Escuderoaven.png','2','Soldado ave','2',
'Vuela. Exaltado. (Siempre que una criatura que controles ataque sola,
esa criatura obtiene +1/+1 hasta el final del turno.)','1',
'Cuando los mansos entran en la batalla, el coraje es contagioso.',
'1','1','David Palumbo','3','#f3f1e6','1');


INSERT INTO `cartas`(`nombre`,`idfondo`,`idshiny`,`idmana1`,`cantmana1`,`idmana2`,
`cantmana2`,`idmanaincoloro`,`img`,`idtipo`,`tipoespecifico`,
`idexpansion`,`habilidad`,`idimgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`,`colorbase`,`cantidad`) 
VALUES ('Camino al exilio','4','1','13','1','1','0','1',
'img/dibujo/CaminoalExilio.png','6','','4',
'Remueve del juego la criatura objetivo. Su controlador puede buscar en su biblioteca
una carta de tierra básica, ponerla en juego girada y luego barajar su biblioteca.','1',
'','0','0','Todd Lockwood','15','#f3f1e6','1');

INSERT INTO `cartas`(`nombre`,`idfondo`,`idshiny`,`idmana1`,`cantmana1`,`idmana2`,
`cantmana2`,`idmanaincoloro`,`img`,`idtipo`,`tipoespecifico`,
`idexpansion`,`habilidad`,`idimgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`,`colorbase`,`cantidad`) 
VALUES ('Strix parasitario','3','1','12','1','1','0','3',
'img/dibujo/Strixparasitario.png','4','Ave','2',
'Vuela. Cuando el Strix parasitario entre en juego, si controlas un permanente negro,
el jugador objetivo pierde 2 vidas y tu ganas dos vidas.','1',
'Tras no encontrar sustento en los bordes de Grixis, se volvió hacia los cielos de Bant.',
'2','2','Steven Belledin','32','#d5dfe9','1');

INSERT INTO `cartas`(`nombre`,`idfondo`,`idshiny`,`idmana1`,`cantmana1`,`idmana2`,
`cantmana2`,`idmanaincoloro`,`img`,`idtipo`,`tipoespecifico`,
`idexpansion`,`habilidad`,`idimgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`,`colorbase`,`cantidad`)  
VALUES ('Raices corrompidas','5','1','14','1','1','0','1',
'img/dibujo/Raícescorrompidas.png','7','Aura','4',
'Encantar bosque o llanura. Siempre que la tierra encantada sea girada,
 su controlador pierde 2 vidas.','1',
'Los huesos de los muertos de Jund reaparecieron en Naya, envenenado la selva y
matando las cosechas de los siembrasoles.',
'0','0','Mark Hyzer','41','#eae7e0','1');

INSERT INTO `cartas`(`nombre`,`idfondo`,`idshiny`,`idmana1`,`cantmana1`,`idmana2`,
`cantmana2`,`idmanaincoloro`,`img`,`idtipo`,`tipoespecifico`,
`idexpansion`,`habilidad`,`idimgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`,`colorbase`,`cantidad`) 
VALUES ('Minotauro del desfiladero','6','1','15','1','1','0','4',
'img/dibujo/Minotaurodeldesfiladero.png','2','Guerrero minotauro','2',
'','1',
'En Jund, los profundos desfiladeros eran los mejores lugares para esconderse. 
Cuando los trasgos vagaron por Naya, descubrieron que eso no era tan cierto.',
'3','3','Steve Prescott','60','#f4e1d2','1');


INSERT INTO `cartas`(`nombre`,`idfondo`,`idshiny`,`idmana1`,`cantmana1`,`idmana2`,
`cantmana2`,`idmanaincoloro`,`img`,`idtipo`,`tipoespecifico`,
`idexpansion`,`habilidad`,`idimgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`,`colorbase`,`cantidad`)  
VALUES ('Dragón voraz','6','1','15','2','1','0','4',
'img/dibujo/Dragónvoraz.png','2','Dragón','3',
'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
al doble del número de Trasgos que devoró.','1','',
'4','4','Dominick Domingo','75','#f4e1d2','1');

INSERT INTO `cartas`(`nombre`,`idfondo`,`idshiny`,`idmana1`,`cantmana1`,`idmana2`,
`cantmana2`,`idmanaincoloro`,`img`,`idtipo`,`tipoespecifico`,
`idexpansion`,`habilidad`,`idimgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`,`colorbase`,`cantidad`) 
VALUES ('Behemot trotaladeras','7','1','16','1','1','0','4',
'img/dibujo/Behemottrotaladeras.png','2','Bestia rinoceronte','3',
'Behemot trotaladeras tiene la habilidad de prisa miestras controles un permanente rojo. 
Behemot trotaladeras tiene la habilidad de vínculo vital mientras controles un permanente blanco.',
'1','Es adorado por su poder, celebrado por su gracia, y temido por las avalanchas que desatan sus pasos.',
'5','3','Wayne Reynolds','79','#d6e7d4','1');

INSERT INTO `cartas`(`nombre`,`idfondo`,`idshiny`,`idmana1`,`cantmana1`,`idmana2`,
`cantmana2`,`idmanaincoloro`,`img`,`idtipo`,`tipoespecifico`,
`idexpansion`,`habilidad`,`idimgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`,`colorbase`,`cantidad`) 
VALUES ('Nacatl indómito','7','1','16','1','1','0','2',
'img/dibujo/Nacatlindómito.png','2','Guerrero felino','2',
'Protección contra artefactos.',
'1','“Las hojas se desafilan y las armaduras se mellan. 
Marisi nos enseñó que el instinto es lo único que un verdadero guerrero necesita.” —Ajani',
'2','1','Paolo Parente','86','#d6e7d4','1');

INSERT INTO `cartas`(`nombre`,`idfondo`,`idshiny`,`idmana1`,`cantmana1`,`idmana2`,
`cantmana2`,`idmanaincoloro`,`img`,`idtipo`,`tipoespecifico`,
`idexpansion`,`habilidad`,`idimgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`,`colorbase`,`cantidad`) 
VALUES ('Carácter sombrío','6','1','15','1','1','0','3',
'img/dibujo/Caráctersombrío.png','6','','2',
'El Carácter sombrío hace 2 puntos de daño a la criatura objetivo. 
Si controlas un permanente negro, en vez de eso, destruye la criatura.',
'1','Cuando tienes el carácter de un dragón, puedes ganar cualquier discusión.',
'0','0','Jaime Jones','61','#f4e1d2','1');

INSERT INTO `cartas`(`nombre`,`idfondo`,`idshiny`,`idmana1`,`cantmana1`,`idmana2`,
`cantmana2`,`idmanaincoloro`,`img`,`idtipo`,`tipoespecifico`,
`idexpansion`,`habilidad`,`idimgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`,`colorbase`,`cantidad`) 
VALUES ('Rabia maníaca','6','1','15','1','1','0','2',
'img/dibujo/Rabiamaníaca.png','7','Aura','2',
'Encantar criatura.
La criatura encantada obtiene +2/+2 y no puede bloquear.',
'1','Las astillas de sangrita hicieron al trasgo más fuerte, pero no lo hicieron más listo.',
'0','0','Brandon Kitkouski','68','#f4e1d2','1');