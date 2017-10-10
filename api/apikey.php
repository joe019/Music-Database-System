<?php
require_once 'includes/DbHandler.php';
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();

$app->hook('slim.before.dispatch', function () use ($app) {
     $keyToCheck = $app->router()->getCurrentRoute()->getParam('key');
     $authorized = false;
     if ($keyToCheck == '12345') {
          $authorized = true;
     }
     if (!$authorized) {
          $app->redirect('http://projectvisit.com/error.php');
          $app->halt('403', 'Invalid API Key');
     }
});

$app->get('/hello/:name/:key', function ($name, $key) {
     echo "Hello " . $name . " your key is " . $key;
     echo '<br >Welcome to our data.';
});

$app->run();
//try with /hello/your_name/12345 and /hello/your_name/123 to test