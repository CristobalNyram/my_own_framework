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


        var_dump($_SERVER['REQUEST_URI']);
    }

}