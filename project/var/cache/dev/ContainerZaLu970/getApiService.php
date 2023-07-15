<?php

namespace ContainerZaLu970;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\Api' shared autowired service.
     *
     * @return \App\Service\Api
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/Api.php';

        return $container->privates['App\\Service\\Api'] = new \App\Service\Api(($container->privates['.debug.http_client'] ?? $container->get_Debug_HttpClientService()));
    }
}
