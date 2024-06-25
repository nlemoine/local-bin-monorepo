# local-bin-cwebp

This package provides pre-compiled cwebp binaries for seamless local usage on any platform.

## Installation

```bash
composer require n5s/local-bin-cwebp
```

## Usage

To get the cwebp binary path for the current platform:

```php
use n5s\LocalBin\Cwebp;

$cwebp = Cwebp::getPath();
```

## Credits

Pre-compiled binaries are sourced from [imagemin/cwebp-bin](https://github.com/imagemin/cwebp-bin).

## Supported platforms

Please refer to the [imagemin/cwebp-bin](https://github.com/imagemin/cwebp-bin/tree/main/vendor) repository for more information.
