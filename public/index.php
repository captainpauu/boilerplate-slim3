<?php

session_start();

/** @var Slim/App $app */
$app = require __DIR__ . '/../config/bootstrap.php';

//start app
$app->run();