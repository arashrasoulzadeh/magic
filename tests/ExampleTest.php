<?php

namespace Arashrasoulzadeh\Magic\Tests;

use Orchestra\Testbench\TestCase;
use Arashrasoulzadeh\Magic\MagicServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [MagicServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
