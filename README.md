# Local Bin Monorepo

This is the PHP port of the [`imagemin/*-bin`](https://github.com/imagemin?q=bin&type=all&language=&sort=) Node packages, along with a few other packages.

It provides local pre-compiled binaries that may not be available on your server, whether you are unable or unwilling to install these tools.

This repository is a monorepository that contains all `local-bin-*` packages, including:

- advpng
- apngasm
- avifenc
- avifdec
- brotli
- cwebp
- gif2webp
- gifsicle
- jpeg-recompress
- jpegoptim
- jpegtran
- mozjpeg
- optipng
- oxipng
- pngcrush
- pngout
- pngquant
- webpmux
- zopflipng

## Installation

Each binary can be installed individually. For example:

```bash
composer require n5s/local-bin-optipng
composer require n5s/local-bin-brotli
```

## Usage

To get all available binaries, use the `n5s\LocalBin\Binaries` class from the common `local-bin` package (which is required by each binary package). This class can return all the installed binaries in your project.

```php
use n5s\LocalBin\Binaries;

/** @var array<string, class-string<AbstractBinary>> $bins */
$bins = Binaries::getBinaries();
```

Based on the "installation" example above, this will return:

```php
array(
    'optipng' => 'n5s\LocalBin\OptiPng',
    'brotli' => 'n5s\LocalBin\Brotli',
);
```

To get the path of a single binary, use the following code:

```php
use n5s\LocalBin\Brotli;

$brotli = Brotli::getPath();
```

## Credits

The pre-compiled binaries have been sourced from the following repositories:
- [Imagemin](https://github.com/imagemin?q=bin&type=all&language=&sort=)
- [vHeemstra](https://github.com/vHeemstra?tab=repositories&q=bin&type=&language=&sort=)
- [vdechenaux](https://github.com/vdechenaux?tab=repositories&q=bin&type=&language=&sort=)

Thanks to them!

The detection of OS/arch information is achieved using the excellent [phposinfo](https://github.com/loophp/phposinfo) package.

## Caveats

These packages aim to be the last resort solution (such as shared hosting environments). However, it is always recommended to install binaries through official package managers, if they are available.

Please note that not all binaries may be available or functional on all systems. Some of them may not be up-to-date. If you encounter any issues related to the binaries, please refer to the source repository to address the problem. Most binaries are automatically updated from NPM packages, so when an update is available on the NPM package, it should not take long to be propagated here.
