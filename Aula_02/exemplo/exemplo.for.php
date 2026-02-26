<?php
    for ($i=0; $i <= 5; $i++) { 
        echo $i;
        echo "<br>";
    }
    echo"<hr>";

    $nomes = ["FULANO", "CICLANO", "BELTRANO", "JOSEVALDO", "KATAKURY", "WIBE"];

    $qtde = count($nomes);
    echo $qtde;
    echo "<hr>";

    for ($i=0; $i <= $qtde - 1; $i++) { 
        echo $nomes[$i];
        echo "<br>";
    }
    echo"<hr>";


    foreach ($nomes as $key => $value) {
        echo $key;
        echo " ===> ";
        echo $value;
        echo "<br>";
    }

?>