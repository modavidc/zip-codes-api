<p align="center">
  <a href="https://github.com/modavidc">
    <img alt="Zip Codes API logo" src="public/mail.png" width="100px" height="92px"/>
  </a>
</p>

<h1 align="center">
  馃嚥馃嚱 Zip Codes API
</h1>

<p align="center">
    <a href="#">
        <img src="https://img.shields.io/badge/Laravel-9.0-red.svg?style=flat-square&logo=laravel" alt="Laravel 9.0"/>
    </a>
    <a href="#">
        <img src="https://img.shields.io/badge/Docker-20.10-blue.svg?style=flat-square&logo=docker" alt="Docker 20.0"/>
    </a>
    <a href="#">
        <img src="https://img.shields.io/badge/Redis-2.0-purple.svg?style=flat-square&logo=redis" alt="Redis 2.0"/>
    </a>
    <a href="#">
        <img src="https://img.shields.io/badge/Nginx-1.22-green.svg?style=flat-square&logo=nginx" alt="Nginx 1.22.0"/>
    </a>
</a>
</p>

<p align="center">

<strong>Zip Codes API</strong> es una API con la cual se puede obtener la informaci贸n completa de un codigo postal de cualquier parte del territorio mexicano 馃嚥馃嚱馃寧馃椇.
<br />
<br />
Echa un vistazo, juega y divi茅rtete con esto.
<a href="https://github.com/modavidc/zip-codes-api/stargazers">Las estrellas son bienvenidas 馃槉</a>
<br />
<br />
<a href="https://mc-zipcode-api.herokuapp.com">Ver demostraci贸n</a>
路
<a href="https://github.com/modavidc/zip-codes-api/issues">Reportar un error</a>
路
<a href="https://github.com/modavidc/zip-codes-api/issues">Solicitar una caracter铆stica</a>

</p>

## 馃殌 Configuraci贸n del entorno

### 馃惓 Herramientas necesarias

1. [Instalar Docker](https://www.docker.com/get-started)
2. Clonar este proyecto: `git clone https://github.com/modavidc/zip-codes-api`
3. Moverse a la carpeta del proyecto: `cd zip-codes-api`

### 馃洜锔? Configuraci贸n del entorno

1. Crear un archivo de entorno local (`cp .env.example .env`) si quieres modificar alg煤n par谩metro

### 馃敟 Ejecuci贸n de la aplicaci贸n

1. Instale todas las dependencias y abra el proyecto con Docker ejecutando:

    `sh setup-local sh`

2. Tendr谩 la API de c贸digos postales disponible en:

    `http://localhost:8080`

### 鉁? Ejecuci贸n de pruebas

    docker exec app php artisan test

### 馃幆 Arquitectura por Capas

Este repositorio sigue el patr贸n de Arquitectura por Capas. Adem谩s, est谩 estructurado usando `subm贸dulos`.
Con esto, podemos ver que la estructura actual es:

```scala
$ tree -L 4 src

app
|___ Utils
    |___ ConstantsUtil.php
|___ Traits
    |___ KeyAttributeTrait.php
|___ Http
|   |___ Controllers
|   |   |___ ZipCodes
|   |       |___ GetZipCodeController.php
|   |___ Requests
|       |___ ZipCodes
|           |___ ImportFromTxtRequest.php
|___ Services
|   |___ ZipCodes
|       |___ Contracts
|       |   |___ ZipCodeServiceInterface.php
|       |___ ZipCodeService.php
|___ Imports
|    |___ Contracts
|    |   |___ ImportableInterface.php
|    |___ ZipCodesImporter.php
|___ Cache
|   |___ ZipCodeCache.php
|___ Repositories
|   |___ ZipCodes
|       |___ Contracts
|       |   |___ ZipCodeRepositoryInterface.php
|       |___ ZipCodeRepository.php
|___ Models
    |___ ZipCode.php
```

- Utils: Contiene utilidades generales. 

- Traits: Contiene funciones reutilizables para los modelos.

- Http: Se encarga del manejo de las peticiones HTTP. 

- Services: Se encarga del manejo de la l贸gica de negocio. 

- Imports: Se encarga de la importaci贸n de los datos.

- Cache: Se encarga del manejo de la cache. 

- Repositories: Se encarga del acceso al origen de datos y obtener los distintos modelos de datos.

- Models: Se encarga de la interacci贸n con la base de datos MySQL. 

## 馃懁 Autor

**Mois茅s Cede帽o**

-   Email: [moisesdavidaaron@gmail.com](mailto:moisesdavidaaron@gmail.com)
-   Github: [@modavidc](https://github.com/modavidc)

## 馃 Contribuciones

Las contribuciones, los problemas y las solicitudes de funciones son bienvenidos. Si茅ntase libre de comprobar [issues page](https://github.com/modavidc/zip-codes-api/issues) si quieres contribuir.<br />

## 馃 Cr茅ditos:

-   [脥conos de buzones creados por Nikita Golubev - Flaticon](https://www.flaticon.com/free-icons/mailbox)

## 馃摑 Licencia

Copyright 漏 2022 [modavidc](https://github.com/modavidc).<br />
Este proyecto es [MIT](https://github.com/kefranabg/readme-md-generator/blob/master/LICENSE) licensed.

---

__Este README fue generado con 鉂わ笍 por [readme-md-generator](https://github.com/kefranabg/readme-md-generator)_
