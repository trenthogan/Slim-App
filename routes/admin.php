<?php 
/** 
* Admin Routes
*
*/

// Home route
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