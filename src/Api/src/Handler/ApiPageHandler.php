<?php

declare(strict_types=1);

namespace Api\Handler;

use Doctrine\ORM\EntityManager;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\JsonResponse;
use Zend\Expressive\Router;

/**
 * @author Diego Brocanelli <diegod2@msn.com>
 */
class ApiPageHandler implements RequestHandlerInterface
{
    private $containerName;

    private $router;
    
    protected $entitymanager;

    public function __construct(
        Router\RouterInterface $router,
        string $containerName,
        EntityManager $entitymanager
    ) {
        $this->router        = $router;
        $this->containerName = $containerName;
        $this->entitymanager = $entitymanager;
    }

    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        $entity = $this->entitymanager;
        
        return new JsonResponse([
            'welcome' => 'Bem vindo a API',
        ]);
    }
}
