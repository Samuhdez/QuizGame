-Ficheros Quiz
	-quiz.sql
El  contiene la base de datos necesaria para el funcionamiento del quiz.
Se incluyen 2 usuarios con puntuaciones, e imagen de perfil para mostrarlos en el top, aunque no se realicen registros por parte del usuario.
	
	-conn
		-connection.php
Maneja la conexión con la db.
		-header.php
Inicializa el html y genera un header con el nick de usuario y la imagen de perfil.
	-estilo
Contiene los estilos usados.
	-img
Contiene imagenes usadas para categorias y el logo, ademas almacecna las img de perfil de usuario.

	-loginQuiz.html
Pagina inicial, registro/login de usuarios.
	
	-loginQuiz.php
Gestiona el registro/login de usuarios y redirecciona.
	
	-inicio.php
Pagina principal, redirecciona a: comenzar el quiz, ver las 5 mejores puntuaciones o permite cerrar sesion

	-home.php
Muestra las preguntas y sus respuestas correspondientes de una en una.
	
	-comprobar.php
Comprueba si la respuesta es correcta, contabiliza puntuacion y redirecciona a home para mostrar la siguiente pregunta
Sino quedan preguntas, guarda puntuacion final y asigna categoria, redirecciona a resultados para mostrarlo.

	-resultado.php
Muestra la nota conseguida en el test, y su categoria con la imagen y mensaje correspondiente de la categoria.

	-puntuaciones.php	
Muestra las 5 mejores puntuaciones en una tabla, junto al nick y img de perfil.
	
	-logout.php
Cierra sesion y redirige a login.

Anotaciones, 
Para el correcto funcionamiento, subir solo ficheros con formato de imagen.



