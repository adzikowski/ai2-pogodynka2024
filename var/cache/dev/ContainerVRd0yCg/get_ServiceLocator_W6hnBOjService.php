<?php

namespace ContainerVRd0yCg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_W6hnBOjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.W6hnBOj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.W6hnBOj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'forecastRepository' => ['privates', 'App\\Repository\\ForecastRepository', 'getForecastRepositoryService', true],
        ], [
            'forecastRepository' => 'App\\Repository\\ForecastRepository',
        ]);
    }
}
