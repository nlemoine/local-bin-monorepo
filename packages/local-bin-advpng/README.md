# local-bin-advpng

This package provides pre-compiled advpng binaries for seamless local usage on any platform.

## Installation

```bash
composer require n5s/local-bin-advpng
```

## Usage

To get the advpng binary path for the current platform:

```php
use n5s\LocalBin\AdvPng;

$advpng = AdvPng::getPath();
```

## Credits

Pre-compiled binaries are sourced from [imagemin/advpng-bin](https://github.com/imagemin/advpng-bin).

## Supported platforms

Please refer to the [imagemin/advpng-bin](https://github.com/imagemin/advpng-bin/tree/main/vendor) repository for more information.
