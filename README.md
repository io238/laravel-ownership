# Single database multi-tenancy for Laravel.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/io238/laravel-ownership.svg?label=Version)](https://packagist.org/packages/io238/laravel-ownership)
[![GitHub Tests Action Status](https://github.com/io238/laravel-ownership/workflows/Tests/badge.svg?branch=master)](https://github.com/io238/laravel-ownership/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/io238/laravel-ownership.svg?label=Downloads)](https://packagist.org/packages/io238/laravel-ownership)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require io238/laravel-ownership
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Io238\LaravelOwnership\LaravelOwnershipServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="Io238\LaravelOwnership\LaravelOwnershipServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-ownership = new Io238\LaravelOwnership();

echo $laravel-ownership->echoPhrase('Hello World!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Martin Migge](https://github.com/io238)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
