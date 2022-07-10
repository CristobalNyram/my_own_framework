<?php

if(! function_exists('view'))
{
    function view($view,$data=[])
    {
        return  new App\Http\Response($view,$data);

    }

}

if (! function_exists('viewPath')) {
    function viewPath($view)
    {
        $path=__DIR__ . "/../views/$view.php";
        if(file_exists($path))
        {
            return $path;

        }
    }
}