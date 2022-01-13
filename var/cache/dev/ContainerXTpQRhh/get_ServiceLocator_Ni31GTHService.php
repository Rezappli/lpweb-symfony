<?php

namespace ContainerXTpQRhh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ni31GTHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Ni31GTH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Ni31GTH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commandRepository' => ['privates', 'App\\Repository\\CommandRepository', 'getCommandRepositoryService', true],
        ], [
            'commandRepository' => 'App\\Repository\\CommandRepository',
        ]);
    }
}
