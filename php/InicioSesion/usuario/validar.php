<?php

if(array_key_exists('nombre',$_GET) && array_key_exists('nombre',$_GET)){
    header('Location: listar.php');

} elseif {
    header('Location: ../index.php');
}

exit();

?>