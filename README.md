<p align="center">
  <a href="https://github.com/modavidc">
    <img alt="Zip Codes API logo" src="public/mail.png" width="100px" height="92px"/>
  </a>
</p>

<h1 align="center">
  🇲🇽 Zip Codes API
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

<strong>Zip Codes API</strong> es una API con la cual se puede obtener la información completa de un codigo postal de cualquier parte del territorio mexicano 🇲🇽🌎🗺.
<br />
<br />
Echa un vistazo, juega y diviértete con esto.
<a href="https://github.com/modavidc/zip-codes-api/stargazers">Las estrellas son bienvenidas 😊</a>
<br />
<br />
<a href="https://mc-zipcode-api.herokuapp.com">Ver demostración</a>
·
<a href="https://github.com/modavidc/zip-codes-api/issues">Reportar un error</a>
·
<a href="https://github.com/modavidc/zip-codes-api/issues">Solicitar una característica</a>

</p>

## 🚀 Configuración del entorno

### 🐳 Herramientas necesarias

1. [Instalar Docker](https://www.docker.com/get-started)
2. Clonar este proyecto: `git clone https://github.com/modavidc/zip-codes-api`
3. Moverse a la carpeta del proyecto: `cd zip-codes-api`

### 🛠️ Configuración del entorno

1. Crear un archivo de entorno local (`cp .env.example .env`) si quieres modificar algún parámetro

### 🔥 Ejecución de la aplicación

1. Instale todas las dependencias y abra el proyecto con Docker ejecutando:

    `sh setup-local sh`

2. Tendrá la API de códigos postales disponible en:

    `http://localhost:8080`

### ✅ Ejecución de pruebas

    docker exec app php artisan test

### 🎯 Arquitectura por Capas

Este repositorio sigue el patrón de Arquitectura por Capas. Además, está estructurado usando `submódulos`.
Con esto, podemos ver que la estructura actual es:

```scala
$ tree -L 4 src

app
|___ Utils
    |___ ConstantsUtil.php
|___ Traits
    |___ KeyAttributeTrait.php
|___ Exceptions
    |___ Handler.php
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

#### Utils

Capa del aplicación que contiene utilidades generales. 

#### Traits

Capa del aplicación que contiene funciones reutilizables para los modelos.

#### Exceptions

Capa del aplicación que se encarga del manejo de errores.

#### Http 

Capa del aplicación que se encarga del manejo de las peticiones HTTP. 

#### Services 

Capa del aplicación que se encarga del manejo de la lógica de negocio. 

#### Imports 

Capa del aplicación que se encarga de la importación de los datos hacía la base de datos.

Sistema de errores. 

#### Cache 

Capa del aplicación que se encarga del manejo de la cache. 

#### Repositories 

Capa del aplicación que se encarga del acceso al origen de datos y obtener los distintos modelos de datos.

#### Models 

Capa del aplicación que se encarga de la interacción con la base de datos MySQL. 

## 👤 Author

**Moisés Cedeño**

-   Email: [moisesdavidaaron@gmail.com](mailto:moisesdavidaaron@gmail.com)
-   Github: [@modavidc](https://github.com/modavidc)

## 🤝 Contributing

Contributions, issues and feature requests are welcome. Feel free to check [issues page](https://github.com/modavidc/zip-codes-api/issues) if you want to contribute.<br />

## 🧑 Credits:

-   [Mailbox icons created by Nikita Golubev - Flaticon](https://www.flaticon.com/free-icons/mailbox)

## 📝 License

Copyright © 2022 [modavidc](https://github.com/modavidc).<br />
This project is [MIT](https://github.com/kefranabg/readme-md-generator/blob/master/LICENSE) licensed.

---

_This README was generated with ❤️ by [readme-md-generator](https://github.com/kefranabg/readme-md-generator)_
