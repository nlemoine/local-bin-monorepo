# local-bin-gifsicle

This package provides pre-compiled gifsicle binaries for seamless local usage on any platform.

## Installation

```bash
composer require n5s/local-bin-gifsicle
```

## Usage

To get the gifsicle binary path for the current platform:

```php
use n5s\LocalBin\Gifsicle;

$gifsicle = Gifsicle::getPath();
```

## Credits

Pre-compiled binaries are sourced from [imagemin/gifsicle-bin](https://github.com/imagemin/gifsicle-bin).

## Supported platforms

Please refer to the [imagemin/gifsicle-bin](https://github.com/imagemin/gifsicle-bin/tree/main/vendor) repository for more information.
