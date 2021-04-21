-- 8 tipos de carta

INSERT INTO `tipo`(`descripcion`) 
VALUES ('Criatura'),('Artefacto'),
('Criatura artefacto'),('Criatura legendaria'),
('Instantáneo'),('Encantamiento'),('Conjuro'),
('Tierra');

-- 10 cartas

INSERT INTO `cartas`(`nombre`,`fondo`,`mana1`,`cantmana1`,`mana2`,
`cantmana2`,`cantmanainc`,`img`,`idtipo`,`tipoespecifico`,
`expansion`,`habilidad`,`imgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`) 
VALUES ('Escudero aven','img/fondo/blanco.png','img/mana/manaBlanco.png',
'1','','0','img/mana/incoloro1.png',
'img/dibujo/Escuderoaven.png','1','Soldado ave','img/expansion/conflux.jpg',
'Vuela. Exaltado. (Siempre que una criatura que controles ataque sola,
esa criatura obtiene +1/+1 hasta el final del turno.)','',
'Cuando los mansos entran en la batalla, el coraje es contagioso.',
'1','1','David Palumbo','3');

INSERT INTO `cartas`(`nombre`,`fondo`,`mana1`,`cantmana1`,`mana2`,
`cantmana2`,`cantmanainc`,`img`,`idtipo`,`tipoespecifico`,
`expansion`,`habilidad`,`imgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`) 
VALUES ('Camino al exilio','img/fondo/blanco.png','img/mana/manaBlanco.png',
'1','','0','',
'img/dibujo/CaminoalExilio.png','5','','img/expansion/conflux.jpg',
'Remueve del juego la criatura objetivo. Su controlador puede buscar en su biblioteca
una carta de tierra básica, ponerla en juego girada y luego barajar su biblioteca.','',
'','0','0','Todd Lockwood','15');

INSERT INTO `cartas`(`nombre`,`fondo`,`mana1`,`cantmana1`,`mana2`,
`cantmana2`,`cantmanainc`,`img`,`idtipo`,`tipoespecifico`,
`expansion`,`habilidad`,`imgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`) 
VALUES ('Strix parasitario','img/fondo/azul.png','img/mana/manaAzul.png',
'1','','0','img/mama/incoloro2.png',
'img/dibujo/Strixparasitario.png','3','Ave','img/expansion/conflux.jpg',
'Vuela. Cuando el Strix parasitario entre en juego, si controlas un permanente negro,
el jugador objetivo pierde 2 vidas y tu ganas dos vidas.','',
'Tras no encontrar sustento en los bordes de Grixis, se volvió hacia los cielos de Bant.',
'2','2','Steven Belledin','32');

INSERT INTO `cartas`(`nombre`,`fondo`,`mana1`,`cantmana1`,`mana2`,
`cantmana2`,`cantmanainc`,`img`,`idtipo`,`tipoespecifico`,
`expansion`,`habilidad`,`imgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`) 
VALUES ('Raices corrompidas','img/fondo/negro.png','img/mana/manaNegro.png',
'1','','0','',
'img/dibujo/Raícescorrompidas.png','6','Aura','img/expansion/conflux.jpg',
'Encantar bosque o llanura. Siempre que la tierra encantada sea girada,
 su controlador pierde 2 vidas.','',
'Los huesos de los muertos de Jund reaparecieron en Naya, envenenado la selva y
matando las cosechas de los siembrasoles.',
'0','0','Mark Hyzer','41');

INSERT INTO `cartas`(`nombre`,`fondo`,`mana1`,`cantmana1`,`mana2`,
`cantmana2`,`cantmanainc`,`img`,`idtipo`,`tipoespecifico`,
`expansion`,`habilidad`,`imgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`) 
VALUES ('Minotauro del desfiladero','img/fondo/rojo.png','img/mana/manaRojo.png',
'1','','0','img/mana/incoloro3.png',
'img/dibujo/Minotaurodeldesfiladero.png','1','Guerrero minotauro','img/expansion/conflux.jpg',
'','',
'En Jund, los profundos desfiladeros eran los mejores lugares para esconderse. 
Cuando los trasgos vagaron por Naya, descubrieron que eso no era tan cierto.',
'3','3','Steve Prescott','60');

