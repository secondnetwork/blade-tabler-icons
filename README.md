# Blade Tabler Icons

![blade-tabler-icons](https://user-images.githubusercontent.com/13808106/190656285-ced1289f-b1d3-4e10-bc1a-728023633cc1.png)

[![Latest Stable Version](https://img.shields.io/packagist/v/secondnetwork/blade-tabler-icons.svg?style=for-the-badge&labelColor=eb4432&color=1A2A2C)](https://github.com/secondnetwork/blade-tabler-icons)
[![PHP 8.2](https://img.shields.io/badge/v8.2-999999?style=for-the-badge&label=PHP&labelColor=777BB4&color=1A2A2C)](https://php.com)		
[![License](https://img.shields.io/github/license/secondnetwork/blade-tabler-icons?style=for-the-badge)](https://github.com/secondnetwork/blade-tabler-icons/blob/main/LICENSE.md)

A package to easily make use of [tabler-icons](https://github.com/tabler/tabler-icons) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg) or preview them at [tabler-icons.io](https://tabler-icons.io/).

## Info of update Icons Release

This repository check for a new Icons Release every week with Github Actions and make a pull request

## Requirements

- PHP 7.4 or higher
- Laravel 8.0 or higher

## Installation

```bash
composer require secondnetwork/blade-tabler-icons
```

## Blade Icons

Blade tabler-icons uses Blade Icons under the hood. Please refer to [the Blade Icons readme](https://github.com/blade-ui-kit/blade-icons) for additional functionality. We also recommend to [enable icon caching](https://github.com/blade-ui-kit/blade-icons#caching) with this library.

## Configuration

Blade tabler-icons also offers the ability to use features from Blade Icons like default classes, default attributes, etc. If you'd like to configure these, publish the `blade-tabler-icons.php` config file:

```bash
php artisan vendor:publish --tag=blade-tabler-icons-config
```

## Usage

Icons can be used a self-closing Blade components which will be compiled to SVG icons:

```blade
<x-tabler-alert-circle />
```

You can also pass classes to your icon components:

```blade
<x-tabler-alert-circle class="w-6 h-6 text-gray-500"/>
```

And even use inline styles:

```blade
<x-tabler-alert-circle style="stroke-width: 1.25"/>
```

Or into...
```blade
@svg('tabler-alert-circle', 'w-6 h-6')
```
The filled icons can be referenced like this:
```blade
<x-tabler-alert-circle-filled />
```
Or
```blade
<x-tabler-alert-circle-f />
```

### Raw SVG Icons

If you want to use the raw SVG icons as assets, you can publish them using:

```bash
php artisan vendor:publish --tag=blade-tabler-icons --force
```

Then use them in your views like:

```blade
<img src="{{ asset('vendor/blade-tabler-icons/alert-circle.svg') }}" width="10" height="10"/>
```

## Maintainers

Blade tabler-icons is developed and maintained by secondnetwork.

## License

Blade tabler-icons is open-sourced software licensed under [the MIT license](LICENSE.md).
