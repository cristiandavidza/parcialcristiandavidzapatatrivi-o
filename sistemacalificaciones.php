<html>
<head></head>
<body>
<?php
$num = rand(0, 100);
if ($num >= 90) {
    $rango = "Excelente";
} elseif ($num >= 70) {
    $rango = "Bueno";
} elseif ($num >= 50) {
    $rango = "Regular";
} else {
    $rango = "Deficiente";
}
echo "Tu calificación de $num corresponde a: $rango.\n";
?>
</body>
</html>