<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Desenvolvedor;

class About extends Page{

    /**
     * Method responsible for returning the home page content
     * @return string
     */
    public static function getAbout(){
        $desenvolvedor = new Desenvolvedor;
        
        $content = View::render('pages/about', [
            'name' => $desenvolvedor->nome,
            'stack' => $desenvolvedor->stack,
            'description' => $desenvolvedor->descricao,
        ]);

        return parent::getPage('SOBRE', $content);
    }


}


?>