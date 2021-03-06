<?php

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$db = new PDO('mysql:host=localhost;dbname=testapp;charset=utf8', 'testapp', 'testapp');

$app = new Silex\Application();
$app['debug'] = true;

$app['db'] = function() use ($db) {
    return new \TestApp\Db\Connection($db);
};

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

$app->get('/user', function() use($app) {

    return $app['twig']->render('user.html.twig');
});

$app->post('/submit', function(Request $request) use($app) {

    /**
     * @var \TestApp\Db\Connection
     */
    $dbConnection = $app['db'];

    $results = $dbConnection->query("select * from test");

    echo('<pre>');
    var_dump($results);
    echo '</pre>';

    $firstName = $request->get('FirstName');
    $lastName = $request->get('LastName');

    $myModel = new \TestApp\Model\User($firstName, $lastName);

    return $app['twig']->render('success.html.twig', array('model' => $myModel));
});

$app->post('/submituser', function(Request $request) use($app) {

    $firstName = $request->get('FirstName');
    $lastName = $request->get('LastName');
    $address1 = $request->get('Address1');
    $address2 = $request->get('Address2');
    $address3 = $request->get('Address3');
    $email = $request->get('Email');
    $phone = $request->get('Phone');
    

    $userModel = new \TestApp\Model\UserModel($firstName, $lastName, $address1, $address2, $address3, $email, $phone);

    return $app['twig']->render('usersuccess.html.twig', array('model' => $userModel));
});

$app->run();