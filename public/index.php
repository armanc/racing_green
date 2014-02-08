<?php
require '../vendor/autoload.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();
$app->get('/hello/:name', function ($name) {
    echo "Hello, $name";
});

$app->get('/', function () {
    echo "This is index page! IT WORKZ!";
});

$app->run();