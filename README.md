##Bienvenido al repositorio oficial de Jonathan Steve Huarca Alfaro!
###Instrucciones de instalación:

Debes tener instalado COMPOSER una vez hayas clonado el proyecto.

####Instalar dependencias
Instalaremos con Composer, el manejador de dependencias para PHP, las dependencias definidos en el archivo composer.json. Para ello abriremos una terminal en la carpeta del proyecto y ejecutaremos:

`composer install`

También debemos instalar las dependencias de NPM definidas en el archivo package.json con:

`npm install`

Y en esta ocasión vemos cómo se crea la carpeta node_modules.

####Crear una base de datos que soporte Laravel 
Entre las bases de datos que soporta Laravel por defecto, encontramos: MySQL, SQL Lite, PostgreSQL y SQL Server.

####Crear el archivo .env
Este archivo es necesario para, entre otras cosas, configurar la conexión de la base de datos.Podemos duplicar el archivo .env.example, renombrarlo a .env e incluir los datos de conexión de la base de datos.
####Generar una clave
La clave de aplicación es una cadena aleatoria almacenada en la clave APP_KEY dentro del archivo .env. Notarás que también falta.

Para crear la nueva clave e insertarla automáticamente en el .env, ejecutaremos:

`php artisan key:generate`

####Ejecutar migraciones
Por último, ejecutamos las migraciones para que se generen las tablas con:

`php artisan migrate`