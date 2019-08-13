<?php


namespace App\Controllers;

use Slim\Container;
use Slim\Views\Smarty;
use Interop\Container\Exception\ContainerException;

class BaseController
{
    /**
     * @var Smarty
     */
    protected $smarty;

    /**
     * BaseController constructor.
     * @param Container $container
     * @throws ContainerException
     */
    public function __construct(Container $container)
    {
        $this->smarty = $container->get('smarty');
    }
}