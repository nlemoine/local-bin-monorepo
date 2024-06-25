# local-bin-jpegtran

This package provides pre-compiled jpegtran binaries for seamless local usage on any platform.

## Installation

```bash
composer require n5s/local-bin-jpegtran
```

## Usage

To get the jpegtran binary path for the current platform:

```php
use n5s\LocalBin\JpegTran;

$jpegtran = JpegTran::getPath();
```

## Credits

Pre-compiled binaries are sourced from [imagemin/jpegtran-bin](https://github.com/imagemin/jpegtran-bin).

## Supported platforms

Please refer to the [imagemin/jpegtran-bin](https://github.com/imagemin/jpegtran-bin/tree/main/vendor) repository for more information.
