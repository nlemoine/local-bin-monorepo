# local-bin-spatie-optimizer

Configure [spatie/image-optimizer](https://github.com/spatie/image-optimizer) to use local-bin-* binaries.

## Install

```bash
composer require n5s/local-bin-spatie-image-optimizer
```

## Usage

Pass your `Spatie\ImageOptimizer\OptimizerChain` through `OptimizerChainLocalizer::localize` so that all supported optimizers are configured to use the local binary paths.

```php
use n5s\LocalBin\Integration\SpatieImageOptimizer\OptimizerChainLocalizer;
use Spatie\ImageOptimizer\OptimizerChainFactory;

$optimizerChain = OptimizerChainLocalizer::localize(OptimizerChainFactory::create());
```
