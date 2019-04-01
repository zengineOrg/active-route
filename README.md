# Laravel Active Route

[![Latest Stable Version](https://poser.pugx.org/zengine/active-route/v/stable)](https://packagist.org/packages/zengine/active-route)
[![Latest Unstable Version](https://poser.pugx.org/zengine/active-route/v/unstable)](https://packagist.org/packages/zengine/active-route)
[![Build Status](https://travis-ci.org/zengineOrg/active-route.svg?branch=master)](https://travis-ci.org/zengineOrg/active-route)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/zengineOrg/active-route/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/zengineOrg/active-route/?branch=master)
[![Total Downloads](https://poser.pugx.org/zengine/active-route/downloads)](https://packagist.org/packages/zengine/active-route)
[![StyleCI](https://github.styleci.io/repos/178827070/shield?branch=master)](https://github.styleci.io/repos/178827070)

Easily detect if a route or url is the current.

## Installation

You can install the package via composer:

```bash
composer require zengine/active-route
```

## Usage

By default the helper returns ``active`` if the route is the current. 
```
<a href="{{ route('home') }}" class="btn {{ isActiveRoute('home') }}">Link</a>
```

You can pass a string to return if the route is the current.
```
<a href="{{ route('home') }}" class="btn {{ isActiveRoute('home', 'bg-red-300 rounded no-underline') }}">Link</a>
```

Check for multiple routes
```
<a href="{{ route('items') }}" class="btn {{ areActiveRoutes(['home', 'items']) }}">Link</a>
```

Check for wildcards as well
```
<a href="{{ route('items.creat') }}" class="btn {{ isActiveRoute('items.*') }}">Link</a>
```

Check for a url string
```
<a href="/calendar?date=2019-02-12" class="btn {{ isActiveUrl('calendar?date=2019-02-12') }}">Link</a>
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email christian@zenigne.org instead of using the issue tracker.

## Credits

- [Christian Bartelt](https://github.com/zengineOrg)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
