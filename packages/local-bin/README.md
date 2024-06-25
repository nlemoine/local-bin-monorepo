# local-bin

Base class for providing the right binary depending of your platform.

## Install

```bash
composer require n5s/local-bin
```

## Usage

Extend the base `n5s\LocalBin\AbstractBinary` class with your binary name:

```php
use n5s\LocalBin\AbstractBinary;

class MyBinary extends AbstractBinary {
}
```

Set the class name to your binary name (e.g. JpegOptim -> jpegoptim) for less verbose code or override the `getName` static method.

Place the binary files for all supported platform inside the `bin` folder, at the root of your package, following this folder tree:
```
├── bin
│   ├── darwin
│   │   └── mybinary
│   ├── linux
│   │   ├── x64
│   │   │   └── mybinary
│   │   └── x86
│   │       └── mybinary
│   └── windows
│       ├── x64
│       │   └── mybinary.exe
│       └── x86
│           └── mybinary.exe
```

Get the path of your binary using:

```php
$bin = MyBinary::getPath();
```
