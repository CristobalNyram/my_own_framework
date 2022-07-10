<?php
http_response_code(403);
echo('Acceso denegado,serás redireccionado');
header('refresh:5,url=./public/');
?>