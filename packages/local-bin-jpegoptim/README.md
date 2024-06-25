# local-bin-jpegoptim

This package provides pre-compiled jpegoptim binaries for seamless local usage on any platform.

## Installation

```bash
composer require n5s/local-bin-jpegoptim
```

## Usage

To get the jpegoptim binary path for the current platform:

```php
use n5s\LocalBin\JpegOptim;

$jpegoptim = JpegOptim::getPath();
```

## Credits

Pre-compiled binaries are sourced from [imagemin/jpegoptim-bin](https://github.com/imagemin/jpegoptim-bin).

## Supported platforms

Please refer to the [imagemin/jpegoptim-bin](https://github.com/imagemin/jpegoptim-bin/tree/main/vendor) repository for more information.
