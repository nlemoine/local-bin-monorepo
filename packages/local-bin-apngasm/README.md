# local-bin-apngasm

This package provides pre-compiled apngasm binaries for seamless local usage on any platform.

## Installation

```bash
composer require n5s/local-bin-apngasm
```

## Usage

To get the apngasm binary path for the current platform:

```php
use n5s\LocalBin\Apngasm;

$apngasm = Apngasm::getPath();
```

## Credits

Pre-compiled binaries are sourced from [vHeemstra/apngasm-bin](https://github.com/vHeemstra/apngasm-bin).

## Supported platforms

Please refer to the [vHeemstra/apngasm-bin](https://github.com/vHeemstra/apngasm-bin/tree/main/vendor) repository for more information.
