# local-bin-zopflipng

This package provides pre-compiled zopflipng binaries for seamless local usage on any platform.

## Installation

```bash
composer require n5s/local-bin-zopflipng
```

## Usage

To get the zopflipng binary path for the current platform:

```php
use n5s\LocalBin\ZopfliPng;

$zopflipng = ZopfliPng::getPath();
```

## Credits

Pre-compiled binaries are sourced from [imagemin/zopflipng-bin](https://github.com/imagemin/zopflipng-bin).

## Supported platforms

Please refer to the [imagemin/zopflipng-bin](https://github.com/imagemin/zopflipng-bin/tree/main/vendor) repository for more information.
