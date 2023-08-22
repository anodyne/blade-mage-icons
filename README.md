# Blade Mage Icons

<a href="https://github.com/anodyne/blade-mage-icons/actions?query=workflow%3ATests">
    <img src="https://github.com/anodyne/blade-mage-icons/workflows/Tests/badge.svg" alt="Tests">
</a>
<a href="https://packagist.org/packages/anodyne/blade-mage-icons">
    <img src="https://img.shields.io/packagist/v/anodyne/blade-mage-icons" alt="Latest Stable Version">
</a>
<a href="https://packagist.org/packages/anodyne/blade-mage-icons">
    <img src="https://img.shields.io/packagist/dt/anodyne/blade-mage-icons" alt="Total Downloads">
</a>

A package to easily make use of [Mage icons](https://mageicons.com/) in your Laravel Blade views.

For a full list of available icons see the website or [the SVG directory](resources/svg).

## Requirements

- PHP 8.1 or higher
- Laravel 9.0 or higher

## Installation

```bash
composer require anodyne/blade-mage-icons
```

## Blade Icons

Blade Mage Icons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/blade-ui-kit/blade-icons#caching) with this library.

## Configuration

Blade Mage Icons also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-mage-icons.php` config file:

```bash
php artisan vendor:publish --tag=blade-mage-icons-config
```

## Usage

Icons can be used as self-closing Blade components which will be compiled to SVG icons:

```blade
<x-mage-s-check-circle/>
```

You can also pass classes to your icon components:

```blade
<x-mage-s-check-circle class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-mage-s-check-circle style="color: #555"/>
```

The bulk (filled) icons can be referenced like this:

```blade
<x-mage-b-check-circle/>
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-mage-icons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-mage-icons/b-check-circle.svg') }}" width="10" height="10"/>
<img src="{{ asset('vendor/blade-mage-icons/s-check-circle.svg') }}" width="10" height="10"/>
```

## Changelog

Check out the [CHANGELOG](CHANGELOG.md) in this repository for all the recent changes.

## Maintainers

Blade Mage Icons is developed and maintained by Anodyne Productions.

## License

Blade Mage Icons is open-sourced software licensed under [the MIT license](LICENSE.md).
