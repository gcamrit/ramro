<?php

namespace App\Providers;

use App\Middleware\SampleMiddleware;
use League\Container\ServiceProvider\AbstractServiceProvider;
use League\Container\ServiceProvider\BootableServiceProviderInterface;

class AppServiceProvider extends AbstractServiceProvider implements BootableServiceProviderInterface
{
    /**
     * Use the register method to register items with the container via the
     * protected $this->container property or the `getContainer` method
     * from the ContainerAwareTrait.
     *
     * @return void
     */
    public function boot()
    {
        /** @var \League\Route\RouteCollection $route */
        $route = $this->container->get('route');

        $route->get('/', new \App\Actions\HomePageAction)->middleware(new SampleMiddleware);

    }

    public function register()
    {
        
    }
}
