<html>
<head></head>
<body>
<?php
function sumarPares($lista) {
    $suma = 0;
    foreach ($lista as $num) {
        if ($num % 2 == 0) {
            $suma += $num;
        }
    }
    return $suma;
}
$numeros = [rand(1, 50), rand(1, 50), rand(1, 50), rand(1, 50)];
$resultado = sumarPares($numeros);
echo "La suma de los números pares en la lista es: $resultado.\n";
?>
</body>
</html>