<?php

use Slim\Container;
use Slim\Views\Smarty;
use Slim\Views\SmartyPlugins;

/** @var Container $container */
$container = $app->getContainer();

// Activating routes in a subfolder
$container['environment'] = function() {
    $scriptName = $_SERVER['SCRIPT_NAME'];
    $_SERVER['SCRIPT_NAME'] = dirname(dirname($scriptName)) . '/' . basename($scriptName);
    return new Slim\Http\Environment($_SERVER);
};

// Activating Smarty template engine
$container['smarty'] = function (Container $container) {
    $settings = $container->get('settings')['smarty'];
    $viewPath = $settings['path'];

    // Instantiate Smarty engine
    $smarty = new Smarty($viewPath, [
        'compile' => $settings['compile_path'],
        'cache' => $settings['cache_enabled'] ? $settings['cache_path'] : false
    ]);

    $router = $container->get('router');
    $uri = $container->get('request')->getUri();
    // Add Smarty Plugins
    $smartyPlugins = new SmartyPlugins($router, $uri);
    $smarty->registerPlugin('function', 'path_for', [$smartyPlugins, 'pathFor']);
    $smarty->registerPlugin('function', 'base_url', [$smartyPlugins, 'baseUrl']);

    return $smarty;
};

// PDO database library
$container['db'] = function (Container $container) {
    $settings = $container->get('settings')['db'];
    $dsn = 'mysql:host=' . $settings['host'] . ';dbname=' . $settings['database'] . ';charset=' . $settings['charset'];

    //Creating PDO connection
    $pdo = new PDO($dsn, $settings['username'], $settings['password'],$settings['options']);

    return $pdo;
};

// Add dependencies
require __DIR__ . '/dependencies.php';