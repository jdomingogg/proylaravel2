# proylaravel

Para poder ejecutar este proyecto necesitarás Laravel8.


Lo primero que debes hacer es editar el archivo '.env' del raiz del proyecto, y modificar los valores necesarios para que puedas usar tu base de datos.

Una vez configurado el archivo y creada la base de datos, en la terminal (cmd), ejecutamos en el raiz 'php artisan migrate', para que migren todas las tablas a nuestra base de datos.

Lo siguiente es introducir mediante 'php artisan tinker' los cursos y profesores, los cuales no se podrán añadir en nuestro proyecto de manera gráfica.

Para finalizar y ejecutar el proyecto: 'php aritsan serve'.

En el navegador: localhost:8000/alumno
