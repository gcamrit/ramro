<?php

namespace Ramro\Providers;

use League\Container\ServiceProvider\AbstractServiceProvider;
use League\Route\RouteCollection;
use Ramro\Middleware\SampleMiddleware;

class RouteServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        'route',
    ];

    /**
     * Use the register method to register items with the container via the
     * protected $this->container property or the `getContainer` method
     * from the ContainerAwareTrait.
     *
     * @return void
     */
    public function register()
    {
        $this->container->share('route', function () {
            return new RouteCollection($this->container);
        });

        /**
         * var RouteCollection $route
         */
        $route = $this->container->get('route');

        $route->map('GET', '/', new \Ramro\Actions\HomePageAction)
            ->middleware(new SampleMiddleware);

    }
}
