<?php

namespace ContainerYyFt4da;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Dgpf7NOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dgpf7NO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dgpf7NO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'location' => ['privates', '.errored..service_locator.dgpf7NO.App\\Entity\\Location', NULL, 'Cannot autowire service ".service_locator.dgpf7NO": it needs an instance of "App\\Entity\\Location" but this type has been excluded in "config/services.yaml".'],
        ], [
            'location' => 'App\\Entity\\Location',
        ]);
    }
}
