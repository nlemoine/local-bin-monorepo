# local-bin-oxipng

This package provides pre-compiled oxipng binaries for seamless local usage on any platform.

## Installation

```bash
composer require n5s/local-bin-oxipng
```

## Usage

To get the oxipng binary path for the current platform:

```php
use n5s\LocalBin\OxiPng;

$oxipng = OxiPng::getPath();
```

## Credits

Pre-compiled binaries are sourced from [vHeemstra/oxipng-bin](https://github.com/vHeemstra/oxipng-bin).

## Supported platforms

Please refer to the [vHeemstra/oxipng-bin](https://github.com/vHeemstra/oxipng-bin/tree/main/vendor) repository for more information.
