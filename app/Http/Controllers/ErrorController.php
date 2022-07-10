<?php
namespace App\Http\Controllers;
use App\Http\Response;

class ErroController
{
    public function _404()
    {
        return new Response('404');
    }
}