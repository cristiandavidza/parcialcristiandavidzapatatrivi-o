<html>
<head></head>
<body>
<?php
function calcularDistancia($x1, $y1, $x2, $y2) {
    $diferenciaX = ($x2 - $x1) * ($x2 - $x1);
    $diferenciaY = ($y2 - $y1) * ($y2 - $y1);
    $sumaCuadrados = $diferenciaX + $diferenciaY;
    $raizAproximada = 0;
    for ($i = 0; $i * $i <= $sumaCuadrados; $i++) {
        $raizAproximada = $i;
    }
    return $raizAproximada;
}
$x1 = 1;
$y1 = 2;
$x2 = 4;
$y2 = 6;

$distancia = calcularDistancia($x1, $y1, $x2, $y2);
echo "La distancia entre los puntos ($x1, $y1) y ($x2, $y2) es: $distancia.\n";
?>
</body>
</html>