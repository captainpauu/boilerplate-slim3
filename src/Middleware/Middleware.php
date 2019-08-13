<?php


namespace App\Middleware;


use Slim\Container;

class Middleware
{
    /**
     * @var Container
     */
    protected $container;
    /**
     * @var mixed
     */
    protected $smarty;

    /**
     * Middleware constructor.
     * @param Container $container
     * @throws \Interop\Container\Exception\ContainerException
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
        $this->smarty = $container->get('smarty');
    }
}