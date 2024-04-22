<?php
function contar_letras($frase) {
    $vocales = array('a', 'e', 'i', 'o', 'u');
    $contar_vocales = array_fill_keys($vocales, 0);
    $contar_o = 0;

    $frase = strtolower($frase);
    for ($i = 0; $i < strlen($frase); $i++) {
        $letra = $frase[$i];
        if ($letra == 'o') {
            $contar_o++;
        } elseif (in_array($letra, $vocales)) {
            $contar_vocales[$letra]++;
        }
    }

    echo "Cantidad de veces que aparece la letra 'o': " . $contar_o . "\n";
    echo "Vocales que aparecen: " . implode(", ", array_keys(array_filter($contar_vocales))) . "\n";
    foreach ($contar_vocales as $vocal => $cantidad) {
        echo "Cantidad de veces que aparece la vocal '$vocal': $cantidad\n";
    }
}

$frase = "Hola";
contar_letras($frase);
?>
