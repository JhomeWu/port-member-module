
## Installation Package locally

You can install the package via composer:
Create Package in your project to store package locally
```bash
mkdir -p ./packages/jhomewu
git clone git@github.com:JhomeWu/port-member-module.git ./packages/jhomewu/port-member-module
```
Set composer to get package locally
```
composer config repositories.port-member-module '{"type": "path", "url": "./packages/jhomewu/port-member-module"}' --file composer.json
composer require jhomewu/port-member-module
php artisan migrate
```

## Format

```bash
composer format
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.
