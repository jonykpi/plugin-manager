<?php

namespace PluginManager\PluginManager\Tests;

use Orchestra\Testbench\TestCase;
use PluginManager\PluginManager\PluginManagerServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [PluginManagerServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
