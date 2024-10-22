<?php

namespace ContainerYyFt4da;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Maker_AutoCommand_MakeStimulusController_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.maker.auto_command.make_stimulus_controller.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.maker.auto_command.make_stimulus_controller.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('make:stimulus-controller', [], 'Create a new Stimulus controller', false, #[\Closure(name: 'maker.auto_command.make_stimulus_controller', class: 'Symfony\\Bundle\\MakerBundle\\Command\\MakerCommand')] fn (): \Symfony\Bundle\MakerBundle\Command\MakerCommand => ($container->privates['maker.auto_command.make_stimulus_controller'] ?? $container->load('getMaker_AutoCommand_MakeStimulusControllerService')));
    }
}
