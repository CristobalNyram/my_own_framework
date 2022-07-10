<?php

//PODEMOS DEFINIR VARIOS NAMESPACE EN UN MISMO ARCHIVO ,PERO PARA ESTO NECESITAMOS USAR {}

//definir el namespace
namespace constantes1{
    
//constantes

const BASE_DE_DATOS='NOMBRE DE ARCHIVOS';
const PUERTO_NUMERO='192.132.212.1';


//Namespace como constantes
const NOMBRE_DE_ARCHIVO =__NAMESPACE__."\constanteNameSpace.php";

}

namespace MiEspacio
{
    const HOLA='HOLA ESTE ES MI ESPACIO';
}
namespace EspacioVidaTrabajo
{
    const REALIDAD='La vida es  dura como para tener todo balanceado';
}

