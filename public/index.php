<?php


//con dir creasmos rutas absolutas
require __DIR__ . '/../vendor/autoload.php';
$request=new App\Http\Request;
/*Cuidado se tiene quue usar este slash '\' NO TIENES QUE USAR ESTE '/' */
$request->send();

 //aprendí algo nativo de php,la función call_user_func
 /*
 class miClasse
 {
    public function saludar()
    {
        echo 'hola esta es una clase que se invoca con php nativo';
    }
 }
 call_user_func(['miClasse','saludar']);
 */

