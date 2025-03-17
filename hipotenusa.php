<html>
<head></head>
<body>
<?php
$num1 = rand(1, 50); 
$num2 = rand(1, 50); 
$hipotenusa = $num1 * $num1 + $num2 * $num2;
$raizAproximada = 0; 
for ($i = 0; $i * $i <= $hipotenusa; $i++) {
    $raizAproximada = $i;
}
echo "El triángulo tiene catetos $num1 y $num2, y su hipotenusa aproximada es: $raizAproximada.\n";
?>
</body>
</html>