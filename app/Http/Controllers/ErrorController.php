<?php
namespace App\Http\Controllers;
// use App\Http\Response;

class ErrorController
{
    public function index()
    {
        return view('404');
    }
}