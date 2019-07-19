<?php


namespace App\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Container;

class NewController extends BaseController
{
    public function __construct(Container $container)
    {
        parent::__construct($container);
    }

    public function index(RequestInterface $request, ResponseInterface $response, $args)
    {
        $name = $args['name'];
        return $this->smarty->render(
            $response,
            'hello.tpl',
            ['name' => $name]);
    }
}