<?php
/** 
* Slim CMS - Trent Hogan
*/

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors',1);
ini_set('html_errors', 1);

/** 
* Autoload composer components..
*/
require '../vendor/autoload.php'; 

/** 
* Load Laravel ORM
*/
require '../libraries/eloquent-slim.php';

/**
 *  Instantiate a Slim application
 *
 */
$app = new \Slim\Slim();


/**
 *  Define Base Url for use in code & views..
 */
$baseUrl = 'http://localhost:8888/Slim-App/public/';
$app->baseUrl = $baseUrl;
$app->hook('slim.before', function () use ($app, $baseUrl) {
    $app->view()->appendData(array('baseUrl' => $baseUrl));
});

/**
 *  Define Templates Directory
 */
$view = $app->view();
$view->setTemplatesDirectory('../templates/');

/**
 * Define the Slim application routes
 */
require '../routes/public.php';
require '../routes/admin.php'; 

/**
 * Run the Slim application
 *
 */
$app->run();