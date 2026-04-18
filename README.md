# little100 Font Awesome 7

![License](https://img.shields.io/badge/license-MIT-blue.svg) [![Latest Stable Version](https://img.shields.io/packagist/v/little100/fontawesome.svg)](https://packagist.org/packages/little100/fontawesome) [![Total Downloads](https://img.shields.io/packagist/dt/little100/fontawesome.svg)](https://packagist.org/packages/little100/fontawesome)

A [Flarum](http://flarum.org) extension. Upgrade FontAwesome on your forum to version 7 (Free or Pro).

Two modes are supported:

- **Font Awesome 7 Free** — Loaded via CDN (jsDelivr). No configuration needed.
- **Font Awesome 7 Kit (Free/Pro)** — Use a [Font Awesome Kit](https://fontawesome.com/kits) for Pro icons or to host fonts yourself.

## Installation

Install with composer:

```sh
composer require little100/fontawesome:"*"
php flarum cache:clear
```

## Updating

```sh
composer update little100/fontawesome:"*"
php flarum migrate
php flarum cache:clear
```

## Links

- [Packagist](https://packagist.org/packages/little100/fontawesome)
- [GitHub](https://github.com/little100/flarum-ext-fontawesome)
