# local-bin-webpmux

This package provides pre-compiled webpmux binaries for seamless local usage on any platform.

## Installation

```bash
composer require n5s/local-bin-webpmux
```

## Usage

To get the webpmux binary path for the current platform:

```php
use n5s\LocalBin\Webpmux;

$webpmux = Webpmux::getPath();
```

## Credits

Pre-compiled binaries are sourced from [vHeemstra/webpmux-bin](https://github.com/vHeemstra/webpmux-bin).

## Supported platforms

Please refer to the [vHeemstra/webpmux-bin](https://github.com/vHeemstra/webpmux-bin/tree/main/vendor) repository for more information.
