<?php

namespace ContainerZaLu970;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QSMHXJuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qSMHXJu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qSMHXJu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'api' => ['privates', 'App\\Service\\Api', 'getApiService', true],
        ], [
            'api' => 'App\\Service\\Api',
        ]);
    }
}
