# This is my package admiko-laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/webaction/admiko-laravel.svg?style=flat-square)](https://packagist.org/packages/webaction/admiko-laravel)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/webaction/admiko-laravel/run-tests?label=tests)](https://github.com/webaction/admiko-laravel/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/webaction/admiko-laravel/Check%20&%20fix%20styling?label=code%20style)](https://github.com/webaction/admiko-laravel/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/webaction/admiko-laravel.svg?style=flat-square)](https://packagist.org/packages/webaction/admiko-laravel)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/admiko-laravel.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/admiko-laravel)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require webaction/admiko-laravel
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="admiko-laravel-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --tag="admiko-laravel-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="admiko-laravel-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$admiko-laravel = new Webaction\Admiko();
echo $admiko-laravel->echoPhrase('Hello, Webaction!');
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

- [Mischa King](https://github.com/webaction)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
