<?php

namespace ContainerOMRTzE3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommandTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\CommandType' shared autowired service.
     *
     * @return \App\Form\CommandType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/CommandType.php';

        return $container->privates['App\\Form\\CommandType'] = new \App\Form\CommandType();
    }
}
