<?php

namespace Digitalfront\JetstreamCrud\Tests;

use Orchestra\Testbench\TestCase;
use Digitalfront\JetstreamCrud\JetstreamCrudServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [JetstreamCrudServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
