<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Laravel 8 All

## Comenzando 馃殌

_Sigue las siguientes instrucciones para clonar este repositorio en tu m谩quina local y poder trabajar desde el principio con la plantilla Soft UI Dashboard, sistema de informacion con roles y CRM en Laravel 8._

### Pre-requisitos 馃搵

Para clonar este repositorio, debes tener instalado un servidor Apache, PHP y MSQL (Wamp, Xampp, Mamp o Lamp) y los gerenciadores de dependencias para PHP (Composer) y para NodeJs (Npm).

Antes de comenzar verifica si tienes composer con cualquiera de los siguientes comandos en tu terminal.
```
composer --version 
composer -v
```
Si no lo tienes instalado lo pueden instalar siguiendo la documentaci贸n oficial en:  
https://getcomposer.org/doc/00-intro.md

Verifica tambien la version de NPM en la terminal con
```
npm --version
```
Si no lo tienes instalado lo pueden instalar siguiendo la documentaci贸n oficial en:  
https://www.npmjs.com/get-npm

Verifica las versiones de cada uno de ellos

Versi贸n PHP - 7.4.2  
Versi贸n Mysql - 5.7.26  
Versi贸n Composer - 1.10.1  
Versi贸n NPM - 7.0.10  

### Instalaci贸n 馃敡

_Sigue las siguientes instrucciones para clonar el repositorio_

_Clone el repositorio_

```
git clone https://github.com/nblandonc/sicop.git
```

_Instale todas las dependencias del Proyecto con_

```
composer install
```

_Como el proyecto tiene dependencias en JS instalelas con_

```
npm install
```

_Copie el Archivo .env.example en un archivo nuevo .env con_

```
cp .env.example .env
```
_Configure la base de datos y las demas variables de entorno en el archivo .env_

_Genere una nueva Key para el protecto con_

```
php artisan key:generate
```

_Corra las migraciones y seeders del proyecto con_

```
php artisan migrate --seed
```

_Corra el proyecto con_

```
php artisan serve
```

_Si todo est谩 correcto puede acceder al proyecto en la direcci贸n http://localhost:8000/register
