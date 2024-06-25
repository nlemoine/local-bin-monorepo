<?php

declare(strict_types=1);

use Symplify\MonorepoBuilder\Config\MBConfig;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\AddTagToChangelogReleaseWorker;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\PushNextDevReleaseWorker;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\PushTagReleaseWorker;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\SetCurrentMutualDependenciesReleaseWorker;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\SetNextMutualDependenciesReleaseWorker;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\TagVersionReleaseWorker;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\UpdateBranchAliasReleaseWorker;
use Symplify\MonorepoBuilder\Release\ReleaseWorker\UpdateReplaceReleaseWorker;
use Symplify\MonorepoBuilder\ValueObject\Option;
use Symplify\MonorepoBuilder\ComposerJsonManipulator\ValueObject\ComposerJsonSection;

return static function (MBConfig $mbConfig): void {
    $mbConfig->packageDirectories([__DIR__ . '/packages']);

    $mbConfig->dataToAppend([
        ComposerJsonSection::LICENSE     => 'MIT',
        ComposerJsonSection::REQUIRE     => [
            'php'           => '^8.1',
            'n5s/local-bin' => '^1.0',
        ],
    ]);

    $mbConfig->workers([
        UpdateReplaceReleaseWorker::class,
        SetCurrentMutualDependenciesReleaseWorker::class,
        // AddTagToChangelogReleaseWorker::class,
        // TagVersionReleaseWorker::class,
        // PushTagReleaseWorker::class,
        // SetNextMutualDependenciesReleaseWorker::class,
        // UpdateBranchAliasReleaseWorker::class,
        // PushNextDevReleaseWorker::class,
    ]);
};
