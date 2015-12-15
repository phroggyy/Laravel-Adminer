# Laravel Adminer

A Laravel 5 wrapper for [Adminer](https://github.com/vrana/adminer/).
Adminer is a database management tool contained within a single PHP file written by Jakub Vrana, and is a great replacement for PhpMyAdmin.

This package was inspired by [Miroc](https://github.com/miroc)'s [Laravel-Adminer](https://github.com/miroc/Laravel-Adminer) package, and aims to address one major shortcoming. Namely, this package has a built-in artisan command to fetch the latest adminer file, so that you can always stay up to date, without this package needing to be updated.

## Installation

To install the library, first pull it in through Composer:

```
composer require phroggyy/laravel-adminer dev-master
```

Then simply register the service provider in the `providers` array in `config/app.php`

```
Phroggyy\LaravelAdminer\AdminerServiceProvider::class,
```

## Getting Started

To get started with using Adminer, simply run

```
php artisan adminer:latest
```

to fetch the latest version of Adminer. the `/adminer` route has already been registered for you.
