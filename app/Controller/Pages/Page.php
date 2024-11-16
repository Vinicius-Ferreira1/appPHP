<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Page{

    /**
     * Method responsible for returning the header of the page
     * @return string
     */
    private static function getHeader(){
        return View::render('pages/Header');
    }

    /**
     * Method responsible for returning the header of the page
     * @return string
     */
    private static function getFooter(){
        return View::render('pages/Footer');
    }

    /**
     * Method responsible for returning the home page content
     * @return string
     */
    public static function getPage($title, $content){
        return View::render('pages/Page', [
            'header' => self::getHeader(),
            'title' => $title,
            'content' => $content,
            'footer' => self::getFooter()
        ]);
    }


}


?>