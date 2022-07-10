<?php

namespace App\Http;

use App\Http\Controllers\ErrorController;
use App\Http\Controllers\HomeController;

class Request
{
    protected $segments = [];
    protected $controller;
    protected $method;

    public function __construct()
    {
        // platzi.test/servicios/index
        $this->segments = explode('/', $_SERVER['REQUEST_URI']);

        $this->setController();
        $this->setMethod();
        
        // var_dump($this->getController());
   
       
    }

    public function setController()
    {
        $this->controller = empty($this->segments[2])
            ? 'home'
            : $this->segments[2];
    }

    public function setMethod()
    {
        $this->method = empty($this->segments[3])
            ? 'index'
            : $this->segments[3];
    }

    public function getController()
    {
        //home, Home
        $controller = ucfirst($this->controller);
        
        return "App\Http\Controllers\\{$controller}Controller";
    }

    public function getMethod()
    {
        return $this->method;
    }
    public function checkControllerAndMethod()
    {
        
    }

    public function send()
    { 
        $controller = $this->getController();
        $method = $this->getMethod();

        // si el archivo existe ;
        if(class_exists($controller))
        {

                $object = new $controller;

                if(method_exists($object,$method))
                {
                    $response = call_user_func([                                                                                                                           
                        $object,                                                                                                                               
                        $method                                                                                                                                
                    ]);  
                }
                else
                {
                    // si no existe el metodo llamo al index del controlador                                                                                                                                           
                    $response = call_user_func([$object,'index']);                                                                                             

                }    

        }
        else
        {
            $response= call_user_func([                                                                                                                           
                 new ErrorController,                                                                                                                               
                'index'                                                                                                                                
            ]);  
        }
    


                                                                                                                                                      

        
     

        
         $response->send();

    }
}