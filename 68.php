<html>
<head></head>
<body>
<?php
$numeros = [5, 2, 9, 1, 7];
$n = count($numeros);
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($numeros[$j] > $numeros[$j + 1]) {
            $temp = $numeros[$j];
            $numeros[$j] = $numeros[$j + 1];
            $numeros[$j + 1] = $temp;
        }
    }
}
echo "Lista ordenada: ";
foreach ($numeros as $num) {
    echo "$num ";
}
echo "\n";
?>
</body>
</html>
Podrías usar un algoritmo básico
como el método de burbuja para ordenar los números.