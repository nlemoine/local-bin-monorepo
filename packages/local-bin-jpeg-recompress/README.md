# local-bin-jpeg-recompress

This package provides pre-compiled jpeg-recompress binaries for seamless local usage on any platform.

## Installation

```bash
composer require n5s/local-bin-jpeg-recompress
```

## Usage

To get the jpeg-recompress binary path for the current platform:

```php
use n5s\LocalBin\JpegRecompress;

$jpeg-recompress = JpegRecompress::getPath();
```

## Credits

Pre-compiled binaries are sourced from [imagemin/jpeg-recompress-bin](https://github.com/imagemin/jpeg-recompress-bin).

## Supported platforms

Please refer to the [imagemin/jpeg-recompress-bin](https://github.com/imagemin/jpeg-recompress-bin/tree/main/vendor) repository for more information.
