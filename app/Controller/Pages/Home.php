<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Desenvolvedor;

class Home extends Page{

    /**
     * Method responsible for returning the home page content
     * @return string
     */
    public static function getHome(){
        $desenvolvedor = new Desenvolvedor;
        
        $content = View::render('pages/Home', [
            'name' => $desenvolvedor->nome,
        ]);

        return parent::getPage('Home', $content);
    }


}


?>