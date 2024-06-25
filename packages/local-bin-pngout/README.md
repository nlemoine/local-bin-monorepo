# local-bin-pngout

This package provides pre-compiled pngout binaries for seamless local usage on any platform.

## Installation

```bash
composer require n5s/local-bin-pngout
```

## Usage

To get the pngout binary path for the current platform:

```php
use n5s\LocalBin\PngOut;

$pngout = PngOut::getPath();
```

## Credits

Pre-compiled binaries are sourced from [imagemin/pngout-bin](https://github.com/imagemin/pngout-bin).

## Supported platforms

Please refer to the [imagemin/pngout-bin](https://github.com/imagemin/pngout-bin/tree/main/vendor) repository for more information.
