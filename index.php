<?php
    
    $lista = (array) [
        (string) 'Miguel Angel',
        (int) 3,
        (bool) true,
        (object) function (string $p1): string{
            return "Hola Mundo $p1";
        },
        (array) [(string) 'Castro', (string) 'Escamilla']
    ];

    for ($i=0; $i < count($lista); $i++) {
        if(gettype($lista[$i]) == 'object'){
            echo (string) <<<DATOS
                ${!${''} = $lista[$i]('soy Miguel')} <br>
            DATOS;
        }
        else if(gettype($lista[$i]) == 'array'){
            echo (string) <<<DATOS
                ${!${''} = join(' ', $lista[$i])}
            DATOS;   
        }
        else echo "$lista[$i] <br>";
    }

?>