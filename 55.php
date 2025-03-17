<html>
<head></head>
<body>
<?php
for ($i = 1; $i <= 100; $i++) {
    echo $i . "\n";
}
?>
</body>
</html>
Ciclo for: Se usa cuando se conoce el número exacto de iteraciones.
 Combina la inicialización, condición y actualización en una línea.
for ($i = 0; $i < 10; $i++) {
    echo $i . "\n";
}

Ciclo while: Se usa cuando las iteraciones
dependen de una condición que puede cambiar durante la ejecución. 
$i = 0;
while ($i < 10) {
    echo $i . "\n";
    $i++;
}
