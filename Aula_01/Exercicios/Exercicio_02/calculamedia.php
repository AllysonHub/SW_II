<?php

    $n1 = 2.5;
    $n2 = 8.0;
    $n3 = 1.1;
    $media = ($n1 + $n2 + $n3) / 2;
    echo "Nota: ==> " . $n1 . "<br>";
    echo "Nota: ==> " . $n2 . "<br>";
    echo "Nota: ==> " . $n3 . "<br><br>";

    if ($media >= 7) {
        echo $media . "Aprovado";
    } else {
        echo $media . "Reprovado";
    }

?>