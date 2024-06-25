<?php

declare(strict_types=1);

namespace n5s\LocalBin;

use Exception;

class UnsupportedPlatformException extends Exception
{
    public function __construct(string $message = 'Unsupported platform.', int $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
