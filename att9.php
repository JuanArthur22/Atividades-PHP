<?php
$soma = 0;

for ($i = 100; $i >= 1; $i--) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
        $soma += $i;
    }
}

echo "Soma total dos números pares: $soma";
?>