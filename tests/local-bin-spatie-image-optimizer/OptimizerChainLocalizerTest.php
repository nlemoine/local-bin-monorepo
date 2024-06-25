<?php

declare(strict_types=1);

namespace n5s\LocalBin\Tests\Integration\SpatieImageOptimizer;

use n5s\LocalBin\Binaries;
use n5s\LocalBin\Binary\PngOut;
use n5s\LocalBin\Integration\SpatieImageOptimizer\OptimizerChainLocalizer;
use n5s\LocalBin\Tests\TestCase;
use Spatie\ImageOptimizer\Image;
use Spatie\ImageOptimizer\OptimizerChain;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use Spatie\ImageOptimizer\Optimizers\BaseOptimizer;

/**
 * @covers \n5s\LocalBin\Integration\SpatieImageOptimizer\OptimizerChainLocalizer
 */
class OptimizerChainLocalizerTest extends TestCase
{
    public function testOptimizerChainLocalizer()
    {
        $optimizerChain = OptimizerChainFactory::create();
        $optimizerChain = OptimizerChainLocalizer::localize($optimizerChain);

        $optimizers = $optimizerChain->getOptimizers();

        $binaryClasses = Binaries::getBinaries();
        $binaryNames = array_keys($binaryClasses);
        foreach ($optimizers as $optimizer) {
            $binaryName = $optimizer->binaryName();
            if (!in_array($binaryName, $binaryNames, true)) {
                continue;
            }

            $this->assertEquals(
                $optimizer->binaryPath . $optimizer->binaryName(),
                $binaryClasses[$binaryName]::getPath()
            );
        }
    }

    public function testOptimizerChainFactoryCustomOptimizers()
    {
        $optimizerChain = new OptimizerChain();
        $optimizerChain->addOptimizer(new class() extends BaseOptimizer {
            public $binaryName = 'pngout';

            public function canHandle(Image $image): bool
            {
                return $image->mime() === 'image/png';
            }

            public function binaryName(): string
            {
                return 'pngout';
            }
        });
        $optimizerChain->addOptimizer(new class() extends BaseOptimizer {
            public $binaryName = 'unknown';

            public function canHandle(Image $image): bool
            {
                return $image->mime() === 'image/png';
            }

            public function binaryName(): string
            {
                return 'unknown';
            }
        });

        $optimizerChain = OptimizerChainLocalizer::localize($optimizerChain);

        $pngout = $optimizerChain->getOptimizers()[0];
        $unknown = $optimizerChain->getOptimizers()[1];
        $this->assertEquals($pngout->binaryPath . $pngout->binaryName(), PngOut::getPath());
        $this->assertTrue(!str_contains($unknown->binaryPath, '/bin'));
    }
}
