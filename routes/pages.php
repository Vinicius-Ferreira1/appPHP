<?php

use App\Http\Response;
use App\Controller\Pages;


#HOME
$obRouter->get('/', [
    'middlewares' => [
        'maintenance'
    ],
    function(){
        return new Response(200, Pages\Home::getHome());
    }
]);

#SOBRE
$obRouter->get('/sobre', [
    function(){
        return new Response(200, Pages\About::getAbout());
    }
]);

#DEPOIMENTOS
$obRouter->get('/depoimentos', [
    function($request){
        return new Response(200, Pages\Testimony::getTestimonies($request));
    }
]);


#DEPOIMENTOS (insert)
$obRouter->post('/depoimentos', [
    function($request){
        return new Response(200, Pages\Testimony::insertTestimony($request));
    }
]);