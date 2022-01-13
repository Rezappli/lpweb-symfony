<?php

namespace ContainerXTpQRhh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommandControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CommandController' shared autowired service.
     *
     * @return \App\Controller\CommandController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CommandController.php';

        $container->services['App\\Controller\\CommandController'] = $instance = new \App\Controller\CommandController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\CommandController', $container));

        return $instance;
    }
}
