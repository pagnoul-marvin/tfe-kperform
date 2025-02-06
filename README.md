<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# TFE - KperforM

## Description

KperforM est une société de kinésithérapie créée par Marine Pagnoul, ma soeur. Après plusieurs années de travail, elle s'est rendue compte qu'elle avait besoin d'un outil afin d'être mieux organisée. Il y a également une partie massage dans son cabinet (fait par une autre personne voulant rester anonyme).

## Cahier des charges

- Avoir un site/application interne/externe
- Le site doit comporter deux parties différentes. La première, pouvant être vu par tout le monde (patients et personnes lambda), est un portfolio. La seconde, uniquement réservé par les patients, est un système de rendez-vous.
- Un patient a un compte (nom/prénom/adresse mail/numéro de téléphone/mot de passe), seuls ceux qui ont un compte peuvent prendre des rendez-vous.
- Une personne lambda à le droit de devenir patient uniquement après avoir rencontré Marine à son cabinet.
- Marine à la possibilité de modifier/supprimer un rdv. Une notification/mail sera envoyée au patient si changement il y a. Dans la demande de rdv, Marine aura accès à l'adresse mail et au numéro de téléphone afin de prendre contact avec celui-ci au cas où il y aurait une urgence ou un désistement de dernière minute. 
- Seule Marine aura le droit de créer un patient dans l'application. Elle fournira à celui-ci les authentifiants du compte et pourra les changer s'il le souhaite. A chaque fois qu'un patient change ses coordonnées (adresse mail ou numéro de téléphone) une notification sera envoyée à Marine afin qu'elle en prenne connaissance et mette à jour les coordonnées du patient dans son téléphone, etc.
- Marine aura la possibilité de supprimer un patient (fin de traitement, ...) mais aura la possibilité de le "réinclure" dans l'application (si un jour le patient a de nouveau besoin de scéance de kiné)
- Un patient pourra choisir le jour et l'heure du RDV ainsi que le service souhaité. Ceux-ci seront choisis par Marine afin d'éviter les horaires non souhaités et les services non prestés. 
- Il y aura une partie administrateur afin de modifier le contenu
- Bonus : avoir une application mobile qui fait uniquement les rdv 

### Demandes spécifiques

- Marine veut absolument que le site ait une couleur noire en fond et de l'orange afin d'avoir une couleur "frappante" => Ceci a été modifié en blanc pour le fond et orange comme couleur secondaire suite à une discussion. Cela permet de garder l'esprit "médical".
>>>>>>> 107338b08b605e0003a5379dc3534cf674d7b655
