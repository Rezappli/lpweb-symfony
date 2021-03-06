<?php

namespace ContainerOMRTzE3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IwZUaOfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.iwZUaOf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.iwZUaOf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'session' => ['services', 'session', 'getSessionService', true],
        ], [
            'doctrine' => '?',
            'session' => '?',
        ]);
    }
}
