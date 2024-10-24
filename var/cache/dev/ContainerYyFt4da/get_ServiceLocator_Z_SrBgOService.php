<?php

namespace ContainerYyFt4da;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z_SrBgOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Z.srBgO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Z.srBgO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'location' => ['privates', '.errored..service_locator.Z.srBgO.App\\Entity\\Location', NULL, 'Cannot autowire service ".service_locator.Z.srBgO": it needs an instance of "App\\Entity\\Location" but this type has been excluded in "config/services.yaml".'],
            'repository' => ['privates', 'App\\Repository\\ForecastRepository', 'getForecastRepositoryService', true],
        ], [
            'location' => 'App\\Entity\\Location',
            'repository' => 'App\\Repository\\ForecastRepository',
        ]);
    }
}
