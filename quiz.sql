-- DATABASE quiz
-- Crea db, y se mueve a ella
-- Crea tablas users, preguntas, respuestas y puntuaciones,
-- inserta preguntas respuestsa y puntuaciones de ejemplo (puedes no introducir las puntuaciones)

create database quiz;
use quiz;

CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT,
    nombre varchar(255),
    email varchar(50),
    password varchar(255),
    nick varchar(50),
    foto varchar(255),
    PRIMARY KEY (id)
);

CREATE TABLE preguntas (
    pre_id int NOT NULL AUTO_INCREMENT,
    pregunta varchar(255),
    res_id int,
    PRIMARY KEY (pre_id)
);

CREATE TABLE respuestas (
    res_id int NOT NULL AUTO_INCREMENT,
    respuesta varchar(255),
    pre_id int,
    PRIMARY KEY (res_id)
);

CREATE TABLE puntuaciones (
    id int NOT NULL AUTO_INCREMENT,   
    nick varchar(255),
    puntuacion int,
    PRIMARY KEY (id)
);

insert into preguntas values(1, '¿Cómo se llama el capitán de la legión de reconocimiento?', 2, "img_ruta");
insert into respuestas values(1, 'Pixix', 1);
insert into respuestas values(2, 'Erwin', 1);
insert into respuestas values(3, 'Armin', 1);
insert into respuestas values(4, 'Zeke', 1);

insert into preguntas values(2, '¿Cuántos yonkou/emperadores hay en One Piece?', 7, "img_ruta");
insert into respuestas values(5, '1', 2);
insert into respuestas values(6, '2', 2);
insert into respuestas values(7, '4', 2);
insert into respuestas values(8, '7', 2);

insert into preguntas values(3, '¿A que villa pertenece Jiraya?', 12, "img_ruta");
insert into respuestas values(9, 'Fuego', 3);
insert into respuestas values(10, 'Lluvia', 3);
insert into respuestas values(11, 'Aire', 3);
insert into respuestas values(12, 'Hoja', 3);

insert into preguntas values(4, '¿Cómo se llama el capitán de la legión de reconocimiento?', 14, "img_ruta");
insert into respuestas values(13, 'Pixix', 4);
insert into respuestas values(14, 'Erwin', 4);
insert into respuestas values(15, 'Armin', 4);
insert into respuestas values(16, 'Zeke', 4);

insert into preguntas values(5, '¿Cómo se llama el capitán de la legión de reconocimiento?', 18, "img_ruta");
insert into respuestas values(17, 'Pixix', 5);
insert into respuestas values(18, 'Erwin', 5);
insert into respuestas values(19, 'Armin', 5);
insert into respuestas values(20, 'Zeke', 5);

insert into preguntas values(6, '¿Cómo se llama el capitán de la legión de reconocimiento?', 22, "img_ruta");
insert into respuestas values(21, 'Pixix', 6);
insert into respuestas values(22, 'Erwin', 6);
insert into respuestas values(23, 'Armin', 6);
insert into respuestas values(24, 'Zeke', 6);

insert into preguntas values(7, '¿Cómo se llama el capitán de la legión de reconocimiento?', 26, "img_ruta");
insert into respuestas values(25, 'Pixix', 7);
insert into respuestas values(26, 'Erwin', 7);
insert into respuestas values(27, 'Armin', 7);
insert into respuestas values(28, 'Zeke', 7);

insert into preguntas values(8, '¿Cómo se llama el capitán de la legión de reconocimiento?', 30, "img_ruta");
insert into respuestas values(29, 'Pixix', 8);
insert into respuestas values(30, 'Erwin', 8);
insert into respuestas values(31, 'Armin', 8);
insert into respuestas values(32, 'Zeke', 8);

insert into preguntas values(9, '¿Cómo se llama el capitán de la legión de reconocimiento?', 34, "img_ruta");
insert into respuestas values(33, 'Pixix', 9);
insert into respuestas values(34, 'Erwin', 9);
insert into respuestas values(35, 'Armin', 9);
insert into respuestas values(36, 'Zeke', 9);

insert into preguntas values(10, '¿Cómo se llama el capitán de la legión de reconocimiento?', 38, "img_ruta");
insert into respuestas values(37, 'Pixix', 10);
insert into respuestas values(38, 'Erwin', 10);
insert into respuestas values(39, 'Armin', 10);
insert into respuestas values(40, 'Zeke', 10);



insert into puntuaciones values(1, 'user_a', 1);
insert into puntuaciones values(2, 'user_b', 3);
insert into puntuaciones values(3, 'user_c', 5);
insert into puntuaciones values(4, 'user_d', 4);
insert into puntuaciones values(5, 'user_e', 2);
