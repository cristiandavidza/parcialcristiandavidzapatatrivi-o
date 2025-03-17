<html>
<head></head>
<body>
<?php
function sumar($a, $b) {
    return $a + $b;
}
$num1 = rand(1, 100);
$num2 = rand(1, 100);
$resultado = sumar($num1, $num2);
echo "La suma de $num1 y $num2 es: $resultado.\n";
?>
</body>
</html>