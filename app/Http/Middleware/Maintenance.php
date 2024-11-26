<?php

namespace App\Http\Middleware;

class Maintenence{

    public function handle($request, $next){

        die("aaaa");

        return $next($request);
    }

}