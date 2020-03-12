# Money

[![Latest Version](https://badgen.net/packagist/v/kodekeep/money)](https://packagist.org/packages/kodekeep/money)
[![Software License](https://badgen.net/packagist/license/kodekeep/money)](https://packagist.org/packages/kodekeep/money)
[![Build Status](https://img.shields.io/github/workflow/status/kodekeep/money/run-tests?label=tests)](https://github.com/kodekeep/money/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Coverage Status](https://badgen.net/codeclimate/coverage/kodekeep/money)](https://codeclimate.com/github/kodekeep/money)
[![Quality Score](https://badgen.net/codeclimate/maintainability/kodekeep/money)](https://codeclimate.com/github/kodekeep/money)
[![Total Downloads](https://badgen.net/packagist/dt/kodekeep/money)](https://packagist.org/packages/kodekeep/money)

This package was created by, and is maintained by [Brian Faust](https://github.com/faustbrian), and provides DX improvements for [moneyphp/money](https://github.com/moneyphp/money).

## Installation

```bash
composer require kodekeep/money
```

## Usage

``` php
Money::new(1000, 'EUR')->format('de-DE');

Money::cents(10, 'EUR')->format('de-DE');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@kodekeep.com. All security vulnerabilities will be promptly addressed.

## Credits

This project exists thanks to all the people who [contribute](../../contributors).

## Support Us

We invest a lot of resources into creating and maintaining our packages. You can support us and the development through [GitHub Sponsors](https://github.com/sponsors/faustbrian).

## License

Money is an open-sourced software licensed under the [MPL-2.0](LICENSE.md).
