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



/** 
* Admin Login route
*
* Route for displaying the login form to the user
*/
$app->get(
    '/admin/login/',
    function () use ($app) {

    	//Render Login form
    	$app->render( '/admin/login.php', array('title' => 'Login') );
    	
    }
);

/** 
* Admin Login route - POST
*
* Route for recieving a post request from the login form.
* Will handle login request and redirect to dashboard if successful 
* or display form validation on failure.
*/
$app->post(
    '/admin/login/',
    function () use ($app) {

    	//Get post data
    	$username = $app->request->post('username');
    	$password = $app->request->post('password');

    	

    	//Require users model
    	require '../models/users.php';
    	//Get users from database..
    	$user = Users::where('username', $username)->first();

    	//Require users auth functions
    	require '../libraries/auth.php';

    	//Run login function which will process the login found in auth library.
    	login( $password, $user->password );

    	
    }
);