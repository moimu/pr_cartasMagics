-- 8 tipos de carta
INSERT INTO `tipos`(`descripcion`) 
VALUES (''),
('Criatura'),('Artefacto'),
('Criatura artefacto'),('Criatura legendaria'),
('Instantáneo'),('Encantamiento'),
('Conjuro'),('Tierra');

-- fondos
INSERT INTO `fondos`(`descripcion`,`direccion`) 
VALUES ('Sin fondo','img/fondos/sinfondo.png'),
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
'img/dibujo/Caminoalexilio.png','6','','4',
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

INSERT INTO `cartas`(`nombre`,`idfondo`,`idshiny`,`idmana1`,`cantmana1`,`idmana2`,
`cantmana2`,`idmanaincoloro`,`img`,`idtipo`,`tipoespecifico`,
`idexpansion`,`habilidad`,`idimgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`,`colorbase`,`cantidad`) 
VALUES ('Actuación de telemin','3','1','12','2','1','0','4',
'img/dibujo/Actuacióndetelemin.png','8','','3',
'El oponente objetivo nuestra cartas de la parte superior de su biblioteca hasta que muestre
una carta de criatuta. Este jugador pone en su cementerio todas las cartas que no sean de criatura
mostradas de esta manera, luego tú pones en juego bajo tu control la carta de criatura.',
'1','',
'0','0','Izzy','25','#d5dfe9','1');

INSERT INTO `cartas`(`nombre`,`idfondo`,`idshiny`,`idmana1`,`cantmana1`,`idmana2`,
`cantmana2`,`idmanaincoloro`,`img`,`idtipo`,`tipoespecifico`,
`idexpansion`,`habilidad`,`idimgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`,`colorbase`,`cantidad`)  
VALUES ('Voces del vacío','5','1','14','1','1','0','5',
'img/dibujo/Vocesdelvacío.png','8','','4',
'Dominio - El jugador objetivo descarta una carta por cada tipo de tierra
básica entre las tierras que controlas.','1',
'Cuando Grixis Chocó con el resto de Alara, los mundos empezaron a oír
los odiosos susurros de los muertos.',
'0','0','Rk Post','35','#eae7e0','1');

INSERT INTO `cartas`(`nombre`,`idfondo`,`idshiny`,`idmana1`,`cantmana1`,`idmana2`,
`cantmana2`,`idmanaincoloro`,`img`,`idtipo`,`tipoespecifico`,
`idexpansion`,`habilidad`,`idimgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`,`colorbase`,`cantidad`) 
VALUES ('Cantante solar cyliana','7','1','16','1','1','0','2',
'img/dibujo/Cantantesolarcyliana.png','2','Chamán elfo','3',
'La Cantante solar cyliana y cada otra criatura con su mismo nombre obtiene +3/+3 hasta el
final del turno',
'1','"El sol brilla más sobre los fuertes."',
'2','2','Jesper Jiping','22','#d6e7d4','1');

INSERT INTO `cartas`(`nombre`,`idfondo`,`idshiny`,`idmana1`,`cantmana1`,`idmana2`,
`cantmana2`,`idmanaincoloro`,`img`,`idtipo`,`tipoespecifico`,
`idexpansion`,`habilidad`,`idimgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`,`colorbase`,`cantidad`) 
VALUES ('Majestad del alma','7','1','16','1','1','0','5',
'img/dibujo/Majestaddelalma.png','8','','3',
'Roba una cantidad de cartas igual a la fuerza de la criatura objetivo que controlas.',
'1','Esculpe un avatar de sabiduría y fortaleza.',
'0','0','Jesper Jiping','3','#d6e7d4','1');

