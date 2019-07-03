<?php


namespace App\Service;


use Slim\Container;
use Slim\Route;
use Interop\Container\Exception\ContainerException;

/**
 * Class MailService
 * @package App\Service
 */
class Service
{
    /**
     * @var Container
     */
    private $container;
    /**
     * @var Route
     */
    private $router;

    /**
     * MailService constructor.
     * @param Container $container
     * @throws ContainerException
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
        $this->router = $this->container->get('router');
    }
}