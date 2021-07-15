<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Artisan;

abstract class FeatureTestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function setUp(): void
    {
        parent::setUp();

        $this->prepareInMemoryDatabase();
    }

    /**
     * Prepare in memory database for testing.
     */
    private function prepareInMemoryDatabase(): void
    {
        Artisan::call('doctrine:migrations:migrate');
    }

}
