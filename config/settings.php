<?php

$config = [];
$settings = [];

$config = parse_ini_file('config.ini');

$settings['displayErrorDetails'] = true;
$settings['determineRouteBeforeAppMiddleware'] = true;

// Path settings
$settings['root'] = dirname(__DIR__);
$settings['temp'] = $settings['root'] . '/tmp';
$settings['public'] = $settings['root'] . '/public';

// Smarty view settings
$settings['smarty'] = [
    'path' => $settings['root'] . '/templates',
    'cache_enabled' => true,
    'cache_path' => $settings['temp'] . '/cache',
    'compile_path' => $settings['temp'] . '/compile'
];

// Database settings
$settings['db'] = [
    'driver' => $config['driver'],
    'host' => $config['host'],
    'port' => $config['port'],
    'username' => $config['username'],
    'database' => $config['database'],
    'password' => $config['password'],
    'charset' => $config['charset'],
    'options' => [
        PDO::ATTR_PERSISTENT => false,
        // Emulate prepared statements
        PDO::ATTR_EMULATE_PREPARES => true,
        // Enable exceptions
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        // Set default fetch mode
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ],
];

return $settings;