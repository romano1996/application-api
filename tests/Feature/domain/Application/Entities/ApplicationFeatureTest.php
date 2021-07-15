<?php

namespace Tests\Feature\domain\Application\Entities;

use Application\Entities\Application;
use LaravelDoctrine\ORM\Facades\EntityManager;
use Tests\FeatureTestCase;

class ApplicationFeatureTest extends FeatureTestCase
{
    /** @test */
    public function could_collect_all_records_in_application_table(): void
    {
        $repository = EntityManager::getRepository(Application::class);
        $records = $repository->findAll();

        $this->assertIsArray($records);
        $this->assertEmpty($records);
    }
}
