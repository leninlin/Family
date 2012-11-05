<?php

$app->get('/Family/contacts/', function () use ($app) {
    $app->register(new Silex\Provider\TwigServiceProvider(), [
        'twig.path' => [__DIR__ . '/../views']
    ]);
    
    $view = $app['twig'];
    $output = "";
    
    $output .= $view->render('header.tpl', []);
    $output .= $view->render('contacts/index.tpl', []);
    $output .= $view->render('footer.tpl', []);
    
    return $output;
});
