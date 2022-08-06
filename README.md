# Laravel Matomo

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bernskioldmedia/laravel-matomo.svg?style=flat-square)](https://packagist.org/packages/bernskioldmedia/laravel-matomo)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/bernskioldmedia/laravel-matomo/run-tests?label=tests)](https://github.com/bernskioldmedia/laravel-matomo/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/bernskioldmedia/laravel-matomo/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/bernskioldmedia/laravel-matomo/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/bernskioldmedia/laravel-matomo.svg?style=flat-square)](https://packagist.org/packages/bernskioldmedia/laravel-matomo)

Access and manage Matomo from Laravel.

## Installation

You can install the package via composer:

```bash
composer require bernskioldmedia/laravel-matomo
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-matomo-config"
```

This is the contents of the published config file:

```php
return [

    /**
     * This is the Matomo API key that allows you to work
     * with the API.
     */
    'api_key' => env('MATOMO_API_KEY'),

    /**
     * This is the URL of the Matomo installation that you want
     * to use the package with.
     */
    'base_url' => env('MATOMO_BASE_URL'),

];
```

## Usage

A select number of the [Matomo APIs](https://developer.matomo.org/api-reference/reporting-api) are available, with more
to be added as we have a need for them.

Each API has its own resource, with the methods available as nicely named methods. All are accessible via the provided
Facade. See the examples below.

For the full list of methods, please refer, currently, to the source code,

```php
use \BernskioldMedia\LaravelMatomo\Facades\Matomo;

// get a summary object of metrics for the site with the ID 1.
$summary = Matomo::summary()->site(1)->all();

```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/bernskioldmedia/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Bernskiold Media](https://github.com/bernskioldmedia)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
