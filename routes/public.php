<?php
/** 
* Public / Client Facing Routes
*
*/

// Home route
$app->get(
    '/',
    function () {

    	//Get users model
    	require '../models/users.php';

    	// Grab a user with an id of 1 
		$user = Users::find(1);
		if($user){
		  echo "Hello ".$user->username;
		}
		echo '<a href="admin">Admin</a>';
      
    }
);