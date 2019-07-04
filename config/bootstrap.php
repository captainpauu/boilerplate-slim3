<?php

require_once __DIR__ . '/../vendor/autoload.php';

// Instantiate the app
$app = new \Slim\App(['settings' => require __DIR__ . '/settings.php']);

// Set up container dependencies
require __DIR__ . '/container.php';

// Register routes
require __DIR__ . '/routes.php';

return $app;