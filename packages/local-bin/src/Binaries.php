<?php

declare(strict_types=1);

namespace n5s\LocalBin;

class Binaries
{
    /**
     * Get all available binaries
     *
     * @return array<class-string<AbstractBinary>>
     */
    public static function getAvailableBinaries(): array
    {
        return array_values(array_filter([
            Binary\Apngasm::class,
            Binary\Avifenc::class,
            Binary\Avifdec::class,
            Binary\Brotli::class,
            Binary\Cwebp::class,
            Binary\Gifsicle::class,
            Binary\JpegOptim::class,
            Binary\JpegTran::class,
            Binary\MozJpeg::class,
            Binary\OptiPng::class,
            Binary\OxiPng::class,
            Binary\PngCrush::class,
            Binary\PngOut::class,
            Binary\PngQuant::class,
            Binary\Webpmux::class,
        ], 'class_exists'));
    }

    /**
     * @return array<string, class-string<AbstractBinary>>
     */
    public static function getBinaries(): array
    {
        $binaryClasses = self::getAvailableBinaries();
        return array_combine(array_map(fn (string $binary): string => $binary::getFileName(), $binaryClasses), $binaryClasses);
    }
}
