# local-bin-pngquant

This package provides pre-compiled pngquant binaries for seamless local usage on any platform.

## Installation

```bash
composer require n5s/local-bin-pngquant
```

## Usage

To get the pngquant binary path for the current platform:

```php
use n5s\LocalBin\PngQuant;

$pngquant = PngQuant::getPath();
```

## Credits

Pre-compiled binaries are sourced from [imagemin/pngquant-bin](https://github.com/imagemin/pngquant-bin).

## Supported platforms

Please refer to the [imagemin/pngquant-bin](https://github.com/imagemin/pngquant-bin/tree/main/vendor) repository for more information.
