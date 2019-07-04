<?php

$app->get('/', function ($request, $response) {
    return $this->smarty->render($response, 'hello.tpl');
})->setName('index');