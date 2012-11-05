<?php

$app->get('/Family/', function () use ($app) {
    $app->register(new Silex\Provider\TwigServiceProvider(), [
        'twig.path' => [__DIR__ . '/../views']
    ]);
    
    $view = $app['twig'];
    $output = "";
    
    $output .= $view->render('header.tpl', []);
    $output .= $view->render('index/index.tpl', []);
    $output .= $view->render('footer.tpl', []);
    
    return $output;
});
