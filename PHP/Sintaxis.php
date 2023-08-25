<?php //Incrustando código php 
    //Imprimir en consola
    $saludo = "Hola mundo"; //Variables definidas con $
    $lenguaje = "en PHP"; //Imprimir en consola
    echo $saludo . ", " . $lenguaje; //Concatenar con "."
    
    echo "\n";
    //Tipos de datos escalares
    $integer = 10; //Integer
    $float = 2.5;
    $string = "Palabra";
    $boolean = true;
    echo $integer . " - ". gettype($integer) . "\n";
    echo $float . " - ". gettype($float) . "\n";
    echo $string . " - ". gettype($string) . "\n";
    echo $boolean . " - ". gettype($boolean) . "\n";
    //Prueba
?> 