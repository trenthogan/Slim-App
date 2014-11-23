<?php

/** 
* Slim Authentication
*
* @param string $role - Members role must be 'administrator' to see control pannel. 
* @param string $user - user object fetch
*
*/

$authenticate = function ( ) {
    return function () {
    	
    	//If not logged in.
        if ( !$_SESSION['loggedIn'] ) {
            $app = \Slim\Slim::getInstance();
            $app->redirect($app->baseUrl . 'admin/login/');
        }else{
        	//Else return true
        	return TRUE;
        }

    };
};

/** 
* Login
*
* Will handle logging users in and setting a session to save login state.
*
* @param string $passwordPost - Password input by user to login form... 
* @param string $passwordDb - Password called from the database in md5 format... 
*
*/

function login( $passwordPost, $passwordDb ){

	//Get slim app instance
	$app = \Slim\Slim::getInstance();

	//Sanitize user inputed password
	$sanitizedPassword = filter_var($passwordPost, FILTER_SANITIZE_STRING);

	/* If user input password equals the password 
	*  stored in the DB for that user process the
	*  login and redirect to dashboard...
	===========================================*/
	if(md5($sanitizedPassword) == $passwordDb){

		$app->redirect( $app->baseUrl . 'admin/dashboard/' );

	}else{

		$app->redirect( $app->baseUrl . 'admin/login/' );

	}


}

