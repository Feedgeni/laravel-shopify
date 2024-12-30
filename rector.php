<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
    ])
    ->withSets([SetList::PHP_73, SetList::PHP_74, SetList::PHP_80, SetList::PHP_81])
    ->withTypeCoverageLevel(0)
    ->withDeadCodeLevel(0)
    ->withCodeQualityLevel(0);
