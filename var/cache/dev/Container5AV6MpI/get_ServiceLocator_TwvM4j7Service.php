<?php

namespace Container5AV6MpI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TwvM4j7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.twvM4j7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.twvM4j7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\EditController::new' => ['privates', '.service_locator.JolOrom', 'get_ServiceLocator_JolOromService', true],
            'App\\Controller\\IndexController::list' => ['privates', '.service_locator.i9Y0h6B', 'get_ServiceLocator_I9Y0h6BService', true],
            'App\\Controller\\ViewController::view' => ['privates', '.service_locator.NyLbAvG', 'get_ServiceLocator_NyLbAvGService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\EditController:new' => ['privates', '.service_locator.JolOrom', 'get_ServiceLocator_JolOromService', true],
            'App\\Controller\\IndexController:list' => ['privates', '.service_locator.i9Y0h6B', 'get_ServiceLocator_I9Y0h6BService', true],
            'App\\Controller\\ViewController:view' => ['privates', '.service_locator.NyLbAvG', 'get_ServiceLocator_NyLbAvGService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\EditController::new' => '?',
            'App\\Controller\\IndexController::list' => '?',
            'App\\Controller\\ViewController::view' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\EditController:new' => '?',
            'App\\Controller\\IndexController:list' => '?',
            'App\\Controller\\ViewController:view' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
