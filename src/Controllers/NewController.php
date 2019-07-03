<?php


namespace App\Controllers;

use Slim\Container;

class NewController extends BaseController
{
    public function __construct(Container $container)
    {
        parent::__construct($container);
    }
}