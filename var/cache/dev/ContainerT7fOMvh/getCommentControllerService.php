<?php

namespace ContainerT7fOMvh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommentControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CommentController' shared autowired service.
     *
     * @return \App\Controller\CommentController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CommentController.php';

        $container->services['App\\Controller\\CommentController'] = $instance = new \App\Controller\CommentController();

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\CommentController', $container));

        return $instance;
    }
}
