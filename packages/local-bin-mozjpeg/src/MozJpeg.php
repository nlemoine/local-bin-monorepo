<?php

declare(strict_types=1);

namespace n5s\LocalBin\Binary;

use n5s\LocalBin\AbstractBinary;

class MozJpeg extends AbstractBinary
{
    public static function getFileName(): string
    {
        return 'cjpeg';
    }
}
