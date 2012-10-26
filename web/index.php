<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

//И шаблонизатор Twig, который легко интегрируется в Silex
$app->register(new Silex\Provider\TwigServiceProvider(), [
    'twig.path' => [__DIR__ . '/../views']
]);

$app->get('/Family/', function() use ($app) {

    $params = array(
        'page' => 'index/index.tpl',
    );

    //Рендрим шаблон и выводим его в браузер пользователя
    return $app['twig']->render('page.tpl', $params);

});

$app->get('/Family/{controller}/', function($controller) use ($app) {

    $params = array(
        'page' => $controller . '/index.tpl',
    );

    //Рендрим шаблон и выводим его в браузер пользователя
    return $app['twig']->render('page.tpl', $params);

});

$app->get('/Family/{controller}/{action}/', function($controller, $action) use ($app) {

    $params = array(
        'page' => $controller . '/' . $action . '.tpl',
    );

    //Рендрим шаблон и выводим его в браузер пользователя
    return $app['twig']->render('page.tpl', $params);

});


    
$app->run();
