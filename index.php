<?php

$matriz = array();

   

for ($linha=0; $linha<7; $linha++) {
    for ($coluna=0; $coluna<7; $coluna++) {
        $matriz[$linha][$coluna] = ($coluna == 3 or $linha == 1) ? "*" : " . ";
        echo $matriz[$linha][$coluna];
    }
    echo "<br/> \n";
}

echo "<br/> \n";

$matriz2 = array();

for ($linha=0; $linha<7; $linha++) {
    for ($coluna=0; $coluna<7; $coluna++) {
        $matriz2[$linha][$coluna] = ($coluna == $linha or $linha+$coluna == 6 ) ? "*" : " . ";
        echo $matriz2[$linha][$coluna];
    }
    echo "<br/> \n";
}




?>