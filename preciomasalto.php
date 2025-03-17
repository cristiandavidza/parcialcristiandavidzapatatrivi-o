<html>
<head></head>
<body>
<?php
function precioMasAlto($precios) {
    $maximo = $precios[0];
    foreach ($precios as $precio) {
        if ($precio > $maximo) {
            $maximo = $precio;
        }
    }
    return $maximo;
}
$precios = [150, 320, 45, 250, 180];
$maximo = precioMasAlto($precios);
echo "El precio más alto es: $maximo.\n";
?>
</body>
</html>