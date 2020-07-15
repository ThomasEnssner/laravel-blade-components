<?php

namespace LocalDynamics\LaravelBladeComponents\Tests;

use Orchestra\Testbench\TestCase;
use LocalDynamics\LaravelBladeComponents\LaravelBladeComponentsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelBladeComponentsServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
