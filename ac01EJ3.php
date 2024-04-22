<?php
function es_primo($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$numeros_primos = array();
$num = 2;
while (count($numeros_primos) < 110) {
    if (es_primo($num)) {
        $numeros_primos[] = $num;
    }
    $num++;
}

print_r($numeros_primos);
?>