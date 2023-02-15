create database if not exists productos;
use productos;
create table lamparas(
	referencia int primary key,
    tipo varchar (20),
    nombre varchar (255),
    caracteristicas text,
    precio int
);
create table bombillas(
	referencia int primary key,
    tipo varchar (20),
    nombre varchar (255),
    caracteristicas text,
    precio int
);

insert into lamparas values(151456057, 'techo', 'LAMPARA CLEMATIS 6XE14 BLANCO/ORO REGX68X68 CM', 'Luz difusa general - Color pantalla Blanco - Color armazon blanco/oro - Voltaje:220-240', 145);
insert into lamparas values(124693020, 'techo', 'COLGANTE RUSTICO RUECA 3XE27 MARRON', 'Luz difusa general-Voltaje:	220-240 V - Color armazon Marron', 210);
insert into lamparas values(1508, 'techo', 'LAMPARA 4XE27 BARRIL NEGRO/MARRON REGX42X32 CM', 'Luz directa- Color Negro/Marron- Voltaje:	220-240 V', 180);
insert into lamparas values(051996590, 'techo', 'COLGANTE MEDIANO HAITI 4XE27 CROMO/NEGRO REGX65X65 CM', 'Luz difusa general - Color Negro/Cromo Voltaje:220-240 V', 138);
insert into lamparas values(068453082, 'techo', 'LAMPARA LANZAROTE GRIS 3XE27 (REGX110)', 'Luz directa - Color Cromo/Marron Voltaje:220-240 V', 260);
insert into lamparas values(188595051, 'techo', 'COLGANTE NATALIA 1XE27 CUERO/SACO-BEIS REGX50X50CM', 'Luz directa - Color Cuero - Voltaje:	220-240 V', 260);
insert into lamparas values(152471020, 'sobremesa', 'SOBREMESA DENALI 1XE27 CROMO/NEGRO 36X23X14 CM', 'Foco orientable - Color Negro/Cromo - Voltaje:220-240 V', 86);
insert into lamparas values(074971002, 'sobremesa', 'SOBREMESA 22W 4000K ACROPOLIS BLANCO/CROMO 1760LM 82X16X16', 'Luz Blanco Natural - Color Cromo - Voltaje:220-240 V', 149);
insert into lamparas values(152271025, 'sobremesa', 'SOBREMESA FUJI 1XE27 NEGRO/CROMO 38X35X14 CM', 'Luz difusa general - Color Negro/Cromo - Voltaje:220-240 V', 74);
insert into lamparas values(153671016, 'sobremesa', 'SOBREMESA CIUDAD DEL CABO 1L 6W 4000K NEGRO/ORO 42X23X15 CM 540 LM DIRIGIBLE Y ORIENTABLE', 'Luz Blanco natural - Color Negro/Oro - Voltaje:220-240 V', 240);
insert into lamparas values(051971082, 'sobremesa', 'SOBREMESA HAITI 1XE14 CROMO/TOPO 37X22X26 CM', 'Luz difusa general - Color Cromo - Voltaje:220-240 V', 125);
insert into lamparas values(179971060, 'sobremesa', 'SOBREMESA FABRIZIO 1XE14 NATURAL/VERDE BOTELLA 45X20X20 CM', 'Luz difusa general - Color Negro/Textil - Voltaje:220-240 V', 99);

insert into bombillas values(082311035, 'led', 'BOMBILLA 5W 6500K ESFERICA E27 500LM 74X45D FABRILED', 'Blanco frío - 500 lumenes - 5W', 8.50);
insert into bombillas values(148002351, 'led', 'BOMBILLA TUBULAR 3,5W 3000K FABRIPLUS E14 315LM 5,8X2,4X2,4 CM', 'Blanco cálido - 260 lumenes - 3.5W', 6.70);
insert into bombillas values(082392120, 'led', 'BOMBILLA 10W 4000K REFLECTORA E14 1000LM 8X5D FABRILED', 'Blanco natural - 1000 lumenes - 10W', 16.30);
insert into bombillas values(071212014, 'led', 'BOMB. 4W 3000K LED FILAMENTO ESFERICA MATE E14 400LM 6,5X4,5X4,5 CM', 'Blanco calido - 400 lumenes - 4W', 9.10);
insert into bombillas values(148003026, 'led', 'BOMBILLA G9 6W 4000K FABRIPLUS 600LM 6X1,5X1,5 CM', 'Blanco natural - 600 lumenes - 6W', 13.90);
insert into bombillas values(148074027, 'led', 'BOMBILLA GU10 DICROICA 7W 4000K FABRIPLUS 630LM 5,8X4,9X4,9 CM', 'Blanco natural - 630 lumenes - 7W', 10.50);
insert into bombillas values(872383558, 'bajo consumo', 'BOMBILLA ECO. GU10 15W EXT.MINISPIRAL 2700K CALIDA', 'Blanco calido - temperatura luz 2700 - 15W', 13.10);
insert into bombillas values(872483044, 'bajo consumo', 'BOMBILLA ECO.E14 MINIGLOBO 8W 2700K CALIDA', 'Blanco calido - temperatura luz 2700 - 8W', 12.90);
insert into bombillas values(872481190, 'bajo consumo', 'BOMBILLA ECO.E14- 11W 2700K CALIDA', 'Blanco calido - temperatura luz 2700 - 11W', 17.60);
insert into bombillas values(872481008, 'bajo consumo', 'BOMB.ECO.E14-11W SUPERMINIESPIRAL 4000K', 'Blanco natural - temperatura luz 4000 - 11W', 8.60);
insert into bombillas values(872481080, 'bajo consumo', 'BOMB.ECO.E14-11W SUPERMINIESPIRAL 2700K', 'Blanco calido - temperatura luz 2700 - 11W', 7.60);
insert into bombillas values(872383191, 'bajo consumo', 'BOMBILLA ECO GU10 11W 2700K CALIDA', 'Blanco calido - temperatura luz 2700 - 11W', 12.10);

select * from bombillas where tipo = 'bajo consumo' ;

