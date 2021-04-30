<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>



<!-- Project -->
<br />
<p align="center">
  <h2 align="center">u08-Recipe-API</h2>

  <p align="center">
    Pernilla Hällgren @ ChasAcademy 2021
  </p>
</p>

<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
       <ul>
        <li><a href="#goals">Goals</a></li>
      </ul>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li><a href="#getting-started">Getting Started</a></li>
    <li><a href="#code-of-conduct">Code of Conduct</a></li>
    <li><a href="#security-vulnerabilities">Security Vulnerabilities</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>

## About The Project

I denna uppgift ska du bygga ett backend-API till recept-applikationen u07 och använda dig av det i frontend delen. 

Den funktionalitet som ska läggas till är ett backend byggt som ett RESTful API i Laravel som kan hantera användare och deras receptlistor. Detta API ska sedan konsumeras av applikationen från u07 som nu behöver kunna hantera användarinloggning och CRUD på användarens egna receptlistor. API-data för recept skall fortfarande hämtas från externt API. 

### Goals
Som användare ska man kunna göra följande (samma krav som föregående uppgift):

* Kunna skrolla genom förslag på recept/få fram en lista på recept genom sökning
* Kunna filtrera förslagen av recept (minst 6 olika filter) på t ex
  måltidstyp, allergener eller tillagningstid
* Förrätt, huvudrätt eller dessert
* Allergener och dietval (t.ex. gluten, nötter, vegetarian osv.)
* Kunna klicka på ett recept för att se dess information (egen route)
* Kunna spara receptet i en lista (redigera/ta bort från lista) (denna del skall nu kopplas till API:et)

API-krav:

Som användare ska man kunna göra följande:

* Kunna registrera konto i API:et (skapa användare, logga in, logga ut)
* Nyttjar JWT baserade tokens för kommunikation eller implementation av Laravel Sanctum för autentisering och auktorisering
* Användare ska kunna spara listor på recept. Listan har som minimumkrav att innehålla:
  - titel
  - vilka recept som ingår
* Användaren ska kunna lägga till en lista, läsa in en lista, ändra en lista och ta bort en lista
* Samtliga listor måste vara knutna till en användare och får bara ändras/läsas av samma användare
* Recept får endast förekomma en gång i en och samma lista, men samma recept kan förekomma i olika listor
* Data för specifika recept ska fortfarande hämtas från externt API

Nya frontend-krav:

* Användaren ska kunna skapa användare, logga in och logga ut
* Användaren ska kunna utföra CRUD på egna receptlistor

### Built With

This project was generated with: 
[Angular CLI](https://github.com/angular/angular-cli) version 11.2.0.
[Laravel](https://laravel.com) version 8.
[Docker CLI](https://www.docker.com) version 3.3.1.
[Bootstrap](https://getbootstrap.com/) 

## Getting Started
### Development Tools

We used Docker to get started with this project visit: (https://www.docker.com/)
For the token-based authentication with JWT we used this tutorial: (https://www.positronx.io/laravel-angular-token-based-authentication-with-jwt/)
Postman was used to check the requests (https://www.postman.com/)

### Development server 

Run `./vendor/bin/sail up` for a dev server. 

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Contact

Pernilla Hällgren - pernilla.hallgren@chasacademy.se
