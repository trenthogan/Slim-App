<?php 
/** 
* Admin Routes
*
*/


/** 
* Admin base route
*
* Checks auth and redirects to dashboard
*/
$app->get(
    '/admin/',
    function () {

    	//Get users model
    	require '../models/users.php';

    	// Grab a user with an id of 1 
		$user = Users::find(1); 
       	echo "Hello ".$user->username.". Welcome to the admin area.";
    }
);

// Login route
$app->get(
    '/admin/login/',
    function () use ($app) {

    	//Render Login form
    	$app->render( '/admin/login.php', array('title' => 'Login') );
    	
    }
);

// Login route
$app->post(
    '/admin/login/',
    function () use ($app) {

    	echo "Login Post";
    	
    }
);