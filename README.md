# Platformă de gestionare a evenimentelor

Această aplicație Laravel permite utilizatorilor să gestioneze evenimente, oferind o interfață grafică pentru vizualizarea și ștergerea evenimentelor.

## Cerințe

- PHP >= 8.0
- Composer
- Laravel 9.x
- Bază de date (SQLite, MySQL, etc.)

## Instalare

1. Clonați repository-ul sau descărcați fișierele.
2. Navigați în directorul proiectului.
3. Instalați dependențele: `composer install`
4. Copiați fișierul `.env.example` în `.env` și configurați baza de date.
5. Generați cheia aplicației: `php artisan key:generate`
6. Rulați migrațiile: `php artisan migrate`
7. (Opțional) Adăugați date de test: `php artisan tinker` și creați evenimente.

## Utilizare

- Accesați `/events` pentru a vedea lista evenimentelor.
- Folosiți butonul "Delete" pentru a șterge un eveniment.

## Structura proiectului

- `database/migrations/`: Migrația pentru tabelul `events`
- `app/Http/Controllers/EventController.php`: Controller pentru evenimente
- `resources/views/events/index.blade.php`: View pentru lista evenimentelor
- `resources/views/layouts/app.blade.php`: Layout principal
- `routes/web.php`: Rutele aplicației

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
