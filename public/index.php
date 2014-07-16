<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
));

$app->get('/', function() use($app) {
    return $app['twig']->render('index.html');
});

$app->get('/about', function() use($app) {
    return $app['twig']->render('about.html');
});

$app->get('/name/{name}/age/{age}', function($name, $age) use($app) {

//    $model = new stdClass();
//    $model->name = $name;
//    $model->age = $age;

//   require_once __DIR__ . '../src/testapp/TestModel.php';

    $myModel = new \testapp\TestModel($name, $age);

    return $app['twig']->render('test.html', array('model' => $myModel));
});

$app->run();