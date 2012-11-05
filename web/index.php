<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

require_once __DIR__ . '/../app/config/config.php';

$controllers = scandir(__DIR__ . '/../app/controllers/');

foreach($controllers as $controller) {
    if (in_array($controller, array('.', '..'))) {
        continue;
    }
    require_once __DIR__ . '/../app/controllers/' . $controller;
}
    
$app->run();
