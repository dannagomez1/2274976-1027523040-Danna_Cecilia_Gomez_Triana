<?php

$jsonContenido='[
    {"nombre":"Danna","apellido":"Uh" },
    {"nombre":"Gomez","apellido":"Triana"}
    ]';

    $resultado= json_decode($jsonContenido);
    //print_r($resultado);

    foreach($resultado as $persona){
        echo($persona->nombre)." ".($persona->apellido)."<br/>";
   }

   ?>