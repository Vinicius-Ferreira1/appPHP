<?php

require __DIR__ . '/vendor/autoload.php';

use App\Http\Router;
use App\Http\Response;
use App\Controller\Pages\Home;

define('URL', 'http://localhost/appPHP');
$obRouter = new Router(URL);

#HOME
$obRouter->get('/', [
    function(){
        return new Response(200, Home::getHome());
    }
]);


#imprime o response da rota
$obRouter->run()->sendResponse();
