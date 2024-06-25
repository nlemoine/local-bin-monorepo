<?php

declare(strict_types=1);

namespace n5s\LocalBin\Integration\SpatieImageOptimizer;

use Exception;
use n5s\LocalBin\Binaries;
use Spatie\ImageOptimizer\OptimizerChain;

class OptimizerChainLocalizer
{
    public static function localize(OptimizerChain $optimizerChain): OptimizerChain
    {
        $optimizers = $optimizerChain->getOptimizers();
        $binaryClasses = Binaries::getBinaries();
        $binaryNames = array_keys($binaryClasses);
        foreach ($optimizers as $optimizer) {
            $binaryName = $optimizer->binaryName();
            if (!in_array($binaryName, $binaryNames, true)) {
                continue;
            }
            try {
                // Since LocalBin returns the full path to the binary, we need to remove it
                $binaryFile = $binaryClasses[$binaryName]::getPath();
                $binaryPath = pathinfo((string) $binaryFile, PATHINFO_DIRNAME);
                $optimizer->setBinaryPath($binaryPath);
            } catch (Exception) {
            }
        }

        return $optimizerChain;
    }
}
