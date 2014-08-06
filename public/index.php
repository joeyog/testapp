<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app = new Silex\Application();
$app['debug'] = true;

$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
));

$app->get('/', function() use($app) {
    return $app['twig']->render('index.html.twig');
});

$app->get('/about', function() use($app) {
    return $app['twig']->render('about.html');
});

$app->get('/form', function() use($app) {

    return $app['twig']->render('form.html.twig');
});

$app->post('/submit', function(Request $request) use($app) {

    $firstName = $request->get('FirstName');
    $lastName = $request->get('LastName');

    $myModel = new \TestApp\User($firstName, $lastName);

    return $app['twig']->render('success.html.twig', array('model' => $myModel));
});

$app->run();