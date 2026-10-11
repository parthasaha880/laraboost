# LaraBoost

Laravel Artisan command that clears and rebuilds caches, then lists application routes.

`php artisan boostnow` runs, in order:

1. `optimize:clear`
2. `optimize`
3. `config:clear`
4. `config:cache`
5. `route:clear`
6. `route:list`

If any step fails, the command stops and returns that step's exit code.

## Requirements

- PHP 8.2 or newer
- Laravel 10, 11, 12, or 13

## Installation

```bash
composer require parthasaha880/laraboost
```

Laravel package discovery registers the command automatically. Run:

```bash
php artisan boostnow
```

## Manual registration

If package discovery is disabled, register the service provider yourself.

Laravel 11 and newer, in `bootstrap/providers.php`:

```php
return [
    ParthaSaha\LaraBoost\LaraBoostServiceProvider::class,
];
```

Laravel 10, in `config/app.php`:

```php
'providers' => [
    ParthaSaha\LaraBoost\LaraBoostServiceProvider::class,
],
```

## License

MIT. See [LICENSE](LICENSE).