INSERT INTO `cartas`(`nombre`,`fondo`,`mana1`,`cantmana1`,`mana2`,
`cantmana2`,`cantmanainc`,`img`,`idtipo`,`tipoespecifico`,
`expansion`,`habilidad`,`imgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`) 
VALUES ('Dragón voraz','img/fondo/rojo.png','img/mana/manaRojo.png',
'2','','0','img/mana/incoloro3.png',
'img/dibujo/Dragónvoraz.png','1','Dragón','img/expansion/conflux.jpg',
'Vuela. Devorar 1.(En cuanto esto entra en juego puedes sacrificar cualquiera cantidad de criaturas.
Esta criatura entra en juego con esa cantidad de contadores +1/+1 sobre ella.)
Cuando el Dragón voraz entre en juego, hace daño a la criatura o jugador objetivo igual 
al doble del número de Trasgos que devoró.','','',
'4','4','Dominick Domingo','75');

INSERT INTO `cartas`(`nombre`,`fondo`,`mana1`,`cantmana1`,`mana2`,
`cantmana2`,`cantmanainc`,`img`,`idtipo`,`tipoespecifico`,
`expansion`,`habilidad`,`imgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`) 
VALUES ('Behemot trotaladeras','img/fondo/verde.png','img/mana/manaVerde.png',
'1','','0','img/mana/incoloro3.png',
'img/dibujo/Behemottrotaladeras.png','1','Bestia rinoceronte','img/expansion/conflux.jpg',
'Behemot trotaladeras tiene la habilidad de prisa miestras controles un permanente rojo. 
Behemot trotaladeras tiene la habilidad de vínculo vital mientras controles un permanente blanco.',
'','Es adorado por su poder, celebrado por su gracia, y temido por las avalanchas que desatan sus pasos.',
'5','3','Wayne Reynolds','79');


INSERT INTO `cartas`(`nombre`,`fondo`,`mana1`,`cantmana1`,`mana2`,
`cantmana2`,`cantmanainc`,`img`,`idtipo`,`tipoespecifico`,
`expansion`,`habilidad`,`imgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`) 
VALUES ('Nacatl indómito','img/fondo/verde.png','img/mana/manaVerde.png',
'1','','0','img/mana/incoloro1.png',
'img/dibujo/Nacatlindómito.png','1','Guerrero felino','img/expansion/conflux.jpg',
'Protección contra artefactos.',
'','Protección contra artefactos.
“Las hojas se desafilan y las armaduras se mellan. 
Marisi nos enseñó que el instinto es lo único que un verdadero guerrero necesita.” —Ajani',
'2','1','Paolo Parente','86');

INSERT INTO `cartas`(`nombre`,`fondo`,`mana1`,`cantmana1`,`mana2`,
`cantmana2`,`cantmanainc`,`img`,`idtipo`,`tipoespecifico`,
`expansion`,`habilidad`,`imgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`) 
VALUES ('Carácter sombrío','img/fondo/rojo.png','img/mana/manaRojo.png',
'1','','0','img/mana/incoloro2.png',
'img/dibujo/Caráctersombrío.png','5','','img/expansion/conflux.jpg',
'El Carácter sombrío hace 2 puntos de daño a la criatura objetivo. 
Si controlas un permanente negro, en vez de eso, destruye la criatura.',
'','Cuando tienes el carácter de un dragón, puedes ganar cualquier discusión.',
'0','0','Jaime Jones','61');

INSERT INTO `cartas`(`nombre`,`fondo`,`mana1`,`cantmana1`,`mana2`,
`cantmana2`,`cantmanainc`,`img`,`idtipo`,`tipoespecifico`,
`expansion`,`habilidad`,`imgtierra`,`textambiente`,`fuerza`,
`resistencia`,`artista`,`numcoleccion`) 
VALUES ('Rabia maníaca','img/fondo/rojo.png','img/mana/manaRojo.png',
'1','','0','img/mana/incoloro1.png',
'img/dibujo/Rabiamaníaca.png','6','Aura','img/expansion/conflux.jpg',
'Encantar criatura.
La criatura encantada obtiene +2/+2 y no puede bloquear.',
'','Las astillas de sangrita hicieron al trasgo más fuerte, pero no lo hicieron más listo.',
'0','0','Brandon Kitkouski','68');