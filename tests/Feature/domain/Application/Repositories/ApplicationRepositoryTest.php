<?php

namespace Tests\Feature\domain\Application\Repositories;

use Application\Interfaces\ApplicationRepositoryInterface;
use Application\Repositories\ApplicationRepository;
use Tests\FeatureTestCase;

class ApplicationRepositoryTest extends FeatureTestCase
{
    /** @test */
    public function service_container_can_create_instance_of_application_repository(): void
    {
        $instance = app(ApplicationRepositoryInterface::class);

        $this->assertInstanceOf(ApplicationRepository::class, $instance);
    }
}
