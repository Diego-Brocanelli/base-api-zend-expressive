<?php

declare(strict_types=1);

namespace Api\Handler\Factory;

use Api\Handler\ApiPageHandler as Action;
use Doctrine\ORM\EntityManager;
use Psr\Container\ContainerInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Expressive\Router\RouterInterface;

/**
 * @author diego
 */
class ApiPageHandlerFactory 
{
    public function __invoke(ContainerInterface $container) : RequestHandlerInterface
    {
        $router   = $container->get(RouterInterface::class);
        
        $entitymanager = $container->get('doctrine');
        
        return new Action($router, get_class($container), $entitymanager);
    }
}
