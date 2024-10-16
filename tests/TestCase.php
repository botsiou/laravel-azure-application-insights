<?php

namespace Yesdevs\ApplicationInsights\Tests;

use Yesdevs\ApplicationInsights\Facade;
use Yesdevs\ApplicationInsights\ServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            ServiceProvider::class
        ];
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            'Insights' => Facade::class,
        ];
    }
}