INSERT INTO `cartas`(`nombre`,`idfondo`,`idshiny`,`idmana1`,`cantmana1`,`idmana2`,
`cantmana2`,`idmanaincoloro`,`img`,`idtipo`,`tipoespecifico`,
`idexpansion`,`habilidad`,`idimgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`,`colorbase`,`cantidad`) 
VALUES ('Sello del trono vacío','4','1','13','2','1','0','4',
'img/dibujo/Sellodeltronovacío.png','7','','3',
'Siempre que jueges un hechizo de encantamiento, pon en juego una ficha de criatura
Ángel blanca con la habilidad de volar.','1',
'Cuando Asha dejó Bant, se aseguró de que el mundo tuviera protección y orden
en su ausencia.',
'0','0','Cyrill Van Der Haegen','38','#f3f1e6','1');

INSERT INTO `cartas`(`nombre`,`idfondo`,`idshiny`,`idmana1`,`cantmana1`,`idmana2`,
`cantmana2`,`idmanaincoloro`,`img`,`idtipo`,`tipoespecifico`,
`idexpansion`,`habilidad`,`idimgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`,`colorbase`,`cantidad`) 
VALUES ('Piedra obstructora','3','1','12','1','1','0','4',
'img/dibujo/Piedraobstructora.png','3','','2',
'Las criaturas que controlan tus oponentes obtienen -1/-0.','1',
'"La piedra es más poderosa que nunca.
La carne que se arrastra en nuestra tierra se hará más débil y descuidada."
-Nicalvs, archimago de Esper',
'0','0','Warren Mahry','32','#d5dfe9','1');

INSERT INTO `cartas`(`nombre`,`idfondo`,`idshiny`,`idmana1`,`cantmana1`,`idmana2`,
`cantmana2`,`idmanaincoloro`,`img`,`idtipo`,`tipoespecifico`,
`idexpansion`,`habilidad`,`idimgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`,`colorbase`,`cantidad`) 
VALUES ('Huerto exótico','4','1','1','0','1','0','1',
'img/dibujo/Huertoexótico.png','9','','3',
'Agrega a tu reserva de maná un maná de cualquier color que pudiera producir
una tierra que controle un oponente.','1',
'"Fue una mañana extraña. Cuenado despertamos, encontramos nuestros arboles
transformados. No sabiamos si regarlos o lustrarlos."
-Pulan, jardinero de Bant',
'0','0','Steven Belledin','24','#f3f1e6','1');

INSERT INTO `cartas`(`nombre`,`idfondo`,`idshiny`,`idmana1`,`cantmana1`,`idmana2`,
`cantmana2`,`idmanaincoloro`,`img`,`idtipo`,`tipoespecifico`,
`idexpansion`,`habilidad`,`idimgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`,`colorbase`,`cantidad`) 
VALUES ('Frontera inestable','4','1','1','0','1','0','1',
'img/dibujo/Fronterainestable.png','9','','4',
'Agrega 1 a tu reserva de maná.
La tierra objetivo que controles es del tipo tierra básica de tu elección
hasta el final del turno.','1',
'Los tragos se durmieron en Jund y despertaron en Grisis. No habían visto
jamás un zombie. Nunca volverían a ver uno.',
'0','0','Sahn Ayon','34','#f3f1e6','1');

INSERT INTO `cartas`(`nombre`,`idfondo`,`idshiny`,`idmana1`,`cantmana1`,`idmana2`,
`cantmana2`,`idmanaincoloro`,`img`,`idtipo`,`tipoespecifico`,
`idexpansion`,`habilidad`,`idimgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`,`colorbase`,`cantidad`) 
VALUES ('Ziggurat antiguo','4','1','1','0','1','0','1',
'img/dibujo/Zigguratantiguo.png','9','','4',
'Agrega 1 maná de cualquier color a tu reserva de maná. Usa este maná sólo
para jugar hechizos de criatura.','1',
'Construido en honor a las criaturas de Alara, el ziggurat desapareció hace mucho. 
Cuando Progenitus despertó, el templo surgió nuevamente.',
'0','0','John Avon','32','#f3f1e6','1');