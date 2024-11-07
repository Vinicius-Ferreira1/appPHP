<?php

namespace App\Http;

class Response{

    private $httpCode = 200;
    private $headers = [];
    private $contentType = 'text/html';
    private $content;
    
    
    public function __construct($httpCode, $content, $contentType = 'text/html')
    {
        $this->httpCode = $httpCode;
        $this->content = $content;
        $this->setContentType($contentType);
    }

    public function setContentType($contentType){
        $this->contentType = $contentType;
        $this->addHeader('Content-Type', $contentType);
    }

    public function addHeader($key, $value){
        $this->headers[$key] = $value;
    }

    public function sendResponse(){
        $this->sendHeaders();
        $this->sendContent();
    }

    private function sendHeaders(){
        http_response_code($this->httpCode);

        foreach($this->headers as $key => $value){
            header($key.': '.$value);
        }
    }

    private function sendContent(){
        switch($this->contentType){
            case 'text/html':
                echo $this->content;
                exit;
        }
    }

}