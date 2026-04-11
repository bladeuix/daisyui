<?php

declare(strict_types=1);

namespace BladeUix\DaisyUi\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use BladeUix\DaisyUi\Providers\DaisyUiServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            DaisyUiServiceProvider::class,
        ];
    }
}
