<?php
/** 
* Slim CMS - Trent Hogan
*/

/** 
* Autoload composer components..
*/
require 'vendor/autoload.php'; 

/** 
* Load Laravel ORM
*/
require 'includes/eloquent-slim.php';

/**
 *  Instantiate a Slim application
 *
 */
$app = new \Slim\Slim();

/**
 * Define the Slim application routes
 */

// GET route
$app->get(
    '/',
    function () {

    	//Get users model
    	require 'models/users.php';

    	// Grab a user with an id of 1 
		$user = Users::find(1); 
       	echo "Hello ".$user->username;
    }
);


/**
 * Run the Slim application
 *
 */
$app->run();