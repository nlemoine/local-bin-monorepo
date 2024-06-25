# local-bin-mozjpeg

This package provides pre-compiled mozjpeg binaries for seamless local usage on any platform.

## Installation

```bash
composer require n5s/local-bin-mozjpeg
```

## Usage

To get the mozjpeg binary path for the current platform:

```php
use n5s\LocalBin\MozJpeg;

$mozjpeg = MozJpeg::getPath();
```

## Credits

Pre-compiled binaries are sourced from [imagemin/mozjpeg-bin](https://github.com/imagemin/mozjpeg-bin).

## Supported platforms

Please refer to the [imagemin/mozjpeg-bin](https://github.com/imagemin/mozjpeg-bin/tree/main/vendor) repository for more information.
