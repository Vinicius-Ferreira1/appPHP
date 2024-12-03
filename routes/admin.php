<?php

use \App\Http\Response;
use \App\Controller\Admin;

$obRouter->get('/admin', [
    'middlewares' =>[
        'required-admin-login'
    ],
    function(){
        return new Response(200, 'admin :)');
    }
]);

#LOGIN
$obRouter->get('/admin/login', [
    'middlewares' =>[
        'required-admin-logout'
    ],
    function($request){
        return new Response(200, Admin\Login::getLogin($request));
    }
]);

#LOGIN (POST)
$obRouter->post('/admin/login', [
    'middlewares' =>[
        'required-admin-logout'
    ],
    function($request){
        return new Response(200, Admin\Login::setLogin($request));
    }
]);

#LOGOUT
$obRouter->get('/admin/logout', [
    'middlewares' =>[
        'required-admin-login'
    ],
    function($request){
        return new Response(200, Admin\Login::setLogout($request));
    }
]);