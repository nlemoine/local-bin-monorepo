# local-bin-optipng

This package provides pre-compiled optipng binaries for seamless local usage on any platform.

## Installation

```bash
composer require n5s/local-bin-optipng
```

## Usage

To get the optipng binary path for the current platform:

```php
use n5s\LocalBin\OptiPng;

$optipng = OptiPng::getPath();
```

## Credits

Pre-compiled binaries are sourced from [imagemin/optipng-bin](https://github.com/imagemin/optipng-bin).

## Supported platforms

Please refer to the [imagemin/optipng-bin](https://github.com/imagemin/optipng-bin/tree/main/vendor) repository for more information.
