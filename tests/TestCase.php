<?php

namespace BladeUix\DaisyUi\Tests;

use BladeUix\DaisyUi\Providers\DaisyUiServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            DaisyUiServiceProvider::class,
        ];
    }
}
