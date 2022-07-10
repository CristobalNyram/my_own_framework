<?php
namespace App\Http\Controller;
use App\Http\Response;
class HomeController
{
    public function index()
    {
        return new  Response('home');
    }
}