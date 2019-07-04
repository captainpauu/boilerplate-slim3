<?php

use App\Controllers\NewController;

$container['NewDao'] = function($c) {
    return new NewDao(
        $c->get('db')
    );
};

$container['NewController'] = function($c) {
    return new NewController(
        $c
    );
};