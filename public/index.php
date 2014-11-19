<?php
/** 
* Slim CMS - Trent Hogan
*/

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
 * Define the Slim application routes
 */

require '../routes/public.php';
require '../routes/admin.php'; 


/**
 * Run the Slim application
 *
 */
$app->run();