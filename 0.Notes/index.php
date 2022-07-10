<?php
// echo 'hola';
/*
-no son case sensitive
-para evitar el conflito de nombre de clases
-se utiliza para evadir la colision de nombres entre otras bibliotecas o archivos
-usa la palabra reserva namespace
-se puede definir :clases,interfaces,funciones y constantes
-siempre van en la primer linea del archivo
-se usa la contra barra (\) para referirse a un subdirectorio o nombre de archivo
*/

// use Proyecto\miClase;

// include './namespace/constanteNameSpace.php';
// echo constantes1\BASE_DE_DATOS;
// echo constantes1\PUERTO_NUMERO;
// echO constantes1\NOMBRE_DE_ARCHIVO;//namespace como constantes
/*
echo '<br/>';
echo MiEspacio\HOLA;
echo '<br/>';
echo EspacioVidaTrabajo\REALIDAD;
*/
 include './namespace/claseNameSpace.php';
// echo ProyectoDeEstadia\avisa('Jorge');

use ProyectoDeEstadia\Carro;
$prueba = new Carro();
$prueba->probando()->arranque(10);

//name space como constantes

?>