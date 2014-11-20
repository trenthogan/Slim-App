<?php
/** 
* Slim Authentication
*
* @param string $role - Members role must be 'administrator' to see control pannel. 
* @param string $user - user object fetch
*
*/

$authenticate = function ( $role = 'administrator' ) {
    return function () use ( $role ) {
    	
        $user = User::fetchFromDatabaseSomehow();

        if ( $user->belongsToRole($role) === false ) {
            $app = \Slim\Slim::getInstance();
            $app->redirect('/login');
        }

    };
};