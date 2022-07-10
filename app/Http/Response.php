<?php

namespace App\Http;

class Response
{
    protected $view; //array, json, pdf...
    protected $data;

    public function __construct($view,$data)
    {
        $this->view = $view; //home, contact
        $this->data =$data;
    }

    public function getView()
    {
        return $this->view;
    }
    public function getData()
    {
        return $this->data;

    }

    public function send()
    {
        $view = $this->getView();
        $data = $this->getData();

         $content = file_get_contents(viewPath($view));
         $TITLE_OF_PAGE=ucfirst($view);
    
        require_once viewPath('layout');
        
    }
}