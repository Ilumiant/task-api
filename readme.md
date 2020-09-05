<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Acerca de Antofagasta API

Esta es una api para la gestión y supervisión de equipos usados en Antofagasta.

# Instalación

Esta API está desarrollada con el framework Laravel, si desea saber más acerca de la instalación de un proyecto de laravel puede revisar en el siguiente enlace su [documentación](https://laravel.com/docs).

## 0.- Pasos previos a la instalación

Para instalar este y cualquier proyecto de laravel debe crear un archivo `.env` con las variables de configuración necesarias para la ejecución del mismo. Dentro del proyecto se encuentra un archivo llamado `.env.example` el cual puede copiar y renombrar a `.env` para no crear el archivo desde cero.

En dicho archivo debe configurar las variables correspondientes a la base de datos:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombredelabasededatos
DB_USERNAME=root
DB_PASSWORD=clave
```

Cabe destacar que usted debe crear una base de datos vacía con el nombre que colocó en `DB_DATABASE` 

## 1.- Instalación de dependecias

Para instalar las dependencias debe tener instalado previamente `composer` y ejecutar el siguiente comando por consola desde la raíz del proyecto:
```
composer install
```

Si no tiene composer instalado, puede descargarlo desde su sitio oficial [getcomposer.org](https://getcomposer.org/).

## 2.- Generación de una clave de la aplicación

Debe asegurarse que la variable `APP_KEY` en el archivo `.env` tenga una clave única, para generar una nueva clave puede hacerlo ejecuatando el siguiente comando en la consola:

```
php artisan key:generate
```

## 3.- Creación de las migraciones en la base de datos

Para crear las migraciones en las tablas de la base de datos debe ejecutar el siguiente comando:

```
php artisan migrate
```

En caso de que esté en modo de desarrollo y quiera llenar las tablas de la base de datos con datos de prueba a través de un seeder puede ejecutar el siguiente comando:

```
php artisan db:seed
```

Si quiere ejecutar las migraciones y los seeds en el mismo comando puede ejecutar:

```
php artisan migrate --seed
```

## 4.- Creación de las llaves de encriptación

En el proyecto se hace uso del paquete `laravel/passport`, dicho paquete necesita las llaves de encriptación necesarias para generar los tokens de acceso. Adicionalmente el comando creará el “personal access” y “password grant” de los clientes que se usarán para generar los tokens de acceso, para realizar dicha acción debe ejeuctar este comando:

```
php artisan passport:install
```

## 5.- Modificar las variables APP_URL y FRONT_URL

Debe establecer en el archivo `.env` el valor las variables `APP_URL` y `FRONT_URL`, en `APP_URL` debe agregar el nombre de dominio del backend (este proyecto de laravel) y en `FRONT_URL` debe establecer el nombre de dominio del frontend (en nuestro caso es una aplicación en react, pero podría ser cualquier otro frontend desarrollado por un tercero).

Ejemplo en local:
```
APP_URL=http://antofagasta.test
FRONT_URL=http://localhost:3000
```

## 6.- Capa de seguridad del archivo .env

En ciertos servidores Laravel falla al leer el archivo `.env`, cuando esto sucede Laravel intenta obtener los datos de las variables de entorno en ciertos archivos de la carpeta config, debe entrar en dicha carpeta y colocar los valores de las variables de entorno en las variables descritas a continuación:

Nota: Tenga en cuenta que este cambio tiene mayor relevancia en un servidor de producción, por lo cual puede obviar este paso si está usando un servidor local

#### Archivo config/app.php

línea 6: colocar el valor de `FRONT_URL` del archivo .env en 'http://localhost:3000':

```
"front_url" => env("FRONT_URL", 'http://localhost:3000'),
```

línea 58: colocar el valor de `APP_URL` del archivo .env en 'http://antofagasta.test':

```
'url' => env('APP_URL', 'http://antofagasta.test'),
```

línea 125: colocar el valor de `APP_KEY` del archivo .env en 'base64:EjEmPlOdEcLaVe=':

```
'key' => env('APP_KEY', 'base64:EjEmPlOdEcLaVe='),
```

#### Archivo config/database.php

línea 51: colocar el valor de `DB_DATABASE` del archivo .env en 'antofagasta':

```
'database' => env('DB_DATABASE', 'antofagasta'),
```

línea 52: colocar el valor de `APP_URL` del archivo .env en 'tunombredeusuarioenbasededatos':

```
'url' => env('DB_USERNAME', 'tunombredeusuarioenbasededatos'),
```

línea 53: colocar el valor de `APP_KEY` del archivo .env en 'tuclavedebasededatos:

```
'key' => env('DB_PASSWORD', 'tuclavedebasededatos'),
```

#### Archivo config/mail.php

línea 32: colocar el valor de `MAIL_HOST` del archivo .env en 'smtp.gmail.com':

```
'host' => env('MAIL_HOST', 'smtp.gmail.com'),
```

línea 87: colocar el valor de `MAIL_USERNAME` del archivo .env en 'example@gmail.com':

```
'username' => env('MAIL_USERNAME', 'correo@gmail.com'),
```

línea 89: colocar el valor de `MAIL_PASSWORD` del archivo .env en 'clavedelcorreo:

```
'password' => env('MAIL_PASSWORD', 'clavedelcorreo'),
```

## 7.- Agregar CRON al servidor de producción

Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste molestias voluptatum praesentium illum placeat ipsum dolor nam nulla repellat odit.

```
example
```

# Desarrolladores

- **@veanx/antonio**
- **@veanx/felix**

## Licencia

El framework Laravel es un software open-source bajo la licencia [MIT license](https://opensource.org/licenses/MIT).