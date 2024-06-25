# local-bin-pngcrush

This package provides pre-compiled pngcrush binaries for seamless local usage on any platform.

## Installation

```bash
composer require n5s/local-bin-pngcrush
```

## Usage

To get the pngcrush binary path for the current platform:

```php
use n5s\LocalBin\PngCrush;

$pngcrush = PngCrush::getPath();
```

## Credits

Pre-compiled binaries are sourced from [imagemin/pngcrush-bin](https://github.com/imagemin/pngcrush-bin).

## Supported platforms

Please refer to the [imagemin/pngcrush-bin](https://github.com/imagemin/pngcrush-bin/tree/main/vendor) repository for more information.
