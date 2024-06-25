# local-bin-libavif

This package provides pre-compiled avifenc / avifdec binaries for seamless local usage on any platform.

## Installation

```bash
composer require n5s/local-bin-libavif
```

## Usage

To get the avifenc / avifdec binary path for the current platform:

```php
use n5s\LocalBin\Avifenc;

$avifenc = Avifenc::getPath();
$avifdec = Avifdec::getPath();
```
