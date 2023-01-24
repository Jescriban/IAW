<?php
setcookie("usuario", "", time()-1,'/');

// CODIGO PARA BORRAR TODAS LAS COOKIES QUE HAYA!!
$pasado = time() - 1;
foreach ( $_COOKIE as $key => $value )
{
    setcookie( $key, $value, $pasado, '/' );
}
 
