<?php

session_start();
var_dump($_SESSION);
//var_dump($_SERVER);
$_SESSION['fecha']= date('Y');
echo "<hr>";
echo session_id() . ' / ' . session_name() . '<br>';
//si no está establecido el valor de 'cuenta'
if (!isset($_SESSION['cuenta'])) {
    //añado el key 'cuenta' con value 1
    $_SESSION['cuenta'] = 1;
} else {
    //ya estaba, le sumo 1 al value
    $_SESSION['cuenta']++;
}
$contadorGuay = $_SESSION['cuenta'];
$contadorGuay++;
echo 'has  cargado eta página ' . $_SESSION['cuenta'] . ' veces';
if ($_SESSION['cuenta'] > 5) {
  echo "<br>SESION DESTRUIDA?";
  session_destroy();
  }
echo "<hr>";
var_dump($_SESSION);

/*    
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
        );
    }

// Finalmente, destruir la sesión.
    session_destroy();
} 

}*/
?>
