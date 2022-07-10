<?php

namespace App\Http;


class Request 
{
    protected $segments =[];
    protected $controller;
    protected $mothod;


    public function __construct()
    {
        $this->segments=explode('/',$_SERVER['REQUEST_URI']);


        // var_dump($this->setController());

        
        $this->setController();
        $this->setMethod();
    
    }

    public function setController()
    {
      return  $this->controller=empty($this->segments[4])?'home':$this->segments[4];
    }

    
    public function setMethod()
    {
     return   $this->method=empty($this->segments[5])?'index':$this->segments[5];

    }
    
    public function getController()
    {
        $controller =ucfirst($this->controller);//ponlo en letras mayusculas
        
        return "App\Http\Controllers\\{$controller}Controller";///HomerController
    }
    public function getMethod()
    {
        return $this->method;
    }
    public function send()
    {
        $controller=$this->getController();
        $method=$this->getMethod();

        $response=call_user_func(
            new $controller,
            $method
        );

        $response->send();
    }

}