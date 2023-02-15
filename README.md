![blade-tabler-icons](https://user-images.githubusercontent.com/13808106/190656285-ced1289f-b1d3-4e10-bc1a-728023633cc1.png)

# Blade Tabler Icons

[![Latest Stable Version](http://poser.pugx.org/secondnetwork/blade-tabler-icons/v)](https://github.com/secondnetwork/blade-tabler-icons) 
[![License](http://poser.pugx.org/secondnetwork/blade-tabler-icons/license)](https://github.com/secondnetwork/blade-tabler-icons/blob/main/LICENSE.md) 
[![PHP Version Require](http://poser.pugx.org/secondnetwork/blade-tabler-icons/require/php)](https://github.com/secondnetwork/blade-tabler-icons)
[![github Tests](https://github.com/secondnetwork/blade-tabler-icons/workflows/Tests/badge.svg)](https://github.com/secondnetwork/blade-tabler-icons/actions?query=workflow%3ATests) 

A package to easily make use of [tabler-icons](https://github.com/tabler/tabler-icons) in your Laravel Blade views.

For a full list of available icons see [the SVG directory](resources/svg) or preview them at [tabler-icons.io](https://tabler-icons.io/).

## Requirements

- PHP 8.0 or higher
- Laravel /.0 or higher

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
