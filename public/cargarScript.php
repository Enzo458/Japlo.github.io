<?php
    $fecha= new DateTime();

    $scripts = array(
        "public/mostrarProductos.js",
    );

    foreach($scripts as $script){
        echo '<script src="'. $script. '?'. $fecha->getTimestamp().'"></script>';
        echo nl2br("\n");
    }

?>