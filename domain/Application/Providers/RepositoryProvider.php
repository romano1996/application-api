<?php

namespace Application\Providers;

use Application\Entities\Application;
use Application\Interfaces\ApplicationRepositoryInterface;
use Application\Repositories\ApplicationRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ApplicationRepositoryInterface::class, function($app) {
            return new ApplicationRepository(
                $app['em'],
                $app['em']->getClassMetaData(Application::class)
            );
        });
    }
}
