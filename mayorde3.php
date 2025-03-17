<html>
<head></head>
<body>
<?php
$num1 = rand(1, 100);
$num2 = rand(1, 100);
$num3 = rand(1, 100);
$mayor = $num1;
if ($num2 > $mayor) {
    $mayor = $num2;
}
if ($num3 > $mayor) {
    $mayor = $num3;
}
echo "Los números generados son: $num1, $num2, $num3. El mayor es: $mayor.\n";
?>
</body>
</html>