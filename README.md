# Polylang for WooCommerce Stubs

This package provides stub declarations for [Polylang for WooCommerce](https://polylang.pro/downloads/polylang-for-woocommerce/).
These stubs can help plugin and theme developers leverage static analysis tools like [PHPStan](https://phpstan.org/).

Stubs are generated directly from the source using [giacocorsiglia/stubs-generator](https://github.com/GiacoCorsiglia/php-stubs-generator).

## Requirements

- PHP >=7.1

## Installation

Require this package as a development dependency with Composer.

```bash
composer require --dev wpsyntex/polylang-wc-stubs
```

## Usage in PHPStan

Include the stubs in the PHPStan configuration file.

```yaml
parameters:
  bootstrapFiles:
    - vendor/wpsyntex/polylang-wc-stubs/polylang-wc-stubs.php
```
