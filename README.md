# Proyecto HUTEMP (Sistema de monitoreo de humedad y temperatura)

**Hutemp es un prototipo de sistema embebido para el monitoreo de la humedad y temperatura con diversas aplicaciones.**

El prototipo está construido gracias una serie de componentes físicos y tecnologías, entre sus componentes físicos se encuentra:
- Módulo WiFi ESP32 devKit1v
- Sensor DHT11
- Cables
- Protoboard
- etc. 

Para la construcción de este prototipo se utilizaron algunas herramientas y tecnologías como:
- IDE Arduino
-  Laravel
-  HTML
-  CSS
-  MySQL
-  Bootstrap

Dentro de los lenguajes de programación encontramos 
- PHP
-  JavaScript
-  c++

El alcance del proyecto fue hacer un primer prototipo de aplicación web para monitoreo de temperatura y humedad a través de un sensor de temperatura y humedad, mediante la asignación de la tarjeta de red ESP01 para enviar así la información del sensor a una base de datos de un servidor y se muestre en una aplicación web.

### Carpetas
dentro del proyecto encontraremos 4 carpetas, una de ellas contiene la BD que se utilizó con algunos registros, otra carpeta contiene el código que se tiene que subir a la tarjeta WiFi por medio del IDE de Arduino, otra carpeta contiene Todo el código de la aplicación web la cual está hecha en Laravel y por último tenemos otra carpeta que sirve para la comunicación del módulo WiFi con la BD.

### DB
la carpeta DB contiene la base de datos que se empleó para el proyecto, la base de datos cuenta con una tabla únicamente, esta tabla tiene 3 columnas: fecha, temperatura y humedad.

>**Nota: Los datos que están en la columna fecha se encuentran en formato timestamp y en caso de que empiece a registrar los datos con una estructura de fecha solo hay que modificar el archivo index.php de la carpeta esp y al obtener la fecha para realizar la inserción en la base de datos añadir una letra U al llamar a la función time(), ejemplo:  $fecha = time(u);**

### Arduino/hutemp
En esta carpeta encontraremos el código para hacer que funcionen nuestros componentes físicos, registren y almacene la información del ambiente y posterior a ello lo manden a una BD.

Para que todo funcione correctamente tenemos que configurar los parámetros de Wifi, descargar los drivers adecuados de nuestra placa y en caso de que no reconozca nuestro puerto debemos descargar los drivers correspondientes de nuestro modelo de placa, (para el proyecto se usó el modelo WiFi ESP32 devKit1v), debemos además añadirlas librerías del sensor DTH11 para que todo funcione correctamente.

En caso de que la placa cambie, tenemos que modificar la parte de la importación de su librería y modificar la placa al momento de cargarla.
Para la conexión se utilizó el pin D5 de la placa para la recepción de datos (se puede modificar dependiendo de la paca).

> **Nota1: Dentro del proyecto se emplearon focos para el resultado final, aunque esto se puede omitir, es fácil de identificar dicha parte en el código.**

> **Nota2: Depende de donde ubiquemos la carpeta esp nos dará una ruta u otra es por ello que al momento de abrir dicha carpeta ya sea en el localhost o con un servidor aparte tenemos que ver la ruta y en dado caso modificarla en el archivo (en caso de trabajar de forma local tomaremos la ruta después del prefijo localhost, ejemplo 'localhost/proyecto/ejemplo/esp', copearemos solo ' /proyecto/ejemplo/esp ').**


### HUTEMP

En esta carpeta encontramos el proyecto realizado en Laravel, si ya estamos familiarizados con este framework nos resultara fácil la navegación entre las diferentes carpetas.

Las rutas están definidas a que ingrese a las diferentes vistas por medio del prefijo 'hutemp/' posterior a ello cambiara dependiendo de la vista que se tenga.

En el controlador obtenemos los datos de la BD y los mandamos a las vistas para trabajar con lo que requeríamos de cada una de ellas.

### esp
En esta carpeta lo que encontraremos será un archivo llamado index.php, en este archivo vamos a encontrar la inserción que hará el módulo WiFi con los datos a la DB cada que se registre una temperatura en un tiempo definido.

Encontraremos una conexión a la DB la cual nos permitirá conectamos para realizar las inserciones y a partir de ahí ahora si recuperar los datos para mostrarlos en las vistas en Laravel. Este archivo tiene que estar independiente de los demás, ya que si se anexa al proyecto en Laravel puede que no reconozca la ruta el Arduino.

>** Nota: En caso de que se quiera añadir al archivo index.php de la carpeta esp  a la carpete HUTEMP del proyecto de Laravel, sé deberá de modificar el archivo de las rutas, se deberá de añadir una nueva ruta con los mimos parámetros que se tengan en la ruta además de esto, se deberá de modificar en el código que se cargara al módulo WiFi en la parte de la ruta del envío. Posterior a ello se deberá de agregar una función que mande los dos datos (humedad y temperatura) que fueron registrados por el sensor y se deberá de hacer una inserción en la BD por medio de una función que nos da Laravel de forma nativa.**
