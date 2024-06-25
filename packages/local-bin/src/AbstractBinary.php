<?php

declare(strict_types=1);

namespace n5s\LocalBin;

use loophp\phposinfo\Enum\FamilyName;
use loophp\phposinfo\OsInfo;
use ReflectionClass;

abstract class AbstractBinary
{
    /**
     * @var array<string>
     */
    private static array $binaryPaths;

    private static string $os;

    private static string $arch;

    /**
     * Get name (lowercase, without extension)
     */
    public static function getName(): string
    {
        return static::getFileName();
    }

    /**
     * Get binary file name
     *
     * This is necessary because the name may not always
     * be equal to the binary name (e.g. mozjpeg -> cjpeg).
     */
    public static function getFileName(): string
    {
        $classParts = explode('\\', static::class);
        return strtolower($classParts[array_key_last($classParts)]);
    }

    /**
     * Get binary path
     *
     * @throws UnsupportedPlatformException
     */
    public static function getPath(): string
    {
        $binaryName = static::getFileName();
        if (isset(self::$binaryPaths[$binaryName])) {
            return self::$binaryPaths[$binaryName];
        }

        $possibleBinaryPaths = self::getPaths();

        foreach ($possibleBinaryPaths as $path) {
            if (is_file($path) && is_executable($path)) {
                return self::$binaryPaths[$binaryName] = $path;
            }
        }

        throw new UnsupportedPlatformException(sprintf(
            "No binary available for your system detected as %s / %s, looked into paths: %s",
            self::getCachedOs(),
            self::getCachedArch(),
            implode(', ', $possibleBinaryPaths)
        ));
    }

    /**
     * @return array<string>
     */
    private static function getPaths(): array
    {
        $family = self::getCachedOs();
        $arch = self::getCachedArch();

        $basePath = [
            dirname((string) (new ReflectionClass(static::class))->getFileName(), 2),
            'bin',
            strtolower($family),
        ];

        $possiblePaths = [
            $basePath,
            array_merge($basePath, [$arch]),
        ];

        $binaryExecName = self::getExecName($family);

        return array_map(static fn (array $path): string => implode(DIRECTORY_SEPARATOR, $path) . DIRECTORY_SEPARATOR . $binaryExecName, $possiblePaths);
    }

    private static function getCachedArch(): string
    {
        if (!isset(self::$arch)) {
            self::$arch = self::getNormalizedArch();
        }

        return self::$arch;
    }

    private static function getCachedOs(): string
    {
        if (!isset(self::$os)) {
            self::$os = OsInfo::family();
        }

        return self::$os;
    }

    private static function getExecName(string $family): string
    {
        return match ($family) {
            FamilyName::WINDOWS => sprintf('%s.exe', static::getFileName()),
            default             => static::getFileName(),
        };
    }

    private static function getNormalizedArch(): string
    {
        $arch = strtolower(OsInfo::arch());
        return match ($arch) {
            'amd64', 'x86_64' => 'x64',
            'i386'  => 'x86',
            default => $arch,
        };
    }
}
