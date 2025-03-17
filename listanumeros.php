<html>
<head></head>
<body>
<?php
$numeros = [rand(1, 50), rand(1, 50), rand(1, 50), rand(1, 50), rand(1, 50)];
$n = count($numeros);
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($numeros[$j] > $numeros[$j + 1]) {
            // Intercambiar
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