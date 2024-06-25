# local-bin-gif2webp

This package provides pre-compiled gif2webp binaries for seamless local usage on any platform.

## Installation

```bash
composer require n5s/local-bin-gif2webp
```

## Usage

To get the gif2webp binary path for the current platform:

```php
use n5s\LocalBin\Gif2Webp;

$gif2webp = Gif2Webp::getPath();
```

## Credits

Pre-compiled binaries are sourced from [imagemin/gif2webp-bin](https://github.com/imagemin/gif2webp-bin).

## Supported platforms

Please refer to the [imagemin/gif2webp-bin](https://github.com/imagemin/gif2webp-bin/tree/main/vendor) repository for more information.
