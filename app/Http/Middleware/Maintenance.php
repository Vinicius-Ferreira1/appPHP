<?php

namespace App\Http\Middleware;


class Maintenance{

    public function handle($request, $next){

        if(getenv('MAINTENANCE') == 'true'){
            throw new \Exception('Pagina em manutencao. Tente novamente mais tarde.', 503);
        }

        return $next($request);
    }

}