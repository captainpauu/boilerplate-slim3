<?php

// Directly render smarty template
$app->get(
    '/',
    function ($request, $response) {
        return $this->smarty->render($response, 'hello.tpl');
    })->setName('index');

// using callable (index function from NewController)
$app->get(
    '/{name}',
    'NewController:index'
)->setName('hello');