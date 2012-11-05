<?php

$app['debug'] = true;
$app['db_options'] = array(
    'db.options' => array(
        'driver'   => 'pdo_mysql',
        'host'     => 'localhost',
        'dbname'   => 'family',
        'user'     => 'root',
        'password' => '123456',
        'charset'  => 'utf8',
    ),
);

$app['dir_root'] = '/Family';
$app['dir_web'] = '/Family/web';
$app['dir_js'] = '/Family/web/js';
$app['dir_css'] = '/Family/web/css';
$app['dir_images'] = '/Family/web/images';
