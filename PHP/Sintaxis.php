<?php //Incrustando código php 
    $saludo = "Hola mundo"; //Variables definidas con $
    $lenguaje = "en ";
    //Constante
    const CONSTANTE = "PHP";

    //Imprimir en consola
    echo $saludo . ", " . $lenguaje . CONSTANTE; //Concatenar con "."
    
    //Tipos de datos escalares
    echo "\nTipos de datos escalares\n";

    $integer = 10; //Integer
    $float = 2.5;
    $string = "Palabra";
    $boolean = true;
    echo "\t". $integer . " - ". gettype($integer) . "\n";
    echo "\t". $float . " - ". gettype($float) . "\n";
    echo "\t". $string . " - ". gettype($string) . "\n";
    echo "\t". $boolean . " - ". gettype($boolean);
    
    //Tipos de datos compuestos
    echo "\nTipos de datos compuestos\n";
    $array = [$integer, $float, $string];
    echo gettype ($array) . "\n";
    for ($i = 0; $i < 3; $i++){
        echo "\t[". $i . "] => ". $array[$i] . "\n";
    }
    echo "Añadiendo un elemento booleando\n";
    array_push($array, $boolean); //Array, elemento a añadir
    print_r ($array);//Forma de imprimir array

    //Diccionarios
    $diccionario = array("integer" => $integer
        );
?> 