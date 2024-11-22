<?php

use App\Http\Response;
use App\Controller\Pages;


#HOME
$obRouter->get('/', [
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

#DINAMICA
$obRouter->get('/pagina/{idPagina}', [
    function($idPagina){
        return new Response(200, 'página ' . $idPagina); ;
    }
]);

