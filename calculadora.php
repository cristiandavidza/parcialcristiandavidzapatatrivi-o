<html>
<head></head>
<body>
<?php
$num1 = rand(1, 100);
$num2 = rand(1, 100);
$operacion = "+"; 
if ($operacion == "+") {
    $resultado = $num1 + $num2;
} elseif ($operacion == "-") {
    $resultado = $num1 - $num2;
} elseif ($operacion == "*") {
    $resultado = $num1 * $num2;
} elseif ($operacion == "/" && $num2 != 0) {
    $resultado = $num1 / $num2;
} else {
    $resultado = "Operación no válida";
}
echo "Operación: $num1 $operacion $num2 = $resultado.\n";
?>

</body>
</html>