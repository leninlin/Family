<?php

$app->get('/Family/tree/', function () use ($app) {
    $output = "";
    if (empty($app['twig'])) {
        $app->register(new Silex\Provider\TwigServiceProvider(), [
            'twig.path' => [__DIR__ . '/../views']
        ]);
    }
    
    if (empty($app['db'])) {
        $app->register(new Silex\Provider\DoctrineServiceProvider(), $app['db_options']);
    }
    
    $peoples = $app['db']->fetchAssoc(
        "SELECT * FROM peoples WHERE people_id = ?",
        array( 1 )
    );
    
    $output .= $app['twig']->render('header.tpl', ['app' => $app]);
    $output .= $app['twig']->render('tree/index.tpl', ['app' => $app]);
    $output .= $app['twig']->render('footer.tpl', ['app' => $app]);
    
    return $output;
});
