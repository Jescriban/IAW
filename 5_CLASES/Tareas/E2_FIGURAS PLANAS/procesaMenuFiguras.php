<?php
//preguntamos si está la vaiable figura del $_GET, si no no hacemos nada
if (isset($_GET['figura'])){
    //llamo al php apropiado mediante include
    $figura = $_GET['figura'].'.html';
    $figura = './Pide'.$figura;
    include $figura;
}
